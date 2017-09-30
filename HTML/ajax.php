<?php
include('config.php');

if(isset($_POST['category'])){
    $box = "";
    $sql = "SELECT * FROM `fragen` WHERE kategorie=".$_POST['category'];
    $erg = mysqli_query($dbconnect,$sql);
    while($row = mysqli_fetch_array($erg)){
        $box .= "<a class='fragen'>".$row['frage']."</a><br>";
    }

    echo $box;
}

?>