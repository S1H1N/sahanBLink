<?php $i=0 ?>
        <?php $this->view('pageinit'); ?>

        <?php $this->view('nav'); ?>
        <?php $this->view('navup'); ?>

        <link rel="stylesheet" href="<?=ROOT?>/css/complaintsstyle.css">


        <div class="section">
            <div class="comtitle">Reviews</div>

            <div class="sec3"> 
        
                <?php foreach($data[0] as $value):?>
                    
                    <?php if($i%3==0 && $i!=0) : ?>
                            </div>
                            <div class="sec3"> 
                    <?php endif ?>
                    <a href="<?=ROOT?>/complaintsdet?rid=<?=$data[0][$i]->rid?>">
                    <div class="card">
                        
                        <!-- <div class="c-bottom"> -->
                            <!-- <h3 class="cheading"><?= $data[0][$i]->author?></h3>
                            <h3 class="cheading"><?= $data[0][$i]->title?></h3>

                            <p class="desctxt">
                            <?= $data[0][$i]->description;?>          </p> -->
            
                        <!-- </div> -->
                        <div class="rtitle">
                            <?= $data[0][$i]->title?>
                        </div>
                        <div class="rauth">
                            By <?= $data[0][$i]->author?>
                        </div>
                        <div class="rdate">
                            On <?= $data[0][$i]->date?>
                        </div>
                        <?php
                            if($data[0][$i]->reply==NULL):
                        ?>
                        <div class="repbtn">
                            <button class="repbtn">Reply</button>
                        </div>
                        <?php endif ?>


                    </div>
                    </a>
                    <?php $i++; ?>
                    <?php endforeach; ?>
           
            
        </div>
    </div>
    <?php 
        //   echo "<pre>";
        //  $a=$rows[0]->id;
        // print_r($rows[0]->rid);
        // print($a);
    ?>
  
</body>
</html>