 
<?php 

 
	include("header.html");
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>akfjldskf</title>
</head>
<body>

 


	<!-- <button>
		order govno
	</button> -->


	<!-- <form action="index.php" method="get">
		<label for="username">userName: </label>
		<br/>
		<input type="text" name="username">
		<br/>

		<input type="submit" value="logIn">
	</form> -->
 	 

	<!-- <form action="index.php" method="post">
		<label for="quantity">quantity: </label>
		<br/>
		<input type="text" name="quantity">

		<br/>

		<input type="submit" value="total">
	</form> -->



	<!-- <form action="index.php" method="post">
		<label for="x">x: </label>
		<br/>
		<input type="text" name="x">

		<br/>

		<input type="submit" value="total">
	</form> -->


	<!-- <form action="index.php" method="post">
		<label for="username">username: </label>
		<br/>
		<input type="text" name="username">
		<br/>

		<label for="username">password: </label>
		<br/>
		<input type="text" name="password">
		<br/>

		<input type="submit" name="login" value="login">
	</form> -->



	<form action="index.php" method="post">
		<input type="radio" name="credit_card" value="visa">
		<br />
		<p>visa</p>
		<input type="radio" name="credit_card" value="master">
		<br />
		<p>master</p>
		<input type="radio" name="credit_card" value="ae">
		<br />
		<p>credit </p>
 		<input type="submit" name="confirm" value="confirm">
	</form>


</body>
</html>


<?php

 
 	include("footer.html");



 	setcookie('fav_food', "pizza", time() + (86400 * 2), "/");


 	foreach($_COOKIE as $Key => $value) {
		echo "{$key} = {$value} <br/>";
	}

	if(isset($_COOKIE["fav_food"])) {
		echo "slkdfjdklsf";
	}


	$_SESSION['username'] = 'Nick';

	echo $_SESSION['username'];
	
	

	// foreach($_SERVER as $key => $value) {

	// }
	 


// if(isset($_POST["confirm"])) {

	// 	$credit_card = null;

	// 	if(isset($_POST["credit_card"])) {
	// 		//use filter_input and Filter_sanitize_special_nums


	// 		$credit_card = $_POST["credit_card"];
	// 		echo $credit_card;
	// 	}
		
	// 	if($credit_card === 'visa') {
	// 		echo "Visa Sel";
	// 	}elseif($credit_card === 'master') {
	// 		echo "mast Sel";
	// 	}elseif($credit_card === 'ae') {
	// 		echo "ae Sel";
	// 	}
		
		
	// 	else {
	// 		echo "make a selec";
	// 	}
		 
	// }
  

 






 	// foreach($_POST as $key => $value) {
	// 	echo "{$key} = {$value} <br/>";
	// }

	// if(isset($_POST['login'])) {

	// 	$username = $_POST["username"];
	// 	$password = $_POST["password"];

	// 	if(empty($username)) {
	// 		echo "username is emp";
	// 	} elseif(empty($password)) {
	// 		echo "pass is emp";
			
	// 	} else {
	// 		echo "{$username} and {$password}";
	// 	}


	// 	echo "you tried";
	// }



//  $foods = array('apple', 'apple', 'apple');


//  echo $foods[0];

//  array_push($foods, '123');


//  $capitals = array("usa" => "meow", "usa" => "meow");

//  foreach($capitals as $key => $value) {
// 	echo "{$key} = {$value} <br/>";
//  }

 
 

//  foreach($foods as $food) {
// 	echo $food;

//  }
//  echo count($foods);


 	// $x = $_POST["x"];
 	// $total = null;

 	// $total = abs($x);

	// echo $total;

 	// for($i = 0; $i < 5; $i++) {
	// 	echo "hello {$i}" . '<br/>';

	// }





 	// $item = "pizza";

 	// $meow = 4.77;
 	// $quan = $_POST["quantity"];

	// $total = null;

	// $total = $quan * $meow;

	// echo "you have order {$quan} x {$item}s";
	// echo "total is {$total}";



	// echo"meow 123 23 123";
	// echo "mewo jslajfsd ";



	// $name = "bro";
	// echo " mewofsdjlk  {$name}";

 	// echo $_GET["username"] ;




?>