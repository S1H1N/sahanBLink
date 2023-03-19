<?php


 class BLPHI extends Model
 {
    protected $table = "PHI";

    public function paginall($fpage,$off){
      $sql="select * from $this->table limit $fpage,$off";

      return $this->query($sql);
    }


 }  