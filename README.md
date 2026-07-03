# DevBhoomi Tourism — Uttarakhand Tourism Web Application
## Complete PHP + MySQL Web App

---

## 📁 Project Structure

```
uttarakhand_tourism/
├── index.php                 ← Homepage
├── database_setup.sql        ← Run this first!
├── includes/
│   ├── db.php                ← Database config
│   ├── header.php            ← Navigation & head
│   └── footer.php            ← Footer
├── pages/
│   ├── about.php             ← About the Organization
│   ├── packages.php          ← Tour Packages (list + detail)
│   ├── places.php            ← Destinations
│   ├── facilities.php        ← Our Facilities & Services
│   ├── gallery.php           ← Photo Gallery
│   └── contact.php           ← Contact Form
└── assets/
    ├── css/style.css         ← Main stylesheet
    └── js/main.js            ← JavaScript
```

---

## ⚙️ Setup Instructions

### Step 1: Requirements
- PHP 7.4+ (or PHP 8.x)
- MySQL 5.7+ (or MariaDB)
- Apache/Nginx web server (XAMPP, WAMP, or LAMP)

### Step 2: Setup Database
1. Open phpMyAdmin or MySQL CLI
2. Run the contents of `database_setup.sql`
   ```bash
   mysql -u root -p < database_setup.sql
   ```
   This creates the database, all tables, and sample data automatically.

### Step 3: Configure Database Connection
Edit `includes/db.php`:
```php
define('DB_HOST', 'localhost');   // Usually localhost
define('DB_USER', 'root');        // Your MySQL username
define('DB_PASS', '');            // Your MySQL password
define('DB_NAME', 'uttarakhand_tourism');
```

### Step 4: Deploy Files
- **Local (XAMPP/WAMP)**: Copy the `uttarakhand_tourism` folder to `htdocs/` (XAMPP) or `www/` (WAMP)
- **Live Server**: Upload via FTP to `public_html/` or your document root

### Step 5: Access the Website
- **Local**: `http://localhost/uttarakhand_tourism/`
- **Live**: `http://yourdomain.com/`

---

## 📄 Pages Overview

| Page | File | Features |
|------|------|---------|
| **Home** | index.php | Hero, search bar, featured packages, destinations, gallery preview, testimonials |
| **About** | pages/about.php | Story, mission/vision, milestones, team |
| **Tour Packages** | pages/packages.php | All packages with filter, detail view, booking CTA |
| **Destinations** | pages/places.php | 8 top Uttarakhand destinations with full info |
| **Facilities** | pages/facilities.php | Services, hotel partners, inclusions table |
| **Gallery** | pages/gallery.php | Filterable photo gallery by category |
| **Contact** | pages/contact.php | Contact form (saves to DB), FAQ, map embed |

---

## 🗄️ Database Tables

| Table | Purpose |
|-------|---------|
| `packages` | Tour packages with pricing, images, highlights |
| `gallery` | Photo gallery images |
| `enquiries` | Contact form submissions |
| `testimonials` | Customer reviews |

---

## ✏️ Customization Guide

### Change Company Name/Info
- Edit company name, address, phone in `includes/header.php` and `includes/footer.php`
- Update contact details in `pages/contact.php`

### Add New Tour Package
```sql
INSERT INTO packages (title, destination, duration, price, description, highlights, image_url, category, is_featured)
VALUES ('Your Tour Name', 'Place, District', '3 Days/2 Nights', 9999.00,
        'Description text here',
        'Highlight 1|Highlight 2|Highlight 3',
        'https://your-image-url.com/image.jpg', 'adventure', 1);
```

### Add Gallery Photos
```sql
INSERT INTO gallery (title, image_url, location, category)
VALUES ('Photo Title', 'https://image-url.com/photo.jpg', 'Location', 'nature');
```

### Replace Placeholder Images
Images currently use Unsplash URLs. Replace with your actual photos by:
1. Upload photos to your server (e.g., `assets/images/`)
2. Update image URLs in the database

### Embed Real Google Maps
In `pages/contact.php`, replace the `src` in the `<iframe>` tag with your actual Google Maps embed code.

---

## 🔧 Admin Panel (Optional Next Step)
To manage the website content, you can create a simple admin panel at `admin/` with:
- Login system (PHP sessions)
- CRUD for packages, gallery, testimonials
- View contact enquiries

---

## 🎨 Color Scheme
| Color | Variable | Hex |
|-------|----------|-----|
| Deep Forest | `--forest` | `#1a3a2a` |
| Deep Green | `--deep` | `#0f2218` |
| Saffron Orange | `--saffron` | `#e8850a` |
| Ivory Background | `--ivory` | `#faf6ee` |

---

## 📞 Support
For questions, contact: info@devbhoomitourism.com
