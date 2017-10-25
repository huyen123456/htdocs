<?php include 'view/header.php'; ?>
<?php include 'view/menu-admin.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1 class="top">Thay đổi tài khoản</h1>
    <form action="" method="post"
          class="aligned">
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="admin_id"
               value="<?php echo $admin_id; ?>" />
        <label for="email">E-Mail:</label>
        <input type="text" name="email" value="<?php echo $email; ?>"  class="form-control"/>
        <br />
        <label for="first_name">Họ:</label>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>"  class="form-control"/>
        <br />
        <label for="last_name">Tên:</label>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>"  class="form-control"/>
        <br />
        <label for="password_1">Password Mới:</label>
        <input type="password" name="password_1" class="form-control"
        <br />
        <label for="password_2">Nhập lại Password:</label>
        <input type="password" name="password_2"  class="form-control"/>
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="Thay đổi" class="btn btn-info" />
    </form>
    </br>
    <form action="" method="post" class="aligned">
        <label>&nbsp;</label>
        <input type="submit" value="Quay lại" class="btn" />
    </form>
</div>
</div></div></div>
<?php include 'view/footer.php'; ?>