<?php
include('header.php'); // Include the header
?>

<div class="auth-container">
    <div class="form-wrapper">
        <h1>Create account</h1>
        <form action="register_process.php" method="POST" class="auth-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstname" class="sr-only">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="First name" required>
                </div>
                <div class="form-group">
                    <label for="lastname" class="sr-only">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Last name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="auth-button">Register</button>
        </form>
        <p class="signin-link">Returning customer? <a href="signin.php">Sign in</a></p>
    </div>
</div>

<?php
include('footer.php'); // Include the footer
?>
