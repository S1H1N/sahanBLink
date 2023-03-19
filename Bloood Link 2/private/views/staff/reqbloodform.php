
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/brkbldstyle.css">
    <style>
       
    </style>
    
    <title>Add New Camp</title>
</head>
<body>
    <div class="nav">
        <div class="navbar">

            <div class="nleft">

                <div class="imge"><img src="./img/Logo.png" class="logo"></div>
                <div class="vbar"></div>
                <div class="blinkphi">

                    <div class="blink">BloodLink</div>
                    <div class="phi"><u><?=$_SESSION['USER']->role;?></u></div>

                </div>
            </div>

            <div class="nright">
                <div class="icon"><a href="logout" ><img src="./img/shut.png" class="shut"></a></div>
                <div class="name"><h4>Welcome! <?=$_SESSION['USER']->uid;?></h4></div>
            </div>

        </div>
    </div>

    <div class="heading">Partition Blood</div>

    <div class="exnav">
        
        <div class="formpt">
            <form method="post" id="form">
                <div class="formpt1">
                <div class="formcontrol">
                    <div class="q"><label for="">Doctor ID:</label></div>
                    <div class="in"><input type="text" name="location" id="loc" value="<?php $_SESSION['USER']->name?>"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                    <div class="q"><label for="">Blood Bank:</label></div>
                    <div class="in"><input type="text" name="location" id="loc" value="<?php $_SESSION['USER']->name?>"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
                </div>
                <br>
            </form>
        </div>
        
        
    </div>

    <script>
        const form=document.getElementById('form');
        const cname=document.getElementById('cname');
        const date=document.getElementById('date');
        const loc=document.getElementById('loc');
        const desc=document.getElementById('desc');
        const time=document.getElementById('time');
        const bbank=document.getElementById('bbank');
        const email=document.getElementById('email');
        const pno=document.getElementById('pno');



        var valid=true;


        form.addEventListener('submit',(e)=>{
            valid=true;

            e.preventDefault();
            checkinputs();
            if(valid===true) {
                form.submit();
            }
        })

        async function checkinputs() {
            const cnamevalue=cname.value.trim();
            const datevalue=date.value.trim();
            const locvalue=loc.value.trim();
            const descvalue=desc.value.trim();
            const timevalue=time.value.trim();
            const bbankvalue=bbank.value.trim();
            const emailvalue=email.value.trim();
            const pnovalue=pno.value.trim();

            var todaysDate = new Date();





            if(cnamevalue== '') {
                seterrorfor(cname,'CampName cannot be blank');
            } else {
                setsuccessfor(cname);
            }

            if(datevalue== '') {
                seterrorfor(date,'Date cannot be blank');
            } else if ((new Date(datevalue).getTime())<(new Date().getTime())) {
                seterrorfor(date,'Enter valid date');
            } else {
                setsuccessfor(date);

            }

            if(locvalue== '') {
                seterrorfor(loc,'Location cannot be blank');
            } else {
                setsuccessfor(loc);
            }

            if(descvalue== '') {
                seterrorfor(desc,'Description cannot be blank');
            } else {
                setsuccessfor(desc);
            }

            if(timevalue== '') {
                seterrorfor(time,'Time cannot be blank');
            } else {
                setsuccessfor(time);
            }

            if(bbankvalue== '') {
                seterrorfor(bbank,'Bloodbank cannot be blank');
            } else {
                setsuccessfor(bbank);
            }

            if(emailvalue== '') {
                seterrorfor(email,'Email cannot be blank');
            } else if (!checkEmail(emailvalue)) {
                seterrorfor(email,'Enter valid Email');
            }else {
                setsuccessfor(email);
            }

            if(pnovalue== '') {
                seterrorfor(pno,'PhoneNo cannot be blank');
            } else if (pnovalue.length!=10){
                seterrorfor(pno,'Enter valid Number');
            }else {
                setsuccessfor(pno);
            }

        }

        function seterrorfor(input,message) {
            const formcontrol=input.parentElement.parentElement;
            const small=formcontrol.querySelector('small');

            small.innerText=message;

            formcontrol.className= 'formcontrol error';

            valid=false;

        }

        function setsuccessfor(input) {
            const formcontrol=input.parentElement.parentElement;
            formcontrol.className= 'formcontrol success'

        }

        function checkEmail(email) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        }

    </script>
    
</body>
</html>