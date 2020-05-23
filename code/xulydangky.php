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

    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];

    // Neu bo trong -> nhap lai
    if ((strlen($user) == 0) || (strlen($pass) == 0))
        header("Location:dangky.php");
    else
    {
        // check ton tai user chua
        $sql = "SELECT * FROM admin WHERE username = '$user'";
        $result = mysqli_query($conn, $sql);            
        if (mysqli_num_rows($result) != 0)
        {
            header("Location:login.php");
        }
        else
        {
            // dang ky
            $sql = "INSERT INTO admin (username, password)
            VALUES ('$user', '$pass')";    
            if (mysqli_query($conn, $sql)) {
                header("Location:login.php");
            }
        }        
    }    

    // Close connection
    mysqli_close($conn);
?>