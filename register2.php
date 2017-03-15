<?php
include 'storage.php';
?>
<html>
<head>
<title>Register</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="alphadose.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet"> 
<style>

</style>
<body>
<div class="container-fluid">
<marquee scrollamount="25"><h1><span style="font-family: 'Audiowide', cursive;">Just Another Random Registration Page :|</span></h1></marquee>

<ul class="nav nav-pills nav-justified">
  			<li role="presentation"  ><a href="index.php"><span style="font-family: 'Bungee Shade', cursive;font-size: 25;">Login</span></a></li>
  			<li role="presentation" class="active" ><a href="register2.php"><span style="font-family: 'Bungee Shade', cursive;font-size: 25;">Register</span></a></li>
  			
  			
</ul>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
<div class="col-lg-4 col-md-3 col-sm-2 col-xs-0 "></div>

<div class="col-lg-5 col-md-7 col-sm-9 col-xs-12 ">
                        <form name="start" method="post" action="update.php">
                        <div class="input-group">
  			             <span class="input-group-addon">Name</span>
  			             <input type="text" class="form-control" placeholder="Username" name="name"/>
  		              </div>

  		              <br />

  		              <div class="input-group">
  			             <span class="input-group-addon">Age</span>
                              <input type="number" class="form-control" name="age" />
  			
  		              </div>

  		              <br />

  		              <div class="input-group">
  			             <span class="input-group-addon">Password</span>
  			             <input type="Password" class="form-control" name="pass"/>
  			
                        </div>
                        </br>
                        <div class="input-group">
                               <span class="input-group-addon">Link</span>
                              <input type="text" class="form-control" name="link"/>
                              <br> </div>
                              <br>


                              <button type="submit" name="submit" class="btn btn-default">Submit</button>
        
                       
                        <br>
                        </form>
</div>
<br>
</div>
<div class="row">
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ">
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">
<h1>Please do not leave any field empty</h1>
</div>
</div>






</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>