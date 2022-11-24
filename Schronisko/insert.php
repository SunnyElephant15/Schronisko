<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        $con = mysqli_connect('localhost', 'root', '', 'schroniskobaza');
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $imię =  $_REQUEST['imię'];
        $nazwisko = $_REQUEST['nazwisko'];
        $email =  $_REQUEST['email'];
        $numer_telefonu = $_REQUEST['numer_telefonu'];
        $rodzaj = $_REQUEST['rodzaj'];
		$wiadomość = $_REQUEST['wiadomość'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO zgłoszenie VALUES ('','$imię', 
            '$nazwisko','$email','$numer_telefonu','$rodzaj','$wiadomość')";
          
        if(mysqli_query($con, $sql)){
            echo "<h3>Udane przesłanie formularza</h3>"; 
			echo '<a href="main.html">Powrót na stronę główną</a>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }
          
        // Close connection
        mysqli_close($con);
        ?>
    </center>
</body>
  
</html>