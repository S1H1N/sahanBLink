<?php $this->view('pageinit'); ?>
<link rel="stylesheet" href="<?=ROOT?>/css/reportstyle.css">


<script src="<?=ROOT?>/scripts/genrep2.js"></script>  


<div class="section" id="section">



    <div class="navbar">        <!--navbar-->

        <div class="nleft">

            <div class="imge"><img src="<?=ROOT?>/img/Logo.png" class="logo"></div>
            <div class="vbar">
            <!-- <img class="blackline">-->
            </div>
            <div class="blinkphi">

                <div class="blink">BloodLink</div>
                

            </div>
        </div>
        <div class="nright">
            Date:  <?= date('Y-m-d')?>
        </div>
    </div>
    <div class="content">
        <div class="ttl">
            Blood Donation Camp Report-Year <?=date('Y')?>
        </div>
        <div class="campname g">
            camp name
        </div>
        <div class="campdate g">
            camp date
        </div>
        <div class="location g">
            location
        </div>
        <div class="bloodbank g">
            bloodbank
        </div>
        <div class="docid g">
            assigned doctor
        </div>
        <div class="stat">
            Statistics
        </div>
        <div class="noofdonation g">
            No of Donations
        </div>
        <div class="noofdonors g">
        No of Donations

        </div>
        <div class="noofaccept g">
        No of Donations

        </div>
        <div class="noofreject g">
        No of Donations

        </div>
        <div class="bldamount g">
        No of Donations

        </div>
        <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
            </div>


    </div>
                <button  class="subbtn sp" onclick="genPDF()">pdf</button>

</div>

<script>
    var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["A+","A-","B+","B-","AB+","AB-","O+","O-"],
                        datasets: [{label:"RBC", 
                                    data: [2,2,2,2,2,2,2,2],
                                    backgroundColor: [
                                        'rgba(77, 77, 77, 1)'
                                        
                                    ]
                                    },{label:"WBC", 
                                        data: [2,2,2,2,2,2,2,2],
                                        backgroundColor: [
                                        'rgba(64, 64, 64, 1)'
                                    ]
                                    },{label:"Plasma", 
                                    data: [2,2,2,2,2,2,2,2],
                                    backgroundColor: [
                                        'rgba(51, 51, 51, 1)'
                                    ]
                                    },{label:"Platelettes", 
                                    data: [2,2,2,2,2,2,2,2],
                                    backgroundColor: [
                                        'rgba(38, 38, 38,1)'
                                    ]
                                    }
                                ]
                        }
                        
                        }


                var barchart= new Chart(canvas, config)

</script>
