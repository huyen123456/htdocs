<?php include 'view/header.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">  
    <h1 class="top">Quản lý tài khoản</h1>
    <?php if (isset($_SESSION['admin'])) : ?>
    <h2>Tài khoản</h2>
    <p><?php echo $name . ' (' . $email . ')'; ?></p>
    <form action="" method="post">
        <input type="hidden" name="action" value="view_edit" />
        <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
        <input type="submit" value="Edit" class="btn btn-success" />
    </form>
    <?php endif; ?>
    <?php if ( count($admins) > 1 ) : ?>
        <h2>Những tài khoản khác</h2>


        <table id="cart" class="table table-bordered">
        
        <tr id="cart_header">
            <th class="left">Tên tài khoản</th>
            <th class="right">Sửa</th>
            <th class="right">Xóa</th>
        </tr>
        <?php foreach($admins as $admin):
            if ( $admin['adminID'] != $admin_id ) :
                ?>
                <tr>
                    <td class="right"><?php echo $admin['lastName'] . ', ' .
                               $admin['firstName']; ?>
                    </td>
                    <td class="right">
                        <form action="" method="post" class="inline" >
                            <input type="hidden" name="action"
                                value="view_edit" />
                                 
                            <input type="hidden" name="admin_id"
                                value="<?php echo $admin['adminID']; ?>" />
                            <input type="submit" value="Edit" class="btn btn-success" />
                        </form>
                    </td>
                    <td class="right"> 
                        <form action="" method="post" class="inline">
                            <input type="hidden" name="action"
                                value="view_delete_confirm" />
                                 
                            <input type="hidden" name="admin_id"
                                value="<?php echo $admin['adminID']; ?>" />
                            <input type="submit" value="Delete" class="btn btn-danger"/>
                        </form>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </table>
    <?php endif; ?>
    <h2>Thêm tài khoản</h2>
    <form action="" method="post" id="add_admin_user_form">
        <input type="hidden" name="action" value="create" />
        <label for="email">E-Mail:</label>
        <input type="text" name="email" class="form-control"
               value="" />
        <br />
         <br />
        <label for="first_name">Họ:</label>
        <input type="text" name="first_name" class="form-control"
               value="" />
        <br />
         <br />
        <label for="last_name">Tên:</label>
        <input type="text" name="last_name" class="form-control"
               value="" />
        <br />
         <br />
        <label for="password_1">Password:</label>
        <input type="password" name="password_1" class="form-control" />

        <br />
         <br />
        <label for="password_2">Nhập lại password:</label>
        <input type="password" name="password_2" class="form-control" />
        <br />
         <br />
        <label>&nbsp;</label>
        <input type="submit" value="Thêm tài khoản" class="btn btn-primary" />
    </form>
</div>
</div></div></div>
<?php
if (isset($_SESSION['form_data'])) {
    unset($_SESSION['form_data']);
}
?>
<?php include 'view/footer.php'; ?>