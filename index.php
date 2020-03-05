<html>
<head>

<title> API Test </title>
		<link rel="stylesheet" href="style.css">

		
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="index.php?navigation=home" class="w3-bar-item w3-button">Home</a>
  <a href="index.php?navigation=product" class="w3-bar-item w3-button">Products</a>
  <a href="index.php?navigation=categories" class="w3-bar-item w3-button">Category</a>
  <a href="index.php?navigation=create" class="w3-bar-item w3-button">Create Products</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
 
  
    <h1>API Test</h1>
  </div>
</div>
	<?php
	switch($navigation){
		case 'Home':
		require_once('index.php');
		break;
		case 'product':
		require_once('product.php');
		break;	
		case 'categories':
		require_once('categories.php');
		break;
          	case 'create':
          	require_once 'form_create.php';
          	break;
		case 'details':
		require_once 'product-details.php';
            	break;
         
           
        }

?>
 

<script>
function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
  document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
 <div id="footer">
		<h3>Footer</h3>
		</div>
</html>
