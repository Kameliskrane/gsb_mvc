
<div id="contenu">
      <h2>Validation des fiches de frais</h2>
      <h3>Visiteur et mois à sélectionner </h3>
      <form action="index.php?uc=etatFrais&action=obtenirFicheFrais" method="post">
          
      <div class="corpsForm">
          <input type="hidden" name="etape" value="validerConsult" />
       <p>
        <label for="lstVis">Visiteur : </label>
        <select id="lstVis" name="lstVis" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
            <?php 
                $pdo->getVisiteurs(); //Affiche tous les visiteurs
              if(isset($id)){
                    $pdo->getCurrentVisiteurs($id);//Affiche le visiteur actuellement selectionne
                }
            ?>
        </select>
      </p>
      
      <p>
        <label for="lstMois">Mois : </label>
        <select id="lstMois" name="lstMois" title="Sélectionnez le mois souhaité pour la fiche de frais">
            <?php
                // Affiche les 6 derniers mois
                $m = array('','Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
            for($i = 1;$i<7;$i++){
                $dat = mktime(0, 0, 0, date("m") - $i, date("d"), date("Y")); //temps en secondes depuis 1 janvier 1970 jusqu'a date actuelle-1 mois

                $date = date("n-Y", $dat); //date actuelle (mois-année)

                $decoupe = explode('-', $date); //découpe le mois et l'année(mois    !   année)

                $d=$decoupe[0]; //$d reçoit le mois
                ?>
            <option value="<?php echo $decoupe[1];                             //affiche année(ex : 2017)                                               |
                                                if($decoupe[0]<10){                        //si mois<10 alors on affiche un zéro (ex : 20170)                |
                                                    echo"0";                                 //                                                                                       | <--  affiche value
                                                }                                               //                                                                                         |
                                               echo $decoupe[0]; ?>"><?php //affiche mois, si mois<10 alors on a ex :  201709 sinon 201710 |
            echo $m[$d].'  '.$decoupe[1];  //affiche le mois en lettres à l'indice $d du tableau $m définie plus haut puis suivi de l'année
            ?>
                </option>
            <?php
            }
             if(isset($mois)){?>
                      <option selected="selected" value="<?php echo $mois; ?>"><?php echo obtenirLibelleMois(intval(substr($mois,4,2))) . " " . substr($mois,0,4);?></option>
  <?php }
  ?>
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20"
               title="Demandez à consulter cette fiche de frais" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
