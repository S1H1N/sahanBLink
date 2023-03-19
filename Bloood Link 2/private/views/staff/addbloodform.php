    <!-- ---------------------------------------------------------remove-------------------------------------------------------- -->
    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>
    
    <link rel="stylesheet" href="<?=ROOT?>/css/formstyle.css">

    <div class="heading">Add Blood</div>

    <div class="exnav">
        <div class="formpt">
            <form  method="post" class="postform" id="form">
                <div class="formcontrol">
                    <div class="q"><label for="">Blood Type:</label></div>
                    <div class="in"><input type="text" name="btype" id="btype"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>
                </div>
                   
                <div class="formcontrol">
                    <div class="q"><label for="">Blood Group:</label></div>
                    <div class="in"><input type="text" name="bgrp" id="bgrp"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Donated Date:</label></div>
                    <div class="in"><input type="date" name="ddate" id="ddate"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Exp Date:</label></div>
                    <div class="in dec"><input height="2rem" type="date" name="exdate" id="exdate"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
                    <div class="q"><label for="">Amount</label></div>
                    <div class="in"><input type="number" name="amnt" id="amnt"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        
                <div class="formcontrol">
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

                </div>
                <br>
        
                <button type="submit">Submit</button>
        
               
            </form>
        </div>
        
        
    </div>

    <script>
        const form=document.getElementById('form');
        const btype=document.getElementById('btype');
        const bgrp=document.getElementById('bgrp');
        const ddate=document.getElementById('ddate');
        const exdate=document.getElementById('exdate');
        const amnt=document.getElementById('amnt');
        const addby=document.getElementById('addby');
        const nic=document.getElementById('nic');
        const bbank=document.getElementById('bbank');
        



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
            const btypevalue=btype.value.trim();
            const bgrpvalue=bgrp.value.trim();
            const ddatevalue=ddate.value.trim();
            const exdatevalue=exdate.value.trim();
            const amntvalue=amnt.value.trim();
            const addbyvalue=addby.value.trim();
            const nicvalue=nic.value.trim();
            const bbankvalue=bbank.value.trim();

            var todaysDate = new Date();





            if(btypevalue== '') {
                seterrorfor(btype,'Blood type cannot be blank');
            } else {
                setsuccessfor(btype);
            }

            if(bgrpvalue== '') {
                seterrorfor(bgrp,'Blood group cannot be blank');
            } else {
                setsuccessfor(bgrp);
            }

            if(ddatevalue== '') {
                seterrorfor(ddate,'Donation Date cannot be blank');
            } else if ((new Date(ddatevalue).getTime())>(new Date().getTime())) {
                seterrorfor(ddate,'Enter valid Donation date');
            } else {
                setsuccessfor(ddate);

            }

            if(exdatevalue== '') {
                seterrorfor(exdate,'Exp Date cannot be blank');
            } else if ((new Date(exdatevalue).getTime())<(new Date().getTime())) {
                seterrorfor(exdate,'Enter valid Exp date');
            } else {
                setsuccessfor(exdate);

            }

            if(amntvalue== '') {
                seterrorfor(amnt,'Amount cannot be blank');
            } else {
                setsuccessfor(amnt);
            }

            if(addbyvalue== '') {
                seterrorfor(addby,'Added person cannot be blank');
            } else {
                setsuccessfor(addby);
            }

            if(nicvalue== '') {
                seterrorfor(nic,'NIC cannot be blank');
            } else {
                setsuccessfor(nic);
            }

            if(bbankvalue== '') {
                seterrorfor(bbank,'Bloodbank cannot be blank');
            } else {
                setsuccessfor(bbank);
            }

            // if(emailvalue== '') {
            //     seterrorfor(email,'Email cannot be blank');
            // } else if (!checkEmail(emailvalue)) {
            //     seterrorfor(email,'Enter valid Email');
            // }else {
            //     setsuccessfor(email);
            // }

            // if(pnovalue== '') {
            //     seterrorfor(pno,'PhoneNo cannot be blank');
            // } else if (pnovalue.length!=10){
            //     seterrorfor(pno,'Enter valid Number');
            // }else {
            //     setsuccessfor(pno);
            // }

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