<?php
class BecomeaDonor extends Controller
{
    function index()
    {
        $user = new User();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $data = $user->where('id', Auth::getid());

        if (isset($_GET['click'])) {
            $click = $_GET['click'];
            if($click=='wheretodonate'){
            $bloodbank = new Bloodbank();
            $query = "select * from bloodbank ";
            $data = $bloodbank->query($query,);
            $this->view('wheretodonate', [$data]);
        }
        else if($click=='amieligible'){
            $this->view('amieligible', ['rows' => $data]);
        }else if($click=='whendonating'){
             $this->view('whendonating', ['rows' => $data]);
        }else if($click=='beforedonate'){
             $this->view('beforedonate', ['rows' => $data]);
        }else if($click=='afterdonate'){
             $this->view('afterdonate', ['rows' => $data]);
        }else if($click=='waystodonate'){
            $this->view('waystodonate', ['rows' => $data]);
        }

        }
        else{$this->view('waystodonate', ['rows' => $data]);
        }

       
       
        
        
    }

}