<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        <form action="update.php" method="post">
            Frage:<br>
            <input type="text" name="question" placeholder="Wie geht es dir?"><br><br>
            Kategorie:<br>
            <input type="text" name="category" placeholder="Begrüßung"><br><br>
            <input type="submit" value="Eintragen">
        </form>

        <div>
            <?php

                /*
                Sucht Datenbankverbindungen aus config.php raus und aktualisiert die Datenbanken
                */
                include("config.php");
                $sql = "SELECT * FROM `fragen` ";
	            $erg = mysqli_query( $dbconnect, $sql );
                while($row = mysqli_fetch_array($erg)) {
                    echo "Kategorie: ";
                    echo $row['kategorie'];
                    echo " Frage: ";
                    echo $row['frage'];
                    echo '<br>';
                }
            ?>
        </div>
    </body>
</html>