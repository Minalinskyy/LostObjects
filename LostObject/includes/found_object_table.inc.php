<?php
	require "connect_database.inc.php";
    global $conn;

    echo "<h3>The list of found objects</h3>";

    $sql = "SELECT * FROM objectFound_ojf INNER JOIN object_obj ON objectFound_ojf.ojf_obj_id = object_obj.obj_id";
    $result = $conn->query($sql);
	$conn->close();
    
    if ($result->num_rows > 0) {
        echo"<table id=\"table_found\">
        <tr>
        <th>Name</th>
        <th>Photo</th>
        <th>Detail</th>
        <th class=\"date\">Date of finding</th>
        <th class=\"returned\">Return</th>
        <th class=\"abandon\">Abandon</th>
        <th class=\"id\">id</th></tr>";

        // output data of each object wasn't marked as abandonned, found or returned.
        while($row = $result->fetch_assoc()) {
			if ($row['obj_stat'] == 1){
				echo "<tr>
                <td>" . htmlentities($row["obj_name"]). 
                "</td>";
                // show photo if exist
                if(!is_null($row["obj_photofilename"])){
                    echo "<td><a href=\"./src/photo/" . $row["obj_photofilename"] . "\">
                    <img class=\"photo\" src=\"./src/photo/" . $row["obj_photofilename"] . "\" alt=\"" . $row["obj_photofilename"] . "\" >" .
                    "</a></td>";
                } else {
                    echo "<td><img class=\"photo\" src=\"./src/photo/nophoto.png\" alt=\"nophoto.png\" ></td>";
                }
                echo "<td>" . htmlentities($row["obj_description"]) . "</td>
                <td class=\"date\">" . htmlentities($row["obj_adddate"]) . "</td>
                <td class=\"returned\">
                <img class=\"returnedImg\" onclick=\"returnedObject(this);\" src=\"./src/returned.png\" alt=\"returned\"></td>
                <td class=\"abandon\">
                <img class=\"deleteImg\" onclick=\"abandonObject(this);\" src=\"./src/delete.png\" alt=\"delete\"></td>
                <td class=\"id\">" . $row["obj_id"] . "</td></tr>";
			}
        }
        echo "</table>";
    } else {
        echo "0 result<br>";
    }
?>
