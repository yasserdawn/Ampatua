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
<title> API Test </title>
		<link rel="stylesheet" href="style.css">
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
 
  <div class="header">
    <h1>API Test</h1>
  </div>
</div>
<form action="pro_create.php" method="POST">
<div id="box">
<h1> Update New Product </h1>
<div class="w3-container">
	Product:<br/><input class="w3-input w3-border w3-round-large" type="text" name="name" placeholder="Enter Product Name"/><br/><br/>
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
