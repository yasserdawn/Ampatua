 <?php
	//category
	$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data = json_decode($json,true);
	$category = $data['records'];
?>
<html>
<title> API Test </title>
		<link rel="stylesheet" href="style.css">
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="index.php?navi=home" class="w3-bar-item w3-button">Home</a>
  <a href="product.php?navin=product" class="w3-bar-item w3-button">Products</a>
  <a href="categories.php?navi=categories" class="w3-bar-item w3-button">Category</a>
  <a href="form_create.php?navi=create" class="w3-bar-item w3-button">Create Products</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
 
  <div class="header">
    <h1>API Test</h1>
  </div>
</div>
<form action="pro_create.php" method="POST">
<div id="box">
<h1> Choose New Product </h1>
<div class="w3-container">
	Name:<br/><input class="w3-input w3-border w3-round-large" type="text" name="name" placeholder="Enter Product Name"/><br/><br/>
	Description:<br/><textarea class="w3-input w3-border w3-round-large" name="description" placeholder="Enter Item Description"/></textarea><br/><br/>
	Price:<br/><input class="w3-input w3-border w3-round-large" type="number" name="price" placeholder="Enter Product Price"/><br/><br/>
	Category:<select class="w3-select w3-border" name="category">
		<option value="">Category</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
<input type="submit" name="submit" value="submit"/>
<button type="Cancel" value="Cancel">Cancel</button>
</form>
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
 
     
</body>
</html>
