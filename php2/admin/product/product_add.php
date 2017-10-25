<?php include '../../view/header.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1 >Thêm sản phẩm</h1>
    <form action="index.php" method="post" id="add_product_form">
            <input type="hidden" name="action" value="add_product" />

        <label>Loại:</label>
        <select name="category_id" class="form-control">
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br />

        <label>Mã:</label>
        <input type="input" name="code" class="form-control" 
               value="" />
        <br />

        <label>Tên sản phẩm:</label>
        <input type="input" name="name"  class="form-control" 
               value="" size="50" />
        <br />

        <label>Giá thành:</label>
        <input type="input" name="price"  class="form-control" 
               value="" />
        <br />

        <label>Giảm giá:</label>
        <input type="input" name="discount_percent"  class="form-control" 
               value="" />
        <br />

        <label>Mô tả:</label>
        <textarea name="description" rows="10" class="form-control" 
                  cols="50"></textarea>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Thêm" class="btn btn-success" />
        
    </form>
</div>
</div></div></div>
<?php include '../../view/footer.php'; ?>
