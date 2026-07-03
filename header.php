<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>DevBhoomi Tourism — Uttarakhand</title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : 'Discover the divine land of Uttarakhand with DevBhoomi Tourism. Sacred pilgrimages, adventure treks, wildlife safaris and luxury hill station packages.'; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,800;1,400&family=Mulish:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : ''; ?>assets/css/style.css">
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container top-bar-inner">
        <div class="top-contacts">
            <span>📞 +91-98765-43210</span>
            <span>✉️ info@devbhoomitourism.com</span>
            <span>📍 Dehradun, Uttarakhand</span>
        </div>
        <div class="top-socials">
            <a href="#">FB</a>
            <a href="#">IG</a>
            <a href="#">YT</a>
            <a href="#">WA</a>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="container nav-inner">
        <a href="<?php echo (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : ''; ?>index.php" class="logo">
            <div class="logo-icon">🏔️</div>
            <div class="logo-text">
                <span class="logo-main">DevBhoomi</span>
                <span class="logo-sub">Tourism & Hospitality</span>
            </div>
        </a>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>

        <ul class="nav-links" id="navLinks">
            <?php
            $base = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
            $nav = [
                'index' => ['Home', $base . 'index.php'],
                'about' => ['About Us', $base . 'pages/about.php'],
                'packages' => ['Tour Packages', $base . 'pages/packages.php'],
                'places' => ['Destinations', $base . 'pages/places.php'],
                'facilities' => ['Facilities', $base . 'pages/facilities.php'],
                'gallery' => ['Gallery', $base . 'pages/gallery.php'],
                'contact' => ['Contact', $base . 'pages/contact.php'],
            ];
            foreach ($nav as $key => [$label, $href]):
                $active = ($current_page === $key) ? 'active' : '';
            ?>
            <li><a href="<?php echo $href; ?>" class="<?php echo $active; ?>"><?php echo $label; ?></a></li>
            <?php endforeach; ?>
            <li><a href="<?php echo $base; ?>pages/contact.php" class="btn-nav-cta">Book Now</a></li>
        </ul>
    </div>
</nav>
