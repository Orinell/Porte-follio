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
 

    <!-- MON PPE1 -->

    <!-- ENTETE +IMG -->
    <div class="vt">
        <p class="vttitre">PPE CENTRE EQUESTRE LES GENETS<br><p>
        <center><img class="ppegrimg" src="images/PPE01.PNG"><br></center>
    </div>

    <!-- Languse -->
    <div class="vt">
        <div class="compdivlang">    
            <p class="vttitre">Langages utilisés<br></p>
                <p class="vttxt">
                    PHP<br>
                    CSS<br>
                    HTML<br>
                    JavaScript<br>
                </p>
        
        </div>
        

        <!-- Loguse -->
        <div class="compdivlog">    
            <p class="vttitre">Logiciels utiliusés<br></p>
                <p class="vttxt">
                    PhpMySQL<br>
                    VisualStudio<br>
                    WampServer<br><br><br>
                </p>
        </div>

        <a href="https://github.com/Orinell/ppe.git" ><input type="button" class="btn-success-rouge" value="LIEN Git" ></a>
    </div>

    <!-- MON PPE1 -->
    <div class="vt">
        <p class="vttitre">CONTEXTE<br><p>
        <p class="ppetxt">
            Le Centre équestre les genets désire créer un site web permettant à ses clients de créer un compte, le supprimes ou les mettre à jour.<br>
            Depuis leur espace client les utilisateurs peuvent consulter les différents abonements disponibles et changer leur fourmule quand bon leur semble.<br>
            Le site web devra également afficher sur une page, la liste des chevaux du club qui pourrons être triés par nom, age ou numéro de box.<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">MENU<br><p>
        <img class="ppegrimg" src="images/PPE01_Menu.PNG"><br>
        <p class="ppetxt">
            Menu du site avec bouttons permétant d'accéder aux différentes pages du site<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">CHEVAUX<br><p>
        <img class="ppegrimg" src="images/PPE01_Chevaux.PNG"><br>
        <p class="ppetxt">
            Liste des chevaux du club les genets, récupérée via la base de donnée SQL.<br>
            La liste détoulante en haut à gauche permet de trier les chevaux par nom, age ou numéro de BOX<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">CONTACT<br><p>
        <img class="ppegrimg" src="images/PPE01_Contact.PNG"><br>
        <p class="ppetxt">
            Page de contact avec coordonnées du centre équestre<br>
            API GoogleMap en JAVASCRIPT permettant d'afficher la carte de google MAP<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">CONNECTION<br><p>
        <img class="ppegrimg" src="images/PPE01_Connection.PNG"><br>
        <p class="ppetxt">
            Page de connection, il faut rentrer l'adresse mail choisie lors de la création du compte et son mot de passe pour ce connecter.<br>
            Informations stoquées dans la base de donnée<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">CREATION DE COMPTE<br><p>
        <img class="ppegrimg" src="images/PPE01_NouveauCompte.PNG"><br>
        <p class="ppetxt">
            Page de création de compte qui comprent un formulaire, les clients doivent entrer leurs informations en respectant la syntaxe décrite en bas à gauche pour créer un compte.<br>
            Toutes les informations sont enregistrées et stocquées dans la base de donnée.<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">ESPACE CLIENT<br><p>
        <img class="ppegrimg" src="images/PPE01_MonCompte.PNG"><br>
        <p class="ppetxt">
            Page du compte, ici on peux lire les information concernat le client connecté, et modifier son abonnement via le bouton "Modifier mon abonnement"<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">MODIFIER MON ABONNEMENT<br><p>
        <img class="ppegrimg" src="images/PPE01_ModifAbo.PNG"><br>
        <p class="ppetxt">
           Page de modification d'abonnement,<br>
           Les clients voient les 3 différentes formules possible et peuvent décider de changer d'abonnement ou de le résilier via la liste déroulante en bas de l'écran.<br>
        </p>
    </div>

    <div class="vt">
        <p class="vttitre">SHEMA BASE DE DONNEE<br><p>
        <img class="ppegrimg" src="images/PPE01_SQL.PNG"><br>
        <p class="ppetxt">

        </p>
    </div>

        
    </body> 

</html>