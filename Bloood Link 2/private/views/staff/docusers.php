        <?php $this->view('pageinit'); ?>

        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>

        <link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">


        <div class="section">           <!--main section except sidebar & navbar-->
            <div class="camptitle">
                <div class="campaign">System Users</div>
                <?=$_SERVER['PHP_SELF']?>
            </div>

            <div class="navlinks">
            <a href="<?=ROOT?>/docusers"><div class="tocheck activenav">
                <div class="cont">Doctor</div>
            </div></a>

            <a href="<?=ROOT?>/labusers"><div class="checked">
            <div class="cont">Lab</div>

            </div></a>

            <a href="<?=ROOT?>/phiusers"><div class="rejected">
            <div class="cont">PHI</div>

            </div></a>
        </div>
        
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>NIC</th>
                        <th>Medical ID</th>
                        <th>Tel No</th>
                        
                        

                    </tr>
                <thead>
                <?php foreach($rows as $row):?>
                    <tr>
                        
                       
                        <td><?=$row->name ?></td>
                        <td>
                            <?=$row->email ?>
                        </td>
                        <td><?=$row->nic ?></td>
                        <td><?=$row->medical_id?></td>
                        <td>
                        <?=$row->telephone ?>
                        </td>
                        


                    
                    </tr>
                <?php endforeach; ?>
            </table>
            </div>
            <?php if($rows!=NULL) {?>

            <div class="pagination">
                <div class="pagin">
                    <a href="<?=ROOT?>/docusers?page=1"><button class="pagebtn">First</button></a>
                </div>
                <div class="pagin">
                    <a href="<?=ROOT?>/docusers?page=<?php 
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
                    <a href="<?=ROOT?>/docusers?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
                </div>
                
           <?php } ?> 
                <div class="pagin">
                    <a href="<?=ROOT?>/docusers?page=<?php
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
                    <a href="<?=ROOT?>/docusers?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
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