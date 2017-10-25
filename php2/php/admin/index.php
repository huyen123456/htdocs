<?php 
    require_once('../util/main.php');
    require_once('../util/secure_conn.php');
    require_once('../util/valid_admin.php');
?>
<?php 
    include 'view/header.php';
?>
<?php include 'view/menu-admin.php'; ?>

</br>
</br>
</br>
<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1 class="top" style="font-weight: bold; font-size: 48px">Menu</h1>
    <p style="font-size: 24px"><a href="product">Quản lý sản phẩm</a></p>
    <p style="font-size: 24px"><a href="category">Quản lý loại sản phẩm</a></p>
    <p style="font-size: 24px"><a href="orders">Hóa đơn</a></p>
    <p style="font-size: 24px"><a href="account">Tài khoản</a></p>
</div></div>
</div>
</div>
<?php include 'view/footer.php'; ?>
