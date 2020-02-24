 <!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <title>Eval SImplon 02</title>
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
      
</head>

    <body>



<div class="superContain">

        
        <form action="index.php" method="post">
            <button id="myButton" type="submit" name="citationRand" class="btn btn-dark">
            Generer Citation</button><br>
        </form>
        
            <?php
        
        error_reporting(-1);
        ini_set('display_errors', 'On');
        


        include ('database.php');
        connectdb();




            if(isset($_POST['citationRand'])){
        
                $req = $db->prepare('SELECT `id_citation`, `citation` 
                FROM `citation_kaamelot` ORDER BY RAND() LIMIT 1');
                $req->execute();

                while ($donnees = $req->fetch())

                {
                
                echo '<p>'.$donnees['citation'].'</p>';
                //var_dump($donnees['citation']);
                
                }
            };


        ?>

</div><!--  FIN CONTAIN -->




   
   


    
    </body>

</html>


</body>

</html>