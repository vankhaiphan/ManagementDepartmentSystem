<?php
    session_start();
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];
    if ($user == "" || $pass == "")
    {
        header("Location:login.php");
    }
    else
    {
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

        $sql = "SELECT * FROM admin WHERE username = '$user' and password = '$pass'";
        $result = mysqli_query($conn, $sql);            
        if (mysqli_num_rows($result) == 0)
        {
            header("Location:login.php");
        }
        else
        {
            $_SESSION["username"] = $user;
            ?>
            <script>
                window.parent.window.location.href = 'index.php';
            </script>
            <?php      
        }

        // Giai phong tap cac ban ghi trong $result
        mysqli_free_result($result);
        // Close connection
        mysqli_close($conn);
    }
?>