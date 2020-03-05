<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];
 
if(isset($_POST['search'])){
   $search = $_POST['search'];
   $jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
   $res = json_decode($jsearch,true);

   $list = $res['records'];
   
}else{
   $list = $data['records'];
}
?>
<html>
<title> API Test </title>
		<link rel="stylesheet" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="index.php?navigation=home" class="w3-bar-item w3-button">Home</a>
  <a href="product.php?navigation=product" class="w3-bar-item w3-button">Products</a>
  <a href="categories.php?navigation=home" class="w3-bar-item w3-button">Category</a>
  <a href="form_create.php?navigation=home" class="w3-bar-item w3-button">Create Products</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  
    <h1>API Test</h1>
  </div>
</div>
<div id="box">
<h1> Product List </h1>
<form action="product.php?navigation=product" method="POST">
<div id="search">
	Search:<input type="text" name="search" placeholder="Enter Product Name">
		<input type="submit" name="submit" value="Search">
	</form>


<table id="custom">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['id'];?></td>
          <td><a href="product-details.php?navigation=details<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
    ?>
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

 
