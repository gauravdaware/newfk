<!doctype html>
<html>
    <head>
        <title>Add Products</title>
    </head>
    <body>
    	<h1>Add Products</h1>
    <form method="post" action="<?php base_url();?>index.php/admin_controller/add_product" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td>Product name</td><td><input type="text" name="pname" value=""></td>
    		</tr>
    		<tr>
    			<td>Product Code</td><td><input type="text" name="pcode" value=""></td>
    		</tr>
			<tr>
    			<td>Product MRP</td><td><input type="text" name="mrp" value=""></td>
    		</tr>
    		<tr>
    			<td>Product SP</td><td><input type="text" name="sp" value=""></td>
    		</tr>
    		<tr>
    			<td>Product Stock</td><td><input type="text" name="stock" value=""></td>
    		</tr>
    		<tr>
    			<td>Product Image</td><td><input type="file" name="pimg"></td>
    		</tr>
    		<tr>
    			<td>Product Features</td><td><input type="text" name="pfeatures" value=""></td>
    		</tr>
    		<tr>
    			<td>Product Discription</td><td><input type="text" name="pdisc" value=""></td>
    		</tr>
    		<tr>
    			<td></td><td><input type="submit" name="add" value="Add"></td>
    		</tr>
    	</table>
    </form>
    </body>
</html>