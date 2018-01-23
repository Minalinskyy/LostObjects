<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="add, lost, found, objects">
    <meta name="description" content="Add a found object">
    <meta name="robots" content="none">
    <title>Add a found object</title>
    <link rel="stylesheet" href="./css/upload.css" />
    <link rel="stylesheet" href="./css/header_footer.css">
</head>

<body>
    <?php include "./includes/header.inc.php";
          require_once "./includes/verifySession.inc.php";?>

    <h2>
        <?php include "./includes/upload.inc.php"?>
        <?php echo $_SESSION["title"] ?>
    </h2>
    <section>
        <form id="inputForm" method="post" enctype="multipart/form-data" action="#">
            <h4 id="hint">
                <?php echo $hint; ?>
            </h4>
            <label for="obj_name">Name of the object :</label>
            <input type="text" id="obj_name" name="obj_name" required />
            <label for="obj_description">Detail :</label>
            <textarea id="obj_description" name="obj_description" required></textarea>
            <label for="file">Add a photo of the object :</label>
            <input type="file" id="file" name="file" />
            <input type="submit" value="Save" />
        </form>
    </section>
    <?php include "./includes/footer.inc.php"?>
</body>

</html>