<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/developpeur.css">
    
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
    <div class="login-form">
    <form action="developper_inscription.php" method="POST">
                <h2 class="text-center">Ajouter un membre</h2>  
                <div class="container">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="prenom" class="form-control" placeholder="prenom" required="required" autocomplete="">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="">
                    </div>
                    <div class="formGroup">
                        <button type="submit" class="btn btn-danger btn-block">Inscription</button>
                    </div>  
                </div>
            </form>
    </div>
</body>
</html>