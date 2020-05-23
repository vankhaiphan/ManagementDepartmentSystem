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
    // delete
    $sql = "DELETE FROM phongban WHERE IDPB='$IDPB'";
    if (mysqli_query($conn, $sql)) {
        // xoa nhung nhan vien trong phong ban bi xoa
        $sql = "DELETE FROM nhanvien WHERE IDPB='$IDPB'";
        if (mysqli_query($conn, $sql)) {
            header("Location:xoa.php");
        }
    }

    // Close connection
    mysqli_close($conn);            
?>