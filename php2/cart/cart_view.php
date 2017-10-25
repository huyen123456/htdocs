<?php include '../view/header.php'; ?>


<div class="ckeckout">
<div id="content">
           <div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
                <?php if (cart_product_count() == 0) : ?>
        <p>Không có sản phẩm nào.</p>
    <?php else: ?>

        <form action="." method="post">
            <input type="hidden" name="action" value="update" />
            <table id="cart">
            <ul class="unit">
                    <li style="margin-left:10px;"><span>Tên sản phẩm</span></li>
                    <li><span>Giá bán</span></li>      
                    <li><span>Số lượng</span></li>
                    <li><span>Giá</span></li>
                    <li> </li>
                    <div class="clearfix"> </div>
                </ul>
            <?php foreach ($cart as $product_id => $item) : ?>
            <ul class="cart-header">
            
                        <li><span><?php echo $item['name']; ?></span></li>
                        <li><span><?php echo sprintf('$%.2f', $item['unit_price']); ?></span></li>
                        <li><span><input type="text" size="3" class="right" name="items[<?php echo $product_id; ?>]" value="<?php echo $item['quantity']; ?>" /></span></li>
                        <li><span><?php echo sprintf('$%.2f', $item['line_price']); ?></span></li>

                    <div class="clearfix"> </div>
                </ul>
            <?php endforeach; ?>
            <ul class="cart-header" >
                    <li colspan="3" class="right" style="font-size: 20px" ><b>Tổng  :</b></li>
                    <li class="right" style="font-size: 18px">
                    <?php echo sprintf('$%.2f', cart_subtotal()); ?>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
                <tr>
                    <td colspan="4" class="right">
                      
                    </td>
                </tr>
            </table>
        </form>
        
    <?php endif; ?>

    <?php if (cart_product_count() > 0) : ?>
<!--        <p>
            Proceed to: <a href="../checkout">Checkout</a>
        </p>-->
        </br>
    <form action="." method="post">
        <input type="hidden" name="action" value="checkout" />
        <input type="submit" value="THANH TOÁN" class="btn btn-success" />
    </form>
    <?php endif; ?>   
</div>
</div>
</div></div></div>
<?php include '../view/footer.php'; ?>