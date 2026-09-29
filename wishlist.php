<?php
include 'includes/products.php';
$pageTitle = 'Wishlist | FootFlex Store';
$activePage = '';
include 'includes/header.php';

$wishlist = array(getProductById(5), getProductById(1), getProductById(9));
?>

<section class="page-banner">
    <div class="container">
        <h1>Your Wishlist</h1>
        <p>Demo saved items for the frontend exam. No login is required at this stage.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="product-grid">
            <?php foreach ($wishlist as $product) { renderProductCard($product); } ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
