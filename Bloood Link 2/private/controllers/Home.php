<?php
class Home extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $id=Auth::getid();    
        $data = $user->where("id", $id);

        
        $this->view('home', ['rows' => $data[0]]);
       
    }
}