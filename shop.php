<?php
include 'includes/products.php';

$category = isset($_GET['category']) ? strtolower(trim($_GET['category'])) : '';
$query = isset($_GET['q']) ? trim($_GET['q']) : '';

$allowed = array('men', 'women', 'kids');
if ($category !== '' && !in_array($category, $allowed, true)) {
    $category = '';
}

if ($query !== '') {
    $products = searchProducts($query);
    $heading = 'Search results for "' . $query . '"';
} elseif ($category !== '') {
    $products = getProductsByCategory($category);
    $heading = ucfirst($category) . ' Collection';
} else {
    $products = array_values(getAllProducts());
    $heading = 'All Products';
}

$pageTitle = 'Shop | FootFlex Store';
$activePage = 'shop';
include 'includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <h1><?php echo htmlspecialchars($heading); ?></h1>
        <p>Browse footwear by category. Colour and size options are visual for this frontend exam.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="filter-row">
            <a class="chip <?php echo $category === '' && $query === '' ? 'active' : ''; ?>" href="shop.php">All</a>
            <a class="chip <?php echo $category === 'men' ? 'active' : ''; ?>" href="shop.php?category=men">Men</a>
            <a class="chip <?php echo $category === 'women' ? 'active' : ''; ?>" href="shop.php?category=women">Women</a>
            <a class="chip <?php echo $category === 'kids' ? 'active' : ''; ?>" href="shop.php?category=kids">Kids</a>
        </div>

        <?php if (empty($products)) { ?>
            <p class="empty-note">No products found. Try another search or category.</p>
        <?php } else { ?>
            <div class="product-grid">
                <?php foreach ($products as $product) { renderProductCard($product); } ?>
            </div>
        <?php } ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
