<?php
// Include the header
include('header.php');
?>

<div class="auth-container">
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="signin_process.php" method="POST" class="auth-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="auth-button">Sign In</button>
        </form>
        <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        <p class="forgot-password-link"><a href="forgot_password.php">Forgot password?</a></p>
    </div>
</div>

<?php
// Include the footer
include('footer.php');
?>
