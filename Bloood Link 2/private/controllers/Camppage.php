<?php
class Camppage extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        // print_r($_GET['id']);
        $id = $_GET['id'];

        $camp = new Camp();

        if ($id) {
            $data = $camp->where("campID",$id);
            
            $this->view('camppage', ['rows' =>$data[0]]);
        }
        else{
            print_r($id);
            echo "$id";
            echo "not found";
        }
        
    }
}