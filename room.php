<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal STAY - ROOMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .h-font {
            font-family: 'Helvetica', sans-serif;
        }
        .h-line {
            width: 150px;
            height: 2px;
            margin: 0 auto;
        }
        .custom-bg {
            background-color: #007bff;
        }
        .badge {
            font-size: 14px;
        }
        .card img {
            padding: 10px 10px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ROOM DETAILS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>           
                                <div class="mb-3">
                                    <label class="form-label">Check-in</label>
                                    <input type="date" class="form-control shadow-none" id="checkin-date">                                       
                                </div>                                     
                                <div class="mb-3">
                                    <label class="form-label">Check-out</label>
                                    <input type="date" class="form-control shadow-none" id="checkout-date">    
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">HOUSEKEEPING</label>    
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">LAUNDRY</label>    
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">RESTAURANT SERVICE</label>    
                                </div>                                    
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="mb-2">
                                    <label class="form-label">Adults</label>
                                    <input type="number" class="form-control shadow-none me-1" id="adults" min="1">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Children</label>
                                    <input type="number" class="form-control shadow-none me-1" id="children" min="0">
                                </div>   
                            </div>                              
                        </div>  
                    </div>    
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <a href="simple room.jpeg">
                                <img src="simple room.jpeg" alt="Simple Room" class="img-fluid rounded">
                            </a> 
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Simple Rooms</h5>
                            <div class="features mb-4">
                                <h6 class="mb-3">Features</h6>                                    
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    1 king size Bed                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    1 Bathroom                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    1 Balcony                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    2 Sofas                                   
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-3">Facilities</h6>                           
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                           
                                    Wifi                           
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Television                            
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Cooler                           
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-3">Guests</h6>                                
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Adults                               
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Children                              
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-3">₹10,000 per night</h6>
                            <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" onclick="bookRoom('Simple Room', 10000)">Book Now</a>
                            <!--<a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" onclick="bookRoom('Simple Room', 10000)">Book Now</a>-->
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>   
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <a href="AC BED ROOM.webp">
                                <img src="AC BED ROOM.webp" alt="AC Room" class="img-fluid rounded">
                            </a> 
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">AC Rooms</h5>
                            <div class="features mb-4">
                                <h6 class="mb-3">Features</h6>                                    
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    Double Bed                                    
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    1 Bathroom                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    1 Balcony                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    2 Sofas                                   
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-3">Facilities</h6>                           
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                           
                                    Wifi                           
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Smart TV                             
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    AC                           
                                </span>   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Iron                           
                                </span>                         
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-3">Guests</h6>                                
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Adults                               
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Children                              
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-3">₹20,000 per night</h6>
                            <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <!--<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" onclick="bookRoom('AC BED ROOM', 20000)">Book Now</a>-->
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <a href="MASTER BED ROOM.jpg">
                                <img src="MASTER BED ROOM.jpg" alt="Master Bedroom" class="img-fluid rounded">
                            </a> 
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Deluxe Room</h5>
                            <div class="features mb-4">
                                <h6 class="mb-3">Features</h6>                                    
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    Spacious Layout                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    Luxurious Bedding                                  
                                </span>  
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    En-suite Bathroom                                  
                                </span> 
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    Elegant Decor                                 
                                </span>                                 
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    1 Balcony                                   
                                </span> 
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    3 Sofas                                   
                                </span>                                  
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-3">Facilities</h6>                           
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                           
                                    Wifi                           
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Television                            
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    AC                            
                                </span> 
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Mini Freezer                            
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Coffee Maker
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-3">Guests</h6>                                
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    3 Adults                               
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Children                              
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-3">₹35,000 per night</h6>
                            <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <!--<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" onclick="bookRoom('MASTER BED ROOM', 35000)">Book Now</a>-->
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div> 
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <a href="AC BED ROOM.webp">
                                <img src="room5.jpg" style="width: 1000px;" alt="AC Room" class="img-fluid rounded">
                            </a> 
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Superior Room</h5>
                            <div class="features mb-4">
                                <h6 class="mb-3">Features</h6>                                    
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    Double Bed                                    
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    1 Bathroom                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    1 Balcony                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    2 Sofas                                   
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-3">Facilities</h6>                           
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                           
                                    Wifi                           
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Smart TV                             
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    AC                           
                                </span>   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Iron                           
                                </span>                         
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-3">Guests</h6>                                
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Adults                               
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Children                              
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-3">₹30,000 per night</h6>
                            <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <!--<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" onclick="bookRoom('AC BED ROOM', 20000)">Book Now</a>-->
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <a href="AC BED ROOM.webp">
                                <img src="room4.webp" alt="AC Room" class="img-fluid rounded">
                            </a> 
                        </div>
                        <div class="col-md-5">
                            <h5 class="mb-3">Guest House</h5>
                            <div class="features mb-4">
                                <h6 class="mb-3">Features</h6>                                    
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    Double Bed                                    
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    1 Bathroom                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                    
                                    1 Balcony                                   
                                </span>                                   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                                   
                                    2 Sofas                                   
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-3">Facilities</h6>                           
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                           
                                    Wifi                           
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Smart TV                             
                                </span>                            
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    AC                           
                                </span>   
                                <span class="badge rounded-pill bg-light text-dark text-wrap">                            
                                    Iron                           
                                </span>                         
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Room heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-3">Guests</h6>                                
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Adults                               
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Children                              
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-3">₹40,000 per night</h6>
                            <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <!--<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" onclick="bookRoom('AC BED ROOM', 20000)">Book Now</a>-->
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <script>
        function bookRoom(roomType, price) {
            const checkInDate = document.getElementById('checkin-date').value;
            const checkOutDate = document.getElementById('checkout-date').value;
            const adults = document.getElementById('adults').value;
            const children = document.getElementById('children').value;

            // Validation for check-in and check-out dates
                if (!checkInDate || !checkOutDate) {
                    alert("Please select both check-in and check-out dates.");
                    event.preventDefault();
                    return;
                }

                const checkIn = new Date(checkInDate);
                const checkOut = new Date(checkOutDate);

                if (checkOut <= checkIn) {
                    alert("Check-out date must be after check-in date.");
                    event.preventDefault();
                    return;
                }

            /* Confirmation
            const bookingDetails = `
                Room: ${roomType}\n
                Price: ₹${price} per night\n
                Check-in: ${checkInDate}\n
                Check-out: ${checkOutDate}\n
                Adults: ${adults}\n
                Children: ${children}\n
                Total Nights: ${(checkOut - checkIn) / (1000 * 60 * 60 * 24)} nights
            `;
            alert(bookingDetails);

            // Final confirmation message
            alert(`Your booking for "${roomType}" is confirmed. Thank you for choosing URBAN STAY!`);*/
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>