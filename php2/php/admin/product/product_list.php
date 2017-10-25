<?php include '../../view/header.php'; ?>
<?php include 'view/menu-admin.php'; ?>
</br>
</br>
</br>
<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">

    <div class="khung1" style="float: left; width: 300px; height: auto; text-align: center; font-size: 20px; border:1px solid #000; border-radius: 5px">
        <?php if (isset($categories)) : ?>
        <h2>Loại</h2>
        <?php foreach ($categories as $category) : ?>
    
        <li>
            <a href="<?php echo $app_path .
                'admin/product?action=list_products' .
                '&amp;category_id=' . $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
        </li>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
        <div class="khung2" style="float:left; width:460px; height:auto; text-align: center; font-size: 20px; border:1px solid #000; margin-left: 20px; margin-right: 20px; border-radius: 5px">
    <?php if (count($products) == 0) : ?>
        <p>Không có sản phẩm nào</p>
    <?php else : ?>
        <h1 class="top"><?php echo $current_category['categoryName']; ?></h1>
            <?php foreach ($products as $product) : ?>
            <p>
                <a href="?action=view_product&amp;product_id=<?php
                          echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a>
            </p>
            <?php endforeach; ?>
    <?php endif; ?>
    </div>
    <div class="khung3" style="float:left; width:250px ; height:auto; text-align: center; font-size: 20px; border:1px solid #000; border-radius: 5px">
    <h1>Add</h1>
    <p><a href="index.php?action=show_add_form">Thêm sản phẩm</a></p>
    </div>
</div>
</div></div></div>
<?php include '../../view/footer.php'; ?>