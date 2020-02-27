


const displayBlockElem = document.getElementById("blockToDisplay");

function generer_citation() {
   //le symbole $ signifie jquery :) 
  $.ajax({
    method: "GET",
    url: "injection.php"
  })
  //.done est lié a jquery ref la doc
    .done(function(maResponse) {
      //console.log(response);

      displayBlockElem.innerHTML = maResponse;
    })
   
}

generer_citation();
//click du button
const citationButton = document.getElementById("myButton");
citationButton.addEventListener("click", generer_citation);








/* $('#myButton').on('click', function() {
    $('#blockToDisplay').load('injection.php');
   
  }) */


