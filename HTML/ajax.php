<?php
include_once('config.php');

if(isset($_POST['category'])){
    $box = "";
    $sql = "SELECT * FROM `fragen` WHERE kategorie=".$_POST['category'];
    $erg = mysqli_query($dbconnect,$sql);
    while($row = mysqli_fetch_array($erg)){
        $box .= "<a onclick='sendmessage(".$row['id'].")' class='fragen'>".$row['frage']."</a><br>";
    }

    echo $box;
}

if(isset($_POST['id'])){
    $sql = "SELECT * FROM `fragen` WHERE id=".$_POST['id'];
    $erg = mysqli_query($dbconnect,$sql);
    while($row = mysqli_fetch_array($erg)){
        $text = $row['frage']."<br>";
    }

    echo $text;
}

if(isset($_POST['idemoji'])){
    $sql = "SELECT * FROM `emojis` WHERE id=".$_POST['idemoji'];
    $erg = mysqli_query($dbconnect,$sql);
    while($row = mysqli_fetch_array($erg)){
        $text = $row['code']."<br>\r\n";
    }
    file_put_contents("chat.txt",$text,FILE_APPEND);
    echo $text;
}

?>