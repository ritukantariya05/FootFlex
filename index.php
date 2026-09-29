<?php
$pageTitle = 'FootFlex Store | Home';
$activePage = 'home';
include 'includes/header.php';
include 'includes/products.php';

$featured = getFeaturedProducts();
$popular = getPopularProducts();
?>

<section class="hero">
    <div class="hero-slide active" style="background-image: url('assets/images/slide1.jpg');"></div>
    <div class="hero-slide" style="background-image: url('assets/images/slide2.jpg');"></div>
    <div class="hero-slide" style="background-image: url('assets/images/slide3.jpg');"></div>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <span class="kicker">FootFlex Store</span>
        <h1>Flex Your Style with FootFlex</h1>
        <p>Shop clean, comfortable footwear for Men, Women, and Kids. Browse styles, pick a colour and size, and enjoy a simple shopping experience.</p>
        <a class="btn btn-primary btn-lg" href="shop.php">Shop Now</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2>Shop by Category</h2>
            <p>Choose who you are shopping for and start browsing.</p>
        </div>
        <div class="category-grid">
            <a class="category-card" href="shop.php?category=men">
                <img src="assets/images/gen_men.jpg" alt="Men footwear">
                <div class="category-card__label">
                    <span>Explore</span>
                    <h3>Men</h3>
                </div>
            </a>
            <a class="category-card" href="shop.php?category=women">
                <img src="assets/images/gen_women.jpg" alt="Women footwear">
                <div class="category-card__label">
                    <span>Explore</span>
                    <h3>Women</h3>
                </div>
            </a>
            <a class="category-card" href="shop.php?category=kids">
                <img src="assets/images/gen_kids.jpg" alt="Kids footwear">
                <div class="category-card__label">
                    <span>Explore</span>
                    <h3>Kids</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-head">
            <h2>Featured Products</h2>
            <p>A few pairs we highlight first for the store demo.</p>
        </div>
        <div class="product-grid">
            <?php foreach ($featured as $product) { renderProductCard($product); } ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2>Why Choose FootFlex</h2>
            <p>Simple shopping, clear prices, and footwear made for real daily wear.</p>
        </div>
        <div class="why-grid">
            <article class="why-card">
                <h3>Comfort First</h3>
                <p>Every pair is selected to feel wearable from morning to evening.</p>
            </article>
            <article class="why-card">
                <h3>Clear Categories</h3>
                <p>Shop quickly through Men, Women, and Kids without extra clutter.</p>
            </article>
            <article class="why-card">
                <h3>Honest Pricing</h3>
                <p>See original price, discount, and final price on every product card.</p>
            </article>
            <article class="why-card">
                <h3>Easy Checkout</h3>
                <p>A clean cart and checkout layout ready for the later backend stage.</p>
            </article>
        </div>
    </div>
</section>

<section class="promo-banner">
    <div class="container promo-inner">
        <div>
            <span class="kicker">Season Offer</span>
            <h2>Refresh your footwear collection this season.</h2>
            <p>Explore featured styles across Men, Women, and Kids with clean design and easy browsing.</p>
        </div>
        <a class="btn btn-primary btn-lg" href="shop.php">Browse Shop</a>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2>Popular Products</h2>
            <p>Looks students and families keep coming back to.</p>
        </div>
        <div class="product-grid">
            <?php foreach ($popular as $product) { renderProductCard($product); } ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
