<?php
class Adminlogout extends Controller
{
    function index($id = '')
    {
        Auth::logout();
        $this->redirect('adminlogin');
        
            

        
    }
}