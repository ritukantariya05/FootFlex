<?php
$pageTitle = 'Categories | FootFlex Store';
$activePage = 'categories';
include 'includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <h1>Shop by Category</h1>
        <p>This store uses only three categories: Men, Women, and Kids.</p>
    </div>
</section>

<section class="section">
    <div class="container category-page-grid">
        <a class="category-panel" href="shop.php?category=men">
            <img src="assets/images/gen_men.jpg" alt="Men">
            <div>
                <h2>Men</h2>
                <p>Sneakers, casuals, formals, and runners for everyday and office wear.</p>
                <span class="btn btn-primary">View Men</span>
            </div>
        </a>
        <a class="category-panel" href="shop.php?category=women">
            <img src="assets/images/gen_women.jpg" alt="Women">
            <div>
                <h2>Women</h2>
                <p>Heels, sneakers, loafers, and sandals with a clean, modern look.</p>
                <span class="btn btn-primary">View Women</span>
            </div>
        </a>
        <a class="category-panel" href="shop.php?category=kids">
            <img src="assets/images/gen_kids.jpg" alt="Kids">
            <div>
                <h2>Kids</h2>
                <p>Play sneakers, school shoes, and canvas styles made for active days.</p>
                <span class="btn btn-primary">View Kids</span>
            </div>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
