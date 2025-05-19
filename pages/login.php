<?php include '../includes/header.php'; ?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <!-- Login form -->
                    <form action="login_process.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button style="width:100%" type="submit" class="btn btn-primary">Login</button><br>
                        <br>
                        <p> Don't Have An Account?</p>
                        <a href="signup.php" style="width:100%" class="btn btn-success">Signup</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
