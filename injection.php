<?php
        
        error_reporting(-1);
        ini_set('display_errors', 'On');
        


        include ('database.php');
        connectdb();


 
                $req = $db->prepare('SELECT `id_citation`, `citation`, `avatar`, `Acteur`, `Saison`, `Episode` FROM `citation_kaamelot` ORDER BY RAND() LIMIT 1');
                $req->execute();

                while ($donnees = $req->fetch())

                {
                
                $avatar = $donnees['avatar'];
                //cette syntaxe est petée
        
                ?>

                        <div class="avatar_img">
                                <!-- Lien de l'image ecrit en dur dans la DB -->
                                <div id="avatar"><img src=<?php echo $avatar ?>></div>
                        </div>

                        <div class="data_db_txt">
                               <p><?php echo $donnees['citation']?></p>

                                <p><?php echo $donnees['Acteur']?><br>

                                <?php echo $donnees['Saison']?><br>

                                <?php echo $donnees['Episode']?></p>  
                        </div>
               <?php 


                }/* FIN FETCH LOOP */
              


                ?>