 <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/x-icon" href="/public/images/icones/favico.jpg"/>
        <link rel="stylesheet" href="./public/css/style.css">
        <title>Grégory CAYZAC</title>
        <script type="text/javascript" src="/public/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/public/js/jquery.lightbox.js"></script>
        <script type="text/javascript" src="/public/js/templatemo_custom.js"></script>
        <script type="text/javascript" src="/public/js/wow.min.js"></script>
    </head>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">Cayzac gregory</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php#presentation">Accueil</a></li>
                <li><a href="index.php#skillbar">Compétences</a></li>
                <li><a href="index.php#CV">Mon CV</a></li>
                <li><a href="index.php#lettre_motivation">Lettre De Motivation</a></li>
                <li><a href="index.php#contacts">Contact</a></li>
                <?php
                if(basename($_SERVER['PHP_SELF'])!="projets.php")
                    echo '<li><a href="index.php?cas=projet">Projets</a></li>';
                if(basename($_SERVER['PHP_SELF'])!="msgInst.php")
                    echo '<li><a href="index.php?cas=msg">Messagerie</a></li>';
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text"><?php /*$_SESSION*/ echo "bonjour ['nomUser']"; ?></p>
                <li class="dropdown">
                <a class="dropdown-toggle glyphicon glyphicon-log-in" data-toggle="dropdown" href="#"> Login
                <span class="caret"></span></a>
                <ul id="connexion" class="dropdown-menu">
                  <li><input type="email" class="form-control" id="email" placeholder="Email"></li>
                  <li><input type="password" class="form-control" placeholder="password" id="pwd"></li>
                  <li><button id="btnco" type="submit" class="btn btn-default"> Submit</button></li>
                </ul>
                    <?php
                    if(basename($_SERVER['PHP_SELF'])!="inscription.php")
                        echo '<li><a href="index.php?cas=inscription"><span class="glyphicon glyphicon-user"></span> inscription</a></li>';
                    ?>

            </ul>
        </div>
    </nav>
</header>


