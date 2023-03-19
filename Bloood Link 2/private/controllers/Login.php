<?php
class Login extends Controller
{
    function index()
    {

        $errors = array();

        if (count($_POST) > 0) {
            $docuser = new BLDoc();
            $phiuser = new BLPHI();
            $labuser = new BLLab();
            $user = new BLDonor();


            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    // $_SESSION['ROLE']=$row->address;
                    $this->redirect('home');
                }
            }

           
            else if ($row = $docuser->where('email', $_POST['email'])) {
                $row = $row[0];
                // $errors['nikn'] = $_POST['password'];
                // $errors['nikn2'] = $row->password;
                // $this->redirect('home');

                if (password_verify($_POST['password'], $row->password)) {
                    
                    // $errors['nikn3'] = "pass eka hri";
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="Doctor";

                    $this->redirect('dashboard');
                }else{
                    $errors['nikn4'] = "pass 1 wrdi"; 
                }
            } 

            else if ($row = $phiuser->where('email', $_POST['email'])) {
                $row = $row[0];
                // $errors['nikn'] = $_POST['password'];
                // $errors['nikn2'] = $row->password;
                // $this->redirect('home');

                if (password_verify($_POST['password'], $row->password)) {
                    
                    // $errors['nikn3'] = "pass eka hri";
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="PHI";

                    $this->redirect('dashboard');
                }else{
                    $errors['nikn4'] = "pass 1 wrdi"; 
                }
            } 

            else if ($row = $labuser->where('email', $_POST['email'])) {
                $row = $row[0];
                // $errors['nikn'] = $_POST['password'];
                // $errors['nikn2'] = $row->password;
                // $this->redirect('home');

                if (password_verify($_POST['password'], $row->password)) {
                    
                    // $errors['nikn3'] = "pass eka hri";
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="Lab";

                    $this->redirect('dashboard');
                }else{
                    $errors['nikn4'] = "pass 1 wrdi"; 
                }
            } 

            $errors['email'] = "wrong Email or Password";



        }

        $this->view('login');
    }
}