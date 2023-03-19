<?php


 class BLLab extends Model
 {
    protected $table = "lab_staff";

    public function paginall($fpage,$off){
      $sql="select * from $this->table limit $fpage,$off";

      return $this->query($sql);
    }

 }  