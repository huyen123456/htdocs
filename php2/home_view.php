<?php include 'view/header.php'; ?>
<?php include 'view/sidebar.php'; ?>
      <!-- display products -->
    
    <div class="shoes"> 
        <div class="container">
        <?php foreach ($products as $product) :
        // Get product data
        $list_price = $product['listPrice'];
        $discount_percent = $product['discountPercent'];
        $description = $product['description'];
        
        // Calculate unit price
        $discount_amount = round($list_price * ($discount_percent / 100.0), 2);
        $unit_price = $list_price - $discount_amount;

        // Get first paragraph of description
        $description = add_tags($description);
        $i = strpos($description, "</p>");
        $description = substr($description, 3, $i);
        
    ?>    
        <div class="product-one"> 
                <div class="col-md-3 product-left">
                    <div class="p-one">                            
                            <a href="catalog?product_id=<?php echo $product['productID']; ?>">
                                <img src="/php2/images/<?php echo $product['productCode']; ?>_m.png" alt="" width="150px" height="150px"/>
                                <div class="mask">
                                    <span>Xem chi tiết</span>
                                </div>
                            </a>
                        <h4><?php echo $product['productName']; ?></h4>
                        <p><a class="item_add" href=""><i></i> <span class=" item_price">$<?php echo number_format($unit_price, 2); ?></span></a></p>
                        <br>
                        
                    </div>
                </div>
        </div>
            <div class="product-one"> 
                <div class="col-md-3 product-left">
                    <div class="p-one">                            
                            <a href="catalog?product_id=<?php echo $product['productID']; ?>">
                                <img src="/php2/images/<?php echo $product['productCode']; ?>_m.png" alt="" width="150px" height="150px"/>
                                <div class="mask">
                                    <span>Xem chi tiết</span>
                                </div>
                            </a>
                        <h4><?php echo $product['productName']; ?></h4>
                        <p><a class="item_add" href=""><i></i> <span class=" item_price">$<?php echo number_format($unit_price, 2); ?></span></a></p>
                        <br>
                        
                    </div>
                </div>
        </div>
            
         <?php endforeach; ?>
        </div>
    </div>
   

 <div class="cleaner"></div>

<?php include 'view/footer.php'; ?>