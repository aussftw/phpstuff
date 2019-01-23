<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');    
    if($connection) {
    echo "We are connected";
    } else {
    die("Database connection failed");
    }
    
   $query="SELECT *  FROM users";
   $result = mysqli_query($connection, $query);

   if(!$result) {
 			die('Query FAILED' . mysqli_error());
   }
    
    


?>
 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<?php 

				while($row = mysqli_fetch_assoc($result)) {

					print_r($row);

				}

			?>
		</div>



</div>


<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>
</html>