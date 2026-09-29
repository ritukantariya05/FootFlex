<?php
$pageTitle = 'Register | FootFlex Store';
$activePage = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = 'Form looks valid. Registration will be saved in the database in the final project.';
}
include 'includes/header.php';
?>

<section class="auth-wrap">
    <div class="auth-card">
        <h1>Create account</h1>
        <p>Join FootFlex Store in a few simple steps.</p>

        <?php if ($success !== '') { ?>
            <div class="success-banner"><?php echo htmlspecialchars($success); ?></div>
        <?php } ?>

        <form method="post" action="register.php" novalidate>
            <div class="form-group-field">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" data-validation="required alpha min" data-min="3" placeholder="Your name">
                <span class="error-msg" id="nameError"></span>
            </div>

            <div class="form-group-field">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" data-validation="required email" placeholder="you@example.com">
                <span class="error-msg" id="emailError"></span>
            </div>

            <div class="form-group-field">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" data-validation="required numeric min max" data-min="10" data-max="10" placeholder="10 digit number">
                <span class="error-msg" id="phoneError"></span>
            </div>

            <div class="form-group-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" data-validation="required strongPassword" placeholder="Strong password">
                <span class="error-msg" id="passwordError"></span>
            </div>

            <div class="form-group-field">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" data-validation="required confirmPassword" data-password-id="password" placeholder="Re-enter password">
                <span class="error-msg" id="confirm_passwordError"></span>
            </div>

            <div class="form-group-field">
                <label>
                    <input type="checkbox" id="terms" name="terms" data-validation="terms">
                    I agree to the Terms &amp; Conditions
                </label>
                <span class="error-msg" id="termsError"></span>
            </div>

            <button type="submit" class="btn btn-primary btn-full">Register</button>
        </form>

        <p class="auth-switch">Already have an account? <a href="login.php">Login</a></p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
