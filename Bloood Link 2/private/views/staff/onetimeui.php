

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>


<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Add Donations</div>  
            <div class="newbtn"><img class="onetimg" src="<?=ROOT?>/images/add-512.png"><button class="btnonet">Add</button><img class="onetimg" src="<?=ROOT?>/images/add-user.png"><button class="btnonet">Add New</button></div>

        </div>
        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>NIC</th>
                    <th>Mobile</th>
                    
                    

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                
                <tr class="hov">
                    <td><?=$row->name ?></td>
                    <td><?=$row->email ?></td>
                    <td><?=$row->nic ?></td>
                    <td><?=$row->mobile ?></td>
                </tr>
                </div>
            <?php endforeach; 
        }?>
        </table>
        </div>
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