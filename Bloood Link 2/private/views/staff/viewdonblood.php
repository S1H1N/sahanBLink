        <!-- --------------------------------------------------------remove--------------------------------------------------------------- -->
        
        <?php $this->view('pageinit'); ?>

        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>

        <link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">


        <div class="section">           <!--main section except sidebar & navbar-->
            <div class="camptitle">
                <div class="campaign">View Donated Blood</div>
                <!-- <div class="newbtn"><a href="<?=ROOT?>/form"><button class="btn" >New</button></a></div> -->
            </div>
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        
                        <th>Don:ID</th>
                        <th>Blood Code</th>
                        <th>Blood Group</th>
                        <th>Donor NIC</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        
                        

                    </tr>
                <thead>
                <?php foreach($rows as $row):?>
                    <div class="trows">
                    <tr>
                        <td><?=$row->id ?></td>
                        <td><?=$row->bloodcode ?></td>
                        <td><?=$row->bloodgroup ?></td>
                        <td><?=$row->donornic ?></td>
                        <td><?=$row->date ?></td>
                        <td><?=$row->time ?></td>

                        
                        <td><?php           //accept/reject buttons
                                if ($row->status==0 && $_SESSION['USER']->role=="Lab"){  ?>
                                    <a href="<?=ROOT?>/bloodapproval?id=<?php echo $row->id; ?>&stat=1"><button class="btn">Accept</button></a> <a href="<?=ROOT?>/bloodapproval?id=<?php echo $row->id; ?>&stat=2"><button class="btn">Reject</button></a>
                            <?php } elseif($row->status==1){ ?>
                                <a href="<?=ROOT?>/reqbloodform"><button class="prt">Partition</button></a>
                            <?php } elseif ($row->status==1 && $_SESSION['USER']->role!="Lab" ){ 
                                 echo "Accepted";

                             }elseif ($row->status==2){
                                echo "Rejected";
                            } elseif ($row->status==0 && $_SESSION['USER']->role!="Lab"){
                                echo "Pending";
                                echo "Accepted";
                            }?>
                                
                        
                        </td>


                    
                    </tr>
                    </div>
                <?php endforeach; ?>
            </table>
            </div>
        </div>
        <div class="pagination">
                <div class="pagin">
                    <a href="<?=ROOT?>/Main?page=1"><button class="pagebtn">First</button></a>
                </div>
                <div class="pagin">
                    <a href="<?=ROOT?>/Main?page=<?php 
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
                    <a href="<?=ROOT?>/Main?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
                </div>
                
           <?php } ?> 
                <div class="pagin">
                    <a href="<?=ROOT?>/Main?page=<?php
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
                    <a href="<?=ROOT?>/Main?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
                </div>
        
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