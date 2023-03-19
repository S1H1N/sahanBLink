<?php

/**
 * Authentication class
 */

 class Auth{
    public static function authenticate($row){

        session_start();
        session_regenerate_id();
        $_SESSION['USER'] = $row;

    }

    public static function logout(){
       if(isset($_SESSION['USER'])) {
           unset($_SESSION['USER']);
 
       }

    }

    public static function logged_in(){
        if(isset($_SESSION['USER'])) {
            return true;
        } else {
            return false;
        }
  
        

    }
    public static function user(){
        if(isset($_SESSION['USER'])) {
            return $_SESSION['USER']->fullname;
            
        } else {
            return "false";
        }
  
        

    }


    public static function __callStatic($method,$params){

        $prop = strtolower(str_replace("get","",$method));
        
        if(isset($_SESSION['USER'])) {
            return $_SESSION['USER']->$prop;
            
        }
        return "Unknown";

    }

 }