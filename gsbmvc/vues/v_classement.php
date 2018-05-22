<div id="classement">
    <h1>Voici le classement des utilisateurs par ordre croissant:</h1><br/>
    <?php
    ?> <body> <table> <tr> <th><div style="padding:3px; background-color:#e0e0e0;"> NOM </div></th> 
                <th><div style="padding:3px; background-color:#e0e0e0;"> PRENOM </div></th> 
                <th><div style="padding:3px; background-color:#e0e0e0;"> MONTANT VALIDER</div> </th> 
            </tr> <?php
            foreach ($_SESSION['TabClassement'] as $key) {
                $_SESSION['IdUserDetail'] = $key['id'];
                ?>  <tr><td><?php echo $key['nom']; ?> </td> 
                    <td><?php echo $key['prenom']; ?> </td>
                    <td><?php echo $key['SUM(fichefrais.montantValide)']; ?> </td>
                    <td><a href="index.php?uc=etatFrais&action=DetailStatistique&idUser=<?php echo $_SESSION['IdUserDetail']; ?>&nom=<?php echo $key['nom']; ?>&prenom=<?php echo $key['prenom']; ?>&montanttotal=<?php echo $key['SUM(fichefrais.montantValide)']; ?>" title="Detail statistique">Detail</a></td>

                </tr>  <?php
            }
            ?>  </body> <?php
            ?>
</div>
