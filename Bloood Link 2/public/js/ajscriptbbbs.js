
var res;
window.addEventListener("load", ()=>{
    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'http://localhost/Bloood%20Link%202/public/bbbsmanage', true);
  
    ajax.send();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        res =JSON.parse(this.responseText);
  
        console.log(res);

        var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["A+","A-","B+","B-","AB+","AB-","O+","O-"],
                        datasets: [{label:"RBC", 
                                    data: [res.rbc[0].sum,res.rbc[1].sum,res.rbc[2].sum,res.rbc[3].sum,res.rbc[4].sum,res.rbc[5].sum,res.rbc[6].sum,res.rbc[7].sum],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
                                    ]
                                    },{label:"WBC", 
                                        data: [res.wbc[0].sum,res.wbc[1].sum,res.wbc[2].sum,res.wbc[3].sum,res.wbc[4].sum,res.wbc[5].sum,res.wbc[6].sum,res.rbc[7].sum],
                                        backgroundColor: [
                                        'rgba(45, 49, 250, 1)'
                                    ]
                                    },{label:"Plasma", 
                                    data: [res.plt[0].sum,res.plt[1].sum,res.plt[2].sum,res.plt[3].sum,res.plt[4].sum,res.plt[5].sum,res.plt[6].sum,res.plt[7].sum],
                                    backgroundColor: [
                                        'rgba(93, 139, 244, 1)'
                                    ]
                                    },{label:"Platelettes", 
                                    data: [res.plsm[0].sum,res.plsm[1].sum,res.plsm[2].sum,res.plsm[3].sum,res.plsm[4].sum,res.plsm[5].sum,res.plsm[6].sum,res.plsm[7].sum],
                                    backgroundColor: [
                                        'rgba(144, 224, 255, 1)'
                                    ]
                                    }
                                ]
                        },
                        options: {
                            plugins:{
                                legend:{
                                    position:'bottom',
                                    labels: {
                                        font: {
                                            size: 17
                                        }
                                    }
                                    
                                }
                            // scales: {
                            // xAxes: [{
                            //     ticks: {
                            //     fontSize: 16,
                            //     fontWeight: 'bold'
                            //     }
                            // }]
                            // }
                        }
                        }}


                var barchart= new Chart(canvas, config)


                

                 

                  


  
      }
    };
  })

  