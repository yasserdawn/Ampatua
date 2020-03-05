<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);
$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];
$value = $list;
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
<h2>Product Details</h2>
	</div>
<table id="custom">
    <tr>
        <th>Product</th> </b>
        <th>Description</th>  
        <th>Price</th>  </b>
        <th>Category ID</th>  
    </tr>

		<tr>
                    <td><?php echo $value['name'];?></td>
                    <td><?php echo $value['description'];?></td>
                    <td><?php echo $value['price'];?></td>
                    <td><?php echo $value['category_id'];?></td>
		</tr>
			<a href="form_update.php?id=<?php echo $id ?>">Update</a> or
							<a href="p_delete.php?id=<?php echo $id ?>">Delete</a> 
</table>

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

