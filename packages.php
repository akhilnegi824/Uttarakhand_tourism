<?php
require_once '../includes/db.php';
$page_title = 'Tour Packages';
$page_desc = 'Explore Uttarakhand tour packages — pilgrimage, adventure, wildlife, trekking and hill station tours.';
require_once '../includes/header.php';

// Filter by category
$cat = isset($_GET['cat']) ? $conn->real_escape_string($_GET['cat']) : '';
$id  = isset($_GET['id'])  ? intval($_GET['id']) : 0;

// Single package detail view
if ($id > 0) {
    $pkg = $conn->query("SELECT * FROM packages WHERE id = $id")->fetch_assoc();
    if (!$pkg) { header('Location: packages.php'); exit; }
}

// Fetch all packages
$where = $cat ? "WHERE category = '$cat'" : '';
$all_pkgs = $conn->query("SELECT * FROM packages $where ORDER BY is_featured DESC, id ASC");
?>

<div class="page-hero">
    <div class="container">
        <h1><?php echo $id > 0 ? htmlspecialchars($pkg['title']) : 'Our Tour Packages'; ?></h1>
        <p><?php echo $id > 0 ? htmlspecialchars($pkg['destination']) : 'Choose from 50+ carefully crafted Uttarakhand experiences'; ?></p>
        <div class="breadcrumb">
            <a href="../index.php">Home</a> &rsaquo;
            <?php if ($id > 0): ?><a href="packages.php">Packages</a> &rsaquo; <?php echo htmlspecialchars($pkg['title']); ?>
            <?php else: ?>Tour Packages<?php endif; ?>
        </div>
    </div>
</div>

<?php if ($id > 0): // SINGLE PACKAGE VIEW ?>
<section>
    <div class="container">
        <div class="about-grid">
            <div class="fade-up">
                <img src="<?php echo htmlspecialchars($pkg['image_url']); ?>" alt="<?php echo htmlspecialchars($pkg['title']); ?>"
                     style="width:100%;height:400px;object-fit:cover;border-radius:16px;" loading="lazy">
                <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:16px;">
                    <div class="why-card" style="text-align:center;padding:16px;">
                        <div style="font-size:22px;">⏱</div>
                        <small style="color:var(--text-light);display:block;">Duration</small>
                        <strong style="color:var(--forest);font-size:15px;"><?php echo htmlspecialchars($pkg['duration']); ?></strong>
                    </div>
                    <div class="why-card" style="text-align:center;padding:16px;">
                        <div style="font-size:22px;">💰</div>
                        <small style="color:var(--text-light);display:block;">Price</small>
                        <strong style="color:var(--forest);font-size:15px;">₹<?php echo number_format($pkg['price']); ?></strong>
                    </div>
                    <div class="why-card" style="text-align:center;padding:16px;">
                        <div style="font-size:22px;">🏷️</div>
                        <small style="color:var(--text-light);display:block;">Type</small>
                        <strong style="color:var(--forest);font-size:15px;"><?php echo ucfirst($pkg['category']); ?></strong>
                    </div>
                </div>
            </div>
            <div class="fade-up">
                <div class="section-tag"><?php echo ucfirst($pkg['category']); ?> Tour</div>
                <h2 style="font-size:32px;color:var(--forest);margin-bottom:16px;"><?php echo htmlspecialchars($pkg['title']); ?></h2>
                <p style="color:var(--text-light);font-size:15px;line-height:1.8;margin-bottom:20px;"><?php echo htmlspecialchars($pkg['description']); ?></p>
                <h3 style="color:var(--forest);margin-bottom:12px;">Tour Highlights</h3>
                <ul class="pkg-highlights">
                    <?php foreach (explode('|', $pkg['highlights']) as $h): ?>
                    <li><?php echo htmlspecialchars(trim($h)); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div style="margin-top:28px;padding:24px;background:var(--cream);border-radius:12px;">
                    <div style="font-size:13px;color:var(--text-light);margin-bottom:4px;">Price per person</div>
                    <div style="font-size:38px;font-family:'Playfair Display',serif;color:var(--forest);font-weight:800;">₹<?php echo number_format($pkg['price']); ?></div>
                    <a href="contact.php?package=<?php echo urlencode($pkg['title']); ?>" class="btn btn-primary" style="margin-top:16px;">📅 Book This Tour</a>
                    <a href="contact.php" class="btn btn-green" style="margin-top:16px;margin-left:12px;">💬 Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php else: // ALL PACKAGES LIST VIEW ?>
<section>
    <div class="container">
        <!-- Filter Tabs -->
        <div class="pkg-filter fade-up">
            <button class="filter-btn <?php echo !$cat ? 'active' : ''; ?>" data-filter="all" onclick="window.location='packages.php'">All Packages</button>
            <?php
            $cats = ['pilgrimage' => 'Pilgrimage', 'adventure' => 'Adventure', 'wildlife' => 'Wildlife', 'trekking' => 'Trekking', 'hill-station' => 'Hill Station', 'nature' => 'Nature'];
            foreach ($cats as $key => $label):
            ?>
            <button class="filter-btn <?php echo $cat === $key ? 'active' : ''; ?>" data-filter="<?php echo $key; ?>"
                    onclick="window.location='packages.php?cat=<?php echo $key; ?>'"><?php echo $label; ?></button>
            <?php endforeach; ?>
        </div>

        <div class="packages-grid">
            <?php while ($pkg = $all_pkgs->fetch_assoc()): ?>
            <div class="package-card fade-up" data-cat="<?php echo htmlspecialchars($pkg['category']); ?>">
                <div class="card-img-wrap">
                    <img src="<?php echo htmlspecialchars($pkg['image_url']); ?>" alt="<?php echo htmlspecialchars($pkg['title']); ?>" loading="lazy">
                    <span class="card-badge"><?php echo ucfirst(str_replace('-', ' ', $pkg['category'])); ?></span>
                    <span class="card-duration">⏱ <?php echo htmlspecialchars($pkg['duration']); ?></span>
                </div>
                <div class="card-body">
                    <h3><?php echo htmlspecialchars($pkg['title']); ?></h3>
                    <div class="card-dest">📍 <?php echo htmlspecialchars($pkg['destination']); ?></div>
                    <p><?php echo htmlspecialchars($pkg['description']); ?></p>
                    <ul class="pkg-highlights">
                        <?php foreach (array_slice(explode('|', $pkg['highlights']), 0, 3) as $h): ?>
                        <li><?php echo htmlspecialchars(trim($h)); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="card-footer" style="margin-top:16px;">
                        <div class="card-price">
                            <span class="from">Starting from</span>
                            <span class="amount">₹<?php echo number_format($pkg['price']); ?></span>
                            <span class="per">per person</span>
                        </div>
                        <div style="display:flex;flex-direction:column;gap:8px;">
                            <a href="packages.php?id=<?php echo $pkg['id']; ?>" class="btn btn-primary btn-sm">View Details</a>
                            <a href="contact.php?package=<?php echo urlencode($pkg['title']); ?>" class="btn btn-green btn-sm">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="cta-section">
    <div class="container">
        <h2>Can't Find Your Perfect Tour?</h2>
        <p>We craft custom itineraries tailored to your preferences, dates, and budget. Just tell us what you dream of!</p>
        <div class="cta-btns">
            <a href="contact.php" class="btn btn-white">📞 Request Custom Package</a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
