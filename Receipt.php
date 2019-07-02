<?php

session_start(); 

?>

<!doctype html>



<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check Out - I got 99 Toppings</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.php">Home</a>
					</li>
							<li>
								<a href="Menu.php">Menu</a>
							</li>
							<li>
								<a href="Drink.php">Drinks</a>
							</li>
							<li>
								<a href="CreateOwn.php">Create Own</a>
					<li class="menu">
						<a href="Checkout.php">Check Out</a>
					</li>
					<li>
						<a href="Register.php">Register</a>
					</li>
					<li>
						<a href="Login.php">Login</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
					<li>
						<a href="AboutUs.php">About Us</a>
					</li>
					<li>
						<a href="Receipt.php">Receipt</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Order Receipt</h1>
				</div>
			</div>
			<div>
			<h1>Checkout Complete - Thank You</h1>
			<ul id="checkoutsteps">
			<li>Shopping Cart</li>
			<li>Shipping Address</li>
			<li>Billing &amp; Payment</li>
			<li>Confirmation</li>
			<li class="last currentstep">Receipt</li>
</ul>
<p>Thank you for your order. You will receive an e-mail confirmation shortly and will be contacted again when your Pizza is ready. 
		Please print this page for your records.</p>
<h2>Products</h2>
<table cellspacing="0" id="cartTbl">
  <thead>
    <tr class="headings">
      <th class="product">Item</td>
      <th class="price">Price</td>
      <th class="quantity">Quantity</td>
      <th class="price">Total</td>
    </tr>
  </thead>
  <tbody>
    {loop items="#receipt.cart.products" value="product"}
      <tr>
      <td class="product">
        <div class="product-img"><a href="{#product.url}">{#product.primaryImages.thumb.tag}</a></div>
        <div class="product-name"><a href="{#product.url}">{#product.productName}</a>
        {loop items="#product.options" value="option"}
          <br />{#option.label}: {#option.value}
        {/loop}
      </td>
      <td class="price">{#product.currentPrice.value}{if #product.pricePerUnit exists && #product.pricePerUnit != "None"} / {#product.pricePerUnit}{/if}</td>
      <td class="quantity">{#product.quantityTotal.withFraction}</td>
      <td class="price">{#product.totalPrice.value}</td>
    </tr>
    {/loop} 
  <tr class="totals">
    <td>&nbsp;</td>
    <td class="quantity-span" colspan="2">Subtotal</td>
    <td class="price">{#receipt.cart.subtotalBeforeDiscounts}</td>
  </tr> 
  {if #receipt.cart.coupons}
    {loop items="#receipt.cart.coupons" value="coupon"}
      <tr class="totals">
        <td>&nbsp;</td>
        <td class="quantity-span" colspan="2">{#coupon.name}<br />({#coupon.code})</td>
        <td class="price">-{#coupon.savingsValue}</td>
      </tr>
    {/loop}
    <tr class="totals">
      <td>&nbsp;</td>
      <td class="quantity-span" colspan="2">Subtotal</td>
      <td class="price">{#receipt.cart.subtotal}</td>
    </tr> 
  {/if} 
  <tr class="totals">
    <td>&nbsp;</td>
    <td class="quantity-span" colspan="2">Shipping</td>
    <td class="price">{#receipt.cart.shipping.total}</td>
    </tr> 
    <tr class="totals">
      <td>&nbsp;</td>
      <td class="quantity-span" colspan="2">Sales Tax</td>
      <td class="price">{#receipt.cart.taxes.total}</td>
    </tr> 
    <tr class="totals">
      <td>&nbsp;</td>
      <td class="quantity-span" colspan="2">Total</td>
      <td class="price">{#receipt.cart.total}</td>
    </tr> 
  </tbody>
</table>
<h2>Shipping Address</h2>
<p><?php Echo $_SESSION['Address'];?></p>

<h2>Billing Address</h2>
<p><?php Echo $_SESSION['Address'];?></p>
  
<h2>Credit Card</h2>
<p>
  <?php Echo $_SESSION['CCType'];?>
</p>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="" class="facebook">Facebook</a>
					<a href="" class="twitter">Twitter</a>
					<a href="" class="googleplus">GP</a>
					<a href="" class="pinterest">Pinterest</a>
				</div>
				<p>&copy; I got 99 Toppings. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>