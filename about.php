<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | KMPP Royals Hotel</title>
    <link rel="stylesheet" href="stylees.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="navbar">
            <h1> KMPP Royals Hotel</h1>
        </div>
    </header>

    <section id="intro" class="section">
        <h2 class="about">About Us</h2>
        <div class="about-us-container">
            <div class="about-text">
                <p>Located just steps away from the pristine beach, our hotel offers a relaxing and luxurious retreat for guests who want to enjoy the sun, sand, and sea. Whether you're here for a weekend getaway or a family vacation, we ensure every stay is unforgettable.</p>
            </div>
            <div class="about-image">
                <img src="beach.jpg" alt="Beachside Hotel" class="intro-img">
            </div>
        </div>
    </section>

    <section id="awards" class="section">
        <h2>Our Awards</h2>
        <div class="award-container">
            <div class="award-item">
                <p><strong>Best Beachside Resort 🏖️- 2023</strong></p>
                <p class="presenter">Presented by: Luxury Travel Magazine</p>
            </div>
            <div class="award-item">
                <p><strong>Top Rated Service ⭐- 2022</strong></p>
                <p class="presenter">Presented by: Customer Review Awards</p>
            </div>
            <div class="award-item">
                <p><strong>Best Family-Friendly Hotel 👨‍👩‍👧‍👦- 2021</strong></p>
                <p class="presenter">Presented by: Travel Awards</p>
            </div>
        </div>
    </section>

    <section id="partners" class="section">
        <h2>Our Business Partners</h2>
        <div class="partners">
            <img src="partner1.jpg" alt="Partner 1">
            <img src="partner2.jpg" alt="Partner 2">
            <img src="partner3.jpg" alt="Partner 3">
            <img src="partner4.jpg" alt="Partner 4">
            <img src="partner5.jpg" alt="Partner 5">
            <img src="partner6.jpg" alt="Partner 6">

        </div>
    </section>

        <h2 class="testimony">What Our Guests Say</h2>
        <div class="testimonial-container">
            <div class="testimonial-box">
                <p>"An amazing stay with excellent service. The view of the beach was breathtaking!"</p>
                <p>- Sreya L.</p>
            </div>
            <div class="testimonial-box">
                <p>"A perfect getaway. The staff went above and beyond to make us feel at home."</p>
                <p>- John D.</p>
            </div>
            <div class="testimonial-box">
                <p>"The beach restaurant and service were top-notch. We will be back!"</p>
                <p>- Rakesh T.</p>
            </div>
            <div class="testimonial-box">
                <p>"A peaceful and relaxing vacation spot. Highly recommended!"</p>
                <p>- Maya D.S.</p>
            </div>
            <div class="testimonial-box">
                <p>"Best hotel experience ever. Fantastic hospitality and views!"</p>
                <p>- Sampriti G.</p>
            </div>
        </div>
    </section>


    <section id="address" class="section">
        <h2>Our Location</h2>
        <div class="address-container">
            <div class="address-text">
                <p>KMPP Royals Hotel is located at:</p>
                <p>123 Ocean Drive, Beach City, AL 12345, India</p>
                <p>Come and enjoy a serene beach experience with us!</p>
            </div>
            <div class="map-image">
                <img src="map-placeholder.jpg" alt="Hotel Location Map" class="map-img">
            </div>
        </div>
    </section>
   

    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <p>Email: contact@kmpproyalshotel.com</p>
        <p>Phone: +91 9234567890</p>
    </section>

    <footer>
        <p>&copy; 2024 KMPP Royals Hotel. All rights reserved.</p>
    </footer>
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
       
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
    });
    </script>

</body>
</html>