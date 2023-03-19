<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>

<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">
<link rel="stylesheet" href="<?=ROOT?>/css/bldreqform.css">


<div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Send Blood Requests</div>
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
        <form>
        <div class="formarea">
            <div class="docpart">

                <div class="doc1">
                    <div class="formcontrol ">
                            <div class="q docnamelbl"><label for="docname">Doctor Name:</label></div>
                            <div class="in docnamein"><input type="text" name="docname" id="docname" class="docname"readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                            <div class="sma"><small>ss</small></div>

                    </div>
                </div>

                <div class="doc2">

                    <div class="doc21">
                        <div class="formcontrol ">
                                <div class="q didlbl"><label for="docid">Doctor ID:</label></div>
                                <div class="in didin"><input type="text" name="docid" id="docid" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                    </div>

                    <div class="doc22">
                        <div class="formcontrol ">
                                <div class="q bblbl"><label for="docbb">BloodBank:</label></div>
                                <div class="in bbin"><input type="text" name="docbb" id="docbb" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="dashline">
                
            </div>

            <!-- <div class="bldpart">

            </div> -->
            <div class="bbpart">
                
                    <div class="bb1">
                        <div class="formcontrol ">
                                <div class="q reqbblbl"><label for="reqbb">Req BloodBank:</label></div>
                                <div class="in reqbbin"><input type="text" name="reqbb" id="reqbb" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                    </div>
                    <div class="bb2">
                        <div class="formcontrol ">
                                <div class="q reqdlbl"><label for="reqdate">Req Date:</label></div>
                                <div class="in reqdin"><input type="text" name="reqdate" id="reqdate" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                    </div>
                
            </div>

            <div class="dashline">
                
            </div>

            <div class="bldpart">
                <div class="bld1">

                    <div class="bld11">
                        <div class="formcontrol ">
                                <div class="q bldtlbl"><label for="bldtype">Blood Type:</label></div>
                                <div class="in bldtin"><input type="text" name="bldtype" id="bldtype" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                    </div>

                    <div class="bld12">
                        <div class="formcontrol ">
                                <div class="q bldglbl"><label for="bldgrp">Blood Group:</label></div>
                                <div class="in bldgin"><input type="text" name="bldgrp" id="bldgrp" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                    </div>
                </div>

                <div class="bld2">
                    <div class="formcontrol ">
                                <div class="q bldalbl"><label for="bldamnt">Amount:</label></div>
                                <div class="in bldain"><input type="text" name="bldamnt" id="bldamnt" readonly value="something" ?> <i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                        </div>
                </div>
            </div>

        </div>
    </form>

        
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