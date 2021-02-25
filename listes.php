<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="styles/liste.css">
    <title>Document</title>
</head>
<body>
    
<div class="container-fluid bg-danger entete">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3 mt-3">
                <img src="images/lacsoft.png" alt="" width="90%" height="100px">
            </div>
            <div class="col-lg-6 offset-lg-3   mt-5 ">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Forum</button>
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                        <div class="btn-group ml-4 ">
                        <button type="button" class="btn btn-outline-primary  dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compte</button>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        </div>
                        </li>
                        <li class="nav-item">
                        <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Commentaire</button>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          </li>
                          <li class="nav-item">
                          <button type="button" class="btn btn-outline-primary ml-4">Deconnexion</button>
                          </li>
                        </ul>
                      </div>
                  </nav>
            </div>
        </div>
    </div>
 </div>

<!-- <form action="" method="POST">
            <input type="text" name="searcharea" id="myInput"  placeholder="Rechercher">
            <button type="submit" name="search" value="submit">Rechercher</button>
    </form>-->
<?php  /*

    require_once "config.php";

    $requete = ("SELECT nom, prenom, email FROM users ORDER BY nom");
    $result = $bdd->query($requete);
    if($result){
        $nombre=$result->rowCount();
    } else{
        echo "reccuperation,erreur";
    }

    <table class="tableau-style">
        <thead class="">
            <tr>
                <th>Nom </th>
                <th> Prenom</th>
                <th> E-mail</th>
                <th>Suppression</th>
                <th>Modifier</th>
                
                <th>Detail</th>
                <th>Avatar</th>
            </tr>
        </thead>
  
   
  /* while($ligne= $result->fetch(PDO::FETCH_NUM)){
       echo "<tr>";
       foreach ($ligne as $valeur) {
        echo "<td>$valeur</td>";
       }
       echo "<td><a href="">Supprimer</a></td>";
       echo "</tr>";
   }*/
 // $result->closeCursor();
 /*if(!isset($_POST['search']))
 {
    while($ligne= $result->fetch()){
        echo "<tr>"; 
            echo "<td>".$ligne[0]."</td>";
            echo "<td>".$ligne[1]."</td>";
            echo "<td>".$ligne[2]."</td>";
            echo "<td><a class='btn btn-danger'  onclick='return confirm(\"vraiment?\")' href='delete_admin.php?id=$ligne[0]';>Supprimer</a>";
            echo "<td><a class='btn btn-primary'  href='reset_acount.php?id= ".$ligne[0].  "';>Modifier</a></td>";
            echo "<td><a class='btn btn-success'   href='res.php?id=".$ligne[0]."';>Detail</a>";
            echo "<td><a class='btn btn-danger'  href='delete_admin.php?id=".$ligne[0]."';>Avatar</a>";
        echo "<tr>";
    }
}else
{
    while($ligne= $result->fetch())
    {
        
        if(!strpos($ligne[0], $_POST['searcharea']))
        {
            
            echo "<tr>"; 
                echo "<td>".$ligne[0]."</td>";
                echo "<td>".$ligne[1]."</td>";
                echo "<td>".$ligne[2]."</td>";
                echo "<td><a href='delete_admin.php?id=".$ligne[0]."' class='btn btn-danger' onclick='return confirm(\"vraiment?\")';>Supprimer</a>";
                echo "<td><a class='btn btn-primary'  href='reset_acount.php?id= ".$ligne[0].  "';>Modifier</a></td>";
                echo "<td><a class='btn btn-success'  href='res.php?id=".$ligne[0]."';>Detail</a>";
                echo "<td><a class='btn btn-danger'  href='delete_admin.php?id=".$ligne[0]."';>Avatar</a>"; 
   
            echo "<tr>";
        }
    }

}*/
?>  


      <!-- <tbody>
            <tr>
                <td>
                    contenu
                </td>
                <td>
                    contenu
                </td>
                <td>
                    contenu
                </td>
            </tr>
            <tr>
                <td>
                    contenu
                </td>
                <td>
                    contenu
                </td>
                <td>
                    contenu
                </td>
            </tr>
            <tr>
                <td>
                    contenu
                </td>
                <td>
                    contenu
                </td>
                <td>
                    contenu
                </td>
            </tr>
        </tbody>-->
        
        <?php
            require_once "config.php";

            $requete = ("SELECT nom, prenom, email FROM users ORDER BY nom");
            $result = $bdd->query($requete);
            if($result){
                $nombre=$result->rowCount();
            } else{
                echo "reccuperation,erreur";
            }


           /* require_once 'config.php';
            $sql="SELECT * FROM users";
            $req=$bdd->query($sql) or die ("Erreur SQL");
            if(!$req) {
              echo 'La recuperation a echoué';
            }
            else
            {
              $compte= $req->rowCount();
            }*/
              ?> 

           <p>Le nombre de compte creer par l'Administrateur est = <?= $nombre  ?> </p>
            
              <!-- <div col =></div>-->
                <table class="tableau-style center">

                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>email</th>
                            <th>Suppression</th>
                            <th>Modification</th>
                            <th>Detail</th>
                            <th>Avatar</th>
                        </tr>
                    </thead> 
                    <tbody>
                    <?php

       $result=0;
       $sql="SELECT * FROM users";
       $req=$bdd->query($sql) or die ("Erreur SQL");




       while($data=$req->fetch())
       {
        
            echo"<tr>";
                echo"<td>".$data[1]."</td>";
                echo"<td>".$data[2]."</td>";
                echo"<td>".$data[3]."</td>";
                echo"<td><a class='btn btn-danger' onclick='return confirm(\"voulez vous supprimer ce developpeur\")' href='delete_admin.php?id=".$data[0]."';>supprimer</a>";
                echo"<td><a class='btn btn-primary' href=' edit_developpeurliste.php?id=".$data[0]."'; >modifier</a>";
                echo"<td><a class='btn btn-success' href=' detail_dev.php?id=".$data[0]."'; >Les details du développeur</a>";
                echo"<td><a class='btn btn-success' href=' avatar.php?id=".$data[0]."';>changer mon avatar</a>";
            echo"<tr>";
        
                     
        
    }
           
       ?>
        <?php $req->closeCursor(); ?>

    </table>
    <p><a href="ajout_utilisateur.php" class="list-unstyled btn btn-light font-weight-bold"> RETOUR</a></p>
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- <a href="  ">onclick='return confirm(\"vraiment?\")'</a>-->
</body>
</html>