<?php 
/**
* 
*/
require_once 'models/Product.php';
class ProductController
{
	
	function detail()
	{
		$id = $_GET['id'];
		$product = Product::find($id);
		include_once 'views/detail.php';
	}
	function delete(){
		$id = $_GET['id'];
		$product = Product::find($id);
		$product->delete();
		header('location: index.php');		
	}
}

 ?>