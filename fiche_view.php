<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveNation</title>
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/mystyle.css">
    <link href="css/accueil.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <a href="" class="position-logo navbar-brand" style="margin-top: -30px">
                <img src="images/drivenationlogo.png" alt="DRIVENATION" width="220" height ="150">
            </a>
        </div>
        <div class="col-md-9">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        
                    </a>
                    </div>
                    <ul class="nav navbar-nav">
                    <li class="active"><a href="#">ACCUEIL</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">A PROPOS DE NOUS</a>
                        <!-- <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                        </ul> -->
                    </li>
                    <li><a href="#">NOUS CONTACTER</a></li>
                    </ul>
                </div>
            </nav> 
            <div class="row">
                <div class="col-md-12">
                    <p class="paragraphe-nom">Nom : Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
   <!-- <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                    <li class=""><a href="#"><span class="glyphicon glyphicon-file"></span></a></li>
                    <li class="dropdown">
                        <a class=""  href="#"><span class="glyphicon glyphicon-user"></span></a>  
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-list"></span></a></li>
                    <li class=""><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></li>
                    <li class="dropdown">
                        <a class=""  href="#"><span class="glyphicon glyphicon-home"></span></a>  
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-plane"></span></a></li>
                    </ul>
                </div>
            </nav> 
        </div>
    </div>-->
    <?php include("header.php"); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="code-route">
                <div class="row">
                    <div class="col-md-4">
                        <div class="drapo">
                            <img src="images/flag.jpg" alt="DRAPEAU" width="80" height="50">
                        </div>
                        <div class="photo">
                            <img src="images/profil.png" alt="PROFIL" width="120" height="130">
                        </div>
                        <div class="sous-photo">
                            <button class="drapo btnn"></button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="titrefiche">
                            DRIVER LICENSE
                        </div>
                        <ol>
                            <li>NAME :</li>
                            <li>FULL NAME :</li>
                            <li>12 - 06 - 2020</li>
                            <li>12 - 06 - 2020  / 12 - 06 - 2020</li>
                            <li>DRIVER 95X345785997</li>
                            <li>FRFSFFSS FSFFFSFF</li>
                            <li>FRFSFFSS-FSFFFSFF</li>
                            <li>123XD456-8YIPFT6</li>
                        </ol>
                    </div>
                </div>
            </div>
            <button class="titre-code-route">
                <p>Obtenir le permis de conduire</p>
            </button>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p class="paragraphe">
                Nous avons de certains de vos papiers. Veillez donc les scanner afin de repondre au formulaire qui suis cette page. Il y'a entre autre : 
                <br>Le document d'identification en cour de validité(original) - Certificat d'examen théorique - Certificat d'examen pratique - Certificat médical d'aptitude à la conduite - Attestation d'enregistrement.
            </p>
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4"><form action="" method ="post"><br>
                <a href="formulairedem.php"><button class="btn btn-default" type="button" style="width: 200px; height: 50px; background-color: #5a0866; color:white; font-size: 20px;">Continuer</button></a>
            </form></div>
                <div class="col-xs-4"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="footer">
                <p>copyright 2020 - Drive nation</p>
            </div>
        </div>
    </div>
</div>

    <script src="dist/js/bootstrap.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery2.js"></script>
</body>
</html> 