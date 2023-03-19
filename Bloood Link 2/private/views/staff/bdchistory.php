

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">History of Campaigns</div>
            
            
        </div>
        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    

                </tr>
            <thead>
            <?php foreach($rows as $row):
                $cdate=date("y-m-d");
                 if((strtotime($cdate)>(strtotime($row->date))) && ($_SESSION['USER']->blood_bank_id)==($row->blood_bank_id)) { ?>
                    <div class="trows">
                    <tr>
                        <td><?=$row->camp_name ?></td>
                        <td><?=$row->address ?></td>
                        <td><?=$row->date ?></td>
                        <td><?=$row->start_time ?></td>
                        
                        
                        <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>
    
    
    
                    
                    </tr>
                    </div>
                    <?php }?>
                
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=<?php 
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
                <a href="<?=ROOT?>/bdchistory?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/bdchistory?page=<?php
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
                <a href="<?=ROOT?>/bdchistory?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
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