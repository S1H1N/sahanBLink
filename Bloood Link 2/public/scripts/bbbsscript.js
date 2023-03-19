var canvas = document.getElementById("chart");
                var config = {
                type: "bar",
                data: {labels: ["A+","A-","B+","B-","AB+","AB-","O+","O-"],
                        datasets: [{label:"RBC", 
                                    data: [45,33,77,67,35,77,88,96],
                                    backgroundColor: [
                                        'rgba(5, 19, 103, 1)'
                                        
                                    ]
                                    },{label:"WBC", 
                                        data: [34,65,88,88,43,65,56,87],
                                        backgroundColor: [
                                        'rgba(45, 49, 250, 1)'
                                    ]
                                    },{label:"Plasma", 
                                    data: [78,24,55,50,67,61,54,98],
                                    backgroundColor: [
                                        'rgba(93, 139, 244, 1)'
                                    ]
                                    },{label:"Platelettes", 
                                    data: [32,98,46,77,65,78,43,99],
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
                                            size: 17,
                                            
                                        }
                                    }
                                }
                            
                        },
                        scales: {
                            x:{
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        size: 17,
                                        
                                    }
                                }
                            }
                        }
                        }}


                var barchart= new Chart(canvas, config)