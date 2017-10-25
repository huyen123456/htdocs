<?php
require_once('util/main.php');
require_once('model/product_db.php');

// Set the featured product IDs in an array
$featured_product_ids = array(1, 2, 3, 4, 7, 6, 10,11);
// Note: You could also store a list of featured products in the database

// Get an array of featured products from the database
$products = array();
foreach ($featured_product_ids as $product_id) {
    $product = get_product($product_id);
    $products[] = $product;   // add product to array
}

// Display the home page
include('home_view.php');
?>