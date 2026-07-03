<?php
require_once '../includes/db.php';
$page_title = 'My Personal Gallery';
$page_desc = 'Memories of my Uttarakhand trip.';
require_once '../includes/header.php';

$my_photos = [
    ['title' => 'Nanda Devi Peak', 'url' => 'nandadevi.jpg', 'location' => 'Auli', 'category' => 'nature'],
    ['title' => 'Evening Aarti', 'url' => 'haridwar.jpeg', 'location' => 'Haridwar', 'category' => 'pilgrimage'],
    ['title' => 'River Rafting', 'url' => 'Rishikase.jpg', 'location' => 'Rishikesh', 'category' => 'adventure'],
    ['title' => 'Kedarnath Dham', 'url' => 'Kedarnath2.jpeg', 'location' => 'Jim Corbett', 'category' => 'wildlife'],
    ['title' => 'Valley of Flowers', 'url' => 'valley.jpg', 'location' => 'Chamoli', 'category' => 'trekking'],
    ['title' => 'Nainital lake', 'url' => 'Nainital1.jpeg', 'location' => 'Mana Village', 'category' => 'hill-station'],
    ['title' => 'Badrinath dham', 'url' => 'Badrinath.jpg', 'location' => 'Badrinath dham', 'category' => 'hill-station'],
    ['title' => 'Tungnath Mandir', 'url' => 'tungnath.jpg', 'location' => 'Tungnath Mandir', 'category' => 'hill-station'],
    ['title' => 'Surkanda Devi Temple', 'url' => 'surkanda.jpeg', 'location' => 'Surkanda Devi Temple', 'category' => 'hill-station'],
    ['title' => 'Rishikase Ganga', 'url' => 'Rishikase1.jpeg', 'location' => 'Rishikase Ganga', 'category' => 'hill-station'],
    ['title' => 'Kedarnath Dham Track', 'url' => 'section.jpg', 'location' => 'Kedarnath Track', 'category' => 'hill-station'],
    ['title' => 'Auli Uttarakhand', 'url' => 'auli.jpeg', 'location' => 'Auli Uttarakhand', 'category' => 'hill-station'],
    ['title' => 'Budha Madmaheshwar', 'url' => 'budhamad.jpeg', 'location' => 'Budha Madmaheshwar', 'category' => 'hill-station'],
];
?>

<!-- Lightbox CSS (for smooth image zoom) -->
<link rel="stylesheet" href="https://jsdelivr.net" />

<div class="page-hero">
    <div class="container">
        <h1>My Personal Gallery</h1>
        <p>A collection of my own travel memories in Uttarakhand</p>
        <div class="breadcrumb">
            <a href="../index.php">Home</a> &rsaquo; My Gallery
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">My Travels</div>
            <h2 class="section-title">My Captured Moments</h2>
            <p class="section-sub">These are the photos I captured during my journey through Dev Bhoomi.</p>
        </div>

        <!-- Filter Buttons -->
        <div class="gallery-filter fade-up">
            <button class="filter-btn active" data-filter="all">All Photos</button>
            <button class="filter-btn" data-filter="pilgrimage">Pilgrimage</button>
            <button class="filter-btn" data-filter="adventure">Adventure</button>
            <button class="filter-btn" data-filter="wildlife">Wildlife</button>
            <button class="filter-btn" data-filter="nature">Nature</button>
            <button class="filter-btn" data-filter="hill-station">Hill Stations</button>
            <button class="filter-btn" data-filter="trekking">Trekking</button>
        </div>

        <!-- Gallery Grid -->

        <div class="gallery-masonry fade-up">
          <?php foreach ($my_photos as $i => $img): ?>
            <!-- Glightbox Link Wrapper -->
            <a href="<?php echo $img['url']; ?>" class="glightbox gallery-item <?php echo ($i % 4 === 0) ? 'tall' : ''; ?>" data-gallery="gallery1" data-title="<?php echo htmlspecialchars($img['title']); ?>" data-description="📍 <?php echo htmlspecialchars($img['location']); ?>" data-cat="<?php echo $img['category']; ?>">
                
                <img src="<?php echo $img['url']; ?>" 
                     alt="<?php echo htmlspecialchars($img['title']); ?>" 
                     loading="lazy"
                     onerror="this.src='https://placeholder.com'">
                
                <div class="gallery-item-overlay" style="display:flex; flex-direction:column; text-align:center; padding:16px; position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.4); opacity:0; transition:0.3s; color:white; justify-content:center; align-items:center;">
                    <div style="font-size:24px;">🔍</div>
                    <div style="font-size:14px; font-weight:700; margin-top:8px;"><?php echo htmlspecialchars($img['title']); ?></div>
                    <div style="font-size:12px; opacity:0.8;">📍 <?php echo htmlspecialchars($img['location']); ?></div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Custom CSS for Hover and Pointer -->
<style>
    .gallery-item { position: relative; display: block; overflow: hidden; cursor: pointer; }
    .gallery-item:hover .gallery-item-overlay { opacity: 1 !important; }
    .gallery-item img { transition: transform 0.5s ease; width: 100%; height: 100%; object-fit: cover; }
    .gallery-item:hover img { transform: scale(1.1); }
</style>

<section class="cta-section">
    <div class="container">
        <h2>Want to See More?</h2>
        <p>Explore our official tour packages and plan your next trip.</p>
        <div class="cta-btns">
            <a href="packages.php" class="btn btn-white">🗺️ View Packages</a>
        </div>
    </div>
</section>

<!-- Lightbox JS -->
<script src="https://jsdelivr.net"></script>
<script>
    // Lightbox Initialize
    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });

    // Aapka purana Filter logic (yahan agar script kaam na kare toh filter functionality check karein)
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelector('.filter-btn.active').classList.remove('active');
            this.classList.add('active');
            const filter = this.getAttribute('data-filter');
            
            document.querySelectorAll('.gallery-item').forEach(item => {
                if (filter === 'all' || item.getAttribute('data-cat') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
            // Refresh layout if needed
        });
    });
</script>

<?php require_once '../includes/footer.php'; ?>
