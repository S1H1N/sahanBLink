<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">


<div class="section">           <!--main section except sidebar & navbar-->
    <div class="camptitle">
        <div class="campaign">This Month Donations</div>
        
        
    </div>

    
</div>

    <div class="tbl">
    <table>
        <thead>
            <tr>
                
                <th>DonorID</th>
                <th>Date</th>
                <th>BDC ID</th>
                <th> Status</th>
               
                
                

            </tr>
        <thead>
        <?php foreach($rows as $row):
            $cdate=date("y-m-d");
            ?>

            <tr>
                
               
                <td><?=$row->donor_id ?></td>
                <td>
                    <?=$row->collected_date ?>
                </td>
                <td><?=$row->blood_donation_camp_id ?></td>
                <td>
                    <?php if($row->status==0){
                        echo "Pending";
                    }elseif($row->status==1){
                        echo "Accepted";

                    }elseif($row->status==2){
                        echo "Rejected";

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