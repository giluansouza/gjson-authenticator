<?php
ob_start();//controlar o cache, assim carrega apenas uma vez

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GJSON/Authenticator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }
        .bg {
            background-image: url("storage/img/mount-hutton.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            height: 96vh;
        }
        .footer-shadow {
            width: 100%;
            height: 4vh;
            background-color: rgba(0,0,0,0.5);
            text-align: right;
            padding: 0 10px; 
        }
    </style>
</head>
<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center" style="background: white; padding:20px;
            box-shadow: 10px 10px 5px rgba(0,0,0,0.7); margin-top:40px">
                <h1>GJSON Authenticator</h1>
                <p style="font-style: italic;">Login with Google Authenticator Time-Based</p>
                <hr>
                <p style="font-style: italic;">Tela de Login com código</p>
                <form action="verify.php" method="post">
                    <input type="number" class="form-control" name="code" placeholder="Enter Code"
                    style="font-size: xx-larger; width: 200px; border-radius: 0px; text-align: center;
                    display:inline; color:#0275d8;">
                    <br><br>
                    <button type="submit" class="btn btn-md btn-primary" style="width: 200px; border-radius:0px;">
                        Verify Code
                    </button>
                </form> 
            </div>
        </div>
    </div>
    <div class="footer-shadow text-white">
        <?= $_ENV['APP_NAME'].' '.$_ENV['APP_VERSION'] ?>
    </div>
</body>
</html>

<?php
ob_end_flush();