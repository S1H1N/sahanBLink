
 <?php $this->view("includes/navbar",); ?>


    <link rel="stylesheet" href="<?=ROOT?>/css/camppage.css">
    <title><?= $data['rows']->cName?></title>

    <div class="sec1">
        <h2 class="sec1-h"><?= $data['rows']->cName?></h2>
        <div class="div-a">
        <?php if(($data['rows']->date)<=date("Y-m-d")):?> <a href="<?=ROOT?>/viewcampfeedback?id=<?=$data['rows']->campID?>" class="qrbtn">Feedback</a><?php endif;?>
         <a href="<?=ROOT?>/campqr?id='<?=$data['rows']->campID?>'" class="qrbtn">GET QR</a>
        
    </div>
</div>

    <div class="sec2">
        <div class="sec2-1">
            <div class="s2Img">
                <img class="s2pic" src="<?=ROOT.'/'.$data['rows']->camp_img?>" alt="">
            
            </div>
            <div class="s2Info">
                <span class="ftext">Place : </span> <span class="vtext"><?= $data['rows']->venue?></span> <br>
                <span class="ftext">Start Time : </span> <span class="vtext"><?= $data['rows']->time?></span><br>
                <span class="ftext">Date : </span><span class="vtext"><?= $data['rows']->date?></span><br>
                <span class="ftext">BloodBank : </span><span class="vtext"><?= $data['rows']->bloodBank?></span><br>
                <span class="ftext">Organizer : </span><span class="vtext">Add this Later</span><br>
                <span class="ftext">Phone No : </span> <span class="vtext"><?= $data['rows']->phone?></span><br>
            </div>
        </div>
        <div class="sec2-2">
            <div class="sec2Desc">
            <?= $data['rows']->description?>
            </div>
            <button class="btn">Register</button>
        </div>
    </div>




        
        
    </body>
</html>