<?php
require_once '../includes/db.php';
$page_title = 'Top Destinations';
$page_desc = 'Explore the most beautiful destinations in Uttarakhand — from sacred temples to Himalayan peaks.';
require_once '../includes/header.php';

$places = [
    ['Kedarnath', 'Rudraprayag District', '3,583m', 'May–June, Sep–Oct', 'kedarnath.jpg',
     'Home to one of the twelve Jyotirlingas of Lord Shiva, Kedarnath is perched at an altitude of 3,583m in the Garhwal Himalayas. The ancient stone temple, believed to be over 1,000 years old, stands majestically against a backdrop of snow-capped peaks and the Mandakini River. The 16-km trek from Gaurikund through alpine meadows and Himalayan scenery is an unforgettable experience.',
     ['Pilgrimage', 'Trekking', 'Photography', 'Snow Views'],
     '4–6 hrs (trek/helicopter', 'Char Dham Yatra, Kedarnath Pilgrimage Package'],

    ['Rishikesh', 'Dehradun District', '372m', 'Oct–Apr (adventure), Mar–Jun (yoga)', 'Rishikase.jpg',
     'Known as the "Adventure Capital of India" and "Yoga Capital of the World," Rishikesh sits where the holy Ganges descends from the Himalayas into the plains. It offers world-class white-water rafting (Grade 3-4 rapids), bungee jumping, cliff jumping, camping, and deeply spiritual experiences like the magnificent Ganga Aarti at Triveni Ghat every evening.',
     ['White-Water Rafting', 'Bungee Jumping', 'Yoga', 'Ganga Aarti'],
     'Year-round (best Oct–Apr', 'Rishikesh Adventure Package'],

    ['Jim Corbett National Park', 'Nainital / Ramnagar', '400–1100m', 'Oct–Jun (safaris)', 'https://images.unsplash.com/photo-1561731216-c3a4d99437d5?w=800',
     'Established in 1936, Jim Corbett is India\'s oldest and most prestigious national park. Spanning over 500 sq km of dense forests, the park is famous for Bengal tigers, Asian elephants, leopards, gharials, and over 600 species of birds. The Dhikala zone offers the most thrilling jeep and canter safaris through varied terrain of hills, riverbanks, and dense sal forests.',
     ['Tiger Safari', 'Bird Watching', 'Jeep Safari', 'River Fishing'],
     'Full day (multiple safaris', 'Jim Corbett Wildlife Safari'],

    ['Valley of Flowers', 'Chamoli District', '3,352–3,658m', 'Jul–Sep (blooming season)', 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800',
     'A UNESCO World Heritage Site, the Valley of Flowers is a stunning alpine meadow spread over 87 sq km in the Zanskar range. During the monsoon season (July–September), it transforms into a kaleidoscope of hundreds of species of wildflowers including blue poppies, brahmakamal, and various orchids against the dramatic backdrop of Nanda Devi peak.',
     ['Wildflowers', 'UNESCO Heritage', 'Photography', 'Hemkund Sahib'],
     '6–8 hrs trek from Ghangaria', 'Valley of Flowers Trek'],

    ['Mussoorie', 'Dehradun District', '2,005m', 'Year-round (Summer & Monsoon best)', 'masoorie.jpg',
     'Dubbed the "Queen of Hills," Mussoorie is Uttarakhand\'s most popular hill station. Perched at 2,005m, it offers sweeping views of the snow-clad Himalayas, lush green doons, and the Doon Valley. The famous Mall Road is lined with colonial-era buildings, shops, and restaurants. Kempty Falls, Gun Hill, and the Landour Cantonment are must-visit attractions.',
     ['Mall Road', 'Kempty Falls', 'Ropeway', 'Snow Views'],
     '3–4 hrs from Delhi', 'Mussoorie Hill Station Getaway'],

    ['Auli', 'Chamoli District', '2,519m', 'Jan–Mar (skiing), Apr–Jun (views)', 'auli.jpeg',
     'Auli is India\'s premier skiing destination, offering gentle to steep slopes with breathtaking views of Nanda Devi (7,816m), India\'s second highest peak. Asia\'s longest and highest gondola cable car connects Joshimath to Auli, offering stunning aerial views. In summer, the slopes transform into lush meadows perfect for trekking to Gorson Bugyal.',
     ['Skiing', 'Gondola Ride', 'Nanda Devi Views', 'Gorson Bugyal'],
     '10–11 hrs from Delhi', 'Auli Skiing & Snow Adventure'],

    ['Haridwar', 'Haridwar District', '249m', 'Year-round (Kumbh every 12 yrs)', 'haridwar.jpeg',
     'One of the holiest cities in Hinduism, Haridwar — meaning "Gateway to God" — is where the sacred Ganges descends from the Himalayas. The evening Ganga Aarti at Har Ki Pauri ghat is one of India\'s most spectacular religious ceremonies, with thousands of oil lamps floating on the river creating an ethereal atmosphere. Host to the famous Kumbh Mela every 12 years.',
     ['Ganga Aarti', 'Har Ki Pauri', 'Kumbh Mela', 'Yoga Ashrams'],
     '5–6 hrs from Delhi (220km)', 'Char Dham Yatra'],

    ['Nainital', 'Nainital District', '2,084m', 'Apr–Jun, Sep–Nov', 'Nainital lake 2.jpeg',
     'Nestled around the emerald Naini Lake, Nainital is a charming hill station in the Kumaon Himalayas. The town surrounds a beautiful kidney-shaped lake with the Naina Devi Temple on its shores. The famous Mall Road alongside the lake, Cable Car to Snow View Point (2270m), and the historic Nainital Zoo are must-visits in this colonial-era hill station.',
     ['Naini Lake', 'Boating', 'Cable Car', 'Snow View Point'],
     '6–7 hrs from Delhi (290km)', 'Custom Package Available'],
];
?>

