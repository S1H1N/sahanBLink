function genPDF(){
    var img;
    html2canvas(document.getElementById("section")).then(
            function (canvas){
            img=canvas.toDataURL("image/png");
            var doc =new jsPDF('p', 'mm', 'a4');
            doc.text("Blood Link Report1!", 90, 5);

            doc.addImage(img,'PNG', -20, 15, 260, 0);
            doc.addPage();
            html2canvas(document.getElementById("section")).then(
                function (canvas){
                var img2=canvas.toDataURL("image/png");
                
                doc.text("Blood Link Report2!", 90, 5);

                doc.addImage(img2,'PNG', -20, 15, 260, 0);
                
                
    
                doc.save('report.pdf');
    
    });
            

            // doc.save('report.pdf');

});
    
    // doc.text("Blood Link Report!", 90, 5);
    
    
}






function generatePDF() {
  // Create a new jsPDF object
  var doc = new jsPDF();

  // Loop through each div element
  var divs = document.getElementById('section');
  
    var html = divs.innerHTML;
    var style = window.getComputedStyle(divs);
    var fontSize = parseInt(style.getPropertyValue('font-size'));
    var fontStyle = style.getPropertyValue('font-style');
    doc.setFontSize(fontSize).setFontStyle(fontStyle);


    // Add the HTML content to the PDF
    doc.fromHTML(html);
    
    // Add a page break after each div (except the last one)
    
  

  // Save the PDF document
  doc.save('document.pdf');
}

