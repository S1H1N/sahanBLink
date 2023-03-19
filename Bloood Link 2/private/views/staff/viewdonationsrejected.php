

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Donations</div>
        </div>

        <div class="navlinks">
            <a href="<?=ROOT?>/viewdonations"><div class="tocheck">
                <div class="cont">To Check</div>
            </div></a>

            <a href="<?=ROOT?>/viewdonationschecked"><div class="checked">
            <div class="cont">Checked</div>

            </div></a>

            <a href="<?=ROOT?>/viewdonationsrejected"><div class="rejected activenav">
            <div class="cont">Rejected</div>

            </div></a>
        </div>

        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>PacketID</th>
                    <th>Amount</th>
                    <th>Date Collected</th>
                    <th>BloodBankID</th>
                    <th>BDCampID</th>
                    <th></th>

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                <tr>
                    <td><?=$row->packet_id ?></td>
                    <td><?=$row->amount ?></td>
                    <td><?=$row->collected_date ?></td>
                    <td><?=$row->blood_bank_id ?></td>
                    <td><?=$row->blood_donation_camp_id ?></td>
                    <?php if($_SESSION['USER']->role=='Doctor'){?>
                        <td><a href="<?=ROOT?>/addtodefect?id=<?php echo $row->camp_request_id; ?>&stat=1"><button class="btn">Add Defect</button></td>

                    <?php }?>

                    



                
                </tr>
                </div>
            <?php endforeach; } ?>
        </table>
        </div>
    </div>

    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationsrejected?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationsrejected?page=<?php 
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
                <a href="<?=ROOT?>/viewdonationsrejected?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/viewdonationsrejected?page=<?php
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
                <a href="<?=ROOT?>/viewdonationsrejected?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
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