<?php
require_once '../includes/db.php';
$page_title = 'Our Facilities';
$page_desc = 'Discover world-class facilities offered by DevBhoomi Tourism — from luxury hotels to adventure equipment.';
require_once '../includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Our Facilities & Services</h1>
        <p>Everything you need for an unforgettable Uttarakhand experience</p>
        <div class="breadcrumb">
            <a href="../index.php">Home</a> &rsaquo; Facilities
        </div>
    </div>
</div>

<!-- CORE FACILITIES -->
<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">What We Offer</div>
            <h2 class="section-title">World-Class Facilities for Every Traveler</h2>
            <p class="section-sub">We provide comprehensive services to make your Uttarakhand journey comfortable, safe, and memorable.</p>
        </div>
        <div class="facilities-grid">

            <div class="facility-card fade-up">
                <div class="facility-icon">🏨</div>
                <h3>Premium Accommodations</h3>
                <p>Carefully hand-picked hotels, resorts, and eco-lodges across Uttarakhand — from luxury mountain resorts to authentic local homestays. Every property is personally inspected for comfort, hygiene, and ambiance.</p>
                <ul class="facility-list">
                    <li>3★ to 5★ hotels at major tourist spots</li>
                    <li>Certified eco-lodges and homestays</li>
                    <li>Riverside and valley-view camps</li>
                    <li>GMVN (Garhwal Mandal) approved properties</li>
                    <li>AC and Non-AC options available</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">🚐</div>
                <h3>Comfortable Transportation</h3>
                <p>Well-maintained fleet of air-conditioned vehicles for all terrains — from Delhi to the highest motorable roads in Uttarakhand. All our vehicles are GPS-tracked and drivers are licensed for mountain driving.</p>
                <ul class="facility-list">
                    <li>AC Tempo Travellers and Coaches</li>
                    <li>Luxury SUVs (Innova, Fortuner, Ertiga)</li>
                    <li>Airport and railway station pickups</li>
                    <li>Helicopter transfers (Kedarnath, Badrinath)</li>
                    <li>GPS-tracked, insured vehicles</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">🧭</div>
                <h3>Expert Local Guides</h3>
                <p>Our certified guides are born in Uttarakhand and trained by government tourism institutes. They provide deep cultural and historical insights while ensuring your safety on every trail and pilgrimage route.</p>
                <ul class="facility-list">
                    <li>Government-certified tourist guides</li>
                    <li>NIM (Nehru Institute) trained trekking guides</li>
                    <li>Multilingual guides (Hindi, English, Bengali)</li>
                    <li>First-aid certified expedition guides</li>
                    <li>Wildlife naturalists for Corbett safaris</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">🏕️</div>
                <h3>Adventure & Camping Equipment</h3>
                <p>Professional-grade trekking and camping equipment provided on all adventure tours. Our gear is regularly inspected, safety-certified, and of international quality standards.</p>
                <ul class="facility-list">
                    <li>3-season and 4-season sleeping bags</li>
                    <li>Weatherproof tents (2/4-person)</li>
                    <li>Trekking poles and crampons</li>
                    <li>Safety harnesses and helmets</li>
                    <li>Portable oxygen cylinders for high altitude</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">🍽️</div>
                <h3>Authentic Garhwali Cuisine</h3>
                <p>Enjoy nutritious, hygienic, and delicious meals throughout your journey. We arrange wholesome meals from local kitchens on treks and high-quality restaurant dining at tourist destinations.</p>
                <ul class="facility-list">
                    <li>Breakfast, lunch and dinner included</li>
                    <li>Authentic Garhwali & Kumaoni cuisine</li>
                    <li>Vegetarian and Jain options available</li>
                    <li>Hot meals on all trekking routes</li>
                    <li>Mineral water and energy snacks</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">🏥</div>
                <h3>Medical Support & Safety</h3>
                <p>Your safety is non-negotiable. Every tour includes comprehensive safety measures, emergency protocols, and medical support to ensure you travel with complete peace of mind.</p>
                <ul class="facility-list">
                    <li>First-aid trained staff on every tour</li>
                    <li>Well-equipped first-aid kits</li>
                    <li>Emergency evacuation plans</li>
                    <li>Tie-up with hospitals in Dehradun & Rishikesh</li>
                    <li>Travel insurance assistance available</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">📱</div>
                <h3>24/7 Travel Assistance</h3>
                <p>Our dedicated support team is available around the clock via phone, WhatsApp, and email. From pre-booking queries to in-trip emergencies, we're just a call away.</p>
                <ul class="facility-list">
                    <li>WhatsApp chat support 24/7</li>
                    <li>Dedicated trip coordinator per group</li>
                    <li>Real-time itinerary tracking</li>
                    <li>Emergency helpline numbers</li>
                    <li>Post-trip feedback and support</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">🎫</div>
                <h3>Permits & Documentation</h3>
                <p>Navigating permits and paperwork in Uttarakhand can be complex. We handle all required permits, temple registrations, national park entries, and border zone permissions on your behalf.</p>
                <ul class="facility-list">
                    <li>Forest area entry permits (Corbett, Valley of Flowers)</li>
                    <li>Char Dham yatra registration</li>
                    <li>Inner Line permits for border zones</li>
                    <li>National Park safari booking</li>
                    <li>Temple VIP darshan arrangements</li>
                </ul>
            </div>

            <div class="facility-card fade-up">
                <div class="facility-icon">📸</div>
                <h3>Photography & Tour Add-ons</h3>
                <p>Enhance your journey with optional add-on services to make your trip truly special — from professional photography to ayurvedic spa sessions and cultural performances.</p>
                <ul class="facility-list">
                    <li>Professional trip photographer (on request)</li>
                    <li>Drone photography and videography</li>
                    <li>Yoga and meditation sessions</li>
                    <li>Ayurvedic spa & wellness treatments</li>
                    <li>Cultural folk dance performances</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- HOTEL PARTNERS -->
