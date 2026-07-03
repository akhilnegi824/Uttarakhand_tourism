<?php
require_once '../includes/db.php';
$page_title = 'Contact Us';
$page_desc = 'Contact DevBhoomi Tourism for tour bookings, enquiries and customized Uttarakhand packages.';

$success = $error = '';
$package_interest = isset($_GET['package']) ? htmlspecialchars($_GET['package']) : '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($conn->real_escape_string($_POST['name'] ?? ''));
    $email   = trim($conn->real_escape_string($_POST['email'] ?? ''));
    $phone   = trim($conn->real_escape_string($_POST['phone'] ?? ''));
    $subject = trim($conn->real_escape_string($_POST['subject'] ?? ''));
    $message = trim($conn->real_escape_string($_POST['message'] ?? ''));
    $pkg     = trim($conn->real_escape_string($_POST['package_interest'] ?? ''));

    if (!$name || !$email || !$message) {
        $error = 'Please fill in all required fields (Name, Email, Message).';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        $sql = "INSERT INTO enquiries (name, email, phone, subject, message, package_interest)
                VALUES ('$name','$email','$phone','$subject','$message','$pkg')";
        if ($conn->query($sql)) {
            $success = "Thank you, $name! Your enquiry has been received. Our team will contact you within 24 hours.";
        } else {
            $error = 'Something went wrong. Please try again or call us directly.';
        }
    }
}

require_once '../includes/header.php';
?>

<div class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We're here to help plan your perfect Uttarakhand adventure</p>
        <div class="breadcrumb">
            <a href="../index.php">Home</a> &rsaquo; Contact Us
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="contact-grid">

            <!-- LEFT: CONTACT INFO -->
            <div class="fade-up">
                <h2>Get in Touch</h2>
                <p style="color:var(--text-light);margin-bottom:32px;">Have a question about a tour package? Want to customize your itinerary? Our friendly team is ready to help you plan the perfect Uttarakhand journey!</p>

                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div>
                        <h4>Our Office</h4>
                        <p>45, Rajpur Road, Near Clock Tower<br>Dehradun, Uttarakhand — 248001</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">📞</div>
                    <div>
                        <h4>Phone / WhatsApp</h4>
                        <p>+91-98765-43210 (Primary)<br>+91-01352-223344 (Office)</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">✉️</div>
                    <div>
                        <h4>Email Us</h4>
                        <p>info@devbhoomitourism.com<br>bookings@devbhoomitourism.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">🕐</div>
                    <div>
                        <h4>Working Hours</h4>
                        <p>Monday – Saturday: 9:00 AM – 7:00 PM<br>Sunday: 10:00 AM – 4:00 PM</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">🌐</div>
                    <div>
                        <h4>Follow Us</h4>
                        <p>@DevBhoomiTourism on Facebook, Instagram & YouTube</p>
                    </div>
                </div>

                <!-- Quick Call to Action -->
                <div style="margin-top:32px;padding:24px;background:var(--cream);border-radius:16px;border-left:4px solid var(--saffron);">
                    <h3 style="color:var(--forest);margin-bottom:10px;">💬 WhatsApp Us Instantly!</h3>
                    <p style="color:var(--text-light);font-size:14px;margin-bottom:16px;">Chat with our tour experts on WhatsApp for the fastest response. Available from 8 AM – 10 PM daily.</p>
                    <a href="https://wa.me/919876543210?text=Hi!%20I%20want%20to%20enquire%20about%20Uttarakhand%20tour%20packages" target="_blank" class="btn btn-green btn-sm">💬 WhatsApp Now</a>
                </div>
            </div>

            <!-- RIGHT: CONTACT FORM -->
            <div class="contact-form fade-up">
                <h2>Send Us an Enquiry</h2>

                <?php if ($success): ?>
                <div class="alert alert-success">✅ <?php echo $success; ?></div>
                <?php endif; ?>
                <?php if ($error): ?>
                <div class="alert alert-error">❌ <?php echo $error; ?></div>
                <?php endif; ?>

                <form method="POST" action="contact.php">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" placeholder="Your full name" required
                                   value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="your@email.com" required
                                   value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone / WhatsApp</label>
                            <input type="tel" id="phone" name="phone" placeholder="+91-XXXXX-XXXXX"
                                   value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                        </div>
                        <div class="form-group">
                            <label for="package_interest">Package Interest</label>
                            <select id="package_interest" name="package_interest">
                                <option value="">Select a package</option>
                                <option value="Char Dham Yatra" <?php echo $package_interest === 'Char Dham Yatra' ? 'selected' : ''; ?>>Char Dham Yatra</option>
                                <option value="Jim Corbett Wildlife Safari">Jim Corbett Wildlife Safari</option>
                                <option value="Valley of Flowers Trek">Valley of Flowers Trek</option>
                                <option value="Rishikesh Adventure Package">Rishikesh Adventure Package</option>
                                <option value="Mussoorie Hill Station">Mussoorie Hill Station</option>
                                <option value="Auli Skiing Package">Auli Skiing Package</option>
                                <option value="Kedarnath Pilgrimage">Kedarnath Pilgrimage</option>
                                <option value="Custom Package">Custom Package</option>
                                <option value="Other">Other / General Enquiry</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="e.g. Enquiry for 5-day Kedarnath package for family of 4"
                               value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" placeholder="Tell us about your travel plans — destination, dates, number of travelers, budget, and any special requirements..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
                        📤 Send Enquiry
                    </button>
                    <p style="font-size:12px;color:var(--text-light);text-align:center;margin-top:12px;">
                        ✅ We respond within 24 hours. Your information is kept confidential.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="map-section">
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">Find Us</div>
            <h2 class="section-title">Visit Our Office in Dehradun</h2>
        </div>
        <div class="map-wrapper fade-up">
            <!-- Replace with your actual Google Maps embed code -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.3895!2d78.0322!3d30.3165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929c356c888af%3A0x4c3562c032518799!2sRajpur%20Rd%2C%20Dehradun%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1234567890"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="DevBhoomi Tourism Office Location">
            </iframe>
        </div>
    </div>
