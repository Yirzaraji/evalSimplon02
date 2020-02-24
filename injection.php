<?php
        
        error_reporting(-1);
        ini_set('display_errors', 'On');
        


        include ('database.php');
        connectdb();


 
                $req = $db->prepare('SELECT `id_citation`, `citation` 
                FROM `citation_kaamelot` ORDER BY RAND() LIMIT 1');
                $req->execute();

                while ($donnees = $req->fetch())

                {
                
                echo ''.$donnees['citation'].'';
              
                
                }
              


?>