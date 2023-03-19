<?php $this->view("includes/navbar",$data);?>
<?php $i=0 ?>
<title>View Feedback</title>
<link rel="stylesheet" href="<?=ROOT?>/css/viewcampfeedback.css">


<div class="sec1">
    <h1>UOK Camp - Feedback</h1>
</div>
<div class="sec2">
 
<?php foreach($data[0] as $value):?>
        
        <?php if($i%2==0 && $i!=0) : ?>
                </div>
                <div class="sec2"> 
        <?php endif ?>
       
        <div class="card">
        <div class="cs-1">
           <div class="nandd"> 
            <div class="name"><?=$data[0][$i]->name?></div>
            <div class="date"><?=$data[0][$i]->date?></div>
            </div>
            <div class="rating"><div class="stars">
                <?php for ($j = 0; $j < 5; $j++): ?>
                <?php if($j<$data[0][$i]->date):?> <span class="t1">★</span>
                <!-- <span class="t2">★</span> -->
                <?php else:?> <span class="t2">★</span>
                <?php endif;?>
                <?php endfor?>
            </div></div>
        </div>
        <div class="cs-2">
           <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut et sapiente veniam quaerat dolore odit magni voluptas quas error, eius totam natus ad, dolores voluptatibus expedita sunt recusandae, alias itaque!</p>
        </div>

    </div>
        
        <?php $i++; ?>
        <?php endforeach; ?>
    


   

</div>