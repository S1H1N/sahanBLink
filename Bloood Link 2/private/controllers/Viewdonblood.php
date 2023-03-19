<?php
class ViewdonBlood extends Controller
{
    function index($id = '')
    {
        $essentials=array();
            $resultsperpage= 8;
            
            $bld = new Donatedblood();
            $data = $bld->findAll();
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

            $data2= $bld->paginall($thispagefirstres,$resultsperpage);

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


        // $user->insert($arr);
        // $user->delete(25);
        $bld = new Donatedblood(); //model instantiated
        $data = $bld->findAll();
            
        // $data=$user->where('id', 1);
         $this->view('viewdonblood', ['rows' => $data2,'ess' => $essentials]);
         
        //   echo "<pre>";
        //  $a=$rows[0]->id;
        // print_r($rows);
        // print($a);
    

    }
}