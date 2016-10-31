<?php
session_start();
if(isset($_SESSION['user'])){
  header('Location: dashboard.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Medical Sangallo amministrazione</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bower_components/login/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="bower_components/login/css/form-elements.css">
        <link rel="stylesheet" href="bower_components/login/css/style-login.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Icona fav, piu icone per mobile-->
        <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bower_components/login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bower_components/login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bower_components/login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="bower_components/login/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>MEDICAL SANGALLO</strong><br>Amministrazione del sito</h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Benvenuto nel pannello di admin</h3>
                            		<p>Inserisci il tuo nomeutente e password</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="dashboard.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user" placeholder="Username" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn btn-primary"><strong>ENTRA</strong></button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="bower_components/login/js/jquery-1.11.1.min.js"></script>
        <script src="bower_components/login/bootstrap/js/bootstrap.min.js"></script>
        <script src="bower_components/login/js/jquery.backstretch.min.js"></script>
        <script src="bower_components/login/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
