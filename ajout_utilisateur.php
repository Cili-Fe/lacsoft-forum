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
    <div class="login-form">
    <form action="developper_inscription.php" method="POST">
                <h2 class="text-center">Ajouter un membre</h2>       
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="prenom" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email ou Nom d'utilisteur" required="required" autocomplete="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="">
                </div>
                <div class="formGroup">
                    <button type="submit" class="btn btn-danger btn-block">Inscription</button>
                </div>  
            </form>
    </div>
</body>
</html>