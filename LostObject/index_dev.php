<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="manager,statistic, developer, abandon,stat, objects">
    <meta name="description" content="Index of manager">
    <meta name="robots" content="none">
    <title>Lost Objects System - Homepage - Manager</title>
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/index_dev.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/disconnect.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./javascript/mark_objects.js"></script>
</head>

<body>
    <?php include "./includes/header.inc.php";
          include "./includes/verifySession.inc.php"; ?>

    <div id="buttons">
        <a id="statLink" href="statistic.php">
            <img src="./src/statistic.png" alt="Statistic" />
        </a>
        <a id="disconnectLink" href="disconnect.php">
            <img src="./src/disconnect.png" alt="Log out" />
        </a>
    </div>
    <div>
        <?php include "./includes/found_object_table.inc.php" ?>
    </div>

    <p id="result"> </p>

    <?php include "./includes/footer.inc.php" ?>
</body>

</html>
