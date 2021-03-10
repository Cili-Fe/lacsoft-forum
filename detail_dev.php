<?php
   /*  require_once 'config.php';
    $nom = $_GET['nom'];
    $result = $bdd->prepare("SELECT * FROM users WHERE nom=?");
    $result->execute(array($nom));
    $ligne = $result->fetch();*/

   require_once 'config.php';

    $id = $_GET['id'] ;
    $result = $bdd->prepare("SELECT * FROM users WHERE id=?");
    $result->execute(array($id));
?>

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
 
 <section class="bg">
     <h1>Les details de l'apprenant</h1>
   <?php
while( $data= $result->fetch()){
    ?>
      <form action="#" method="post">
       <div class="form-group">
           <label for="" >Nom:</label>
           <div class="">
               <tr class="">
                   <td><?= $data['nom']; ?></td>
               </tr>
           </div>
       </div>
       <div class="form-group">
           <label for="" >Prenom:</label>
           <div class="">
               <tr class="">
                   <td><?= $data['prenom']; ?></td>
               </tr>
           </div>
       </div>
       <div class="form-group">
           <label for="" >Email:</label>
           <div class="">
               <tr class="">
                   <td><?= $data['email']; ?></td>
               </tr>
           </div>
       </div>
     </form>
    <?php
}
   ?>
 </section>

 <!--<div class="main-w3layouts wrapper">
 <h1 class="font-weight-bold"> Les detail du développeur  //$data['nom'] ." ". $data['prenom']; </h1>
		<div class="text-center">
        <ul>
            <br>
            <li class="font-weight-bold ">nom:  //$data['nom']; ?></li>
            <li class="font-weight-bold ">prenom : // $data['prenom']; ?></li>
            <li class="font-weight-bold text-white">email :  //$data['email']; ?></li>
        </ul>
				<p><a href="listes.php" class="list-unstyled btn btn-light font-weight-bold"> RETOUR</a></p>
			</div>
		</div>-->
 
 <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>