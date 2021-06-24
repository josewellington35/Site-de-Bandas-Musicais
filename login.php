<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    ?>
    <form action="login_resp.php" method="post">
        <div class="input-group">
            <input type="email" class="form-control" size="50" name="email"
                   placeholder="Email Address" value="admin@admin.com.br" required>
            <div class="input-group-btn">
                <input name="btnAutenticacao" type="submit" class="btn btn-danger" value="Login">
            </div>
            <input type="hidden" name="acao" value="login"/>

        </div>
    </form>
    <?php
} else {
    ?>
    <form action="login_resp.php" method="post">
        <div class="input-group">
            <input type="hidden" class="form-control" size="50"  name="email"
                   value="<?php echo $_SESSION["usuario"] ?>">
            <div class="input-group-btn">
                <input name="btnAutenticacao" type="submit" class="btn btn-danger" value="Logout" >
            </div>
            <input type="hidden" name="acao" value="logout"/>

        </div>
    </form> 
<?php }
?>
