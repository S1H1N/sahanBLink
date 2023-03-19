<?php
class Adminlogin extends Controller
{
    function index($id = '')
    {

        $errors = array();

        if (count($_POST) > 0) {
            $errors['chksess'] =$_POST ; 

            $usr = new Sysusers();
            if ($row = $usr->where('name', $_POST['uname'])) {
                $row = $row[0];
                $errors['nikn'] = $_POST['password'];
                $errors['nikn2'] = $row->password;
                // $this->redirect('home');

                if (password_verify($_POST['password'], $row->password)) {
                    
                    $errors['nikn3'] = "pass eka hri";
                     Auth::authenticate($row);
                    $this->redirect('main');
                }else{
                    $errors['nikn4'] = "pass 1 wrdi"; 
                }
            } 
                $errors['email'] = "wrong Email or Password";

            

        }



        
        
            
        // $data=$user->where('id', 1);
         $this->view('adminlogin', ['err' => $errors]);
         
        //   echo "<pre>";
        //  $a=$rows[0]->id;
        // print_r($rows);
        // print($a);
    

    }
}