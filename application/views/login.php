<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <center>
      <div class="col-md-5 col-md-offset-3">
        <div class="alert alert-success">
          <div class="panel-heading">
            <h2>
              <Toko><span class="glyphicon glyphicon" aria-hidden="true"></span> Login Resto Yanik
            </h2>
            
            <p><span class="glyphicon glyphicon" aria-hidden="true"></span> Jl.Kh achmad yhani no 01, Bangsri,Jepara</p>
            </h2>
          </div>
          <div class="panel-body">
            <div class="alert alert-success">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              Masukkan username dengan benar!
            </div>
            <form action="" method="post">
              <div class="input-group">
                <span class="input-group-addon" id="username">Username</span>
                <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="username" required>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="password">Password</span>
                <input type="password" name="password" class="form-control" placeholder="password" aria-describedby="password" required>
              </div>
              <br>
              <div>
                <input type="submit" name="flogin" class="btn btn-block btn-primary" value="Login">
				
			</div>
		</div>
	</center>
</div>

</body>
</html>