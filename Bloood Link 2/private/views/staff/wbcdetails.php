<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">


<div class="section">           <!--main section except sidebar & navbar-->
    <div class="camptitle">
        <div class="campaign">WBC</div>
        
    </div>

    <div class="navlinks">
    <a href="<?=ROOT?>/wbcdetails"><div class="tocheck<?php if($activ['activ']=='All'){echo " activenav";}?>">
        <div class="cont">All</div>
    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index2"><div class="checked<?php if($activ['activ']=='A-'){echo " activenav";}?>">
    <div class="cont">A-</div>

    </div></a>
    <a href="<?=ROOT?>/wbcdetails/index3"><div class="checked<?php if($activ['activ']=='A+'){echo " activenav";}?>">
    <div class="cont">A+</div>

    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index4"><div class="checked<?php if($activ['activ']=='B+'){echo " activenav";}?>">
    <div class="cont">B+</div>

    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index5"><div class="checked<?php if($activ['activ']=='B-'){echo " activenav";}?>">
    <div class="cont">B-</div>

    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index6"><div class="checked<?php if($activ['activ']=='AB+'){echo " activenav";}?>">
    <div class="cont">AB+</div>

    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index7"><div class="checked<?php if($activ['activ']=='AB-'){echo " activenav";}?>">
    <div class="cont">AB-</div>

    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index8"><div class="checked<?php if($activ['activ']=='O+'){echo " activenav";}?>">
    <div class="cont">O+</div>

    </div></a>

    <a href="<?=ROOT?>/wbcdetails/index9"><div class="checked<?php if($activ['activ']=='O-'){echo " activenav";}?>">
    <div class="cont">O-</div>

    </div></a>

    

    
</div>

    <div class="tbl">
    <table>
        <thead>
            <tr>
                
                <th>final id</th>
                <th>Group</th>
                <th>Exp_date</th>
                <th></th>
            
                
                

            </tr>
        <thead>
        <?php foreach($rows as $row):
            $cdate=date("y-m-d");?>
            <tr>
                

               
                <td><?=$row->final_packet_id ?></td>
                <td><?=$row->blood_group ?></td>
                <td><?=$row->exp_date?></td>
                <td>
                    <?php if((strtotime($cdate)>(strtotime($row->exp_date)))){
                        echo "Expired";
                    }?>
                </td>
                


            
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <?php if($rows!=NULL) {?>

    <div class="pagination">
        <?php
            $current_url = "http";
            $current_url .= "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $current_url = strtok($current_url, '?');


        ?>
        <div class="pagin">
            <a href="<?=$current_url?>?page=1"><button class="pagebtn">First</button></a>
        </div>
        <div class="pagin">
            <a href="<?=$current_url?>?page=<?php 
                if(!isset($_GET['page'])){
                    echo "1";
                }elseif(($_GET['page']-1)<1){
                    echo "1";
                } else{
                    echo $_GET['page']-1;
                }
                
            
            ?>"><button class="pagebtn"><<</button></a>
        </div>
   <?php for($i=1;$i<=$ess['noofpgs'];$i++) { ?>
        <div class="pagin">
            <a href="<?=$current_url?>?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
        </div>
        
   <?php } ?> 
        <div class="pagin">
            <a href="<?=$current_url?>?page=<?php
                if(!isset($_GET['page'])){
                    echo "2";
                } elseif(($_GET['page']+1)>$ess['noofpgs']){
                    echo $ess['noofpgs'];
                } else{
                    echo $_GET['page']+1;
                }
                
            
            ?>"><button class="pagebtn">>></button></a>
        </div>
        <div class="pagin">
            <a href="<?=$current_url?>?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
        </div>

</div><?php } ?>

</div>

</div>
<?php 
//   echo "<pre>";
//  $a=$rows[0]->id;
// print_r($rows);
// print($a);
?>


</body>
</html>