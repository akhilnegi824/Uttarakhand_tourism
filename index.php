<?php
require_once 'includes/db.php';
$page_title = 'Welcome to DevBhoomi Tourism';
$page_desc = 'Discover the divine land of Uttarakhand. Sacred pilgrimages, Himalayan treks, wildlife safaris and adventure packages.';
require_once 'includes/header.php';

// Fetch featured packages
$pkg_result = $conn->query("SELECT * FROM packages WHERE is_featured = 1 ORDER BY id LIMIT 6");

// Fetch gallery previews
$gal_result = $conn->query("SELECT * FROM gallery ORDER BY id LIMIT 8");

// Fetch testimonials
$test_result = $conn->query("SELECT * FROM testimonials WHERE is_active = 1 ORDER BY id LIMIT 4");
?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-tag">🏔️ Devbhoomi — Land of Gods</div>
            <h1>Discover the <em>Divine Beauty</em> of Uttarakhand</h1>
            <p>From sacred Char Dham pilgrimages to thrilling Himalayan treks and wildlife safaris — experience the wonders of Uttarakhand with expert guidance and unmatched hospitality.</p>
            <div class="hero-btns">
                <a href="pages/packages.php" class="btn btn-primary">🗺️ Explore Packages</a>
                <a href="pages/contact.php" class="btn btn-outline">📞 Talk to an Expert</a>
            </div>
        </div>
    </div>
    <div class="hero-stats">
        <div class="hero-stat">
            <strong data-count="5000" data-suffix="+">5000+</strong>
            <span>Happy Travelers</span>
        </div>
        <div class="hero-stat">
            <strong data-count="50" data-suffix="+">50+</strong>
            <span>Tour Packages</span>
        </div>
        <div class="hero-stat">
            <strong data-count="15" data-suffix="+">15+</strong>
            <span>Years Experience</span>
        </div>
        <div class="hero-stat">
            <strong data-count="98" data-suffix="%">98%</strong>
            <span>Satisfaction Rate</span>
        </div>
    </div>
</section>

<!-- SEARCH / FILTER BAR -->
<div class="search-section">
    <div class="container">
        <form method="GET" action="pages/packages.php">
            <div class="search-bar">
                <div class="search-field">
                    <label for="category">Tour Type</label>
                    <select name="cat" id="category">
                        <option value="">All Categories</option>
                        <option value="pilgrimage">Pilgrimage</option>
                        <option value="adventure">Adventure</option>
                        <option value="wildlife">Wildlife</option>
                        <option value="trekking">Trekking</option>
                        <option value="hill-station">Hill Station</option>
                        <option value="nature">Nature Retreat</option>
                    </select>
                </div>
                <div class="search-field">
                    <label for="duration">Duration</label>
                    <select name="duration" id="duration">
                        <option value="">Any Duration</option>
                        <option value="short">1–3 Days</option>
                        <option value="medium">4–7 Days</option>
                        <option value="long">8+ Days</option>
                    </select>
                </div>
                <div class="search-field">
                    <label for="budget">Max Budget (₹)</label>
                    <input type="number" name="budget" id="budget" placeholder="e.g. 15000" min="0">
                </div>
                <div class="search-field" style="flex:0">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary" style="white-space:nowrap">🔍 Search Tours</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- WHY CHOOSE US -->
<section class="why-section">
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Why DevBhoomi</div>
            <h2 class="section-title">Your Journey, Our Commitment</h2>
            <p class="section-sub">We've been crafting unforgettable Uttarakhand experiences since 2009 with genuine care for every traveler.</p>
        </div>
        <div class="why-grid">
            <div class="why-card fade-up">
                <div class="why-icon">🏔️</div>
                <h3>Expert Local Guides</h3>
                <p>Our certified guides are born and raised in Uttarakhand — they know every hidden trail, temple, and viewpoint intimately.</p>
            </div>
            <div class="why-card fade-up">
                <div class="why-icon">🛡️</div>
                <h3>100% Safe Travel</h3>
                <p>Safety is our top priority. We maintain all safety protocols, equipment checks, and 24/7 emergency support for all tours.</p>
            </div>
            <div class="why-card fade-up">
                <div class="why-icon">💰</div>
                <h3>Best Price Guarantee</h3>
                <p>No hidden charges, transparent pricing. We guarantee the best rates for all our packages with flexible payment options.</p>
            </div>
            <div class="why-card fade-up">
                <div class="why-icon">🏨</div>
                <h3>Handpicked Stays</h3>
                <p>We carefully select every hotel, camp, and resort to ensure comfort, hygiene, and an authentic Himalayan experience.</p>
            </div>
            <div class="why-card fade-up">
                <div class="why-icon">🕐</div>
                <h3>24/7 Support</h3>
                <p>Our dedicated team is available round the clock via phone and WhatsApp to assist you before, during, and after your trip.</p>
            </div>
            <div class="why-card fade-up">
                <div class="why-icon">🌿</div>
                <h3>Eco-Responsible Tourism</h3>
                <p>We are committed to sustainable travel practices — protecting Uttarakhand's natural beauty for future generations.</p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED PACKAGES -->
