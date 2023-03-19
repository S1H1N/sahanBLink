<?php

/**
 * camp model
 */

class Complaints extends Model
{
    protected $table = "feedback";




    protected $allowedColumns = ['userID','fullname', 'phone', 'email', 'subject', 'feedback'];

    public function validate($DATA)
    {
 
       $this->errors = array();
 
 
 
       if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
          $this->errors[]=("Valid email is required");
      }
  
      if(count($this->errors) == 0){
          return true;
      }
 
       return false;
    }

}