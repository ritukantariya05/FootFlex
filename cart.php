<?php
include 'includes/products.php';
$pageTitle = 'Cart | FootFlex Store';
$activePage = '';
include 'includes/header.php';

$p1 = getProductById(5);
$p2 = getProductById(1);

$items = array(
    array('product' => $p1, 'color' => 'Black', 'size' => '6', 'qty' => 1),
    array('product' => $p2, 'color' => 'White', 'size' => '8', 'qty' => 1)
);

$grand = 0;
foreach ($items as $item) {
    $grand += $item['product']['final_price'] * $item['qty'];
}
?>

<section class="page-banner">
    <div class="container">
        <h1>Shopping Cart</h1>
        <p>Static demo cart for the frontend exam. Full cart logic will be added later.</p>
    </div>
</section>

<section class="section">
    <div class="container cart-layout">
        <div class="cart-list">
            <?php foreach ($items as $item) {
                $product = $item['product'];
                $line = $product['final_price'] * $item['qty'];
            ?>
                <article class="cart-item">
                    <img src="<?php echo htmlspecialchars(imagePath($product['image'])); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div>
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p>Colour: <?php echo htmlspecialchars($item['color']); ?> · Size: <?php echo htmlspecialchars($item['size']); ?></p>
                        <p>Price: <?php echo formatPrice($product['final_price']); ?> × <?php echo (int)$item['qty']; ?></p>
                    </div>
                    <strong><?php echo formatPrice($line); ?></strong>
                    <a class="btn btn-outline" href="cart.php">Remove</a>
                </article>
            <?php } ?>
        </div>

        <aside class="cart-summary">
            <h2>Cart Total</h2>
            <p><span>Items</span> <strong><?php echo count($items); ?></strong></p>
            <p><span>Total</span> <strong><?php echo formatPrice($grand); ?></strong></p>
            <a class="btn btn-primary btn-full" href="checkout.php">Checkout</a>
            <a class="btn btn-outline btn-full" href="shop.php">Continue Shopping</a>
        </aside>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
