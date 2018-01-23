<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="stat, statistic，ESIGELEC, manager, developer">
    <meta name="description" content="Statistic">
    <meta name="robots" content="index">
    <title>Lost Objets System - Statistic</title>
    <link rel="stylesheet" href="./css/header_footer.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/statistic.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeric/1.2.6/numeric.min.js"></script>
<!--    <script src="./javascript/piechart.js"></script>-->
</head>

<body>
    <?php 
        include('./includes/header.inc.php');
        
        // connect db
        include('./includes/connect_database.inc.php');
    
        // declare and initialize variables
        $nb_account = $nb_account_student = $nb_account_admin = 
            $nb_account_dev = 0;
        $nb_object = $nb_object_found = $nb_object_declared = 
            $nb_object_returned = $nb_object_refound = $nb_object_abandonned = 0;
        global $conn;
    
        // request db
        $sql="SELECT COUNT(*) FROM `user_usr`";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_account = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `user_usr` WHERE usr_level = 1";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_account_student = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `user_usr` WHERE usr_level = 2";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_account_admin = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `user_usr` WHERE usr_level = 3";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_account_dev = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `object_obj`";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_object = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `objectfound_ojf`";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_object_found = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `objectdeclared_ojd`";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_object_declared = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `object_obj` INNER JOIN objectfound_ojf ON obj_id = ojf_obj_id WHERE obj_stat = 2";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_object_returned = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `object_obj` INNER JOIN objectdeclared_ojd ON obj_id = ojd_obj_id WHERE obj_stat = 2";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_object_refound = $row["COUNT(*)"];
        }
    
        $sql="SELECT COUNT(*) FROM `object_obj` WHERE obj_stat = 3";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $nb_object_abandonned = $row["COUNT(*)"];
        }
    
        // echo table
        echo "<table id=\"table_declared\">
        <tr>
        <th>Key</th>
        <th>Value</th>
        </tr><tr>
        <td>Number of users</td>
        <td>$nb_account</td>
        </tr><tr>
        <td>Number of student user</td>
        <td>$nb_account_student</td>
        </tr><tr>
        <td>Number of administrator user</td>
        <td>$nb_account_admin</td>
        </tr><tr>
        <td>Number of manager user</td>
        <td>$nb_account_dev</td>
        </tr><tr>
        <td>Number of objects</td>
        <td>$nb_object</td>
        </tr><tr>
        <td>Number of found objects</td>
        <td>$nb_object_found</td>
        </tr><tr>
        <td>Number of objects declared by student</td>
        <td>$nb_object_declared</td>
        </tr><tr>
        <td>Number of returned objects</td>
        <td>$nb_object_returned</td>
        </tr><tr>
        <td>Number of given back objects</td>
        <td>$nb_object_refound</td>
        </tr><tr>
        <td>Number of abandoned object</td>
        <td>$nb_object_abandonned</td>
        </tr><tr>
        <td>Percentage of given back declared object</td>
        <td>" . round ($nb_object_refound / $nb_object_declared * 100, 2, PHP_ROUND_HALF_UP) . "%</td>
        </tr><tr>
        <td>Percentage of given back found object</td>
        <td>" . round ($nb_object_returned / $nb_object_found * 100, 2, PHP_ROUND_HALF_UP) . "%</td>
        </tr><tr>
        <td>Percentage of abandoned object</td>
        <td>" . round ($nb_object_abandonned / $nb_object_found * 100, 2, PHP_ROUND_HALF_UP) . "%</td>
        </tr></table>";
        echo "<div class='row'></div><div id='userstate'> </div>  <div id='objectstate'></div> </div>";
    ?>

    <?php include('./includes/footer.inc.php') ?>
    <script src="./javascript/piechart.js">    </script>
</body>

</html>
