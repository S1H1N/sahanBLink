<?php
class Form extends Controller
{
    function index($id = '')
    {
        if(count($_POST)>0){

            $bdc=new Bdcreq();
            
            $arr['name'] = $_POST['name'];
            $arr['location'] = $_POST['location'];
            $arr['date'] = $_POST['date'];
            $arr['bloodbank'] = $_POST['bloodbank'];
            $arr['status'] = 1;
            $arr['accrej'] = 1;

            $bdc->insert($arr);

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
        $this->view('staff/form');//, ['rows' => $data]);
        // $this->view('home');
    }
}