<?php
class Phiusers extends Controller
{
    function index($id = '')
    {
            $data2=array();

            $essentials=array();
            $resultsperpage= 8;
            
            $usrs = new BLPHI();
            $data = $usrs->findAll();

            if($data!=NULL){
            $numofresults=count($data);
            $numofpages= ceil($numofresults/$resultsperpage);

            $essentials['noofpgs']=$numofpages;

            // echo $numofpages;

            if(!isset($_GET['page']) or $_GET['page']> $numofpages or $_GET['page']< 1){
                $page=1;
            } else{
                $page=$_GET['page'];
            }

            $thispagefirstres=($page-1)*$resultsperpage;

            // $sql="select * from bdcreq order by id desc limit $thispagefirstres,$resultsperpage";

            $data2= $usrs->paginall($thispagefirstres,$resultsperpage);

        }

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
        // $usrs = new Sysusers(); //model instantiated
        // $data = $usrs->findAll();

        // $data=$user->where('id', 1);
         $this->view('staff/phiusers', ['rows' => $data2,'ess' => $essentials]);
        //  $this->redirect('404');
        // $this->view('home');
    }
}