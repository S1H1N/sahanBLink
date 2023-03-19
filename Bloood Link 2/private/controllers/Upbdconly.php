<?php
class Upbdconly extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // ----------------------------------pagination-----------------------
        $data2=array();

        $essentials=array();
        $resultsperpage= 8;
        
        $bdc = new BLBdc();
        $data = $bdc->findAll();

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

        $data2= $bdc->paginall($thispagefirstres,$resultsperpage);
    }
// ----------------------------------pagination end----------------------

        // $bdc=new BLBdc();

        // $data=$bdc->findAll();

    

        
        $this->view('staff/upbdconly',['rows'=>$data2,'ess'=>$essentials]);
       
    }
}
?>