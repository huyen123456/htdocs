<?php include 'view/header.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1>Quản lý loại sản phẩm</h1>
    <table id="category_table">
        <?php foreach ($categories as $category) : ?>
        <tr>
            <form action="" method="post" >
            <td>
                 <input type="text" name="name" class="form-control"
                        value="<?php echo $category['categoryName']; ?>" />
            </td>
            <td>
                <input type="hidden" name="action" value="update_category" />
                <input type="hidden" name="category_id"
                       value="<?php echo $category['categoryID']; ?>"/>
                <input type="submit" value="Update" class="btn btn-info" style="margin: 10px 10px;" />
            </td>
            </form>
            <td>
               
                <form action="" method="post" >
                    <input type="hidden" name="action" value="delete_category" />
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>" />
                    <input type="submit" value="Delete" class="btn btn-danger" />
                </form>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Thêm</h2>
    <form action="" method="post" id="add_category_form" >
        <input type="hidden" name="action" value="add_category" />
        <input type="input" name="name"  class="form-control"  />
        </br>
        <input type="submit" value="Add" class="btn btn-primary"/>
    </form>

</div>
</div></div></div>
<?php include 'view/footer.php'; ?>