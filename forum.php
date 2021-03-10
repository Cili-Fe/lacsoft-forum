<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/forums.css">
    <title>Forum</title>
</head>
<body>







 <div class="container-fluid bg-warning entete">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3  mt-3">
                <img src="images/lacsoft.png" alt="" width="90%" height="100px">
            </div>
            <div class="col-lg-3 offset-lg-6  col-xs-3 offset-xs-6 col-sm-3 offset-sm-6 col-md-3 offset-md-6  mt-4">
                <img src="images/avatar.png" alt="" width="50%" height="90px">
            </div>
        </div>
    </div>
 </div>   
 <div class="container-fluid bg-danger lign">
    <div class="container">
       <div class="row">
           <div class="col-lg-8 offset-3">
           <nav class="navbar navbar-expand-md navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <button type="button" class="btn btn-outline-primary text-body" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Publication</button>
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Votre publication</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="publication.php" method="POST">
                                                <div class="form-group">
                                                    <div class="first d-flex">
                                                        <div class="free1 ml-3">
                                                            <input type="text" class="form-control" id="recipient-name" name="nom" placeholder="nom">
                                                        </div>
                                                        <div class="free1 ml-4">
                                                            <input type="text" class="form-control" id="recipient-name"  name="prenom" placeholder="prenom">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="first d-flex">
                                                        <div class="free1 ml-5">
                                                            <select class="form-control cool"  name="categories" id="exampleFormControlSelect1">
                                                                <option>BACKEND</option>
                                                                <option>FRONTEND</option>
                                                            </select>
                                                        </div>
                                                        <div class="free1 ml-5">
                                                            <select class="form-control cool"  name="technos" id="exampleFormControlSelect1">
                                                                <option>HTML5</option>
                                                                <option>CSS3</option>
                                                                <option>BOOTSTRAP</option>
                                                                <option>JAVASCRIPT</option>
                                                                <option>PHP</option>
                                                                <option>PYTHON</option>
                                                                <option>DJANGO</option>
                                                                <option>C++</option>
                                                                <option>PHP</option>
                                                                <option>C</option>
                                                                <option>JAVA</option>
                                                                <option>SPRING BOOT</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Commentaire</label>
                                                <textarea class="form-control mess" id="message-text"  name="message"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                       
                        <li class="nav-item">
                                <button type="button" class="btn btn-outline-primary  dropdown-toggle-split ml-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="modifiaction_password_admine.php" class="ligne text-body">Modifier mot de passe</a></button>      
                          </li>
                          <li class="nav-item">
                                <button type="button" class="btn btn-outline-primary  ml-4"><a href="listess.php" class="ligne text-body">Liste</a></button>
                          </li>
                          <li class="nav-item">
                                <button type="button" class="btn btn-outline-primary  ml-4"><a href="deconnexion_admin.php" class="ligne text-body">Deconnexion</a></button>
                          </li>
                        </ul>
                      </div>
                  </nav>
           </div>
       </div>
    </div>
 </div>   




















<?php
require_once 'afficher.php';
?>

<marquee> <h1 class="text-danger"> Bienvenue sur le forum LacSoft !</h1></marquee>
    <?php foreach ($contact as $contact):  ?>

            <table class="tableau-style center">
                <thead>
                    <tr>      
                        <th><?=  $contact['nom']?> </th>
                        <th> <?= $contact['prenom']?> </th>
                        <th><?= $contact['categories']?> </th>
                        <th> <?= $contact['technos']?></th>
                        <th><?= $contact['message']?> </th>
                        <th> <?= $contact['date']?></th>
                        <th>Avatar</th>
                    </tr>
                </thead> 
            </table>        
    <?php endforeach; ?>

   



















 




    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/script.js"></script>


    
</body>
</html>