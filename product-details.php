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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
	 <div class="navbar">
        <ul>
            <li><a href="index.php?navigation=product">Products</a></li> class="w3-bar-item w3-button">Products</a>
            <li><a href="index.php?navigation=categories">Category</a></li> class="w3-bar-item w3-button">Category</a>
            <li><a href="index.php?navigation=create">Create</a></li> class="w3-bar-item w3-button">Create Products</a>
          </ul>
      </div>

 
<div id="contents">
<h2>Product Details</h2>

<table id="list">
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
                    <td id ="link"><a href="form_update.php?id=<?php echo $id ?>">Update</a> or
                    <a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></td>
                </tr>

            </table>
        </div> 
</div>    
</html>

