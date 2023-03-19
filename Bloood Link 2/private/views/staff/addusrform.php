
    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/formstyle.css">

    <div class="heading">Add Users</div>

    <div class="exnav">
        <div class="formpt">
            <form  method="post" class="postform" id="form">
                <div class="formcontrol">
                    <div class="q"><label for="">Name:</label></div>
                    <div class="in"><input type="text" name="uname" id="uname"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>
                </div>
                   
                <div class="formcontrol">
                    <div class="q"><label for="">User ID:</label></div>
                    <div class="in"><input type="text" name="uid" id="uid"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>

                <div class="formcontrol">
                    <div class="q"><label for="">Role:</label></div>
                    <div class="in"><input type="text" name="role" id="role"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>

                <div class="formcontrol">
                    <div class="q"><label for="">NIC</label></div>
                    <div class="in"><input type="text" name="nic" id="nic"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Email:</label></div>
                    <div class="in"><input type="email" name="email" id="email"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Tel No:</label></div>
                    <div class="in dec"><input  type="text" name="pno" id="pno"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Password:</label></div>
                    <div class="in"><input type="text" name="psswrd" id="psswrd"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <!-- <div class="formcontrol">
                    <div class="q"><label for="">Added by:</label></div>
                    <div class="in"><input type="text" name="addby" id="addby"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">NIC</label></div>
                    <div class="in"><input type="text" name="nic" id="nic"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Blood Bank:</label></div>
                    <div class="in"><input type="text" name="bbank" id="bbank"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div> -->
                <br>
        
                <button type="submit">Submit</button>
        
               
            </form>
        </div>
        
        
    </div>

    <script>
        const form=document.getElementById('form');
        const uname=document.getElementById('uname');
        const uid=document.getElementById('uid');
        const role=document.getElementById('role');
        const email=document.getElementById('email');
        const pno=document.getElementById('pno');
        const psswrd=document.getElementById('psswrd');
        // const addby=document.getElementById('addby');
        const nic=document.getElementById('nic');
        // const bbank=document.getElementById('bbank');
        



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
            
            const unamevalue=uname.value.trim();
            const uidvalue=uid.value.trim();
            const rolevalue=role.value.trim();

            const emailvalue=email.value.trim();
            const pnovalue=pno.value.trim();
            const psswrdvalue=psswrd.value.trim();
            const nicvalue=nic.value.trim();
            // const bbankvalue=bbank.value.trim();

            // var todaysDate = new Date();





            if(unamevalue== '') {
                seterrorfor(uname,'User name cannot be blank');
            } else {
                setsuccessfor(uname);
            }

            if(uidvalue== '') {
                seterrorfor(uid,'UID cannot be blank');
            } else {
                setsuccessfor(uid);
            }

            if(rolevalue== '') {
                seterrorfor(role,'Role cannot be blank');
            } else {
                setsuccessfor(role);
            }

            if(psswrdvalue== '') {
                seterrorfor(psswrd,'Password cannot be blank');
            } else if (psswrdvalue.length<8) {
                seterrorfor(psswrd,'Enter long password');
            } else {
                setsuccessfor(psswrd);

            }

            // if(exdatevalue== '') {
            //     seterrorfor(exdate,'Exp Date cannot be blank');
            // } else if ((new Date(exdatevalue).getTime())<(new Date().getTime())) {
            //     seterrorfor(exdate,'Enter valid Exp date');
            // } else {
            //     setsuccessfor(exdate);

            // }

            // if(amntvalue== '') {
            //     seterrorfor(amnt,'Amount cannot be blank');
            // } else {
            //     setsuccessfor(amnt);
            // }

            // if(addbyvalue== '') {
            //     seterrorfor(addby,'Added person cannot be blank');
            // } else {
            //     setsuccessfor(addby);
            // }

            if(nicvalue== '') {
                seterrorfor(nic,'NIC cannot be blank');
            } else {
                setsuccessfor(nic);
            }

            // if(bbankvalue== '') {
            //     seterrorfor(bbank,'Bloodbank cannot be blank');
            // } else {
            //     setsuccessfor(bbank);
            // }

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