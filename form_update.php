<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	//category
	$json2 = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data2 = json_decode($json2,true);
	$category = $data2['records'];
?>
<title> API Test </title>
		<link rel="stylesheet" href="style.css">

		
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="index.php?navigation=home" class="w3-bar-item w3-button">Home</a>
  <a href="product.php?navigation=product" class="w3-bar-item w3-button">Products</a>
  <a href="categories.php?navigation=categories" class="w3-bar-item w3-button">Category</a>
  <a href="form_create.php?navigation=create" class="w3-bar-item w3-button">Create Products</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
 
  
    <h1>API Test</h1>
  </div>
</div>
		<div id="box">		
				<h1> Update Product </h1>
</div>
			<table id="custom">
				<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
					Product:<input type="text" name="name" value="<?php echo $result['name'];?>"/> <br/><input class="w3-input w3-border w3-round-large" type="text" name="name" placeholder="Enter Product Name"/><br/><br/>
					Description:<input type="text" name="description" value="<?php echo $result['description']; ?>"/> <br/><textarea class="w3-input w3-border w3-round-large" name="description" placeholder="Enter Item Description"/></textarea><br/><br/>
					Price:<input type="text" name="price" value="<?php echo $result['price']; ?>"/> <br/><input class="w3-input w3-border w3-round-large" type="number" name="price" placeholder="Enter Product Price"/><br/><br/>
					Category:<select name="category"> <select class="w3-select w3-border" name="category">
					<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
						<?php
						foreach($category as $cview){
						?>
							<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
						<?php
						}
						?>
						</select>
					<input type="submit" name="submit" value="submit"/>

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
</html>
