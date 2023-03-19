    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/formstyle.css">
   

    

    <div class="exnav">
        <div class="backarr">
        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><img class="barr" src="./img/back.png" alt="">

        </div></a>
    <div class="boxes r1">
            <a href="<?=ROOT?>/bbbsmanage"><div class="b1">
                <div class="imgb">
                    <img class="bimg" src="./img/bld.jpg" alt="">
                </div>
                <div class="data">
                    Blood Stock 
                </div>
            </div>
            
            <a href="<?=ROOT?>/viewbldrequests"><div class="b1">
                <div class="imgb">
                    <img class="bimg" src="./img/breq.jpg" alt="">
                </div>
                <div class="data">
                    Blood Requests
                </div>
            </div></a>
        </div>
    </div>
        

    
</body>
</html>