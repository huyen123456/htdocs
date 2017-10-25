<?php include '../view/header.php'; ?>
<?php include '../view/menu_cart.php'; ?>

<div id="content">
           <div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1>Đơn hàng</h1>
    <table class="table table-bordered">
        <tr id="cart_header">
            <th class="left" >Tên sản phẩm</th>
            <th class="right">Giá bán</th>
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

    </table>
    <br/>
    <form action="." method="post">
        <input type="hidden" name="action" value="confirm"/>
        <label>Tên người đặt: </label><input type="text" name="customer_name"  class="form-control"
        <br/>
        <br/>
        <label>Địa chỉ </label><input type="text" name="customer_address"  class="form-control"/>
        <br/>
        <br/>
        <label>Số điện thoại </label><input type="text" name="customer_phone"  class="form-control"/>
        <br/>
        <br/>
        <input type="submit" value="Confirm" class="btn btn-success" />
    </form>
</div>
</div></div></div>
<?php include '../view/footer.php'; ?>