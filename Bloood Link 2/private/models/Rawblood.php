<?php

/**
 * User model
 */

 class Rawblood extends Model
 {
    protected $table = "raw_blood_packet";

    public function paginall($fpage,$off){
      $sql="select * from $this->table where status=0 order by collected_date limit $fpage,$off";

      return $this->query($sql);
    }

    public function findrejected($column1, $value1,$column2, $value2)
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

    // public function paginallchecked($fpage,$off){
    //   $sql="select * from $this->table where status=1 order by collected_date limit $fpage,$off";

    //   return $this->query($sql);
    // }

    // public function paginallrejected($fpage,$off){
    //   $sql="select * from $this->table where status=2 order by collected_date limit $fpage,$off";

    //   return $this->query($sql);
    // }


    public function paginallrejected($column1, $value1,$column2, $value2, $fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2 order by collected_date limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }


    public function updateStatus($id,$data)
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['packet_id']=$id;

        $query = "update $this->table set $str where packet_id = :packet_id";
        
       
        return $this->query($query,$data);
    }

    public function thismonthdonations($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function paginthismonthdonations($column1, $value1,$column2, $value2,$value3, $fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3 limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thismonthdonors($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select DISTINCT donor_id from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

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