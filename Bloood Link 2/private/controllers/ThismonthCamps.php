<?php
class Thismonthcamps extends Controller
{
    function index($id = '')
    {   
        $month=date('m');
        $year=date('Y');
        $bbid=$_SESSION['USER']->blood_bank_id;

        $data2=array();

        $essentials=array();
        $resultsperpage= 8;

        $bdc=new BLBdc(); 
              
        $data=$bdc->thismonthcamps("blood_bank_id",$bbid,"date",$month,$year);

        if($data!=NULL){
        $numofresults=count($data);
        $numofpages= ceil($numofresults/$resultsperpage);

        $essentials['noofpgs']=$numofpages;

        if(!isset($_GET['page']) or $_GET['page']> $numofpages or $_GET['page']< 1){
            $page=1;
        } else{
            $page=$_GET['page'];
        }

        $thispagefirstres=($page-1)*$resultsperpage;

        $data2= $bdc->paginthismonthcamps("blood_bank_id",$bbid,"date",$month,$year,$thispagefirstres,$resultsperpage);
        // echo "<pre>";
        // print_r($data2);

    }


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        

        
       

        // $user = $this->load_model('User');

        // $id=Auth::getid();    
        // $data = $user->where("id", $id);

        
        $this->view('staff/thismonthcamps',['rows'=>$data2,'ess'=>$essentials]);
       
    }
}
?>