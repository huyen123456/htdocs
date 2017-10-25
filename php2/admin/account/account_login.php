<?php include 'view/header.php'; ?>

<div id="content">
<div class="container">
            <div class="ckeckout-top">
            <div class=" cart-items heading">
    <h1>Login</h1>
    <form action="" method="post" id="login_form">
        <input type="hidden" name="action" value="login" />
        <label for="email">E-Mail:</label>
        </br>
        <input type="text" name="email" />
        <br />
        <label for="password">Password:</label>
        </br>
        <input type="password" name="password" />
        <br />
        <label>&nbsp;</label>
        </br>
        <input type="submit" value="Login" />
    </form>

</div>
</br>
<p style="font-size: 20px; color: #666;">
</p>
</div></div></div>
<?php include 'view/footer.php'; ?>