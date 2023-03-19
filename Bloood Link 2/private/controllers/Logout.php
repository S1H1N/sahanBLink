<?php
class Logout extends Controller
{
    function index($id = '')
    {


        Auth::logout();
        $this->redirect('login');
    }
}