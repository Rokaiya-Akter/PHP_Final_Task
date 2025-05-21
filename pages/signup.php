<?php include '../includes/header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Signup
                </div>
                <div class="card-body">
                    <!-- Signup form -->
                    <form action="signup_process.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button style="width:100%" type="submit" class="btn btn-primary">Signup</button>
                        <br>
                        <br>
                        <p> Already Have An Account?</p>
                        <a style="width:100%" href="login.php" class="btn btn-success">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

