<?php
    // Parse data
    $category_id = $product['categoryID'];
    $product_code = $product['productCode'];
    $product_name = $product['productName'];
    $description = $product['description'];
    $list_price = $product['listPrice'];
    $discount_percent = $product['discountPercent'];

    // Add HMTL tags to the description
    $description = add_tags($description);

    // Calculate discounts
    $discount_amount = round($list_price * ($discount_percent / 100), 2);
    $unit_price = $list_price - $discount_amount;

    // Format discounts
    $discount_percent = number_format($discount_percent, 0);
    $discount_amount = number_format($discount_amount, 2);
    $unit_price = number_format($unit_price, 2);

    // Get image URL and alternate text
    $image_filename = $product_code . '_m.png';
    $image_path = $app_path . 'images/' . $image_filename;
    $image_alt = 'Image filename: ' . $image_filename;
?>


<div class="col-md-5 single-top-left">  
                        <div class="flexslider">
                            <ul class="slides">
                           
                                    <a rel="lightbox[portfolio]" href=""><img src="/php2/images/<?php echo $product['productCode']; ?>.png" alt="Image 01" width="350px" height="350px"></a>
               
                            </ul>
                        </div>
                </div>  
                <div class="col-md-7 single-top-right">
                    <div class="details-left-info simpleCart_shelfItem">
                        <h3><?php echo $product_name; ?></h3>
                         <div class="price_single">
                            <td height="30" width="160"><b>Giá tiền:</b></td>
                            <br>
                            <td><?php echo '$' . $list_price; ?></td>
                        </div>
                        <h2 class="quick"><b>Mô tả sản phẩm</b></h2>
                        <p class="quick_desc"> <?php echo $description; ?></p>
                    <div class="clearfix"> </div>
                <form action="<?php echo $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
                    <input type="hidden" name="action" value="add" />
                    <input type="hidden" name="product_id"
                           value="<?php echo $product_id; ?>" />
                    <b>Quantity:</b>
                     <br>
                    <input type="text" name="quantity" value="1" size="2" />
                    <br>
                    <br>
                    <input type="submit" value="Thêm vào giỏ hàng" class="btn btn-primary" />
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>