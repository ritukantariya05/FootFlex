<?php
/**
 * Static product data for the frontend exam version.
 * Later this array can be replaced with MySQL queries.
 */

function getAllProducts() {
    return array(
        1 => array(
            'id' => 1,
            'name' => "Men's Court Sneakers",
            'brand' => 'FlexWalk',
            'category' => 'men',
            'price' => 3499,
            'final_price' => 2799,
            'discount' => 20,
            'featured' => true,
            'popular' => true,
            'image' => '1775512219_6454_men1.jpg',
            'gallery' => array('1775512219_6454_men1.jpg', '1775512219_2160_men1.1.jpg', '1775512219_4995_men1.2.jpg', '1775512219_8598_men1.3.jpg'),
            'colors' => array('Black', 'White'),
            'sizes' => array('6', '7', '8', '9', '10'),
            'description' => 'Everyday court sneakers with a clean look, cushioned sole, and easy all-day wear for college, work, and weekends.'
        ),
        2 => array(
            'id' => 2,
            'name' => "Men's Slip-On Casual",
            'brand' => 'UrbanStep',
            'category' => 'men',
            'price' => 2499,
            'final_price' => 2499,
            'discount' => 0,
            'featured' => true,
            'popular' => false,
            'image' => '1775513624_2155_men2.jpg',
            'gallery' => array('1775513624_2155_men2.jpg', '1775513624_7667_men2.1.jpg', '1775513624_4623_men2.2.jpg', '1775513624_4047_men2.3.jpg'),
            'colors' => array('Brown', 'Black'),
            'sizes' => array('6', '7', '8', '9'),
            'description' => 'Easy slip-on casual shoes with a smart shape and comfortable insole for daily city wear.'
        ),
        3 => array(
            'id' => 3,
            'name' => "Men's Formal Derby",
            'brand' => 'PrimeForm',
            'category' => 'men',
            'price' => 4299,
            'final_price' => 3599,
            'discount' => 16,
            'featured' => false,
            'popular' => true,
            'image' => '1775548017_4000_men3.jpg',
            'gallery' => array('1775548017_4000_men3.jpg', '1775548017_2895_men3.1.jpg', '1775548017_4800_men3.2.jpg', '1775548017_2510_men3.3.jpg'),
            'colors' => array('Black', 'Tan'),
            'sizes' => array('7', '8', '9', '10'),
            'description' => 'Polished derby shoes for office and events. Pair them with formals while keeping all-day comfort.'
        ),
        4 => array(
            'id' => 4,
            'name' => "Men's Street Runner",
            'brand' => 'FlexWalk',
            'category' => 'men',
            'price' => 3999,
            'final_price' => 3199,
            'discount' => 20,
            'featured' => true,
            'popular' => true,
            'image' => '1775565573_5233_men4.jpg',
            'gallery' => array('1775565573_5233_men4.jpg', '1775565573_7725_men4.1.jpg', '1775565573_5027_men4.2.jpg', '1775565573_1620_men4.3.jpg'),
            'colors' => array('Navy', 'Grey'),
            'sizes' => array('6', '7', '8', '9', '10'),
            'description' => 'Lightweight street runners with a sporty look and cushioned midsole for walking and light training.'
        ),
        5 => array(
            'id' => 5,
            'name' => "Women's Block Heel Shoe",
            'brand' => 'GlamStep',
            'category' => 'women',
            'price' => 2600,
            'final_price' => 2100,
            'discount' => 19,
            'featured' => true,
            'popular' => true,
            'image' => '1775514340_9903_women1.jpg',
            'gallery' => array('1775514340_9903_women1.jpg', '1775514340_1306_women1.1.jpg', '1775514340_7160_women1.2.jpg', '1775514340_3044_women1.3.jpg'),
            'colors' => array('Black', 'Red'),
            'sizes' => array('5', '6', '7', '8'),
            'description' => 'Elegant women\'s shoes with a stable block heel. Choose a colour and size visually — the price stays the same in this exam version.'
        ),
        6 => array(
            'id' => 6,
            'name' => "Women's Knit Sneakers",
            'brand' => 'FlexWalk',
            'category' => 'women',
            'price' => 2899,
            'final_price' => 2899,
            'discount' => 0,
            'featured' => true,
            'popular' => false,
            'image' => '1775545800_2381_women2.jpg',
            'gallery' => array('1775545800_2381_women2.jpg', '1775545800_7521_women2.1.jpg', '1775545800_9362_women2.2.jpg', '1775545800_9959_women2.3.jpg'),
            'colors' => array('White', 'Pink'),
            'sizes' => array('5', '6', '7', '8'),
            'description' => 'Soft knit sneakers that look fresh with jeans or dresses and stay comfortable through long days.'
        ),
        7 => array(
            'id' => 7,
            'name' => "Women's Casual Loafers",
            'brand' => 'UrbanStep',
            'category' => 'women',
            'price' => 2599,
            'final_price' => 2199,
            'discount' => 15,
            'featured' => false,
            'popular' => true,
            'image' => '1775613936_2389_women4.jpg',
            'gallery' => array('1775613936_2389_women4.jpg', '1775613936_2933_women4.1.jpg', '1775613936_9698_women4.2.jpg', '1775613936_6530_women4.3.jpg'),
            'colors' => array('Beige', 'Black'),
            'sizes' => array('5', '6', '7', '8'),
            'description' => 'Smart casual loafers for college, office, and daily outings. Easy to wear with western or ethnic looks.'
        ),
        8 => array(
            'id' => 8,
            'name' => "Women's Comfort Sandals",
            'brand' => 'GlamStep',
            'category' => 'women',
            'price' => 1999,
            'final_price' => 1699,
            'discount' => 15,
            'featured' => false,
            'popular' => false,
            'image' => '1775627774_6890_women8.jpg',
            'gallery' => array('1775627774_6890_women8.jpg', '1775627774_2392_women8.1.jpg', '1775627774_9043_women8.2.jpg', '1775627774_4446_women8.3.jpg'),
            'colors' => array('Tan', 'Black'),
            'sizes' => array('5', '6', '7', '8'),
            'description' => 'Open comfort sandals with a cushioned footbed, made for warm days and easy everyday styling.'
        ),
        9 => array(
            'id' => 9,
            'name' => "Kids Play Sneakers",
            'brand' => 'LittleFlex',
            'category' => 'kids',
            'price' => 1799,
            'final_price' => 1499,
            'discount' => 17,
            'featured' => true,
            'popular' => true,
            'image' => '1775628085_5267_kid1.jpg',
            'gallery' => array('1775628085_5267_kid1.jpg', '1775628085_8683_kid1.1.jpg', '1775628085_6699_kid1.2.jpg', '1775628085_9794_kid1.3.jpg'),
            'colors' => array('Blue', 'Red'),
            'sizes' => array('10', '11', '12', '13'),
            'description' => 'Colourful play sneakers with a secure fit and durable sole for school grounds and park days.'
        ),
        10 => array(
            'id' => 10,
            'name' => "Kids School Velcro Shoes",
            'brand' => 'LittleFlex',
            'category' => 'kids',
            'price' => 1699,
            'final_price' => 1699,
            'discount' => 0,
            'featured' => false,
            'popular' => true,
            'image' => '1775628201_1392_kid2.jpg',
            'gallery' => array('1775628201_1392_kid2.jpg', '1775628201_5148_kid2.1.jpg', '1775628201_1336_kid2.2.jpg', '1775628201_6680_kid2.3.jpg'),
            'colors' => array('Black', 'Navy'),
            'sizes' => array('10', '11', '12', '13'),
            'description' => 'School-friendly velcro shoes that kids can wear on their own, with a neat look for uniforms.'
        ),
        11 => array(
            'id' => 11,
            'name' => "Kids Sport Runner",
            'brand' => 'FlexWalk Jr',
            'category' => 'kids',
            'price' => 1899,
            'final_price' => 1599,
            'discount' => 16,
            'featured' => true,
            'popular' => false,
            'image' => '1775630453_2286_kid5.jpg',
            'gallery' => array('1775630453_2286_kid5.jpg', '1775630453_9110_kid5.1.jpg', '1775630453_9620_kid5.2.jpg', '1775630453_4837_kid5.3.jpg'),
            'colors' => array('Green', 'Grey'),
            'sizes' => array('11', '12', '13', '1'),
            'description' => 'Sporty kids runners with extra grip and a fun look for PE, playtime, and weekend outings.'
        ),
        12 => array(
            'id' => 12,
            'name' => "Kids Canvas Casual",
            'brand' => 'UrbanStep Kids',
            'category' => 'kids',
            'price' => 1399,
            'final_price' => 1199,
            'discount' => 14,
            'featured' => false,
            'popular' => true,
            'image' => '1775631320_2154_kid8.jpg',
            'gallery' => array('1775631320_2154_kid8.jpg', '1775631320_3882_kid8.1.jpg', '1775631320_5404_kid8.2.jpg'),
            'colors' => array('White', 'Blue'),
            'sizes' => array('10', '11', '12', '13'),
            'description' => 'Lightweight canvas shoes for everyday kids wear. Simple, durable, and easy to pair with any outfit.'
        )
    );
}

