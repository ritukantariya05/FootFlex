<?php
$pageTitle = 'Contact | FootFlex Store';
$activePage = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = 'Message looks valid. Contact storage will be added in the final project.';
}
include 'includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Send a message using the form below. Validation is handled by validator.js.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-layout">
        <form class="checkout-form" method="post" action="contact.php" novalidate>
            <?php if ($success !== '') { ?>
                <div class="success-banner"><?php echo htmlspecialchars($success); ?></div>
            <?php } ?>

            <div class="form-group-field">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" data-validation="required alpha min" data-min="3">
                <span class="error-msg" id="nameError"></span>
            </div>

            <div class="form-group-field">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" data-validation="required email">
                <span class="error-msg" id="emailError"></span>
            </div>

            <div class="form-group-field">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" data-validation="required numeric min max" data-min="10" data-max="10">
                <span class="error-msg" id="phoneError"></span>
            </div>

            <div class="form-group-field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" data-validation="required min" data-min="10"></textarea>
                <span class="error-msg" id="messageError"></span>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

        <aside class="info-card">
            <h2>Store details</h2>
            <p>FootFlex Store<br>Ahmedabad, Gujarat</p>
            <p>Email: hello@footflexstore.test</p>
            <p>Phone: 9876543210</p>
        </aside>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
