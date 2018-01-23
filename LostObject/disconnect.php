<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="déconnecter,retourner, déconnexion">
    <meta name="description" content="Retourner à la page d'acceuil.">
    <meta name="robots" content="none">
    <title>Système Objets perdus - Déconnexion</title>
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/disconnect.css">
</head>

<body>
    <?php 
    include "./includes/header.inc.php";
    session_start();
    
    if(isset($_SESSION["usr_id"])){
        $_SESSION=array();
        session_destroy();
        echo "<h3>You are logging out.</h3>";
    } else {
        echo "<h3>This is the page of logging out.</h3>";
    }
    echo "<p><a href=\"./index.php\">Redirect to homepage!</a></p>";
    header("refresh:2; url=.\index.php");
    
    include "./includes/footer.inc.php" ;
    ?>
</body>

</html>
