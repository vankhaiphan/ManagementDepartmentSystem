<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Đăng ký tài khoản</title>
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
						<form action="xulydangky.php" method="post">
							<p class="form-header">Đăng ký tài khoản</p>
							<div class="form-group">
							  	<label>Username</label>
							  	<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
							  	<label>Password</label>
							  	<input type="password" class="form-control" name="password">
                            </div>
							<button type="submit" class="btn btn-primary btn-block">Tạo tài khoản</button>
						</form>
					</div>
				</div>
				<div class="col col-sm-1 col-md-2 col-lg-3 col-xl-4"></div>
			</div>				
        </div>		
    </body>
</html>