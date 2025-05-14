<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Hotel</title>
    <link rel="stylesheet" href="stylles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Us</h1>
           
        </div>
    </header>

    <section class="contact-section">
        <div class="container">
            <p>If you have any questions or need assistance, feel free to reach out to us using the form below.</p>
            <form id="contact-form" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Your message here..." required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
            <p id="form-response" style="color: green;"></p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 KMPP Royals Hotel. All rights reserved.</p>
        </div>
    </footer>

    <script src="sccript.js"></script>
</body>
</html>