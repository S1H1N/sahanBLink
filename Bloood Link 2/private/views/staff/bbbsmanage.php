        <?php $this->view('pageinit'); ?>

        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>
        <script src="<?=ROOT?>/js/ajscriptbbbs.js"></script>


        <link rel="stylesheet" href="<?=ROOT?>/css/bbbsmanagestyle.css">

        <div class="section">           <!--main section except sidebar & navbar-->
            <!-- <div class="back">
                <div class="backimg"><img class="backimg" src="back.png" ></div>
            </div> -->
            <div class="namearea">
                <div class="nmandreq">
                    <div class="nm"><b>Blood Stock</b></div>
                    <?php if ($_SESSION['USER']->role=="Doctor"){ ?>
                        <div class="reqbt">
                        <a href="<?=ROOT?>/bldrequestform"><button class="reqbt"><b>Request Blood</b></button></a>
                        </div>
                    <?php }?>
                    
                </div>
            </div>
            <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
            </div>
            
           <div class="rwppbox">
            <div class="boxupper">

                <a href="<?=ROOT?>/rbcdetails"><div class="rbcbox">
                    <div class="btname">RBC</div>
                    <div class="btamount"><?=$rows['rbc']?></div>
                </div></a>

                <a href="<?=ROOT?>/wbcdetails"><div class="wbcbox">
                    <div class="btname">WBC</div>
                    <div class="btamount"><?=$rows['wbc']?></div>

                </div></a>
                <a href="<?=ROOT?>/pltdetails"><div class="pltbox">
                    <div class="btname">Platelettes</div>
                    <div class="btamount"><?=$rows['plt']?></div>

                </div></a>

                <a href="<?=ROOT?>/plsmdetails"><div class="plsmbox">
                    <div class="btname">Plasma</div>
                    <div class="btamount"><?=$rows['plsm']?></div>

                </div></a>

            </div>
           
           </div>
           

            <!-- <div class="addb">
                <button class="addb">Add Blood</button>
            </div> -->
        </div>
        <?php $this->view('staff/footer'); ?>


  
</body>
</html>