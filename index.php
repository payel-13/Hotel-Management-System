<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projrct 1- PHP CURD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: inline;
            /* This should be block, according to the test. But why? */
        }

        .navbar-brand {
            font-family: "Merienda", cursive;
            font-size: 29px;
            margin-right: 35px;
        }

        * {
            font-family: "Poppins", sans-serif;
            
        }

        .h-font {
            font-family: "Merienda", cursive;
        }

        .navbar-nav {
            display: flex;
            gap: 6px;
        }

        #bar {
            padding: 3px;

        }

        #navbarNavAltMarkup {
            justify-content: space-between;
        }

        .d-flex {
            gap: 10px;
        }

        .book:hover {
            background: rgb(0, 1, 2);
        }

        .availability-form {
            position: relative;
            margin-top: 27px;
            z-index: 2;
        }
        .side {
    display: flex;
    justify-content: center;
}
        @media screen and(max-width:500px) {
            .availability-form {
                margin-top: 25px;
            }
        }
    </style>
</head>

<body>
    <nav id="bar" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KMPP Royals Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="room.php">Rooms</a>
                    <a class="nav-link" href="facilities.php">Facilities</a>
                    <a class="nav-link" href="res.php">Dining</a>
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                    <a class="nav-link" href="review.php">Reviews</a>
                    <a class="nav-link" href="about.php">About Us</a>
                    <a class="nav-link" href="admin/index.php">Admin Panel</a>
                </div>

                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                        data-bs-target="#signupModal">
                        Sign up
                    </button>
                </div>
            </div>
        </div>

    </nav>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="pic1.png" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="pic2.png" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="pic3.png" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="pic4.png" class="d-block w-100">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/login" method="POST" onsubmit="return showLoginAlert()">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="loginBackdropLabel">Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    
                    <div class="modal-body">
                        <label class="form-label">Email Address:</label>
                        <input type="email" name="email" class="form-control shadow-none" required>
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control shadow-none" required>
                    </div>
                      <!-- Added box for Guest and Staff options 
                      <div class="container mb-3">
                        <div class="row1" style="display: flex; gap:10px">Login as:
                            <div class="col">
                                <input type="radio" id="guest" name="user_type" value="guest" required>
                                <label for="guest">Guest</label>
                            </div>
                            <div class="col">
                                <input type="radio" id="staff" name="user_type" value="staff" required>
                                <label for="staff">Staff</label>
                            </div>
                        </div>
                    </div>-->
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <!-- check availability form-->
    <div class="container availability-form">
        <div class="about" class="row">
            <div style="margin: auto;">
                <h2 class="side"style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-shadow: 2px 2px 2px rgb(156, 152, 255);">
                    Embrace the Warmth of a Legacy Hotel</h2>
               <p>
                <h6 class="col-lg-4"style="font-family: 'Times New Roman', Times, serif;"></h6>
                    Experience the comfort of the most premium 5-star business hotel in the City of Joy with
                    well-appointed rooms, recreational facilities and a multitude of dining venues. Guests can also
                    enjoy the outdoor pool and lush garden for a relaxing escape from the bustling city. Those looking
                    to gather for business can use our state-of-the-art meeting and event facilities. Our hotel is
                    strategically located near Netaji Subhash Chandra International Airport, IT hubs, hospitals and
                    entertainment areas to cater to all your business or leisure needs. We invite you to enjoy an
                    unparalleled Kolkata getaway.
                </h6>
               </p> 

                <!-- <form > -->
                <!-- <div class="row">
                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                                    <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                                    <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-1 mt-3">
                            <button type="button" class="book" style="border-radius: 4px; display: block;"> <a class="nav-link" href="p.html"> 
                                Book Rooms
                            </a></button>
                    </div>
                    </div> -->
                <!-- </form> -->
            </div>
        </div>
    </div>

    <!-- Our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow" style="max-width:300px; margin: auto;">
                    <img src="pic3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room</h5>
                        <h6>10000</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark">
                              1 balcony  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark">
                                2 Bathroom
                            </span>
                        </div>
                            <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <img src="star.svg ">
                            <img src="star.svg">
                            <img src="star.svg">
                            <img src="star.svg">
                        </div>
                        
                        <a href="room.php" class="btn btn-primary text-white shadow-sm d-flex justify-content-evenly">Book Now</a>
                    </div>
                </div>

            </div>

            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow" style="max-width:300px; margin: auto;">
                    <img src="pic3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>AC room</h5>
                        <h6>20000</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark">
                              1 balcony  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark">
                                2 Bathroom
                            </span>
                        </div>
                            <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <img src="star.svg ">
                            <img src="star.svg">
                            <img src="star.svg">
                            <img src="star.svg">
                        </div>
                        
                        <a href="room.php" class="btn btn-primary text-white shadow-sm d-flex justify-content-evenly">Book Now</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow" style="max-width:300px; margin: auto;">
                    <img src="pic3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Deluxe room</h5>
                        <h6>35000</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark">
                              1 balcony  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark">
                                2 Bathroom
                            </span>
                        </div>
                            <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <img src="star.svg ">
                            <img src="star.svg">
                            <img src="star.svg">
                            <img src="star.svg">
                        </div>
                        
                        <a href="room.php" class="btn btn-primary text-white shadow-sm d-flex justify-content-evenly">Book Now</a>
                    </div>
                </div>

            </div>
