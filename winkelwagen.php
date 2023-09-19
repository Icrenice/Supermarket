<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product Is Verwijderd Van De Winkelwagen!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bani Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/new.css">
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
        <div style="width:700px; margin:50 auto;">
        <br>         <br>
        <br>
        <br>
            <br>
            <br>

<h2>Winkelwagen</h2> 
<br>
            <br>
            <br>            

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="winkelwagen.php">
<img src="Image/cart-icon.png" /> Producten: 
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>Product</td>
<td>Hoeveelheid</td>
<td>Prijs</td>
<td>Totaal</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Verwijder Product</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "€".$product["price"]; ?></td>
<td><?php echo "€".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>Totaal: <?php echo "€".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>De Winkelwagen Is Leeg</h3>";
	}
?>
</div>

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
