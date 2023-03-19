
    <?php $this->view('pageinit'); ?>

    <?php $this->view('navup'); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/brkbldstyle.css">
   

    <div class="heading">Partition Blood</div>

    <div class="exnav">
        <form method="post" id="form">

            <div class="upper">
                <div class="left">
                    <div class="formcontrol">
                            <div class="q"><label for="BloodCode">BloodCode:</label></div>
                            <div class="in"><input type="text" name="BloodCode" id="BloodCode" readonly value=<?= $dat['id']."F" ?> ><i class="fa-solid fa-circle-check" ></i><i class="fa-solid fa-circle-exclamation"></i></div>
                            <div class="sma"><small>ss</small></div>

                    </div>
                    
                </div>

                <div class="right">
                    <div class="formcontrol">
                                <div class="q"><label for="BloodGroup">BloodGroup:</label></div>
                                <div class="in"><select name="BloodGroup" id="BloodGroup">
                                    <option class="bbopt1" value=""></option>
                                    <option class="bbopt" value="A+">A+</option>
                                    <option class="bbopt" value="A-">A-</option>
                                    <option class="bbopt" value="B+">B+</option>
                                    <option class="bbopt" value="B-">B-</option>
                                    <option class="bbopt" value="AB+">AB+</option>
                                    <option class="bbopt" value="AB-">AB-</option>
                                    <option class="bbopt" value="O+">O+</option>
                                    <option class="bbopt" value="O-">O-</option>
                                    </select>
                                    <i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <div class="sma"><small>ss</small></div>

                    </div>  
                </div>

            </div>

            <div class="dashline">
                
            </div>

            <div class="lower">
                <div class="formcontrol">
                                <div class="q"><label for="RBCamount">RBC:</label></div>
                                <div class="in"><input type="number" name="RBCamount" id="RBCamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                                <div class="q"><label for="WBCamount">WBC:</label></div>
                                <div class="in"><input type="number" name="WBCamount" id="WBCamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                                <div class="q"><label for="PLTamount">Platelettes:</label></div>
                                <div class="in"><input type="number" name="PLTamount" id="PLTamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>
                <div class="formcontrol">
                                <div class="q"><label for="PLSMamount">Plasma:</label></div>
                                <div class="in"><input type="number" name="PLSMamount" id="PLSMamount"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                                <div class="sma"><small>ss</small></div>

                </div>

                <button type="submit">Submit</button>

            </div>

        </form>
        <!-- <div class="formpt">
            <form method="post" id=>
                <div class="formcontrol">
                    <div class="q"><label for="">Location</label></div>
                    <div class="in"><input type="text" name="location" id="loc"><i class="fa-solid fa-circle-check"></i><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="sma"><small>ss</small></div>

                </div>
        </div> -->
        
    </div>

    <script>
        const form=document.getElementById('form');
        const BloodCode=document.getElementById('BloodCode');
        const BloodGroup=document.getElementById('BloodGroup');
        const RBCamount=document.getElementById('RBCamount');
        const WBCamount=document.getElementById('WBCamount');
        const PLTamount=document.getElementById('PLTamount');
        const PLSMamount=document.getElementById('PLSMamount');
        // const email=document.getElementById('email');
        // const pno=document.getElementById('pno');



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
            const BloodCodevalue=BloodCode.value.trim();
            const BloodGroupvalue=BloodGroup.value.trim();
            const RBCamountvalue=RBCamount.value.trim();
            const WBCamountvalue=WBCamount.value.trim();
            const PLTamountvalue=PLTamount.value.trim();
            const PLSMamountvalue=PLSMamount.value.trim();
            // const emailvalue=email.value.trim();
            // const pnovalue=pno.value.trim();

            // var todaysDate = new Date();
            const rbcint=parseInt(RBCamountvalue);
            const wbcint=parseInt(WBCamountvalue);
            const pltint=parseInt(PLTamountvalue);
            const plsmint=parseInt(PLSMamountvalue);







            if(BloodCodevalue== '') {
                seterrorfor(BloodCode,'BloodCode cannot be blank');
            } else {
                setsuccessfor(BloodCode);
            }

            // if(datevalue== '') {
            //     seterrorfor(date,'Date cannot be blank');
            // } else if ((new Date(datevalue).getTime())<(new Date().getTime())) {
            //     seterrorfor(date,'Enter valid date');
            // } else {
            //     setsuccessfor(date);

            // }

            if(BloodGroupvalue== '') {
                seterrorfor(BloodGroup,'BloodGroup cannot be blank');
            } else {
                setsuccessfor(BloodGroup);
            }

            if(RBCamountvalue== '') {
                seterrorfor(RBCamount,'RBC amount cannot be blank');
            } else {
                setsuccessfor(RBCamount);
            }

            if(WBCamountvalue== '') {
                seterrorfor(WBCamount,'WBC amount cannot be blank');
            } else {
                setsuccessfor(WBCamount);
            }

            if(PLTamountvalue== '') {
                seterrorfor(PLTamount,'Platelettes amount cannot be blank');
            } else {
                setsuccessfor(PLTamount);
            }

            if((rbcint+wbcint+pltint+plsmint)>450) {
                seterrorfor(PLSMamount,'cant exceed 450');
                seterrorfor(PLTamount,'cant exceed 450');
                seterrorfor(WBCamount,'cant exceed 450');
                seterrorfor(RBCamount,'cant exceed 450');


            } else {
                setsuccessfor(PLSMamount);
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

        // function checkEmail(email) {
        //     return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        // }

    </script>
    
</body>
</html>