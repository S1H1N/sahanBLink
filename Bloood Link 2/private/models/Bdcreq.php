<?php

/**
 * User model
 */

 class Bdcreq extends Model
 {
    protected $table = "donation_camp_request";

    

    public function paginall($fpage,$off){ //-------------for all pagination
      $sql="select * from $this->table where bloodbank='Matara' order by id desc limit $fpage,$off";

      return $this->query($sql);
    }


    public function paginwhere($column, $value,$fpage,$off) //-------------------for where pagination
    {

        $column = addslashes($column);

        $query = "select * from $this->table where $column=:value limit $fpage,$off" ;
        // echo $query;
        return $this->query($query, [
            
            'value' => $value,
        ]);
    }



    public function updatestatus($id,$data) //-----------------------update request status
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['camp_request_id']=$id;

        $query = "update $this->table set $str where camp_request_id = :camp_request_id";
        
       
        return $this->query($query,$data);
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