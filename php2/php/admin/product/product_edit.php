<?php include '../../view/header.php'; ?>
<?php include 'view/menu-admin.php'; ?>
<div id="content">
 <div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">   
    <?php
    if (isset($product_id)) {
        $heading_text = 'Edit Product';
    } else {
        $heading_text = 'Add Product';
    }
    ?>
    <h1><?php echo $heading_text; ?></h1>
    <form action="index.php" method="post" id="add_product_form">
        <?php if (isset($product_id)) : ?>
            <input type="hidden" name="action" value="update_product" />
            <input type="hidden" name="product_id"
                   value="<?php echo $product_id; ?>" />
        <?php else: ?>
            <input type="hidden" name="action" value="add_product" />
        <?php endif; ?>
            <input type="hidden" name="category_id"
                   value="<?php echo $product['categoryID']; ?>" />

        <label>Loại:</label>
        <select class="form-control" name="category_id">
        <?php foreach ($categories as $category) : 
            if ($category['categoryID'] == $product['categoryID']) {
                $selected = 'selected';
            } else {
                $selected = '';
            }
        ?>
            <option value="<?php echo $category['categoryID']; ?>"<?php
                      echo $selected ?>>
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br />

        <label>Mã:</label>
        <input type="input" name="code" class="form-control"
               value="<?php echo $product['productCode']; ?>" />
        <br />

        <label>Tên:</label>
        <input type="input" name="name" class="form-control" 
               value="<?php echo $product['productName']; ?>" size="50" />
        <br />

        <label>Giá thành:</label>
        <input type="input" name="price"  class="form-control"
               value="<?php echo $product['listPrice']; ?>" />
        <br />

        <label>Giảm giá:</label>
        <input type="input" name="discount_percent"  class="form-control"
               value="<?php echo $product['discountPercent']; ?>" />
        <br />

        <label>Mô tả:</label>
        <textarea name="description" rows="10" class="form-control"
                  cols="50"><?php echo $product['description']; ?></textarea>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Sửa" class="btn btn-success" />
        
    </form>
</div>
</div></div></div>
<?php include '../../view/footer.php'; ?>