function getProductById($id) {
    $products = getAllProducts();
    $id = (int)$id;
    return isset($products[$id]) ? $products[$id] : null;
}

function getProductsByCategory($category) {
    $category = strtolower(trim($category));
    $list = array();
    foreach (getAllProducts() as $product) {
        if ($product['category'] === $category) {
            $list[] = $product;
        }
    }
    return $list;
}

function searchProducts($query) {
    $query = strtolower(trim($query));
    $list = array();
    if ($query === '') {
        return array_values(getAllProducts());
    }
    foreach (getAllProducts() as $product) {
        $haystack = strtolower($product['name'] . ' ' . $product['brand'] . ' ' . $product['category']);
        if (strpos($haystack, $query) !== false) {
            $list[] = $product;
        }
    }
    return $list;
}

function getFeaturedProducts() {
    $list = array();
    foreach (getAllProducts() as $product) {
        if (!empty($product['featured'])) {
            $list[] = $product;
        }
    }
    return $list;
}

function getPopularProducts() {
    $list = array();
    foreach (getAllProducts() as $product) {
        if (!empty($product['popular'])) {
            $list[] = $product;
        }
    }
    return $list;
}

function formatPrice($amount) {
    return '₹' . number_format((float)$amount, 0);
}

function imagePath($file) {
    return 'assets/images/' . $file;
}

