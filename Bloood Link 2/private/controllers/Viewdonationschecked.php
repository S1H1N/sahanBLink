<?php
class Viewdonationschecked extends Controller
{
    function index($id = '')
    {
        $data2=array();
        $bbid=$_SESSION['USER']->blood_bank_id;

        $essentials=array();
        $resultsperpage= 8;

        $bp = new Rawblood();
        $data = $bp->findAll();

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

        $data2= $bp->paginallrejected("status",1,"blood_bank_id",$bbid,$thispagefirstres,$resultsperpage);
    }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

    

        
        $this->view('staff/viewdonationschecked',['rows' => $data2,'ess' => $essentials]);
       
    }
}
?>