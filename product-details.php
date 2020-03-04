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

  <a href="index.php?navi=home">
  <a href="product.php?navi=product">
  <a href="categories.php?navi=categories">
  <a href="form_create.php?navi=create">

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

