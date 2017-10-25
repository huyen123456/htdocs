<?php include 'view/header.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
            <h1>Chi tiết</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Mã hàng</th>
            <th>Ngày</th>
            <th>Tên người đặt</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $order_id; ?></td>
            <td><?php echo $order_date; ?></td>
            <td><?php echo $customer_name; ?></td>
            <td><?php echo $customer_address; ?></td>
            <td><?php echo $customer_phone; ?></td> 
          </tr>

        </tbody>
  </table>

    <h2>Sản phẩm</h2>
    <table id="cart" class="table table-bordered">
        <tr id="cart_header">
            <th class="left">Tên</th>
            <th class="right">Giá thành</th>
            <th class="right">Giảm giá</th>
            <th class="right">Giá</th>
            <th class="right">Số lượng</th>
            <th class="right">Thành tiền</th>
        </tr>
        <?php
        $subtotal = 0;
        foreach ($order_items as $item) :
            $product_id = $item['productID'];
            $product = get_product($product_id);
            $item_name = $product['productName'];
            $list_price = $item['itemPrice'];
            $savings = $item['discountAmount'];
            $your_cost = $list_price - $savings;
            $quantity = $item['quantity'];
            $line_total = $your_cost * $quantity;
            $subtotal += $line_total;
            ?>
            <tr>
                <td><?php echo $item_name; ?></td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $list_price); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $savings); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $your_cost); ?>
                </td>
                <td class="right">
                    <?php echo $quantity; ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $line_total); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr id="cart_footer">
            <td colspan="5" class="right" style="font-weight:bold">Tổng:</td>
            <td class="right">
                <?php echo sprintf('$%.2f', $subtotal); ?>
            </td>
        </tr>
</table>
</div>
</div></div></div>
<?php include 'view/footer.php'; ?>