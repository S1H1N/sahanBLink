    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>
    
    <link rel="stylesheet" href="<?=ROOT?>/css/reqdetailsstyle.css">

     <div class="campname" ><u><?php echo $rows->camp_name; ?></u></div>

    <div class="splits">
       
        <div class="splitleft">
           
            <div class="imgplc">
                <div class="imgg"></div>
            </div>

            <div class="det">
                <div class="place"><b>Place: </b><?=$rows->address;?>   </div>
                <div class="time"><b>Time: </b><?=$rows->start_time;?></div>
                <div class="date"><b>Date: </b><?=$rows->date;?>      </div>
                <div class="orgby"><b>Organized by: </b><?=$rows->date;?></div>
                <div class="pno"><b>Phone No: </b><?=$rows->date;?></div>
            </div>
        </div>
        <div class="splitright"> 
        <div class="desc"><p align="justify"><?=$rows->description;?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, nibh sed dictum porta, justo sem efficitur massa, vitae porta metus nibh ac quam. Sed convallis tincidunt lorem sed dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer a arcu ac orci ultrices dapibus. Phasellus feugiat mauris nunc</p></div>     
        </div>
    </div>
    <div class="onetimebtn">
    <a href="<?=ROOT?>/onetimeui?id=<?=$rows->camp_id;?>"><button class="btnonet">Start BDC</button>
    </div>
    
   
</body>
</html>