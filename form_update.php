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
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>

    <div class="navbar">	
        		<a href="index.php?page=home" id = "home">Home</a> class="w3-bar-item w3-button">Home</a>
			<a href="product.php?page=product" id = "product">Show</a> class="w3-bar-item w3-button">Products</a>
			<a href="categories.php?page=categories" id = "category">Category</a> class="w3-bar-item w3-button">Category</a>
			<a href="form_create.php?page=create" id = "create">Create</a> class="w3-bar-item w3-button">Create Products</a>	
					</div>
					<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
					
		<div class="form-style-5">		
				<h1> Update Product </h1>
				<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
					Product:<input type="text" name="name" value="<?php echo $result['name'];?>"/>
					Description:<input type="text" name="description" value="<?php echo $result['description']; ?>"/>
					Price:<input type="text" name="price" value="<?php echo $result['price']; ?>"/>
					Category:<select name="category">
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
 <h1>API Test</h1>
  </div>
</div>					
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
</div>	
</html>
