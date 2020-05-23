<html>
    <head>
        <title>Xem thông tin nhân viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <style>
            .form-header {         
				font-size: xx-large;
				text-align: center;	
				font-weight: bold;
			}
        </style>
    </head>
    <body>
        <p class="form-header">Danh sách nhân viên</p>
        <div class="container-fluid">
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

            // select data from db
            $sql = "SELECT IDNV, Hoten, IDPB, Diachi FROM nhanvien";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // display as table html
                echo    "<table class='table table-bordered'>  
                            <thead class='thead-dark'>                          
                                <tr>
                                    <th>ID nhân viên</th>
                                    <th>Họ và tên</th>
                                    <th>ID phòng ban</th>
                                    <th>Địa chỉ</th>
                                </tr>
                            </thead>";
                //  output data of each row
                while($row = mysqli_fetch_array($result)) {
                    echo    "<tr>
                                <td>".$row["IDNV"]."</td>
                                <td>".$row["Hoten"]."</td>
                                <td>".$row["IDPB"]."</td>
                                <td>".$row["Diachi"]."</td>
                            </tr>";
                }
                echo    "</table>";

            } else {
                echo    "0 result";
            }

            // Close connection
            mysqli_close($conn);
        ?>
        </div>
    </body>
</html>