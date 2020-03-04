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
    <head>  
      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <div class="navbar">
        <a href="index.php?navi=product">Show</a>
        <a href="index.php?navi=categories">Category</a>
        <a href="index.php?navi=create">Create</a>
        <a href="index.php?navi=delete">Delete</a>
    </div> 
					
		<div id="box">		
				<h1> Update Product </h1>
</div>
				<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
					Product:<input type="text" name="name" value="<?php echo $result['name'];?>"/>
					Description:<input type="text" name="description" value="<?php echo $result['description']; ?>"/>
					Price:<input type="text" name="price" value="<?php echo $result['price']; ?>"/>
					Category:<select name="category">
					<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
						<?php
						foreach($category as $cview){
						?>
							<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
						<?php
						}
						?>
						</select>
					<input type="submit" name="submit" value="submit"/>

				</form>

</html>