function renderProductCard($product) {
    $hasDiscount = $product['final_price'] < $product['price'];
    ?>
    <article class="product-card">
        <div class="product-card__media">
            <a href="product_details.php?id=<?php echo (int)$product['id']; ?>">
                <img src="<?php echo htmlspecialchars(imagePath($product['image'])); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </a>
            <?php if ($hasDiscount) { ?>
                <span class="badge-sale"><?php echo (int)$product['discount']; ?>% OFF</span>
            <?php } ?>
            <a class="wish-btn" href="wishlist.php" title="Add to Wishlist" aria-label="Add to Wishlist">♥</a>
        </div>
        <div class="product-card__body">
            <span class="product-brand"><?php echo htmlspecialchars($product['brand']); ?></span>
            <h3 class="product-name">
                <a href="product_details.php?id=<?php echo (int)$product['id']; ?>">
                    <?php echo htmlspecialchars($product['name']); ?>
                </a>
            </h3>
            <div class="price-row">
                <span class="price-final"><?php echo formatPrice($product['final_price']); ?></span>
                <?php if ($hasDiscount) { ?>
                    <span class="price-old"><?php echo formatPrice($product['price']); ?></span>
                <?php } ?>
            </div>
            <div class="product-card__actions">
                <a class="btn btn-outline" href="product_details.php?id=<?php echo (int)$product['id']; ?>">View Details</a>
                <a class="btn btn-primary" href="cart.php">Add to Cart</a>
            </div>
        </div>
    </article>
    <?php
}
