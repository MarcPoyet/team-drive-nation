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
                    <li class="active"><a href="accueil.php">ACCUEIL</a></li>
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
  
    <?php include("header.php"); ?>
    <div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6" style="background-color: #5a0866; color:white;">
       <div class="col-xs-1"></div> 
       <div class="col-xs-10"><h4>FORMULAIRE DE DEMANDE DU PERMIS DE CONDUIRE</h4></div> 
       <div class="col-xs-1"></div> 
        </div>
    <div class="col-xs-3"></div>
    </div>

<br><br>
    <div class="row">
      <div class="col-xs-3"></div>
      <div class="col-xs-8">
        Merci de nous faire confiance, nous vous recontacterons dans les plus brefs délai.
      </div>
      <div class="col-xs-1"></div>
    </div>

    <br>
    <div class="row"> 
   <form>  

            
             

          <div class="row">
                <div class="col-xs-5"></div>
                <div class="col-xs-4"><form action="" method ="post"><br>
                <a href="accueil.php"><button class="btn btn-default" type="button" style="width: 200px; height: 50px; background-color: #5a0866; color:white; font-size: 20px;">Accueil</button></a>
            </form></div>
                <div class="col-xs-3"></div>
            </div>

      
   </form> 
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