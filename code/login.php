<?php
    session_start();
    if(isset($_SESSION["username"]))
        header("Location:xemthongtinNV.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
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
            .login-or {
                position: relative;
                color: #aaa;
                margin-top: 10px;
                margin-bottom: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .span-or {
                display: block;
                position: absolute;
                left: 50%;
                top: -2px;
                margin-left: -25px;
                background-color: #E9ECEF;
                width: 50px;
                text-align: center;
            }
            .hr-or {
                height: 1px;
                margin-top: 0px !important;
                margin-bottom: 0px !important;
            }
            body {
				background-image: url("img/pic2.jpg");
			}
        </style>
    </head>
    <body>    
        <div class="container"> 
            <div class="row justify-content-md-center">
                <div class="col col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
				<div class="col-10 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                    <div class="jumbotron" style="margin-top:10vw;">
                        <form action="xulylogin.php" name="login" method="post">
                            <p class="form-header">Đăng nhập</p>
                            <div class="form-group">  
                                <label>Username</label>          
                                <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập">
                            </div>
                            <div class="form-group">
                                <label>Password</label>          
                                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Đăng nhập</button>
                            <div class="col-md-12 ">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or">hoặc</span>
                                </div>
                           </div>                           
                        </form>  
                        <form action="dangky.php" method="post">
                            <button type="submit" class="btn btn-outline-primary btn-block" name="submit">Đăng ký tài khoản</button>      
                        </form>                        
                    </div>
                </div>
                <div class="col col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
            </div>            
        </div>        
    </body>
</html>