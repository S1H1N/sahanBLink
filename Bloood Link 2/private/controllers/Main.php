<?php
class Main extends Controller
{
    function index($id = '')
    {       
        
            // if(!Auth::logged_in()){
            // $this->redirect('adminlogin');
            // }

// ----------------------------------pagination-----------------------
            $data2=array();

            $essentials=array();
            $resultsperpage= 8;
            
            $bdc = new Bdcreq();
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

            $data2= $bdc->paginwhere("status",0,$thispagefirstres,$resultsperpage);
        }
// ----------------------------------pagination end----------------------
        

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $bdc = $this->load_model('Bdcreq');

            // $arr['fullname'] = "harini silva";
            // $arr['email'] = "hello@gmail.com";
            // $arr['nic'] = "200016206040";
            // $arr['mobile'] = "0703802708";
            // $arr['city'] = "auckland";
            // $arr['address'] = "1/90 mahiyangana road badulla";
            // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
            // $arr['profile_img'] = "";
            // $bs = new Addblood(); //model instantiated
            // $data2 = $bs->findAll();

        // $user->insert($arr);
        // $user->delete(25);
         //model instantiated

        // $data=$user->where('id', 1);
         $this->view('staff/main', ['rows' => $data2,'ess' => $essentials]);
        //  $this->redirect('404');
        // $this->view('home');
    }
}