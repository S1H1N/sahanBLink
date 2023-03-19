<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">

<div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Blood Requests</div>
        </div>

        <div class="navlinks">
            <a href="<?=ROOT?>/viewbldrequests"><div class="vreq activenav">
                <div class="cont">View Requests</div>
            </div></a>

            <a href="<?=ROOT?>/viewstatusbldrequests"><div class="sreq">
            <div class="cont">Sent Status</div>

            </div></a>

            <?php if($_SESSION['USER']->role=='Doctor') {?>

            <a href="<?=ROOT?>/bldrequestform"><div class="sendreq">
            <div class="cont">Send Request</div>

            </div></a>
            <?php } ?>
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
               
            
        </table>
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