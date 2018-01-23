<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="student, declare, lost, found, objects">
    <meta name="description" content="Index of students">
    <meta name="robots" content="none">
    <title>Lost Objects System - Homepage - Students</title>
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/index_student.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/disconnect.css">
</head>

<body>
    <?php include "./includes/header.inc.php";
          include "./includes/verifySession.inc.php"; ?>
    <?php $_SESSION["title"] = "Declare a lost object"; $_SESSION["uploadList"] = "ojd"; ?>
    <div id="buttons">
        <a id="declareLink" href="uploadObject.php">
            <img src="./src/declareObjLost.png" alt="Declare a lost object" />
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
