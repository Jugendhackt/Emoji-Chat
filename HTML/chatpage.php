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
			echo "<a class='emoji' onclick='sendemoji(".$row['id'].")' >".$row['code']."</a><br>";
		}
		?>
		</div>
		<div class="questionbox">
		<select id="questions" class="questions" name="questions" style="color: black;">
		<?php
		$sql = "SELECT * FROM `kategorien`";
		$erg = mysqli_query($dbconnect,$sql);
		while($row = mysqli_fetch_array($erg)){
			echo "<option value='".$row['id']."'>".$row['name']."</option>";
		}
		?>
		</select>
		<div id="suggest">

		</div>
		</div>
		<div class="invisiblebox">
		</div>
		
		
		</center>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script>
		$( "#questions" ).on( "change", function () {
			var inputcontent = $( "#questions" ).val();

			$.post( "ajax.php", {
				category: inputcontent 			}, function ( data ) {
				$( "#suggest" ).html( data );
				
			}, "" );
		} );

		function sendmessage( $id ){

			if ($( ".messagebox" ).children().eq(-2) .prop("tagName")!="SPAN")
			{ 
				$.post( "ajax.php", {
				id: $id }, function ( data ) {
				$( ".messagebox" ).append( data );
			}, "" );
			}
			
		};

		function sendemoji( $id ){
			$.post( "ajax.php", {
				idemoji: $id }, function ( data ) {
				$( ".messagebox" ).append( data );
			}, "" );
		};

		function refresh(){
			$.post( "ajax.php", {
				refresh: 1 }, function ( data ) {
				$( ".messagebox" ).html( data );
			}, "" );
		};
		setInterval(refresh,500);


</script>
  </body>
</html>