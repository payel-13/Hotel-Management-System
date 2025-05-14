<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - FACILITIES</title>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>

    <style>
        .pop:hover {
            border-top-color: #789bdd !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        @media (max-width: 1200px) {
            .facilities-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 992px) {
            .facilities-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .facilities-grid {
                grid-template-columns: 1fr;
            }
        }

        .facility-item {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem;
            border-top: 3px solid #789bdd;
        }

        .d-flex {
            display: flex;
            align-items: center;
        }

        .d-flex img {
            margin-right: 1rem;
        }

        .d-flex h5 {
            margin: 0;
        }

        .h-font {
            font-family: 'Arial', sans-serif; /* Default font */
        }

        .text-center {
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .custom-heading {
            font-family: 'Georgia', serif; /* Change font style here */
            font-size: 2rem; /* Adjust size as needed */
            font-weight: bold; /* Adjust weight as needed */
            color: #333; /* Change color if desired */
            margin-bottom: 1rem; /* Space below the heading */
        }

        .heading-container {
            font-size: 3rem;
            font-family: 'Playfair Display', serif;
            text-align: center; /* Center the content */
            position: relative; /* Needed for absolute positioning of the subheading */
            margin: 2rem 0; /* Space above and below the container */
        }

        .horizontal-line {
            width: auto; /* Adjust width as needed */
            height: 3px; /* Thickness of the line */
            background-color: #000; /* Line color */
            margin: 2rem auto; /* Center the line */
        }
        
        .subheading {
            text-align: center;
            background-color: azure;
            font-family: 'Pacifico';
            position: relative;
            left: 50%;
            transform: translate(-50%, -50%); /* Adjust for centering */
            padding: 0 1rem; /* Space around the text */         
            font-size: 1.5rem; /* Font size */
            font-weight: lighter; /* Font weight */
            color: #789bdd; /* Font color */
        }

    </style>
</head>
<body class="bg-light">
    <div class="my-5 px-4">
        <div class="container" > 
            <h3 class="heading-container">OUR FACILITIES</h3>
            <p class="subheading">Your Comfort is Our Priority </p>
            <div class="horizontal-line"></div>
            
        </div>
    </div>

    <div class="container">
        <div class="facilities-grid">
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/wifi.jpg" width="40px" alt="Wifi">
                    <h5 style="font-size: 1.1rem;">Wifi</h5>
                </div>
                <p>Seamless wifi connectivity available throughout the hotel. No additional charges.</p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/cctv.png" width="40px" alt="24hr CCTV Surveillance">
                    <h5 style="font-size: 1.1rem;">24hr CCTV Surveillance</h5>
                </div>
                <p>Enhanced security with round-the-clock monitoring.</p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/desk.jpg" width="40px" alt="24-Hour Front Desk">
                    <h5 style="font-size: 1.1rem;">24-Hour Front Desk</h5>
                </div>
                <p>Will assist to check-in and check-out, local information, and any special requests </p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/laundry.png" width="40px" alt="Laundry">
                    <h5 style="font-size: 1.1rem;"><a class="nav-link" href="laundry.php">Laundry and Dry Cleaning</a></h5>
                </div>
                <p>Convenient laundry and dry cleaning services available for all guests.</p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/res.jpg" width="40px" alt="Restaurant">
                    <h5 style="font-size: 1.1rem;"><a class="nav-link" href="Res.php">Restaurant</a></h5>
                </div>
                <p>Enjoy a delightful dining experience at our in-house restaurant.</p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/gymspa.png" width="40px" alt="Gym">
                    <h5 style="font-size: 1.1rem;"><a class="nav-link" href="gym.php">Gym</a></h5>
                </div>
                <p>Whether you want a vigorous workout or a soothing retreat we provide the perfect blend of fitness and relaxation.</p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/car.png" width="40px" alt="Rental Car">
                    <h5 style="font-size: 1.1rem;"><a class="nav-link" href="rental.php">Rental Car</a></h5>
                </div>
                <p>24/7 support and flexible rental options. Book your rental car with ease through our front desk.</p>
            </div>
            <div class="facility-item pop">
                <div class="d-flex mb-2">    
                    <img src="images/spa-logo.png" width="40px" alt="Spa">
                    <h5 style="font-size: 1.1rem;" ><a class="nav-link" href="spa.php">Spa</a></h5>
                </div>
                <p>Access immediate medical care with our in-house doctor, available for routine check-ups and emergency assistance.</p>
            </div>
        </div>
    </div>
</body>
</html>

