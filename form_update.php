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
        <a href="product.php?navigation=product">Products</a>
        <a href="categories.php?navigation=categories">Category</a>
        <a href="form_create.php?navigation=create">Create</a>
    </div>
	
		<?php
		foreach($category as $cview){
		?>
			<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
		
		</select>
	<input type="submit" name="submit" value="submit"/>

	
</form>


</html>