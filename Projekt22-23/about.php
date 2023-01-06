

<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "projekt22-23";

    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$con){
        die("sikertelen csatlakozas");
    }

    /*$conn = mysqli_connect('localhost', 'root');

    if($conn){
        echo "Sikeres csatlakozas";
    }
    else {
        echo "Sikertelen csatlakozas";
    }

    mysqli_select_db($conn, 'teremfoglalas');
    $nev = $_POST['nev'];
    $email = $_POST['email'];
    $terem = $_POST['terem'];
    $foglalas = $_POST['foglalas'];

    $query = "INSERT INTO foglalasok (nev, email, terem, foglalas) VALUES ('$nev', '$email', '$terem', '$foglalas')";

    mysqli_query($conn, $query);
    header("Location: index.php");*/
?>

