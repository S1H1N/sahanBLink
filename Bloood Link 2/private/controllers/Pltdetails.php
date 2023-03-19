<?php
class Pltdetails extends Controller
{
    function index($id = '')
    {   
        $activ['activ']='All';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbs("blood_bank_id",$bbid);

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

            $data2= $plt->paginbs("blood_bank_id",$bbid,$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }


    function index2($id = '')
    {   
        $activ['activ']='A-';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","A-");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","A-",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index3($id = '')
    {   
        $activ['activ']='A+';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","A+");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","A+",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index4($id = '')
    {   
        $activ['activ']='B+';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","B+");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","B+",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index5($id = '')
    {   
        $activ['activ']='B-';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","B-");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","B-",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index6($id = '')
    {   
        $activ['activ']='AB+';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","AB+");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","AB+",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index7($id = '')
    {   
        $activ['activ']='AB-';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","AB-");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","AB-",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index8($id = '')
    {   
        $activ['activ']='O+';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","O+");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","O+",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }

    function index9($id = '')
    {   
        $activ['activ']='O-';
        $bbid=$_SESSION['USER']->blood_bank_id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $data2=array();
        $essentials=array();
        $resultsperpage= 8;

        $plt = new Platelettes();
        $data=$plt->getbsbgrp("blood_bank_id",$bbid,"blood_group","O-");

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

            $data2= $plt->paginbsbgrp("blood_bank_id",$bbid,"blood_group","O-",$thispagefirstres,$resultsperpage);

        }

        $this->view('staff/pltdetails',['rows' => $data2,'ess' => $essentials,'activ'=> $activ]);
       
    }
}
?>