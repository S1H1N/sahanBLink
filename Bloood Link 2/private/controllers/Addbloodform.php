<?php
class Addbloodform extends Controller
{
    function index($id = '')
    {
        if(count($_POST)>0){

            $addb=new Addblood();
            
            $arr['bloodtype'] = $_POST['btype'];
            $arr['bloodgroup'] = $_POST['bgrp'];
            $arr['donateddate'] = $_POST['ddate'];
            $arr['expdate'] = $_POST['exdate'];
            $arr['amount'] = $_POST['amnt'];
            $arr['addedby'] = $_POST['addby'];
            $arr['nic'] = $_POST['nic'];
            $arr['bloodbank'] = $_POST['bbank'];
            

            $addb->insert($arr);

            $this->redirect('main');





        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $user = $this->load_model('User');

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
        // $data = $user->findAll();

        // $data=$user->where('id', 1);
        $this->view('staff/addbloodform');//, ['rows' => $data]);
        // $this->view('home');
    }
}