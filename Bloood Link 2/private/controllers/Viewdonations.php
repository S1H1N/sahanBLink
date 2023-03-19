<?php
class Viewdonations extends Controller
{
    function index($id = '')
    {   
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
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

            $data2= $bp->paginall($thispagefirstres,$resultsperpage);

        }

        


      

    

        
        $this->view('staff/viewdonations',['rows' => $data2,'ess' => $essentials]);
       
    }
}
?>