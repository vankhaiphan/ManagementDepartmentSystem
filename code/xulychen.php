<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dulieu";

    // Create connection with dbname
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $IDPB = $_REQUEST["IDPB"];
    $TenPB = $_REQUEST["TenPB"];
    $Mota = $_REQUEST["Mota"];
    
    // chen
    $sql = "INSERT INTO phongban (IDPB, TenPB, Mota)
            VALUES ('$IDPB', '$TenPB', '$Mota')";    
    if (mysqli_query($conn, $sql)) {
        header("Location:xemthongtinPB.php");
    }
?>