<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Popular Packages</div>
            <h2 class="section-title">Featured Tour Packages</h2>
            <p class="section-sub">Carefully curated experiences for every kind of traveler — from pilgrim to peak-bagger.</p>
        </div>
        <div class="packages-grid">
            <?php while ($pkg = $pkg_result->fetch_assoc()): ?>
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
                    <div class="card-footer">
                        <div class="card-price">
                            <span class="from">Starting from</span>
                            <span class="amount">₹<?php echo number_format($pkg['price']); ?></span>
                            <span class="per">per person</span>
                        </div>
                        <a href="pages/packages.php?id=<?php echo $pkg['id']; ?>" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="text-center mt-4">
            <a href="pages/packages.php" class="btn btn-green">View All Packages →</a>
        </div>
    </div>
</section>

<!-- TOP DESTINATIONS -->
<section class="bg-cream">
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Destinations</div>
            <h2 class="section-title">Top Places in Uttarakhand</h2>
            <p class="section-sub">Explore the most breathtaking destinations across Dev Bhoomi.</p>
        </div>
        <div class="destinations-grid">
            <div class="dest-card fade-up">
                <img src="Kedarnath2.jpeg" alt="Kedarnath" loading="lazy">
                <div class="dest-overlay"></div>
                <div class="dest-info">
                    <h3>Kedarnath</h3>
                    <span>⛪ Sacred Jyotirlinga • 3583m Altitude</span>
                </div>
            </div>
            <div class="dest-card fade-up">
                <img src="Rishikase2.jpeg" alt="Rishikesh" loading="lazy">
                <div class="dest-overlay"></div>
                <div class="dest-info">
                    <h3>Rishikesh</h3>
                    <span>🌊 Adventure Capital of India</span>
                </div>
            </div>
            <div class="dest-card fade-up">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600" alt="Valley of Flowers" loading="lazy">
                <div class="dest-overlay"></div>
                <div class="dest-info">
                    <h3>Valley of Flowers</h3>
                    <span>🌸 UNESCO World Heritage Site</span>
                </div>
            </div>
            <div class="dest-card fade-up">
                <img src="https://images.unsplash.com/photo-1561731216-c3a4d99437d5?w=600" alt="Jim Corbett" loading="lazy">
                <div class="dest-overlay"></div>
                <div class="dest-info">
                    <h3>Jim Corbett</h3>
                    <span>🐯 Asia's Oldest National Park</span>
                </div>
            </div>
            <div class="dest-card fade-up">
                <img src="masoorie.jpg" alt="Mussoorie" loading="lazy">
                <div class="dest-overlay"></div>
                <div class="dest-info">
                    <h3>Mussoorie</h3>
                    <span>🏔️ Queen of Hills</span>
                </div>
            </div>
            <div class="dest-card fade-up">
                <img src="auli.jpeg" alt="Auli" loading="lazy">
                <div class="dest-overlay"></div>
                <div class="dest-info">
                    <h3>Auli</h3>
                    <span>🎿 Premier Skiing Destination</span>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="pages/places.php" class="btn btn-green">Explore All Destinations →</a>
        </div>
    </div>
</section>

<!-- GALLERY PREVIEW -->
<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Photo Gallery</div>
            <h2 class="section-title">Moments from Dev Bhoomi</h2>
            <p class="section-sub">A glimpse into the breathtaking landscapes and experiences that await you.</p>
        </div>
        <div class="gallery-grid fade-up">
            <?php
            $gal_result->data_seek(0);
            $i = 0;
            while ($img = $gal_result->fetch_assoc()):
                if ($i++ >= 7) break;
            ?>
            <div class="gallery-item">
                <img src="<?php echo htmlspecialchars($img['image_url']); ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy">
                <div class="gallery-item-overlay">📷</div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="text-center mt-4">
            <a href="pages/gallery.php" class="btn btn-green">View Full Gallery →</a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag" style="background:rgba(232,133,10,0.2);color:#ffc87a;">What Travelers Say</div>
            <h2 class="section-title">Real Experiences, Real Stories</h2>
            <p class="section-sub" style="color:rgba(255,255,255,0.7);">Thousands of happy travelers have explored Uttarakhand with us. Here's what some of them shared.</p>
        </div>
        <div class="testimonials-grid">
            <?php while ($t = $test_result->fetch_assoc()): ?>
            <div class="testimonial-card fade-up">
                <div class="stars"><?php echo str_repeat('★', $t['rating']); ?></div>
                <p>"<?php echo htmlspecialchars($t['review']); ?>"</p>
                <div class="testimonial-author">
                    <div class="author-avatar"><?php echo strtoupper(substr($t['name'], 0, 1)); ?></div>
                    <div>
                        <div class="author-name"><?php echo htmlspecialchars($t['name']); ?></div>
                        <div class="author-loc">📍 <?php echo htmlspecialchars($t['location']); ?> — <?php echo htmlspecialchars($t['tour_taken']); ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Explore Dev Bhoomi?</h2>
        <p>Let our experts craft your perfect Uttarakhand journey. Get a free personalized itinerary today!</p>
        <div class="cta-btns">
            <a href="pages/packages.php" class="btn btn-white">🗺️ Browse Packages</a>
            <a href="pages/contact.php" class="btn btn-outline">📞 Get Free Quote</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
