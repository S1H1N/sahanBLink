// var ajax = new XMLHttpRequest();
// ajax.open('GET', 'http://localhost/mvcsahan/public/ajax', true);

// ajax.send();

// ajax.onreadystatechange = function() {
//   if (this.readyState === 4 && this.status === 200) {
//     var res =JSON.parse(this.responseText);
//     // let data = res.data;
//     // let data2 = res.data2;

//     console.log(res);
//   }
// };

$.ajax({
  type: 'GET',
  url: "http://localhost/mvcsahan/public/ajax",
  
  success: function(response) {
    let data = JSON.parse(response);

    // do something with the data
    console.log(data);
  }
});