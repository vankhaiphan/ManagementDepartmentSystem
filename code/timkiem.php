<!DOCTYPE html>
<html>
    <head>
        <title>Tìm kiếm</title>
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
            .form-control:focus {
                box-shadow: none;
            }

            .form-control-underlined {
                border-width: 0;
                border-bottom-width: 1px;
                border-radius: 0;
                padding-left: 0;
            }
        </style>
    </head>
    <body>   
        <p class="form-header">Tìm kiếm</p>        
        <div class="container-fluid">
            <form action="timkiem.php" name="timkiem" method="post">
                <div class="row mb-4">
                    <div class="form-group col-md-3">
                        <select class="form-control" name="tieuchi">
                            <option value="IDNV">ID nhân viên</option>
                            <option value="Hoten">Họ tên nhân viên</option>
                            <option value="IDPB">ID phòng ban</option>
                            <option value="TenPB">Tên phòng ban</option>
                        </select>
                    </div>
                    <div class="form-group col-md-7">
                        <input type="text" name="txtSearch" placeholder="Tìm kiếm" class="form-control form-control-underlined">
                    </div>                    
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary rounded-pill btn-block shadow-sm">Tìm kiếm</button>
                    </div>
                </div> 
            </form>                                  
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
            if (empty($_REQUEST["txtSearch"]))
            {
                // $sql = "SELECT IDNV, Hoten, IDPB, Diachi FROM nhanvien";
                // header("Location:timkiem.php");
            }  
            else
            {
                $txtSearch = $_REQUEST["txtSearch"];
                // echo $txtSearch;
                $tieuchi = $_REQUEST["tieuchi"];                
                // echo $tieuchi;
                $sql = null;
                $type = null;
                switch ($tieuchi) {
                    case 'IDNV':
                        $sql = "SELECT IDNV, Hoten, IDPB, Diachi FROM nhanvien WHERE IDNV LIKE '%$txtSearch%'";
                        $type = 1;
                        break;
                    case 'Hoten':
                        $sql = "SELECT IDNV, Hoten, IDPB, Diachi FROM nhanvien WHERE Hoten LIKE '%$txtSearch%'";
                        $type = 1;
                        break;
                    case 'IDPB':
                        $sql = "SELECT IDPB, TenPB, Mota FROM phongban WHERE IDPB LIKE '%$txtSearch%'";                                        
                        $type = 2;
                        break;
                    case 'TenPB':
                        $sql = "SELECT IDPB, TenPB, Mota FROM phongban WHERE TenPB LIKE '%$txtSearch%'";
                        $type = 2;
                        break;
                    default:                        
                        break;
                }
                // echo $sql;  
                $result = mysqli_query($conn, $sql);            

                switch ($type) {
                    case 1:
                        if (mysqli_num_rows($result) > 0) {
                            // echo "<p class='form-header'>Danh sách nhân viên</p>";
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
                            // output data of each row
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
                            echo    "0 results";
                        }
                        break;
                    case 2:
                        if (mysqli_num_rows($result) > 0) {
                            // echo "<p class='form-header'>Danh sách phòng ban</p>";
                            // display as table html
                            echo    "<table class='table table-bordered'>  
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th>ID phòng ban</th>
                                                <th>Tên phòng ban</th>
                                                <th>Mô tả</th>
                                                <th>Danh sách nhân viên</th>
                                            </tr>
                                        </thead>";
                            // output data of each row
                            while($row = mysqli_fetch_array($result)) {
                                echo    "<tr>
                                            <td>".$row["IDPB"]."</td>
                                            <td>".$row["TenPB"]."</td>
                                            <td>".$row["Mota"]."</td>
                                            <td><a target='p3' href='xemthongtinNVPB.php?IDPB=".$row['IDPB']."'>Xem tại đây </a></td>
                                        </tr>";
                            }
                            echo    "</table>";
            
                        } else {
                            echo    "0 results";
                        }
                        break;
                    default:
                        # code...
                        break;
                }              
            }
                    
            // Close connection
            mysqli_close($conn);
        ?>
        </div>
    </body>
</html>