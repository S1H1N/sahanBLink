<?php $this->view("includes/navbar", ); ?>
<title>Where to Donate?</title>
<?php $i=0?>
<link rel="stylesheet" href="<?= ROOT ?>/css/wheretodonate.css">

<div class="sec1">
    <h1>Become a Donor</h1>
</div>

<div class="sec2">
<a class="a" href="<?=ROOT?>/becomeadonor">Ways to Donate Blood</a>
    <a class="a" href="<?=ROOT?>/becomeadonor?click=amieligible">Am I Eligible?</a>
    <a class="a1" href="<?=ROOT?>/becomeadonor?click=wheretodonate">Where to Donate</a>
    <a class="a" href="<?=ROOT?>/becomeadonor?click=whendonating">What to Expect When Donating?</a>
    <a class="a" href="<?=ROOT?>/becomeadonor?click=beforedonate">Before you Donate</a>
    <a class="a" href="<?=ROOT?>/becomeadonor?click=afterdonate">After you Donate</a>
</div>

<div class="sec3">
    <div class="sec3-h">
        <p>You can donate blood by going to any blood bank or any <a href="<?= ROOT ?>/campaigns"> campaign</a> near your
            area. </p>
    </div>
    <div class="sec3-h">
        <h>Our Blood Banks </h>
    </div>
</div>

<div class="sec4">

<?php foreach($data[0] as $value):?>
            
            <?php if($i%3==0 && $i!=0) : ?>
                    </div>
                    <div class="sec4"> 
            <?php endif ?>

<div class="card">
    <div class="loc-logo">
    <img src="<?=ROOT?>/images/location.png" alt="">
    </div>
    <div class="info">
        <div class="bname">Colombo Blood Bank</div>
        <div class="baddress1">555 Elvitigala Mawatha,</div>
        <div class="baddress2">Colombo 5</div>
        <div class="btel">Tel : 0112848134</div>
    </div>

</div>
<?php $i++; ?>
            <?php endforeach; ?>
            </div>


</div>


