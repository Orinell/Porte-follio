<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link href="CSS\CSS_PFF6.css" rel="stylesheet" type="text/css" /> 
        <title>Les Genets Acceuil</title>
    </head>

    <body>
    <div class="toppp">
        <!-- entete -->
        <div class ="entete">
            <font size="+4"><b><center>VIGNALS Benoît</center></b></font>
        </div>

         <!-- menu -->
        <div class ="menu">
            <a href="php_acceuil.php"><input type="button" class="btn-success" value="Accueil" ></a>
            <a href="php_competences.php"><input type="button" class="btn-success" value="Compétences" ></a>
            <a href="php_cv.php"><input type="button" class="btn-success" value="CV" ></a>
            <a href="php_veille_techno.php"><input type="button" class="btn-success" value="Veille Technologique" ></a>
            <a href="php_ppe.php"><input type="button" class="btn-success" value="PPE" ></a>              
            <a href="php_stage.php"><input type="button" class="btn-success" value="Stages" ></a>            
            <a href="php_contact.php"><input type="button" class="btn-success" value="Contact" ></a>
        </div>
    </div>

    <!-- MES COMPETENCES -->

    <div>
        <div class="comp">
            <!-- LANGAGES -->
            <div class="compdivlang">  
                <p class="vttitre">Langages informatiques<br></p>
                <p class="competence">HTML<br></p> 
                <p class="competence">PHP<br></p> 
                <p class="competence">SQL<br></p>   
            </div>

            <!-- LOGICIELS -->
            <div class="compdivlog"> 
                <p class="vttitre">Logiciels<br></p>
                <p class="competence">Microsoft Office<br></p> 
                <p class="competence">WampServer<br></p> 
                <p class="competence">PhpMySQL<br></p> 
                <p class="competence">VisualStidio<br></p> 
                <p class="competence">SQL Server<br></p> 
                <p class="competence">MySQL<br></p>         
            </div>
        </div>
    </div>

    <div class="tabcomp">

    <p class="vttitre">Tableau de competénces<br></p>
    <img class="ppegrimg" src="images/TableauDeCompetences-1.png"><br>
    <a href="images/TableauDeCompetences.pdf" ><input type="button" class="btn-success-rouge" value="Voir PDF" ></a>

    </div>
        
    </body> 

</html>