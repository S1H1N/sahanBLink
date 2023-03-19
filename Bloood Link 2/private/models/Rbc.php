<?php

/**
 * User model
 */

 class Rbc extends Model
 {
    protected $table = "rbc";

    public function getbs($column1, $value1)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
        ]);
    }

    public function getbsbgrp($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }


    public function getbscount($column1, $value1)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1 AND exp_date > CURDATE()";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
        ]);
    }

    

      public function paginbs($column1, $value1,$fpage,$off)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1 order by final_packet_id limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
        ]);
    }

    public function paginbsbgrp($column1, $value1,$column2, $value2,$fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2 order by final_packet_id limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }

    

  

   // protected $allowedColumns = ['fullname','email','nic','mobile','city','address','password'];
   // protected $beforeInsert = ['hash_password'];


//    public function validate($DATA)
//    {

//       $this->errors = array();



//       if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
//          $this->errors[]=("Valid email is required");
//      }
     
//      if (strlen($DATA["password"]) < 8) {
//       $this->errors[]=("Password must be at least 8 characters");
//      }
     
//      if (!preg_match("/[a-z]/i", $DATA["password"])) {
//       $this->errors[]=("Password must contain at least one letter");
//      }
     
//      if (!preg_match("/[0-9]/", $DATA["password"])) {
//       $this->errors[]=("Password must contain at least one number");
//      }
     
//      if ($DATA["password"] !== $DATA["cPassword"]) {
//       $this->errors[]=("Passwords must match");
//      }
//      if(count($this->errors) == 0){
//          return true;
//      }

//       return false;
//    }

//    public function hash_password($data)
//    {
//       $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
//       return $data;
//    }


  }