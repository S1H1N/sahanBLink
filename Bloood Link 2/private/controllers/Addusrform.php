<?php
class Addusrform extends Controller
{
    function index($id = '')
    {
        if(count($_POST)>0){

            $usr=new Sysusers();
            
            $arr['name'] = $_POST['uname'];
            $arr['uid'] = $_POST['uid'];
            $arr['nic'] = $_POST['nic'];
            $arr['email'] = $_POST['email'];
            $arr['tel'] = $_POST['pno'];
            $arr['password'] =password_hash($_POST['psswrd'],PASSWORD_DEFAULT);
            $arr['role'] = $_POST['role'];
            // $arr['nic'] = $_POST['nic'];
            // $arr['bloodbank'] = $_POST['bbank'];
            

            $usr->insert($arr);

            $this->redirect('users');





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
        $this->view('staff/addusrform');//, ['rows' => $data]);
        // $this->view('home');
    }
}