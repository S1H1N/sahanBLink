    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/boostyle.css">    

    <div class="exnav">
        
        <div class="rtitle">
            <u><?php echo $rows->title;?></u>
        </div>
        <div class="rby">
            Review by <b><?php echo $rows->author?></b>
        </div>
        <div class="rdate">
            On <?php echo $rows->date?>

        </div>
        <div class="rdes">
            <p align="justify"><?php echo $rows->description."Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus."?></p>
        </div>
        <div class="rrep">
            <?php 
                if(!$rows->reply==NULL){?>
                        <div class="showrep">
                            <u class="rep"> <h2>Replied</h2></u>
                        <?php echo $rows->reply;?>
                        </div>                <?php } else{
                    echo "nope";

                }
            ?>
        </div>
    </div>
    
    
</body>
</html>