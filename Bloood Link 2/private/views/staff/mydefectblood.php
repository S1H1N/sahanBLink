

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
    
        <div class="camptitleimg">
            
            <div class="backarr">
            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><img class="barr" src="./img/back.png" alt=""></a>

            </div>
            <div class="campaignimg">My Defects</div>
        </div>
        <?php if($_SESSION['USER']->role=='Doctor'){ ?>
            <div class="navlinks">
            <a href="<?=ROOT?>/defectblood"><div class="tocheck">
                <div class="cont">All</div>
            </div></a>

            <a href="<?=ROOT?>/mydefectblood"><div class="checked activenav">
            <div class="cont">My Defects</div>

            </div></a>
            </div>
        <?php }?>
        
        

        <div class="tbl">
        <table>
            <thead>
                <tr>
                    
                    <th>DonorID</th>
                    <th>Date</th>
                    <th>BloodBankID</th>
                    <th></th>
                    <!-- <th></th> -->

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                <tr>
                    
                    <td><?=$row->donor_id ?></td>
                    <td><?=$row->date ?></td>
                    <td><?=$row->blood_bank_id ?></td>
                    <td><a href="<?=ROOT?>/removedefect?id=<?php echo $row->defect_id; ?>"><button class="btn">Remove</button></td>
                    
                    



                
                </tr>
                </div>
            <?php endforeach; } ?>
        </table>
        </div>
    </div>

    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/mydefectblood?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/mydefectblood?page=<?php 
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
                <a href="<?=ROOT?>/mydefectblood?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/mydefectblood?page=<?php
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
                <a href="<?=ROOT?>/mydefectblood?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
            </div>
    
    </div><?php } ?>

</div>
<?php 
    //   echo "<pre>";
    //  $a=$rows[0]->id;
    // print_r($rows);
    // print($a);
?>


</body>
</html>