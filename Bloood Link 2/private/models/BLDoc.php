<?php


 class BLDoc extends Model
 {
    protected $table = "doctor";

    public function paginall($fpage,$off){
      $sql="select * from $this->table limit $fpage,$off";

      return $this->query($sql);
    }

 }  