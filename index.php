<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login With JS</title>
  </head>
  <body>
    <div class="container">
    	<div class="row ">
    		<div style="margin-top: 50px;" class="col-lg mx-auto">
    			<h3 align="center"><b>Alkalvi Coding</b></h3>
    			<h4 align="center"><b>Login With JS</b></h4>
    		</div>
    	</div>
		<div class="row">
			<div style="margin-top: 20px;" class="col-lg-4 mx-auto">
				<div class="card">
					<div class="card-header">
						<h3>Form Login</h3>
						<div align="center" style="color: red" id="message"></div>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input id="username" type="" class="form-control" name="username" placeholder="Username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input id="password" type="password" name="password" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="card-footer">
						<button id="login"  class="btn btn-primary">Login</button>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   <script type="text/javascript">
   			$(document).ready(function() {
   				$("#login").click(function () {
   					var username = document.getElementById('username').value; 
   					var password = document.getElementById('password').value;
   					$.ajax({
   						url:"logincek.php",
   						type:"POST",
   						data:{
   						username:username,
   						password:password
   						},
   						success:function(response) {
   							msg ="";
   							if (response == "oke") {
   								$("#login").html("<img src='loading.gif' width='24'/> &nbsp; Login");
   								setTimeout('window.location.href="beranda.php";',4000);
   							}else{
   							$("#login").html("<img src='loading.gif' width='24'/> &nbsp;Login");
   							var a= setTimeout('$("#login").html("login"),$("#message").html("Username/Password Salah");',4000);
   							}
   						}

   				});
   			});

   		});


   </script>
  </body>
</html>