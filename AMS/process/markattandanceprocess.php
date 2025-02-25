<?php

require_once ('dbh.php');
$sql = "SELECT * FROM `person` WHERE 1";

$result = mysqli_query($conn, $sql);
if (!empty($_POST)){
   
        $ids = $_POST["presentIds"];
}else{
    echo "Post data is empty. No value is passed from HTML to the server";
}

$result = mysqli_query($conn, "UPDATE `person` SET `attandance`=`attandance`+1 where `id` in (".$ids.")");

?>
</body>
</html>
