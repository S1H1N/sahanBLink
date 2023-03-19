<?php
class Contactus extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $id=Auth::getid();    
        $data = $user->where("id", $id);


        if(count($_POST)>0){
            $complaints = new Complaints();
            $_POST['userID']=Auth::getid();
            $complaints->insert($_POST);
            $this->redirect('home');
        }


        $this->view('contactus', ['rows' => $data[0]]);
       
    }
}

