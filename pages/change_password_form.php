<?php
include '../includes/header.php';
include '../classes/Database.php';
include '../classes/User.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //print_r($_POST);exit;
    // Retrieve form data
    $newPassword = $_POST['newPassword'];
    $username = $_POST["username"];

    // Initialize database connection
    $db = new Database();
    $conn = $db->getConnection();

    // Create user object
    $user = new User($conn);

    // Attempt to change password
    if ($user->changePassword($username, $newPassword)) {
        // Password change successful, redirect to success page
        header("Location: success.php");
        exit;
    } else {
        // Password change failed, handle error (e.g., display error message)
        echo "Password change failed. Please try again.";
    }
}

// Retrieve username from query string
if(isset($_GET['username'])) {
    $username = $_GET['username'];
} else {
    // If username is not provided, redirect to login page
    header("Location: login.php");
    exit;
}


?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Change Password
                </div>
                <div class="card-body">
                    <!-- Change password form -->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="newPassword">New Password:</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                        </div>
                        <!-- Hidden field to store the username -->
                        <input type="hidden" name="username" value="<?php echo $username; ?>">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
