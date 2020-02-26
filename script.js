


const displayBlockElem = document.getElementById("blockToDisplay");

function callRandomCitation() {
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

callRandomCitation();
//click du button
const citationButton = document.getElementById("myButton");
citationButton.addEventListener("click", callRandomCitation);








/* $('#myButton').on('click', function() {
    $('#blockToDisplay').load('injection.php');
   
  }) */


