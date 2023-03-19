<?php
class Campfeedback extends Controller
{
    function index($id = '')
    {

        $campfb = new Campfeedback2();
        

        if (isset($_GET['id'])) {


            if (count($_POST) > 2) {
                $_POST['campId'] = $_GET['id'];
                // $arr['rate'] = $_POST['rate'];
                // $arr['email'] = $_POST['email'];
                // $arr['feedback'] = $_POST['feedback'];
                // print_r($_POST);
                $_POST['date'] = date("Y-m-d");
                $campfb->insert($_POST);
                $this->view('thanksfeedback');
            }else if(count($_POST) <= 2&&isset($_POST['email'])){
                echo "please fill all the options";
            }





            $this->view('campfeedback');
        }
        else{
            $this->view('404');
        }
        
    }
}