</div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a class="btn btn-sm btn-outline-dark rounded-0" href="room_login.php">
                    More Rooms >>
                </a>
            </div>
        </div>
    </div>
<!-- aminites -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">AMENITIES</h2>
<div class="container">
    <div class="row justify-content-evenly px-lg-2 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
        <img src="wifi.svg" width="50px">
        <h6 class="mt-3">Wifi</h6>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
        <img src="din.svg" width="50px">
        <h6 class="mt-3">Dine-In</h6>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
        <img src="service.svg" width="50px">
        <h6 class="mt-3">Room service</h6>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
        <img src="park.svg" width="50px">
        <h6 class="mt-3">Free parking</h6>
    </div>
 
    </div>
    <div class="row justify-content-evenly px-lg-2 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="spa.svg" width="50px">
            <h6 class="mt-3">Gym & Spa</h6>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="laun.svg" width="50px">
            <h6 class="mt-3">Laundry</h6>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="pool.svg" width="50px">
            <h6 class="mt-3">Pool</h6>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="car.svg" width="50px">
            <h6 class="mt-3">Car Rentals</h6>
        </div>
        </div>
        </div>
</div>
</div>

    <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/register" method="POST" onsubmit="showSuccessMessage(event)">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">Registration</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" id="lettersOnly" name="firstName" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" id="lettersOnly" name="lastName" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact no.</label>
                                <input type="number" class="form-control shadow-none" id="contactNo" oninput="validatePhoneNumber()" required>
                                <small id="phoneWarning" style="color: red; display: none;">Phone number must be 10 digits.</small>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Email Address:</label>
                                <input type="email" name="email" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Address:</label>
                                <input type="text" name="address" class="form-control shadow-none">
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Password:</label>
                                    <input type="password" id="password" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Confirm Password:</label>
                                    <input type="password" id="confirmPassword" class="form-control shadow-none" oninput="validatePasswords()" required>
                                    <small id="passwordWarning" style="color: red; display: none;">Passwords do not match.</small>
                                </div>
                            </div>
                            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                                Note: Your details must match with your ID (Aadhaar Card, Passport, Driving License) that will be required during check-in.
                            </span>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<!-- <script src="server.js"></script> -->
<script>
    function showSuccessPopup(event) {
        event.preventDefault(); // Prevent form submission to server for demonstration

        // Show the success modal
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();

        // Simulate form submission to the server
        // Remove this line if the backend is already set up to handle the form submission
        setTimeout(() => document.getElementById("registrationForm").submit(), 1000);
    }
    function validatePhoneNumber() {
    const inputField = document.getElementById('contactNo');
    const warningMessage = document.getElementById('phoneWarning');
    const phoneNumber = inputField.value;

    // Check if the phone number is exactly 10 digits
    if (phoneNumber.length !== 10) {
        warningMessage.style.display = 'block';
    } else {
        warningMessage.style.display = 'none';
    }
}
function validatePasswords() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const warningMessage = document.getElementById('passwordWarning');

    // Check if the passwords match
    if (password !== confirmPassword) {
        warningMessage.style.display = 'block';
    } else {
        warningMessage.style.display = 'none';
    }
}
function showSuccessMessage(event) {
                    // Prevent the form from submitting to show the alert
                    event.preventDefault();

                    // Show the success message
                    alert("Registration successful!");
}

const predefinedEmail = "exam@1.com";
  const predefinedPassword = "1236";

  // Function to validate login and display success alert
  function showLoginAlert() {
    const emailInput = document.querySelector('input[name="email"]').value;
    const passwordInput = document.querySelector('input[name="password"]').value;
    const userType = document.querySelector('input[name="user_type"]:checked');

    if (emailInput === predefinedEmail && passwordInput === predefinedPassword) {
      if (!userType) {
        alert("Please select a user type (Guest or Staff).");
        return false;
      }

      const userTypeValue = userType.value;

      // Show success alert and redirect based on user type
      if (userTypeValue === "staff") {
        alert("Login successful! Redirecting to Staff page..."); // Redirect to the Staff page
      } 
      else{
        alert("this email & password already registerd");
      }
      return false; // Prevent form submission as redirection is handled
    }
     else {
        if (!userType) {
        alert("Please select a user type (Guest or Staff).");
        return false;
      }
      const userTypeValue = userType.value;
        if (userTypeValue === "guest") {
        alert("Login successful! Redirecting to Guest page...");
        // window.location.href = "demo.html"; // Redirect to the Guest page
      }
      else{
      alert("Invalid email or password. Please try again.");
      }
      return false; // Prevent form submission
    }
  }
const input = document.getElementById('lettersOnly');
  input.addEventListener('input', () => {
    input.value = input.value.replace(/[^a-zA-Z]/g, ''); // Removes anything that is not a letter
  });
</script>

</html>