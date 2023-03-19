
var res;
window.addEventListener("load", ()=>{
    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'http://localhost/Bloood%20Link%202/public/bsmanage', true);
  
    ajax.send();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        res =JSON.parse(this.responseText);
  
        console.log(res.rbc[0].Ap);

        var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["A+","A-","B+","B-","AB+","AB-","O+","O-"],
                        datasets: [{label:"RBC", 
                                    data: [res.rbc[0].Ap,res.rbc[0].Am,res.rbc[0].Bp,res.rbc[0].Bm,res.rbc[0].ABp,res.rbc[0].ABm,res.rbc[0].Op,res.rbc[0].Om],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
                                    ]
                                    },{label:"WBC", 
                                        data: [res.wbc[0].Ap,res.wbc[0].Am,res.wbc[0].Bp,res.wbc[0].Bm,res.wbc[0].ABp,res.wbc[0].ABm,res.wbc[0].Op,res.rbc[0].Om],
                                        backgroundColor: [
                                        'rgba(45, 49, 250, 1)'
                                    ]
                                    },{label:"Plasma", 
                                    data: [res.wbc[0].Ap,res.plt[0].Am,res.plt[0].Bp,res.plt[0].Bm,res.plt[0].ABp,res.plt[0].ABm,res.plt[0].Op,res.plt[0].Om],
                                    backgroundColor: [
                                        'rgba(93, 139, 244, 1)'
                                    ]
                                    },{label:"Platelettes", 
                                    data: [res.wbc[0].Ap,res.plsm[0].Am,res.plsm[0].Bp,res.plsm[0].Bm,res.plsm[0].ABp,res.plsm[0].ABm,res.plsm[0].Op,res.plsm[0].Om],
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

  