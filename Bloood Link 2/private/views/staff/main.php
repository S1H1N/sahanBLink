

    <?php $this->view('pageinit'); ?>

    <?php $this->view('nav'); ?>
    <?php $this->view('navup'); ?>
    <style>
	/* Style the button that opens the form */
/* button {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
} */

/* Style the form container */
.form-container {
  max-width: 400px;
  padding: 20px;
  background-color: #f1f1f1;
}

/* Style the form input fields */
/* input[type=text], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
} */

/* Style the form buttons */
/* .btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
} */
/* 
.btn:hover {
  opacity: 0.8;
} */

/* Style the close button */
/* .cancel {
  background-color: #f44336;
} */

/* Position the form popup box */
.form-popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
}

.form-popup.show {
  display: block;
}

</style>

    <link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




        <div class="section">           <!--main section except sidebar & navbar-->
            <div class="camptitle">
                <div class="campaign">Campaigns</div>
                <?php if ($_SESSION['USER']->role!="Admin") { ?>
                <div class="newbtn"><button onclick="openForm()">Open Form</button></div>

                <?php }?>
                
            </div>
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Street</th>
                        <th>Date</th>
                        
                        <th>Status</th>
                        <th></th>
                        <th></th>

                    </tr>
                <thead>
                <?php if($rows!=NULL) {
                 foreach($rows as $row):?>
                    <div class="trows">
                    
                    <tr class="hov">
                        <td><?=$row->name ?></td>
                        <td><?=$row->city ?></td>
                        <td><?=$row->street ?></td>
                        <td><?=$row->date ?></td>
                        
                        <td>
                        <?php       //status indicators
                                $cdate=date("y-m-d");
                                // echo $cdate;
                                if ((strtotime($cdate)<(strtotime($row->date)))&&($row->status==0 || $row->status==1)) {?>
                                   <div class="upc"><?php echo "Upcoming";?></div> 
                               <?php }
                                if ((strtotime($cdate)==(strtotime($row->date)))&&($row->status==1)) {?>
                                    <div class="ong"><?php echo "Ongoing";?></div>
                                <?php }
                                if ((strtotime($cdate)>(strtotime($row->date)))&&($row->status==1)) {
                                    echo "Closed";
                                }
                                if($row->status==2){?>
                                    <div class="rej"><?php echo "Rejected";?></div>
                                <?php }
                                ?>
                        </td>
                        <td><?php           //accept/reject buttons
                                if ($row->status==0 && $_SESSION['USER']->role=="PHI" ){  ?>
                                    <a href="<?=ROOT?>/approval?id=<?php echo $row->camp_request_id; ?>&stat=1"><button class="btn">Accept</button></a> <a href="<?=ROOT?>/approval?id=<?php echo $row->camp_request_id; ?>&stat=2"><button class="btn">Reject</button>
                            <?php } ?>
                                
                        
                        </td>
                        



                    
                    </tr>
                    </div>
                <?php endforeach; 
            }?>
            </table>
            </div>
        </div>
        <?php if($rows!=NULL) {?>

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
        
        </div><?php } ?>

        <!-- --------------------------form popup-------------------- -->
        <div id="myForm" class="form-popup">
	  <form action="/submit-form.php" method="post" class="form-container">
		<h2>Enter Your Information</h2>
	
		<label for="name"><b>Name:</b></label>
		<input type="text" placeholder="Enter Name" name="name" required>
	
		<label for="email"><b>Email:</b></label>
		<input type="email" placeholder="Enter Email" name="email" required>
	
		<button type="submit" class="btn">Submit</button>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	  </form>
      <!-- ---------------------------form popup end----------------------- -->

      
	</div>

        <?php $this->view('staff/footer'); ?>


    </div>
    <?php 
        //   echo "<pre>";
        //  $a=$rows[0]->id;
        // print_r($rows);
        // print($a);
    ?>
    <script>
		function openForm() {
  document.getElementById("myForm").classList.add("show");
}

function closeForm() {
  document.getElementById("myForm").classList.remove("show");
}

	</script>
    
    
</body>
</html>