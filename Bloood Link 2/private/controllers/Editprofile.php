<?php
class Editprofile extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = $this->load_model('User');

        $id=Auth::getid();    
        
        if($_POST){
            $id=Auth::getid(); 
            
            $arr['fullname']=$_POST['name3'];
          
            $arr['mobile']=$_POST['phone'];
            $arr['city']=$_POST['city'];
            $arr['address']=$_POST['address'];
            $user->update($id,$arr);
            header("Location:http://localhost:8888/Bloood%20Link%202/public/profile");
            
        }
        

        $data = $user->where("id", $id);

        // $data=$user->where('id', 1);
        $data = $data[0];
        $this->view('editprofile', ['rows' => $data]);
        // $this->view('home');
    }
}