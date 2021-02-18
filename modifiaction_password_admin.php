<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/reset_password.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="nav nav-pills nav-fill bg-danger">
            <div class="container-fluid ">
                    <div class="row col-lg-4 col-sm-4 col-xm-4 col-md-4 mt-2">
                        <a href=""> <img src="images/LacSoft.png" alt="" width="35%" height="45px"></a>
                    </div>
                <div class="container d-flex justify-content-end flex-wrap:wrap mb-4 m-2 p-2">
                    <div class="divColor1">
                        <a class="nav-link text-white active" href="#">Forum</a>
                    </div>
                    <div class="divColor2">
                        <a class="nav-link text-white active" href="#">Compte</a>
                    </div>
                    <div class="divColor3">
                       <a class="nav-link text-white" href="#">Commentaire</a>
                    </div>
                    <div class="divColor4">
                       <a class="nav-link text-white" href="#">Déconnexion</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
    <div class="login-form">
    <form action="" method="POST">
                <h4 class="text-center text-danger">Modifier votre mot de passe</h4>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail ou nom d'utilisateur" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block">Modifier</button>
                </div>  
            </form>
    </div>
</body>
</html>