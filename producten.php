<?php
session_start();
// include('db.php');
include('dbconfig.php'); /*local*/
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is gevoegd</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is al gevoegd</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is gevoegd!</div>";
	}

	}
}
?>
<br>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bani Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/new.css">
    <link rel="stylesheet" href="Styles/style.css">
    </head>
<body data-spy="scroll" data-target="#menu">

<!--- Start Home Section -->
	


<!---navigatie--->
<nav class="navbar navbar-dark navbar-expand-md fixed-top">

    <div class="container-fluid">
         <a class="navbar-brand" href="Bani.html"><img height="65px" src="Image/banilogo.PNG"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                 <span class="navbar-toggler-icon"></span>
             </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ml-auto"> 
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="Image/person.png">Login/Aanmelden</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="winkelwagen.php"><img src="Image/shoppingcart.png">Winkelwagen</a>
                        </li>
                    </ul> 
          </div>

                <ul class="fixed-top item2">
                    <div class="container-fluid">
                        <li class="item"><a class="item3" href="Bani.html">Thuispagina</a></li>
                        <li class="item"><a class="item3" href="aanbieding.php">Aanbiedingen</a></li>
                        <li class="item"><a class="item3" href="producten.php">Boodschappen</a></li>
                        <li class="item"><a class="item3" href="recepten.php">Recepten</a></li>
                        <li class="item"><a class="item3" href="contact.php">Contact/Info</a></li>
               </div> 
            </ul>
        </div>

        </nav>
        <div style="width:700px; margin: 50 auto;">
        <br>         <br>
        <br>
        <br>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="winkelwagen.php"><img src="Image/cart-icon.png" /> Winkelwagen<span><?php echo $cart_count; ?></span></a>
</div>
<br>
<br>
<?php
}

$result = mysqli_query($conn,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>€".$row['price']."</div>
			  <button type='submit' class='buy'>Koop Nu</button>
			  </form>
		   	  </div>";
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />
</div>
</body>
   
<footer>
    <img src="Image/banilogo.PNG" height="100px">
		 <p></p>
		 <strong> Locatie </strong>
		 <p>Lunteren Oude Dorpsweg 14<br> 1214 BA</p>
		 <strong> Contact Info </strong>
		 <p> 0674925398 <br>@infoadbani.nl</p>
</footer>

</html>