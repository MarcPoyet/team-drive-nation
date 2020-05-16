<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Nation</title>
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
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
           
                <img src="img/formation-entreprise-pour-employes-entreprise_82574-5244.jpg">
            
            <button class="titre-code-route">
                <p>Obtenir le code de la route</p>
            </button>
        </div>
        <div class="col-xs-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <p class="paragraphe">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sequi assumenda officiis distinctio illum, minima totam nobis fugit, et iste natus velit eligendi aperiam quis exercitationem asperiores earum? Laudantium, aliquam?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non delectus recusandae, ut earum fugit deserunt molestiae. Culpa corporis enim voluptatibus, animi ipsam, nihil porro minima totam officia facere laboriosam? Qui?fugit deserunt molestiae. Culpa corporis enim voluptatibus, animi ipsam, nihil porro minima totam officia facere laboriosam? Qui?   
            </p>
            <div class="caracteristique">
                <p>Caractéristiques :</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="caract-code-route">
                        <p>Nombre d'étape :</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="caract-code-route">
                        <p>Vous serez soumis à d'éventuels quiz pour valider et passer à l'étape suivante</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="caract-code-route">
                        <p>Vous pourrez suivre les cours à votre rythme</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="caract-code-route espa">
                        <p>Tarif : 20 000 F CFA</p>
                    </div>
                </div>
            </div>
            
            <form><br>
                <input type="checkbox" name="commencer" id="">
                J'accepte les caractéristiques<br><br><br>
                <div class="row">
                <div class="col-xs-5"></div>
                <div class="col-xs-3">
                    <a href="paiement.php"><button class="btn btn-default" type="button" style="width: 200px; height: 50px; background-color: #5a0866; color:white; font-size: 20px;">Commencer</button></a>
                </div>
                <div class="col-xs-4"></div>
            </div>
                
            </form>
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