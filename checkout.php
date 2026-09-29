<?php
include 'includes/products.php';
$pageTitle = 'Checkout | FootFlex Store';
$activePage = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $success = 'Checkout form is valid. Real order processing will be added in the final project. No payment is taken.';
}

$p1 = getProductById(5);
$p2 = getProductById(1);
$items = array(
    array('product' => $p1, 'qty' => 1),
    array('product' => $p2, 'qty' => 1)
);
$grand = 0;
foreach ($items as $item) {
    $grand += $item['product']['final_price'] * $item['qty'];
}

include 'includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <h1>Checkout</h1>
        <p>You can open checkout without login in this exam version.</p>
    </div>
</section>

<section class="section">
    <div class="container checkout-layout">
        <div>
            <?php if ($success !== '') { ?>
                <div class="success-banner"><?php echo htmlspecialchars($success); ?></div>
            <?php } ?>

            <form class="checkout-form" method="post" action="checkout.php" novalidate>
                <h2>Customer Information</h2>

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
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="3" data-validation="required min" data-min="8"></textarea>
                    <span class="error-msg" id="addressError"></span>
                </div>

                <div class="form-row">
                    <div class="form-group-field">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" data-validation="required alpha min" data-min="2">
                        <span class="error-msg" id="cityError"></span>
                    </div>
                    <div class="form-group-field">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" data-validation="required alpha min" data-min="2">
                        <span class="error-msg" id="stateError"></span>
                    </div>
                </div>

                <div class="form-group-field">
                    <label for="pincode">Pincode</label>
                    <input type="text" id="pincode" name="pincode" data-validation="required numeric min max" data-min="6" data-max="6">
                    <span class="error-msg" id="pincodeError"></span>
                </div>

                <h2>Payment</h2>
                <div class="payment-box">
                    <label><input type="radio" name="payment" value="cod" checked> Cash on Delivery (demo)</label>
                    <label><input type="radio" name="payment" value="upi"> UPI (static demo only)</label>
                    <p class="tiny-note">No real payment is processed.</p>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Place Order (Demo)</button>
            </form>
        </div>

        <aside class="cart-summary">
            <h2>Order Summary</h2>
            <?php foreach ($items as $item) { ?>
                <p>
                    <span><?php echo htmlspecialchars($item['product']['name']); ?> × <?php echo (int)$item['qty']; ?></span>
                    <strong><?php echo formatPrice($item['product']['final_price'] * $item['qty']); ?></strong>
                </p>
            <?php } ?>
            <p class="total-line"><span>Total</span> <strong><?php echo formatPrice($grand); ?></strong></p>
        </aside>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
