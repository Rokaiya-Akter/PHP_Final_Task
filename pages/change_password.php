<?php 
  $username  = (isset($_GET["username"]) ? $_GET["username"] : '');
?>
<?php include '../includes/header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Change Password
                </div>
                <div class="card-body">
                    <!-- Login form -->
                    <form action="login_process_for_change_password.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $username;?>" name="username" readonly required>
                        </div>
                        <div class="form-group">
                            <label for="password">Current Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-success">Verify to Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
