<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Relax and rejuvenate with our premium spa services.">
    <title>Bliss Haven Spa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            background: #f9f9f9;
        }
        header {
            background: linear-gradient(135deg, #20586f, #49e8a3);
            color: white;
            text-align: center;
            padding: 2rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }
        header p {
            font-size: 1.2rem;
            font-style: italic;
        }
        nav {
            display: flex;
            justify-content: center;
            background: #740a31;
            padding: 0.5rem 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 15px;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.3s, color 0.3s;
        }
        nav a:hover {
            background: #49e8a3;
            color: #20586f;
            border-radius: 5px;
        }
        section {
            padding: 3rem 1rem;
        }
        section h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #20586f;
        }
        .services ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .services li {
            margin: 0.5rem 0;
            font-size: 1.2rem;
        }
        .about p {
            text-align: center;
            max-width: 700px;
            margin: auto;
        }
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            padding: 1rem;
        }

        .gallery img {
            width: 300px; /* Adjust size as needed */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form label {
            font-weight: bold;
        }
        form input, form textarea, form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        form button {
            background: #20586f;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        form button:hover {
            background: #49e8a3;
        }
        .booking {
            max-width: 1200px;
            margin: auto;
            padding: 2rem 1rem;
        }
        .booking h2 {
            text-align: center;
            color: #20586f;
            margin-bottom: 2rem;
            font-size: 2rem;
        }
        .booking .service-card {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .booking .service-card div {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .booking .service-card div:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .booking h3 {
            margin-bottom: 1rem;
            font-size: 1.4rem;
            color: #20586f;
        }
        .booking p {
            font-size: 0.95rem;
            margin-bottom: 1rem;
            color: #555;
        }
        .booking select {
            width: 100%;
            padding: 10px;
            margin-top: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            background: #f9f9f9;
            color: #333;
        }
        .booking select:hover {
            background: #f1f1f1;
        }
        
        .service-card div {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .service-card div:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .service-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .service-options select {
            width: 70%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }

        .service-options select:hover {
            background: #f1f1f1;
        }
        .service-options label {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            font-size: 1rem;
            color: #333;
        }

        .service-options input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.2);
            cursor: pointer;
        }

        .service-card {
            display: flex;
            flex-direction: row; /* Ensures the service items stack vertically */
            gap: 20px; /* Adds space between the service sections */
        }

        .service-item {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .service-item h3 {
            margin-top: 0; /* Remove top margin to prevent extra space before heading */
        }

        .service-options {
            margin-top: 10px;
        }

        .book-btn {
            margin-top: 1rem;
            background: #20586f;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .book-btn:hover {
            background: #49e8a3;
        }

        footer {
            background: #264653;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
        footer a {
            color: #42f8b5;
            text-decoration: none;
            font-weight: bold;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function validateForm() {
            const nameField = document.getElementById("name");
            const namePattern = /^[a-zA-Z\s]+$/;
            if (!namePattern.test(nameField.value)) {
                alert("Please enter a valid name (letters only).");
                return false;
            }
            alert("Your message has been sent!");
            return true;
        }
    
        function bookService(event) {
            event.preventDefault(); // Prevent form submission
    
            // Check if any radio button is selected
            const selectedOption = document.querySelector('input[type="radio"]:checked');
            
            if (!selectedOption) {
                // If no option is selected, display an alert
                alert("Please select a service before booking.");
            } else {
                // If an option is selected, display confirmation message
                alert("Your booking has been confirmed!");
            }
        }
    </script>
    
</head>
<body>
    <header>
        <h1>Bliss Haven Spa</h1>
        <p>Relax. Rejuvenate. Renew.</p>
    </header>
    <nav>
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
        <a href="#booking">Book</a>
    </nav>
    <section id="services" class="services">
        <h2>Our Services</h2>
        <ul>
            <li>Massage Therapy</li>
            <li>Facials and Skincare</li>
            <li>Aromatherapy</li>
            <li>Manicure and Pedicure</li>
            <li>Body Scrubs</li>
        </ul>
    </section>
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>The daily grind of work and personal takes a toll on your body and mind. A regular Spa helps you unwind, relax and re-energise. Choose from across the signature, home-crafted massages & therapies or go for the good old Deep tissue massage, Swedish massage, Ayurvedic massages or the Thai massage.

            Bliss Haven Spa therapies will help keep your body running smoothly, so you can run that half marathon or that full day of meetings.</p>
    </section>
    <section id="gallery" class="gallery">
        <h2>Gallery</h2>
        <div class="gallery-container">
            <img src="spa1.jpg" alt="Spa environment">
            <img src="spa2.jpeg" alt="Relaxing massage">
            <img src="spa3.jpg" alt="Spa environment">
            <img src="spa4.jpeg" alt="Relaxing massage">
        </div>
    </section>
    
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <form onsubmit="return validateForm()">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
    <section id="booking" class="booking">
    <h2>Book a Service</h2>
    <div class="service-card">
        <div class="service-item">
            <h3>Single Massage - Aroma Therapy</h3>
            <p>Aromatherapy is a mild pressure, holistic therapeutic therapy...</p>
            <div class="service-options">
                <form onsubmit="bookService(event)">
                    <label>
                        <input type="radio" name="aroma-therapy" value="1hr"> Aroma Therapy - 1 hr - ₹2,832
                    </label><br>
                    <label>
                        <input type="radio" name="aroma-therapy" value="1hr30mins"> Aroma Therapy - 1 hr, 30 mins - ₹3,776
                    </label><br>
                    <label>
                        <input type="radio" name="aroma-therapy" value="2hrs"> Aroma Therapy - 2 hrs - ₹4,720
                    </label>
                    <button class="book-btn">Book</button>
                </form>
            </div>
        </div>

        <div class="service-item">
            <h3>Facial (Whitening / Hydrating Charcoal / Anti-ageing)</h3>
            <p>Specially designed facial for tanned, uneven skin tone...</p>
            <div class="service-options">
                <form onsubmit="bookService(event)">
                    <label>
                        <input type="radio" name="facial" value="cleansing-massage"> Cleansing Massage Face Pack - 30 mins - ₹1,416
                    </label><br>
                    <label>
                        <input type="radio" name="facial" value="toner-moisturizer"> Toner Moisturizer (3+2 Steps) - 45 mins - ₹1,888
                    </label>
                    <button class="book-btn">Book</button>
                </form>
            </div>
        </div>

        <div class="service-item">
            <h3>Single Massage - Deep Tissue</h3>
            <p>Deep tissue massage focuses on realigning deeper layers...</p>
            <div class="service-options">
                <form onsubmit="bookService(event)">
                    <label>
                        <input type="radio" name="deep-tissue" value="1hr"> Deep Tissue - 1 hr - ₹3,776
                    </label><br>
                    <label>
                        <input type="radio" name="deep-tissue" value="1hr30mins"> Deep Tissue - 1 hr, 30 mins - ₹4,720
                    </label><br>
                    <label>
                        <input type="radio" name="deep-tissue" value="2hrs"> Deep Tissue - 2 hrs - ₹5,664
                    </label>
                    <button class="book-btn">Book</button>
                </form>
            </div>
        </div>

        <div class="service-item">
            <h3>Single Massage - Swedish</h3>
            <p>Swedish massage helps loosen up tight muscles...</p>
            <div class="service-options">
                <form onsubmit="bookService(event)">
                    <label>
                        <input type="radio" name="swedish" value="1hr"> Swedish - 1 hr - ₹3,115.20
                    </label><br>
                    <label>
                        <input type="radio" name="swedish" value="1hr30mins"> Swedish - 1 hr, 30 mins - ₹4,248
                    </label><br>
                    <label>
                        <input type="radio" name="swedish" value="2hrs"> Swedish - 2 hrs - ₹5,475.20
                    </label>
                    <button class="book-btn">Book</button>
                </form>
            </div>
        </div>
    </div>
</section>
  
    <footer>
        <p>&copy; 2024 Bliss Haven Spa | Designed with <a href="#">Care</a></p>
    </footer>
</body>
</html>
