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

  <div class="navbar">
        <a href="index.php?navigation=product">Product</a>
        <a href="index.php?navigation=categories">Category</a>
        <a href="index.php?navigation=create">Create</a>
        <a href="index.php?navigation=delete">Delete</a>
    </div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  <h1>API Test</h1>
  </div>
<div id="box">
<h2>Product Details</h2>

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
</table>
                    <td id ="link"><a href="form_update.php?id=<?php echo $id ?>">Update</a> or
                    <a href="p_delete.php?id=<?php echo $id ?>">Delete</a></td>
                </tr>

            </table>
        </div>
</body>
</html>

