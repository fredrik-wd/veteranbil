<html>
    
    <head>
        <title>DB_Process</title>
    </head>
    
    <body>
        
        <?php
                    
                    $servername = "fwinvest.eu.mysql";
                    $username = "fwinvest_eu_bilbutikk";
                    $password = "SKJULT AV SIKKERHETSHENSYN";
                    $dbname = "fwinvest_eu_bilbutikk";
                    
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Tilkobling til databsen feilet: " . $conn->connect_error);
                    } 
                    
                    //SIKKERHETSJEKK AV SQL-INJECT
                    $reg = mysqli_real_escape_string($conn, $_POST['reg']);
                    $modell = mysqli_real_escape_string($conn, $_POST['modell']);
                    $merke = mysqli_real_escape_string($conn, $_POST['merke']);
                    $farge = mysqli_real_escape_string($conn, $_POST['farge']);
                    $ar = mysqli_real_escape_string($conn, $_POST['ar']);
                    $solgt = mysqli_real_escape_string($conn, $_POST['solgt']);
                    $eu = mysqli_real_escape_string($conn, $_POST['eu']);
                    
                    //INSERT
                    $sql = "INSERT INTO bil (reg, modell, merke, farge, ar, solgt, eu) VALUES ('$reg', '$modell', '$merke', '$farge', '$ar', '$solgt', '$eu')";
                    if(mysqli_query($conn, $sql)){
                        echo "Bilen ble lagt til i databasen.";
                    } else{
                        echo "ERROR: Insettingen feilet $sql. " . mysqli_error($conn);
                    }
                     
                    // STENG TILKOBLING
                    $conn->close();
       
                    
        ?>
        
        
        <a href="https://fwinvest.eu/it/veteran">TILBAKE</a>
        
        
    </body>
    
    
    
    
    
</html>
