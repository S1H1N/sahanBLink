    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/formstyle.css">


    <div class="heading">Add Campaigns</div>

    <div class="exnav">
        <div class="formpt">
            <form method="post" class="postform" id="form">
                <div class="formcontrol">
                    <div class="q"><label for="">Campaign Name</label></div>
                    <div class="in"><input type="text" name="name" id="cname"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>
                </div>
                   
                <div class="formcontrol">
                    <div class="q"><label for="">Date</label></div>
                    <div class="in"><input type="date" name="date" id="date"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Location</label></div>
                    <div class="in"><input type="text" name="location" id="loc"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Description</label></div>
                    <div class="in dec"><input height="2rem" type="text" name="desc" id="desc"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Time</label></div>
                    <div class="in"><input type="time" name="time" id="time"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Blood Bank</label></div>
                    <div class="in"><input type="text" name="bloodbank" id="bbank"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Email</label></div>
                    <div class="in"><input type="text" name="email" id="email"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Phone Number</label></div>
                    <div class="in"><input type="text" name="pno" id="pno"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
                <br>
        
                <button type="submit">Submit</button>
        
               
            </form>
        </div>
        <div class="imgpt">
            <div class="imgbox"></div>
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