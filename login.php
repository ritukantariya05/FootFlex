<?php
$pageTitle = 'Login | FootFlex Store';
$activePage = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = 'Form looks valid. Login will be connected to the database in the final project.';
}
include 'includes/header.php';
?>

<section class="auth-wrap">
    <div class="auth-card">
        <h1>Welcome back</h1>
        <p>Login to your FootFlex Store account.</p>

        <?php if ($success !== '') { ?>
            <div class="success-banner"><?php echo htmlspecialchars($success); ?></div>
        <?php } ?>

        <form method="post" action="login.php" novalidate>
            <div class="form-group-field">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" data-validation="required email" placeholder="you@example.com">
                <span class="error-msg" id="emailError"></span>
            </div>

            <div class="form-group-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" data-validation="required min" data-min="8" placeholder="Enter password">
                <span class="error-msg" id="passwordError"></span>
            </div>

            <button type="submit" class="btn btn-primary btn-full">Login</button>
        </form>

        <p class="auth-switch">New here? <a href="register.php">Create an account</a></p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
