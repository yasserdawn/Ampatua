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
		<div id ="link">	
			<td><a href="?navigation=formup&id=<?php echo $id ?>">Update</a></td>
        <td><a href="p_delete.php?id=<?php echo $id ?>">Delete</a></td>
    </tr>

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

