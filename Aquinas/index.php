

<!doctype html>
<html>
<head>
<!-- media query-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Boostrap csss-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="font/css/fontawesome.min.css">

<!-- font awesome-->
<link href="font/css/fontawesome.css" rel="stylesheet">
<link href="font/css/brands.css" rel="stylesheet">
<link href="font/css/solid.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>

<link type="text/css" href="css.css" rel="stylesheet">
<meta charset="utf-8">
<title>Welcome To St Thomas Aquinas Portal</title>

</head>
<nav class="navbar navbar-expand-lg mynavbar_color navbar-dark justify-content-center">
	<a class="navbar-brand navbar_margin" href="#"><img src="images/logo3.jpg" width="100px" height="60px" class="logo_margin">ST THOMAS AQUINAS CATHOLIC CHAPLAINCY PORTAL ENUGU </a>
	<a class="about" href="#">About Us</a>
	<a class="prog" href="#">Our Programme</a>
	<a class="contact" href="#">Contact Us</a>
	
</nav>
<body>
	<div class="container mt-3">
		<div class="row bg-info" style=" width:50%; margin-right:auto; margin-left:auto;">
			<form method="post"  >
				<div class="col-lg-12">
					<div class="row">
						<h2 class="text-danger">
						<?php
include ("connect.php");

if(isset($_POST['submit']))
{
    $user= $_POST['username'];
    $pass= $_POST['password'];


    $select= mysqli_query($connect, "select * from admin where binary 
    username= '$user' and password='$pass'")or die("could Not Login".mysqli_error(($connect)));
    $num= mysqli_num_rows($select);
    if(mysqli_num_rows($select))
    while($rows=mysqli_fetch_assoc($select))
    {
        $id= $rows['id'];
        $nweze= $rows['username'];
        $okey= $rows['password'];


        if($num>0)
        {
            setcookie("oka", $id,time()+3600);
            header("location:register.php");
        }
    
}
else {echo "wrong username or password";}
}
?>
						</h2>
						<div class="col-lg-12 mb-3 " > Username <input type="text" placeholder="USERNAME" name="username" class="form-control" style="width:100%"> </div>
						<div class="col-lg-12 mb-3">Password <input type="password" placeholder="PASSWORD" name="password" class="form-control" style="width: 100%;"></div>
						<div class="col-lg-12 mb-3"><input type="submit" name="submit" class="btn btn-primary" ></div>
					</div>
				</div>
			</form> 			
		</div>
	</div>
</body>
</html>
