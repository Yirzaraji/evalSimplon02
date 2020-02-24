


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

      displayBlockElem.innerText = maResponse;
    })
   
}

//writeNewRandomJoke();
//click du button
const citationButton = document.getElementById("myButton");
citationButton.addEventListener("click", callRandomCitation);








/* $('#myButton').on('click', function() {
    $('#blockToDisplay').load('injection.php');
   
  }) */
  //Endroit ou on inner



/* const theButton = document.getElementById('myButton');

theButton.addEventListener("click", function() {


   
    const displayIt = document.getElementById("blockToDisplay");

    displayIt.style.display = "block";

    
});
 */
/* 
const theButton = document.getElementById('myButton');

theButton.addEventListener("click", function() {

   let div=document.getElementById("blockToDisplay");
    //let thedataphp = div.dataset.test;

    //document.write(thedataphp);

    div.style.display = "none";
   
    

    
});
 */

/* 
$('div').click(function(event){
          
    $.ajax({
         dataType: "html",            
         type: "POST",
         url: "index.php",

        success: function(result)//retour de requête
         {
             alert("Record successfully updated");
         }
     });
return false;
}) */


