<?php


 class BLDefect extends Model
 {
    protected $table = "defect";

    public function finddefects($column1, $value1)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            
        ]);
    }

    public function pagindefects($column1, $value1, $fpage, $off)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1 order by defect_id limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            
        ]);
    }

    public function deletedefect($id)
    {
        $query = "delete from $this->table where defect_id = :defect_id";
        $data['defect_id'] = $id;
       
        return $this->query($query,$data);
    }

    

 }  