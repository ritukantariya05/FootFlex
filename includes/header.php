<?php
if (!isset($pageTitle)) {
    $pageTitle = 'FootFlex Store';
}
if (!isset($activePage)) {
    $activePage = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/validator.css">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a class="logo" href="index.php">
            <img src="assets/images/logo1.png" alt="FootFlex Store logo">
            <span>Foot<span>Flex</span> Store</span>
        </a>

        <button class="menu-toggle" type="button" id="menuToggle" aria-label="Open menu">☰</button>

        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a class="<?php echo $activePage === 'home' ? 'active' : ''; ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo $activePage === 'categories' ? 'active' : ''; ?>" href="categories.php">Categories</a></li>
                <li><a class="<?php echo $activePage === 'shop' ? 'active' : ''; ?>" href="shop.php">Shop</a></li>
                <li><a class="<?php echo $activePage === 'about' ? 'active' : ''; ?>" href="about.php">About</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <form class="search-box" action="shop.php" method="get">
                <input type="text" name="q" placeholder="Search shoes..." value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
                <button type="submit" aria-label="Search">⌕</button>
            </form>
            <a class="icon-link" href="wishlist.php" title="Wishlist">Wishlist</a>
            <a class="icon-link" href="cart.php" title="Cart">Cart <span class="count-pill">2</span></a>
            <a class="btn btn-header" href="login.php">Login</a>
            <a class="btn btn-header-outline" href="register.php">Register</a>
        </div>
    </div>
</header>

<main>
