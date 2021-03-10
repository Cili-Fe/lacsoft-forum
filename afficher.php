<?php
    require_once'config.php';
?>


<?php


    $insert = $bdd->prepare('SELECT * FROM publication ORDER BY nom ASC');

    //Execution de la requête préparée

     $insertIsOk = $insert->execute();

    //Récupération des résultats en une seule fois

    $contact = $insert->fetchAll();

    // var_dump($contact);
?>
