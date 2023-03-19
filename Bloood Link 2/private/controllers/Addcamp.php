<?php
class Addcamp extends Controller
{
    function index($id = '')
    {

        $user = $this->load_model('User');
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $id=Auth::getid();    
        $data = $user->where("id", $id);


       
        $image=new Image();




        if (count($_POST) > 0) {
            $errors = array();

            $camp = $this->load_model('Camp');
            // $user=new User();
            if ($camp->validate($_POST)) {


                if($filename=$image->pic_validate()){
                    $id = Auth::getid();
                    
                    $_POST['camp_img'] = $filename;
                    
                   
               }

               

                $camp->insert($_POST);


                $this->redirect('campaigns');
            } else {
                //errors
                $errors = $camp->errors;
            }
        }

      

        
        
        $this->view('addcamp', ['rows' => $data[0]]);
    }
}