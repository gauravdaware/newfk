<!doctype html>
<html>
    <head>

        <title>Add Products</title>
    <style>
    table{  
    }
        tr,td{
            padding: 5px;
        }
        input,textarea{
            padding: 5px;
            width: 200px;
        }
    </style>
    </head>
    <body>
        <h1>Add Products</h1>
        <p style="color:red"><?php echo $msg; ?></p>
    <form method="post" action="<?php echo base_url();?>index.php/admin_controller/add_product" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td>Product name</td><td><input type="text" name="pname" value="<?php echo set_value('pname');?>"></td><?php echo form_error('pname') ?>
    		</tr>
    		<tr>
    			<td>Product Code</td><td><input type="text" name="pcode" value="<?php echo set_value('pcode');?>"></td><?php echo form_error('pcode') ?>
    		</tr>
			<tr>
    			<td>Product MRP</td><td><input type="text" name="mrp" value="<?php echo set_value('mrp');?>"></td><?php echo form_error('mrp') ?>
    		</tr>
    		<tr>
    			<td>Product SP</td><td><input type="text" name="sp" value="<?php echo set_value('sp');?>"></td><?php echo form_error('sp') ?>
    		</tr>
    		<tr>
    			<td>Product Stock</td><td><input type="text" name="stock" value="<?php echo set_value('stock');?>"></td><?php echo form_error('stock') ?>
    		</tr>
    		<tr>
    			<td>Product Image</td><td><input type="file" name="pimg" value=""></td>
    		</tr>
    		<tr>
    			<td>Product Features</td><td><textarea name="pfeatures"><?php echo set_value('pfeatures');?></textarea></td>
    		</tr>
    		<tr>
    			<td>Product Discription</td><td><textarea name="pdisc"><?php echo set_value('pdisc');?></textarea></td>
    		</tr>
    		<tr>
    			<td></td><td><input type="submit" name="add" value="Add"></td>
    		</tr>
    	</table>
    </form>
    </body>
</html>