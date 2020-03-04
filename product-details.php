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
        <th>Product</th> </b><?php echo $result['product']; ?></p>
        <th>Description</th>  </b><?php echo $result['description']; ?></p>
        <th>Price</th>  </b><?php echo $result['price']; ?></p>
        <th>Category ID</th>  </b><?php echo $result['category']; ?></p>
    </tr>

	
</table>

    <a href="pro_update.php?id=<?php echo $id ?>">Update</a></td>
			<a class="bots" href="form_delete.php?id=<?php echo $id ?>">Delete</a>
</html>
