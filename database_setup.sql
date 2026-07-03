-- Uttarakhand Tourism Database Setup
-- Run this file once to create the database and tables

CREATE DATABASE IF NOT EXISTS uttarakhand_tourism CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE uttarakhand_tourism;

-- Tour Packages Table
CREATE TABLE IF NOT EXISTS packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    destination VARCHAR(100) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    highlights TEXT,
    image_url VARCHAR(300),
    category VARCHAR(50),
    is_featured TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Gallery Table
CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200),
    image_url VARCHAR(300) NOT NULL,
    location VARCHAR(100),
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact Enquiries Table
CREATE TABLE IF NOT EXISTS enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(200),
    message TEXT NOT NULL,
    package_interest VARCHAR(200),
    status ENUM('new', 'read', 'replied') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Testimonials Table
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100),
    rating TINYINT DEFAULT 5,
    review TEXT NOT NULL,
    tour_taken VARCHAR(200),
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================================
-- SAMPLE DATA
-- ============================================================

INSERT INTO packages (title, destination, duration, price, description, highlights, image_url, category, is_featured) VALUES
('Char Dham Yatra', 'Yamunotri, Gangotri, Kedarnath, Badrinath', '12 Days / 11 Nights', 25999.00,
 'Embark on the sacred Char Dham pilgrimage through the magnificent Himalayas. Visit all four divine shrines — Yamunotri, Gangotri, Kedarnath, and Badrinath — in one spiritually enriching journey.',
 'Yamunotri Temple|Gangotri Temple|Kedarnath Helicopter Option|Badrinath Darshan|Mana Village|Valley of Flowers nearby',
 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?w=800', 'pilgrimage', 1),

('Jim Corbett Wildlife Safari', 'Jim Corbett National Park, Ramnagar', '3 Days / 2 Nights', 8999.00,
 'Explore Asia\'s oldest national park and spot the majestic Bengal tiger in its natural habitat. Experience thrilling jeep safaris through lush forests teeming with wildlife.',
 'Jeep Safari in Dhikala Zone|Tiger Spotting|Elephant Rides|Bird Watching|Corbett Museum|River Rafting on Kosi',
 'https://images.unsplash.com/photo-1561731216-c3a4d99437d5?w=800', 'wildlife', 1),

('Valley of Flowers Trek', 'Chamoli, Nanda Devi', '7 Days / 6 Nights', 14500.00,
 'Trek through the UNESCO World Heritage Valley of Flowers — a stunning alpine meadow blanketed with hundreds of species of wildflowers set against snow-capped Himalayan peaks.',
 'Valley of Flowers National Park|Hemkund Sahib|Ghangaria Base Camp|Nanda Devi Views|Alpine Flora & Fauna|Photography Paradise',
 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800', 'trekking', 1),

('Rishikesh Adventure Package', 'Rishikesh, Haridwar', '4 Days / 3 Nights', 9500.00,
 'Feel the adrenaline rush in the adventure capital of India! Combine white-water rafting on the Ganges, bungee jumping, camping under the stars, and a spiritual Ganga Aarti experience.',
 'White-Water Rafting (Grade 3-4)|Bungee Jumping|Camping by Ganges|Ganga Aarti at Triveni Ghat|Yoga & Meditation Session|Laxman Jhula',
 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=800', 'adventure', 1),

('Mussoorie Hill Station Getaway', 'Mussoorie, Kempty Falls', '3 Days / 2 Nights', 7200.00,
 'Escape to the "Queen of Hills" — Mussoorie. Enjoy breathtaking views of the Himalayan snow ranges, visit the stunning Kempty Falls, and stroll through the famous Mall Road.',
 'Kempty Falls|Gun Hill via Ropeway|Mall Road|Lal Tibba Viewpoint|Camel\'s Back Road|Landour Cantonment',
 'https://images.unsplash.com/photo-1587474260584-136574528ed5?w=800', 'hill-station', 0),

('Auli Skiing & Snow Adventure', 'Auli, Joshimath', '5 Days / 4 Nights', 18000.00,
 'Glide across the pristine snow slopes of Auli, one of India\'s premier skiing destinations. Learn to ski with professional instructors or enjoy the breathtaking Nanda Devi views from Asia\'s longest gondola.',
 'Skiing with Professional Instructors|Asia\'s Longest Cable Car (Gondola)|Nanda Devi Viewpoint|Joshimath Town|Gorson Bugyal|Artificial Snow making facilities',
 'https://images.unsplash.com/photo-1551524559-8af4e6624178?w=800', 'adventure', 1),

('Lansdowne Nature Retreat', 'Lansdowne, Pauri Garhwal', '2 Days / 1 Night', 4500.00,
 'Discover the hidden gem of Uttarakhand — the serene cantonment town of Lansdowne. Walk through oak and blue pine forests, visit ancient temples, and enjoy the peaceful Himalayan ambiance.',
 'Tip N Top Viewpoint|Tarkeshwar Mahadev Temple|Bhulla Tal Lake|War Memorial|Oak & Rhododendron Forests|Bird Watching',
 'https://images.unsplash.com/photo-1578736641330-3155e606cd40?w=800', 'nature', 0),

('Kedarnath Pilgrimage Package', 'Kedarnath, Gaurikund', '5 Days / 4 Nights', 12999.00,
 'Visit one of the twelve Jyotirlingas of Lord Shiva — the sacred Kedarnath temple perched at 3,583m. Trek through scenic Mandakini valley with helicopter options available.',
 'Kedarnath Temple Darshan|Helicopter Option Available|Gaurikund Hot Springs|Triyuginarayan Temple|Chorabari Glacier|Bhairavnath Temple',
 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?w=800', 'pilgrimage', 0);

INSERT INTO gallery (title, image_url, location, category) VALUES
('Kedarnath Temple at Dawn', 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?w=600', 'Kedarnath', 'pilgrimage'),
('Rishikesh Rafting Adventure', 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=600', 'Rishikesh', 'adventure'),
('Valley of Flowers', 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600', 'Chamoli', 'nature'),
('Jim Corbett Tiger', 'https://images.unsplash.com/photo-1561731216-c3a4d99437d5?w=600', 'Corbett', 'wildlife'),
('Mussoorie Sunset View', 'https://images.unsplash.com/photo-1587474260584-136574528ed5?w=600', 'Mussoorie', 'hill-station'),
('Haridwar Ganga Aarti', 'https://images.unsplash.com/photo-1466442929976-97f336a657be?w=600', 'Haridwar', 'pilgrimage'),
('Auli Snow Slopes', 'https://images.unsplash.com/photo-1551524559-8af4e6624178?w=600', 'Auli', 'adventure'),
('Nainital Lake', 'https://images.unsplash.com/photo-1578736641330-3155e606cd40?w=600', 'Nainital', 'hill-station'),
('Himalayan Trekking Trail', 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=600', 'Uttarakhand', 'trekking'),
('Badrinath Temple', 'https://images.unsplash.com/photo-1545558014-8692077e9b5c?w=600', 'Badrinath', 'pilgrimage'),
('Chopta Meadows', 'https://images.unsplash.com/photo-1570338539374-6bab9013c9d6?w=600', 'Chopta', 'nature'),
('Corbett Forest Safari', 'https://images.unsplash.com/photo-1501854140801-50d01698950b?w=600', 'Corbett', 'wildlife');

INSERT INTO testimonials (name, location, rating, review, tour_taken) VALUES
('Rajesh Sharma', 'Delhi', 5, 'The Char Dham Yatra organized by DevBhoomi Tourism was absolutely divine. Every detail was perfectly managed — from comfortable stays to timely darshans. Our guide Ramesh ji was extremely knowledgeable. Will definitely book again!', 'Char Dham Yatra'),
('Priya Mehta', 'Mumbai', 5, 'Our Valley of Flowers trek was a dream come true! The arrangements were top-notch, the team was supportive throughout the trek, and the views were beyond words. A truly transformative experience.', 'Valley of Flowers Trek'),
('Amit & Sunita Gupta', 'Pune', 4, 'The Jim Corbett safari package gave us an incredible wildlife experience. We spotted tigers on day 2! The eco-resort was beautiful and the food was delicious. Highly recommended for nature lovers.', 'Jim Corbett Wildlife Safari'),
('Kavya Nair', 'Bangalore', 5, 'Rishikesh adventure package was the best trip of my life! The rafting on Grade 4 rapids was thrilling, the riverside camping was magical, and the Ganga Aarti was deeply spiritual. Perfect blend of adventure and peace.', 'Rishikesh Adventure Package'),
('Suresh Patel', 'Ahmedabad', 5, 'Excellent service, honest pricing, and genuine hospitality. The Auli skiing package was perfectly organized. Our family including elderly parents and kids felt safe and well-cared for throughout. DevBhoomi Tourism is the best!', 'Auli Skiing Package');
