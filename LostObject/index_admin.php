<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="admin,add, lost, found, objects">
    <meta name="description" content="Index of administrator">
    <meta name="robots" content="none">
    <title>Lost Objetcs System - Homepage - Administrator</title>
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/index_admin.css">
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/disconnect.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./javascript/mark_objects.js"></script>
</head>

<body>
    <?php include "./includes/header.inc.php";
          include "./includes/verifySession.inc.php"; ?>
    <?php $_SESSION["title"] = "Add a found object";
          $_SESSION["uploadList"] = "ojf"; ?>

    <div id="buttons">
        <a id="addObjLink" href="uploadObject.php">
            <img src="./src/addObjFound.png" alt="Add a found object" />
        </a>
        <a id="disconnectLink" href="disconnect.php">
            <img src="./src/disconnect.png" alt="Log out" />
        </a>
    </div>
    <div>
        <?php include "./includes/found_object_table.inc.php" ?>
    </div>

    <div>
        <?php include "./includes/declared_object_table.inc.php" ?>
    </div>

    <p id="result"> </p>

    <?php include "./includes/footer.inc.php" ?>
</body>

</html>
