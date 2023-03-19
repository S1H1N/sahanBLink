<?php
class Signup extends Controller
{
    function index()
    {

        $errors = array();
        if (count($_POST) > 0) {
            $errors = array();

            // $user = $this->load_model('User');
            $user=new User();
            if ($user->validate($_POST)) {

                $_POST['fullname'] = $_POST['name'];
                $_POST['role'] = "donor";

                $user->insert($_POST);


                $this->redirect('login');
            } else {
                //errors
                $errors = $user->errors;
            }
        }


        $this->view('signup', [
            'errors' => $errors, ]);




    }
}