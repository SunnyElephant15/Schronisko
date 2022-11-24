<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="CSS/lekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lekarze</title>

</html>


<body>
    
    <header>
        <section>
        
        <label for="toggle-1" class="toggle-menu">
        
        <nav>
        <ul>
            <li><a href="main.html">About us</a></li>
            <li><a href="adopcja.html">Adopcja</a></li>
            <li id="actual"><a href="lekarz.php">Lekarz</a></li>
            <li><a href="spacerzpsem.html">Spacer z psem</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
        </nav>
        </header>

        <div class="heading">
            <div class="heading-in">Lekarze weterynarii</div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        
        <div class="lekarze">
            <div class="lekarze_opis">
                <h1>Dr hab. <?php
   
       

        //create connection
        $con = mysqli_connect('localhost', 'root', '', 'schroniskobaza');
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
      $sql = "SELECT * FROM `lekarz` WHERE `id_lekarz` = 1";

        $rs = mysqli_query($con, $sql);
		
		while ($row = $rs->fetch_assoc()) {
	echo $row['imię'].' ';
    echo $row['nazwisko'].'<br>';
	echo $row['stanowisko'].'<br>';
	echo "Wiek:";
	echo $row['wiek'].'<br> <br>';
	echo '</h1>';
	echo '<h3>';
	echo $row['krótki_opis'].'<br>';
	echo '</h3>';
	
	 
}
	
?> <br><br>
            </div>
            <div class="lekarze_foto1"></div>
        </div>
        <div class="lekarze">
            <div class="lekarze_opis">
                <h1>Dr. 
				
<?php 

		$sql = "SELECT * FROM `lekarz` WHERE `id_lekarz` = 2";

        $rs = mysqli_query($con, $sql);
		
		while ($row = $rs->fetch_assoc()) {
	echo $row['imię'].' ';
    echo $row['nazwisko'].'<br>';
	echo $row['stanowisko'].'<br>';
	echo "Wiek:";
	echo $row['wiek'].'<br> <br>';
	echo '</h1>';
	echo '<h3>';
	echo $row['krótki_opis'].'<br>';
	echo '</h3>';
		}
?>
            </div>
            <div class="lekarze_foto2"></div>
        </div>
        <div class="lekarze">
            <div class="lekarze_opis">
                <h1> mgr. <?php 

		$sql = "SELECT * FROM `lekarz` WHERE `id_lekarz` = 3";

        $rs = mysqli_query($con, $sql);
		
		while ($row = $rs->fetch_assoc()) {
	echo $row['imię'].' ';
    echo $row['nazwisko'].'<br>';
	echo $row['stanowisko'].'<br>';
	echo "Wiek:";
	echo $row['wiek'].'<br> <br>';
	echo '</h1>';
	echo '<h3>';
	echo $row['krótki_opis'].'<br>';
	echo '</h3>';
		}
?>
            </div>
            <div class="lekarze_foto3"></div>
        </div>
		<div class="lekarze">
            <div class="lekarze_opis">
                <h1>mgr.
				
				<?php 

		$sql = "SELECT * FROM `lekarz` WHERE `id_lekarz` = 4";

        $rs = mysqli_query($con, $sql);
		
		while ($row = $rs->fetch_assoc()) {
	echo $row['imię'].' ';
    echo $row['nazwisko'].'<br>';
	echo $row['stanowisko'].'<br>';
	echo "Wiek:";
	echo $row['wiek'].'<br> <br>';
	echo '</h1>';
	echo '<h3>';
	echo $row['krótki_opis'].'<br>';
	echo '</h3>';
		}
?>
            </div>
            <div class="lekarze_foto4"></div>
        </div>
		<div class="lekarze">
            <div class="lekarze_opis">
                <h1>
				
				<?php 

		$sql = "SELECT * FROM `lekarz` WHERE `id_lekarz` = 5";

        $rs = mysqli_query($con, $sql);
		
		while ($row = $rs->fetch_assoc()) {
	echo $row['imię'].' ';
    echo $row['nazwisko'].'<br>';
	echo $row['stanowisko'].'<br>';
	echo "Wiek:";
	echo $row['wiek'].'<br> <br>';
	echo '</h1>';
	echo '<h3>';
	echo $row['krótki_opis'].'<br>';
	echo '</h3>';
		}
?>
            </div>
            <div class="lekarze_foto5"></div>
        </div>
        
        <br><br><br><br><br><br><br><br><br><br>
        
                
            </div>
            <div id="pies"></div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="flex-container-sm">
            <div class="sm"><a href="#" class="fa fa-facebook-square"></a></div>
            <div class="sm"><a href="#" class="fa fa-youtube-square"></a></div>
            <div class="sm"><a href="#" class="fa fa-instagram"></a></div>
            <div class="faq">Something:
                <ul>
                    <li class="stopka"><a href="#">Kontakt</a></li>
                    <li class="stopka"><a href="#">Klient indywidualny</a></li>
                    <li class="stopka"><a href="#">Sieci handlowe</a></li>
                    <li class="stopka"><a href="#">Transport</a></li>
                    <li class="stopka"><a href="#">Finanse</a></li>
                    <li class="stopka"><a href="#">Media</a></li>
                </ul>
            </div>
            <div class="faq"><b>Wszelkie prawa zastrzeżone</b><br><br>
                Wszystkie teksty, rysunki, zdjęcia oraz wszystkie inne informacje opublikowane na niniejszych stronach podlegają prawom autorskim firmy ABICOR BINZEL.
                <br><br>
                Wszelkie kopiowanie, dystrybucja, elektroniczne przetwarzanie oraz przesyłanie zawartości bez zezwolenia firmy ABICOR BINZEL jest zabronione.
                <br><br>
                Wszelkie prawa zastrzeżone <br>
                Alexander Binzel Schweisstechnik GmbH & Co. KG, Germany.
            </div>
        </div>
    <div id="authors">
        Kacper Małek ##### Paweł Zalewski ##### Krzysztof Graboń 51234
        
    </div>    


</body>