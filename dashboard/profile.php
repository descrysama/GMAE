<?php
session_start();
require_once '../config.php';
$pseudo = $_SESSION['pseudo'];
$req = $bdd->prepare('SELECT  nom, prenom, mot_de_passe FROM users WHERE pseudo = ?');
$req->execute(array($pseudo));
$fetch = $req->fetch();
$row = $req->rowCount();

$nom = $fetch['nom'];
$prenom = $fetch['prenom'];
$password = $fetch['mot_de_passe'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>GMAE | Profile</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href=""><img src="../assets/img/logo_GMAE-1.png" alt="logo" width="5%"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="d-flex">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="home">Partenaires</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profil">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a href="index.html" class="btn btn-danger">Déconnecter</a>
                  </li>
                </ul>
              </div>
              </div>
            </div>
          </nav>
    </header>
    <div class="container">
    <div class="card">
        <div class="card-body">
          <h5>Pseudo : </h5>
          <input type="text" value="<?php echo $pseudo?>">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5>Prenom : </h5>
          <input type="text" value="<?php echo $prenom?>">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5>Nom : </h5>
          <input type="text" value="<?php echo $nom?>">
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5>Mot de Passe : </h5>
          <input type="password" value="<?php $nombre = strlen($password); echo str_repeat('', $nombre);?>"> 
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 