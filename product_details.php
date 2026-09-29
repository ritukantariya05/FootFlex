<?php
include 'includes/products.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = getProductById($id);

if (!$product) {
    $product = getProductById(5);
}

$pageTitle = $product['name'] . ' | FootFlex Store';
$activePage = 'shop';
include 'includes/header.php';

$hasDiscount = $product['final_price'] < $product['price'];
$colorMap = array(
    'Black' => '#111111',
    'White' => '#f8fafc',
    'Red' => '#dc2626',
    'Brown' => '#7c4a1e',
    'Tan' => '#c4a574',
    'Navy' => '#1e3a5f',
    'Grey' => '#6b7280',
    'Pink' => '#f9a8d4',
    'Beige' => '#e7d3b0',
    'Blue' => '#2563eb',
    'Green' => '#16a34a'
);
?>

<section class="section product-detail">
    <div class="container product-detail-layout">
        <div class="gallery">
            <div class="gallery-main">
                <img id="mainProductImage" src="<?php echo htmlspecialchars(imagePath($product['gallery'][0])); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </div>
            <div class="thumbs">
                <?php foreach ($product['gallery'] as $index => $img) { ?>
                    <button type="button" class="thumb <?php echo $index === 0 ? 'active' : ''; ?>" data-src="<?php echo htmlspecialchars(imagePath($img)); ?>">
                        <img src="<?php echo htmlspecialchars(imagePath($img)); ?>" alt="Thumbnail <?php echo $index + 1; ?>">
                    </button>
                <?php } ?>
            </div>
        </div>

        <div class="product-info">
            <span class="product-brand"><?php echo htmlspecialchars($product['brand']); ?></span>
            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
            <p class="muted">Category: <?php echo htmlspecialchars(ucfirst($product['category'])); ?></p>

            <div class="price-row large">
                <span class="price-final" id="displayPrice"><?php echo formatPrice($product['final_price']); ?></span>
                <?php if ($hasDiscount) { ?>
                    <span class="price-old"><?php echo formatPrice($product['price']); ?></span>
                    <span class="badge-sale"><?php echo (int)$product['discount']; ?>% OFF</span>
                <?php } ?>
            </div>
            <p class="tiny-note">Price does not change when you select colour or size in this frontend version.</p>

            <p><?php echo htmlspecialchars($product['description']); ?></p>

            <div class="option-block">
                <h3>Colour: <span id="selectedColor"><?php echo htmlspecialchars($product['colors'][0]); ?></span></h3>
                <div class="swatch-row" id="colorRow">
                    <?php foreach ($product['colors'] as $i => $color) {
                        $hex = isset($colorMap[$color]) ? $colorMap[$color] : '#888';
                    ?>
                        <button type="button" class="swatch <?php echo $i === 0 ? 'active' : ''; ?>" data-color="<?php echo htmlspecialchars($color); ?>" style="background: <?php echo $hex; ?>;" title="<?php echo htmlspecialchars($color); ?>"></button>
                    <?php } ?>
                </div>
            </div>

            <div class="option-block">
                <h3>Size: <span id="selectedSize"><?php echo htmlspecialchars($product['sizes'][0]); ?></span></h3>
                <div class="size-row" id="sizeRow">
                    <?php foreach ($product['sizes'] as $i => $size) { ?>
                        <button type="button" class="size-btn <?php echo $i === 0 ? 'active' : ''; ?>" data-size="<?php echo htmlspecialchars($size); ?>"><?php echo htmlspecialchars($size); ?></button>
                    <?php } ?>
                </div>
            </div>

            <div class="option-block">
                <h3>Quantity</h3>
                <div class="qty-box">
                    <button type="button" id="qtyMinus">−</button>
                    <input type="text" id="qtyInput" value="1" readonly>
                    <button type="button" id="qtyPlus">+</button>
                </div>
            </div>

            <div class="detail-actions">
                <a class="btn btn-primary btn-lg" href="cart.php">Add to Cart</a>
                <a class="btn btn-dark btn-lg" href="checkout.php">Buy Now</a>
                <a class="btn btn-outline btn-lg" href="wishlist.php">Wishlist</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
