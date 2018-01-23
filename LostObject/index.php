<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="index, objetcs，lost, ESIGELEC, login">
    <meta name="description" content="Index of Lost Objects System">
    <meta name="robots" content="index">
    <title>Lost Objects system - Index</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header_footer.css">
</head>

<body>
    <?php include('./includes/header.inc.php');?>
    <?php include('./includes/login.inc.php');?>
	<section>
        <form name="login_input" method="post" action="#">
            <h4 id="hint">
                <?php echo $hint; ?>
            </h4>
            <div class="input">
                <label>Username :</label>
                <label>Password :</label>
            </div>
            <div class="input">
                <input type="text" id="id" name="id"  required />
                <input type="password" id="pw" name="pw"  required />
            </div>
            <div class="button">
                <input type="submit" value="Login" />
            </div>
            <div class="link">
                <a href="register.php"><img src="./src/inscription.png" id="signin"></a>
            </div>
        </form>
    </section>
    <?php include('./includes/footer.inc.php'); ?>
</body>

</html>
