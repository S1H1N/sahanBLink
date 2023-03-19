<?php $this->view("includes/navbar",$data);?>
<link rel="stylesheet" href="<?=ROOT?>/css/addcamp.css">
<title>Add camp</title>
<div class="sec1">
    <h2 class="sec1-h">Campaigns</h2>
</div>
<div class="sec2">
    <div class="sec2-1">
        <form action="" enctype="multipart/form-data" method="post"class="file_form" id="addpic">



            <div class="form-item">
                <label for="cName" class="label1">Campaign Name</label><br>
                <input type="text" class="inp1" id="cName" name="cName" ><br>
            </div>

            <div class="form-item">
                <label for="date" class="label1">Date</label><br>
                <input type="date" class="inp1" id="date" name="date"><br>
            </div>
            <div class="form-item">
                <label for="venue" class="label1">Venue</label><br>
                <input type="text" class="inp1" id="venue" name="venue"><br>
            </div>
            <div class="form-item">
                <label for="email" class="label1">Email</label><br>
                <input type="text" class="inp1" id="email" name="email"><br>
            </div>
            <div class="form-item">
                <label for="phone" class="label1">Phone NO</label><br>
                <input type="text" class="inp1" name="phone" id="phone"><br>
            </div>
            <div class="form-item">
                <label for="time" class="label1">Starting Time</label><br>
                <input type="time" class="inp1" name="time" id="time"><br>
            </div>
            <div class="form-item">
                <label for="bloodBank" class="label1">Blood Bank</label><br>
                <input type="text" class="inp1" id="bloodBank" name="bloodBank"><br>
            </div>
            <div class="form-item">
                <label for="description" class="label1">Description</label><br>
                <textarea class="inp2" id="description" name="description"></textarea>
            </div>


       
    </div>
    <div class="sec2-2">
        
        <div class="add_camp_pic">

            

            <div class="file_form" >

              
                  
                    <input type="file" name="file" id="file" class="file">
                </label>
                <br>

                <!-- <button type="submit" class="save" name=submit>Add Photo</button> -->
            </div>
            </form>

        </div>

        <div class="sec2-btn">
            <button type="submit" form="addpic" class="addBtn" >Add</button>
        </div>


    </div>

</div>