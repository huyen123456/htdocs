<?php include 'view/header.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">

    <h1>Hóa đơn</h1>
    <?php if (count($new_orders) > 0 ) : ?>
    <table class="table table-bordered">

    <thead>
      <tr>
        <th>Tên đơn hàng</th>
        <th>Ngày</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
            <?php foreach($new_orders as $order) :
                        $order_id = $order['orderID'];
                        $order_date = strtotime($order['orderDate']);
                        $order_date = date('M j, Y', $order_date);
                        $url = $app_path . 'admin/orders' .
                               '?action=view_order&order_id=' . $order_id;
        ?>
      <tr>
        <td><a href="<?php echo $url; ?>">Mã hàng # 
                    <?php echo $order_id; ?></a></td>
        <td><?php echo $order_date; ?> <?php echo '   '; ?></td>
        <td><form method="post" action=".">
                        <input type="hidden" name="action" value="delete"/>
                        <input type="hidden" name="order_id" value="<?php echo $order_id?>"/>
                        <input type="submit" value="Xóa" class="btn btn-danger" />
                    </form></td>
                <?php endforeach; ?>    
      </tr>

    </tbody>
  </table>    <?php endif; ?>
</div>
</div></div></div>
<?php include 'view/footer.php'; ?>