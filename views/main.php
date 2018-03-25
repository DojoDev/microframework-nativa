<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<title>Miniframework Nativa - By Raffael Nunes</title>
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Microframework Nativa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li ><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>blog">Blog</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/register">Regitrar-Se</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
    	<div class="row">
    		<?php require($view); ?>
    	</div>
    </div> 

</body>
</html>