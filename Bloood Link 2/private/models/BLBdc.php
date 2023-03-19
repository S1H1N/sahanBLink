<?php


 class BLBdc extends Model
 {
    protected $table = "blood_donation_camp";

    public function thismonthcamps($column1, $value1,$column2, $value2,$value3)
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

    public function paginthismonthcamps($column1, $value1,$column2, $value2,$value3, $fpage,$off)
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

    public function paginall($fpage,$off){ //-------------for all pagination
        $sql="select * from $this->table limit $fpage,$off";
  
        return $this->query($sql);
      }


    

 }  