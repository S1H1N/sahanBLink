<?php
class Viewcampfeedback extends Controller
{
    function index()
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $campfb = new Campfeedback2();
        $id = $_GET['id'];
        $query = "select * from campfeedback where campID =:id";
        $arr = ['id' => $id];
        $data = $campfb->query($query,$arr);

        // print_r([$data]);

        $this->view('viewcampfeedback',[$data]);
    }
}