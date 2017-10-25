<?php include 'view/header.php'; ?>


<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1>Delete</h1>
    <p>Bạn có muốn xóa tài khoản
       <?php echo $last_name . ', ' . $first_name .
                  ' (' . $email . ')'; ?>?</p>
    <form action="" method="post">
        <input type="hidden" name="action" value="delete" />
        <input type="hidden" name="admin_id"
               value="<?php echo $admin_id; ?>" />
        <input type="submit" value="Delete" class="btn btn-danger" />

    </form>
    </br>
    <form action="" method="post">
        <input type="submit" value="Cancel" class="btn" />
    </form>
</div>
</div></div></div>
<?php include 'view/footer.php'; ?>