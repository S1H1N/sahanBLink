<?php
class Formforpdf extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }


        
        $this->view('staff/formforpdf');
       
    }
}