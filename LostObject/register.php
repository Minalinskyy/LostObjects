<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Page</title>
    <meta charset="utf-8">
    <meta name="keywords" content="register, sign, up" />
    <meta name="description" content="Sign Up Page Of Esigelec" />
    <meta name="robots" content="none">
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/header_footer.css" />
</head>

<body>
    <?php include "./includes/header.inc.php"; ?>

    <h2>Sign Up Page</h2>

    <section>
        <?php include "./includes/register.inc.php"?>
        <form id="reg_input" method="post" action="#">
            <h4 id="hint">
                <?php echo $hint; ?>
            </h4>
            <div class="input">
                <label for="id">Login id :</label>
                <label for="username">User name :</label>
                <label for="pw">Password :</label>
                <label for="pw2">Password confirmation:</label>
            </div>
            <div class="input">
                <input type="text" id="id" name="id" " required />
                <input type="text" id="username" name="name" " required />
                <input type="password" id="pw" name="pw" " required />
                <input type="password" id="pw2" name="pw2" " required />
            </div>
            <div class="button">
                <input type="submit" value="Sign up" />
            </div>
        </form>
    </section>
    <?php include "./includes/footer.inc.php"?>
</body>

</html>