<div class="page-hero">
    <div class="container">
        <h1>Top Destinations in Uttarakhand</h1>
        <p>Explore the most breathtaking and spiritually significant places in Dev Bhoomi</p>
        <div class="breadcrumb">
            <a href="../index.php">Home</a> &rsaquo; Destinations
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Explore Uttarakhand</div>
            <h2 class="section-title">Destinations We Cover</h2>
            <p class="section-sub">From sacred shrines to snow-capped peaks — here are our most loved destinations.</p>
        </div>
        <div class="places-grid">
            <?php foreach ($places as [$name, $district, $altitude, $season, $img, $desc, $tags, $reach, $package]): ?>
            <div class="place-card fade-up">
                <div class="place-img">
                    <img src="<?php echo $img; ?>" alt="<?php echo $name; ?>" loading="lazy">
                </div>
                <div class="place-body">
                    <h3><?php echo $name; ?></h3>
                    <div class="place-meta">
                        <span>📍 <?php echo $district; ?></span>
                        <span>🏔 <?php echo $altitude; ?></span>
                    </div>
                    <div class="place-meta" style="margin-top:-6px;margin-bottom:12px;">
                        <span>🌤 Best: <?php echo $season; ?></span>
                        <span>🚗 <?php echo $reach; ?></span>
                    </div>
                    <p><?php echo $desc; ?></p>
                    <div class="place-tags">
                        <?php foreach ($tags as $tag): ?>
                        <span class="place-tag"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div style="margin-top:16px;">
                        <a href="packages.php" class="btn btn-green btn-sm">View Packages →</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Want to Visit Any of These Destinations?</h2>
        <p>Tell us your favorite destination and we'll craft the perfect itinerary for you!</p>
        <div class="cta-btns">
            <a href="packages.php" class="btn btn-white">🗺️ Browse Packages</a>
            <a href="contact.php" class="btn btn-outline">📞 Plan My Trip</a>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