<section class="bg-cream">
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Our Partners</div>
            <h2 class="section-title">Trusted Hotel & Resort Partners</h2>
            <p class="section-sub">We partner with the finest properties across Uttarakhand to ensure your comfort.</p>
        </div>
        <div class="why-grid fade-up">
            <?php
            $hotels = [
                ['🏨', 'Mussoorie', 'Fortune Resort Grace, Hotel Broadway, Kasmanda Palace'],
                ['🏨', 'Rishikesh', 'Ananda Spa Resort, Rishikesh Marriott, Bharat Mata Ashram'],
                ['🏨', 'Dehradun', 'Hotel Pacific, Vivanta by Taj, Madhuban Grand Hotel'],
                ['⛺', 'Jim Corbett', 'The Jim\'s Jungle Retreat, Aahana Resort, Tiger Camp Resort'],
                ['⛺', 'Kedarnath Route', 'GMVN Tourist Rest Houses, Hotel Shree Hari, Devlok Camps'],
                ['🏔️', 'Auli', 'GMVN Tourist Rest House Auli, Cliff Top Club Chail, Ski Village'],
            ];
            foreach ($hotels as [$icon, $dest, $props]): ?>
            <div class="why-card">
                <div class="why-icon"><?php echo $icon; ?></div>
                <h3><?php echo $dest; ?></h3>
                <p style="font-size:14px;"><?php echo $props; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- WHAT'S INCLUDED CHART -->
<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Package Inclusions</div>
            <h2 class="section-title">What's Typically Included</h2>
        </div>
        <div style="overflow-x:auto;">
            <table style="width:100%;border-collapse:collapse;font-size:14px;" class="fade-up">
                <thead>
                    <tr style="background:var(--forest);color:white;">
                        <th style="padding:14px 20px;text-align:left;">Service</th>
                        <th style="padding:14px;text-align:center;">Budget Pkg</th>
                        <th style="padding:14px;text-align:center;">Standard Pkg</th>
                        <th style="padding:14px;text-align:center;">Luxury Pkg</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Accommodation', '✓', '✓', '✓'],
                        ['All Meals (Breakfast + Dinner)', '✓', '✓', '✓'],
                        ['Transportation (AC Vehicle)', '✓', '✓', '✓'],
                        ['Expert Guide', '✓', '✓', '✓'],
                        ['All Entry Permits', '✓', '✓', '✓'],
                        ['Lunch During Tours', '✗', '✓', '✓'],
                        ['Travel Insurance', '✗', '✓', '✓'],
                        ['Porter on Treks', '✗', '✓', '✓'],
                        ['Helicopter Option (Pilgrimage)', '✗', 'Optional', '✓'],
                        ['Luxury Hotel Upgrade', '✗', '✗', '✓'],
                        ['Professional Photographer', '✗', '✗', 'Optional'],
                        ['Ayurvedic Spa Session', '✗', '✗', '✓'],
                    ];
                    foreach ($rows as $i => [$service, $b, $s, $l]):
                    $bg = $i % 2 === 0 ? '#fff' : 'var(--ivory)';
                    ?>
                    <tr style="background:<?php echo $bg; ?>;">
                        <td style="padding:12px 20px;font-weight:600;color:var(--forest);"><?php echo $service; ?></td>
                        <td style="padding:12px;text-align:center;color:<?php echo $b === '✓' ? 'green' : ($b === '✗' ? '#cc3333' : '#996600'); ?>;">
                            <?php echo $b === '✓' ? '✅' : ($b === '✗' ? '❌' : '⭕ '.$b); ?>
                        </td>
                        <td style="padding:12px;text-align:center;color:<?php echo $s === '✓' ? 'green' : ($s === '✗' ? '#cc3333' : '#996600'); ?>;">
                            <?php echo $s === '✓' ? '✅' : ($s === '✗' ? '❌' : '⭕ '.$s); ?>
                        </td>
                        <td style="padding:12px;text-align:center;color:<?php echo $l === '✓' ? 'green' : ($l === '✗' ? '#cc3333' : '#996600'); ?>;">
                            <?php echo $l === '✓' ? '✅' : ($l === '✗' ? '❌' : '⭕ '.$l); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Experience the Best of Uttarakhand</h2>
        <p>Let us take care of every detail so you can focus on making memories.</p>
        <div class="cta-btns">
            <a href="packages.php" class="btn btn-white">🗺️ View Packages</a>
            <a href="contact.php" class="btn btn-outline">📞 Book Now</a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
