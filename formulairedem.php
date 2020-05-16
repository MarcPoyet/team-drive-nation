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

    <br>
    <div class="row"> 
   <form>
       <div class="row">
           <div class="col-xs-2"></div>
           <div class="col-xs-3">
                <label>Type de permis</label>
               <select class="form-control" style="border-color: #5a0866">
                   <option>Choisir...</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
                   <option>D</option>
               </select>
           </div>
           <div class="col-xs-2"></div>
           <div class="col-xs-3">
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10"><label>Document d'identification</label></div>
                <div class="col-xs-1"></div>
            </div>
               <input type="file" name="" placeholder="Document d'identification" class="form-control" style="border-color: #5a0866">
           </div>
           <div class="col-xs-2"></div>
       </div>
       <br>
       <div class="row">
           <div class="col-xs-3"></div>
           <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6"><label>Certificat d'exament théorique</label></div>
                    <div class="col-xs-3"></div>
                </div>
            
               <input type="file" name="" placeholder="Document d'identification" class="form-control" style="border-color: #5a0866">
           </div>
           <div class="col-xs-3"></div>
       </div>
<br>

       <div class="row">
           <div class="col-xs-3"></div>
           <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6"><label>Certificat d'exament pratique</label></div>
                    <div class="col-xs-3"></div>
                </div>
            
               <input type="file" name="" placeholder="Document d'identification" class="form-control" style="border-color: #5a0866">
           </div>
           <div class="col-xs-3"></div>
       </div>

       <br>

       <div class="row">
           <div class="col-xs-3"></div>
           <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8"><label>Certificat médical d'aptitude à la conduite</label></div>
                    <div class="col-xs-2"></div>
                </div>
            
               <input type="file" name="" placeholder="Document d'identification" class="form-control" style="border-color: #5a0866">
           </div>
           <div class="col-xs-3"></div>
       </div>
 <br>
        <div class="row">
           <div class="col-xs-3"></div>
           <div class="col-xs-6">
                <div class="row">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6"><label>Attestation d'enregistrement</label></div>
                    <div class="col-xs-3"></div>
                </div>
            
               <input type="file" name="" placeholder="Document d'identification" class="form-control" style="border-color: #5a0866">
           </div>
           <div class="col-xs-3"></div>
       </div>

          <div class="row">
                <div class="col-xs-5"></div>
                <div class="col-xs-4"><form action="" method ="post"><br>
                <a href="merci.php"><button class="btn btn-default" type="button" style="width: 200px; height: 50px; background-color: #5a0866; color:white; font-size: 20px;">Continuer</button></a>
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