<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);
$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];
$value = $list;
?>
<html> 
    <head>  
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
	 <div class="navbar">
        <ul>
            <li><a href="index.php?navigation=product">Products</a></li>
            <li><a href="index.php?navigation=categories">Category</a></li>
            <li><a href="index.php?navigation=create">Create</a></li>
          </ul>
      </div>

    <div class="navbar">
        <a href="index.php?navigation=product">Show</a>
        <a href="index.php?navigation=categories">Category</a>
        <a href="index.php?navigation=create">Create</a>
        <a href="index.php?navigation=delete">Delete</a>
    </div>

<h2>Product</h2>

<table>
    <tr>
        <th>Product</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category ID</th>
    </tr>


</table>

    
</html>