</section>

<!-- FAQ -->
<section>
    <div class="container">
        <div class="section-header fade-up">
            <div class="section-tag">FAQ</div>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        <div style="max-width:800px;margin:0 auto;" class="fade-up">
            <?php
            $faqs = [
                ['How far in advance should I book a tour?', 'For peak season (May–June and Oct–Nov) and pilgrimage tours, we recommend booking at least 4–6 weeks in advance. For off-season trips, 1–2 weeks is usually sufficient. Last-minute bookings are accepted subject to availability.'],
                ['Do you offer customized/private tour packages?', 'Yes! We specialize in customized itineraries. Tell us your travel dates, group size, budget, and interests, and we\'ll craft a personalized package just for you. Private tours with dedicated vehicles and guides are also available.'],
                ['Is travel insurance included in the packages?', 'Basic travel insurance is included in Standard and Luxury packages. For Budget packages, we strongly recommend purchasing travel insurance separately. We can help arrange comprehensive travel insurance covering medical emergencies, trip cancellation, and adventure activities.'],
                ['What is the cancellation and refund policy?', 'Cancellations made 30+ days before departure receive 90% refund. 15–30 days: 70% refund. 7–15 days: 50% refund. Less than 7 days: 25% refund. Force majeure (natural disasters, government restrictions) are handled case-by-case.'],
                ['Are the Char Dham routes safe during monsoon?', 'The Char Dham Yatra operates from May to November. Monsoon season (July–August) can bring landslides and road closures. We closely monitor road conditions, have contingency plans, and will reschedule or reroute if safety is a concern. Your safety always comes first.'],
                ['Do you arrange helicopter services for Kedarnath?', 'Yes! We arrange helicopter bookings for Kedarnath (from Phata and Sirsi helipads) and Badrinath. Helicopter slots are limited and must be booked well in advance during peak season. Additional cost applies.'],
            ];
            foreach ($faqs as $i => [$q, $a]):
            ?>
            <details style="border:1px solid var(--cream);border-radius:12px;margin-bottom:12px;overflow:hidden;">
                <summary style="padding:18px 22px;cursor:pointer;font-weight:700;color:var(--forest);font-size:16px;background:var(--white);list-style:none;display:flex;justify-content:space-between;align-items:center;">
                    <?php echo $q; ?> <span style="font-size:20px;color:var(--saffron);">+</span>
                </summary>
                <div style="padding:0 22px 18px;color:var(--text-light);font-size:14px;line-height:1.8;background:var(--white);"><?php echo $a; ?></div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
