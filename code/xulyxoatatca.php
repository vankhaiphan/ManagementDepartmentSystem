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

    if(isset($_POST['submit'])){//to run PHP script on submit
        if(!empty($_POST['checklist'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['checklist'] as $selected){
                $IDPB = $selected;
                // delete
                $sql = "DELETE FROM phongban WHERE IDPB='$IDPB'";
                if (mysqli_query($conn, $sql)) {
                    // xoa nhung nhan vien trong phong ban bi xoa
                    $sql = "DELETE FROM nhanvien WHERE IDPB='$IDPB'";
                    if (mysqli_query($conn, $sql)) {
                        header("Location:xoatatca.php");
                    }
                }                
            }
        }
        else
            header("Location:xoatatca.php");
    }
    
    // Close connection
    mysqli_close($conn);            
?>