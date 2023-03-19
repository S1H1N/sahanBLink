<?php
class Profile extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $id=Auth::getid();    
        $data = $user->where("id", $id);





        
        $this->view('profile', ['rows' => $data[0]]);
        
    }
}