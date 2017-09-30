<!DOCTYPE html>
<html lang="en">
  <head>
	<title>EMOJICHAT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  </head>
  <body style="background-image: url(backgroundImages/BackGroundChatPage.png); background-size: cover"> 
	
	<div >
		<center>
		
		<div class="messagebox">
		</div>
		<div class="chatbox">	
		</div>
		<div class="emojibox">
		<?php
		include("config.php");
		
		$sql = "SELECT * FROM `emojis`";
		$erg = mysqli_query($dbconnect,$sql);
		while($row = mysqli_fetch_array($erg)){
			echo $row['code']."<br>";
		}
		?>
		</div>
		<div class="questionbox">
		</div>
		<div class="invisiblebox">
		</div>
		
		
		</center>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>