<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        ?>     
        <!DOCTYPE html>
        <html>
            <head>
                <title>Trang chủ</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            </head>
            <frameset border = "1" rows = "55, *, 40">
                <frame name = "p1" src = "header.php"></frame>
                <frameset cols = "215, *, 180">
                    <frame name = "p2" src = "menu.php"></frame>
                    <frame name = "p3" src = "login.php"></frame>
                    <frame name = "p4" src = "image.php"></frame>
                </frameset>        
                <frame name = "p5" src = "footer.php"></frame>
            </frameset>
            <body>        
            </body>
        </html>   
    <?php
    }
    else{
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Trang chủ</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            </head>
            <frameset border = "1" rows = "55, *, 40">
                <frame name = "p1" src = "header.php"></frame>
                <frameset cols = "215, *, 180">
                    <frame name = "p2" src = "menu_login.php"></frame>
                    <frame name = "p3" src = "login.php"></frame>
                    <frame name = "p4" src = "image.php"></frame>
                </frameset>        
                <frame name = "p5" src = "footer.php"></frame>
            </frameset>
            <body>        
            </body>
        </html>
    <?php
    }
?>