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


<h2>Product</h2>

<table>
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
