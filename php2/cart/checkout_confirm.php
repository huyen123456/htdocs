<?php include '../view/header.php'; ?>


<div id="content">
           <div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1>Đơn hàng</h1>
    <table class="table table-bordered">
        <tr id="cart_header">
            <th class="left" >Tên sản phẩm</th>
            <th class="right">Số lượng</th>
            <th class="right">Giá</th>
        </tr>
        <?php foreach ($cart as $product_id => $item) : ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $item['unit_price']); ?>
                </td>

                <td class="right">
                    <?php echo $item['quantity']; ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $item['line_price']); ?>
                </td>
            </tr>
        <?php endforeach; ?>

    