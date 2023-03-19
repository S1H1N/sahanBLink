<?php $this->view("includes/navbar",); ?>
<link rel="stylesheet" href="<?=ROOT?>/css/contactus.css">
<title>Contact Us</title>
<?php
 

if (Auth::logged_in()) {
    $user=new User();
    $id2 = Auth::getid();


    $data = $user->where("id", $id2);
}
// $data = $data[0];

        ?>
<div class="sec1">
    <h1>Contact Us</h1>
</div>

<div class="sec2">
    <h3>We’ll love to hear from you</h3>
    <p>Please fill out the form below and one of our friendly team members will be in touch with you.</p>
</div>



<div class="sec3">
    <form method="post" class="contact-form">
        <div class="formitem"><label for="fname">Full Name</label><br>
        <input class="inp1" type="text" name="fullname" id="fname" value="<?php echo (Auth::logged_in()) ? $data[0]->fullname : ""; ?>"><br></div>
       
        <div class="formitem"><label for="fname">Phone Number</label><br>
        <input class="inp1" type="text" name="phone" id="fname" value="<?php echo (Auth::logged_in()) ? $data[0]->mobile : "";?>"><br></div>
        <div class="formitem"><label for="fname">Email</label><br>
        <input class="inp1" type="text" name="email" id="fname" value="<?php echo (Auth::logged_in()) ? $data[0]->email: ""; ?>"><br></div>
        <div class="formitem"><label for="fname">Subject</label><br>
        <input class="inp1" type="text" name="subject" id="fname"><br></div>
        <div class="formitem"><label for="fname">Feedback</label><br>
        <textarea class="inp2" name="feedback" id="fname"></textarea><br></div>
        <button class="btn">Submit</button>
    </form>
</div>
