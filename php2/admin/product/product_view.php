<?php include '../../view/header.php'; ?>

</br>
</br>

<div id="content">
 <div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">   
    <!-- display product -->
    <?php include '../../view/product.php'; ?>

    <!-- display buttons -->
    <br />
    <div id="edit_and_delete_buttons">
        <form action="." method="post" id="edit_button_form" >
            <input type="hidden" name="action" value="show_edit_form"/>
            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>" />
            <input type="hidden" name="category_id"
                   value="<?php echo $product['categoryID']; ?>" />
            <input type="submit" value="Sửa sản phẩm" class="btn btn-warning" />
        </form>
     </br>
        <form action="." method="post" id="delete_button_form" >
            <input type="hidden" name="action" value="delete_product"/>
            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>" />
            <input type="hidden" name="category_id"
                   value="<?php echo $product['categoryID']; ?>" />
            <input type="submit" value="Xóa sản phẩm" class="btn btn-info" />
        </form>
      
    </div>
    <div id="image_manager">
        <h1>Quản lý ảnh</h1>
        <form action="" method="post" enctype="multipart/form-data" id="upload_image_form">
            <input type="hidden" name="action" value="upload_image"/>
            <input type="file" name="file1"/><br />
            <input type="hidden" name="product_id"
                   value="<?php echo $product['productID']; ?>" />
            <input type="submit" value="Thay ảnh" class="btn btn-success" />
        </form>
    </div>
</div>
</div></div></div>
<?php include '../../view/footer.php'; ?>