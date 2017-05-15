<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Product</title>

</head>
<body>
<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('product/create') ?>

    <label for="product_name">Product Name</label>
    <input type="input" name="product_name" /><br />

    <label for="product_detail">Product Detail</label>
    <textarea name="product_detail"></textarea><br />
    <!-- <label for="upload_file">Upload Image</label>
    <input name="file_path" type="file" id="file_path"> -->

	<br>
    <input type="submit" name="submit" value="Create product item" />

</form>

</body>
</html>