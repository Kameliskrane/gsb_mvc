

<body> <p><h2> Voici la liste des details des montant de : <strong> <?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?> </strong>, ayant un total de <strong><?php echo $_SESSION['montantTotal']; ?> </strong></h2>
    <table> <tr> <th><div style="padding:3px; background-color:#e0e0e0;"> MOIS </div></th> 
            <th><div style="padding:3px; background-color:#e0e0e0;"> Nombre de justificatifs </div></th> 
            <th><div style="padding:3px; background-color:#e0e0e0;"> MONTANT VALIDER</div> </th> 
            <th><div style="padding:3px; background-color:#e0e0e0;"> Date de modification </div> </th> 
            <th><div style="padding:3px; background-color:#e0e0e0;"> Etat</div> </th> 
        </tr>
        <?php
        foreach ($_SESSION['LesDetailDuClassement'] as $unDatailDuClassement) {
            ?>
        <tr> <th><?php echo $unDatailDuClassement['mois'] ; ?></th>
            <th><?php echo $unDatailDuClassement['nbJustificatifs'] ; ?></th>
            <th><?php echo $unDatailDuClassement['montantValide'] ; ?></th>
            <th><?php echo $unDatailDuClassement['dateModif'] ; ?></th>
            <th><?php echo $unDatailDuClassement['idEtat'] ; ?></th> </tr>
            
            
            <?php }
            $_SESSION['nom'] = $_GET['nom'];
            $_SESSION['prenom'] = $_GET['prenom'];
            $_SESSION['montantTotal'] = $_GET['montanttotal'];
            ?>



    </table></body>