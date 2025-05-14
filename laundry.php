<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Laundry Service</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="styyles.css">
</head>
<body>

    <div class="container">
        <header>
            <h1>Care & Clean Laundry</h1>
            <p class="subheading">Providing premium laundry care for your comfort and convenience.</p>
        </header>

        <div class="form-container">
            <form id="laundry-form">
                <!-- Laundry Items in 2 rows, 4 items each -->
                <div class="form-section">
                    <h3>Select Laundry Items</h3>
                    <div class="laundry-items">
                        <!-- Row 1 -->
                        <div class="laundry-item">
                            <img src="images/baby-wear.png" alt="Baby Wear">
                            <label for="baby-wear">Baby Wear</label>
                            <input type="number" id="baby-wear" name="baby-wear" min="0" value="0">
                            <select id="baby-wear-services" name="baby-wear-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>

                        <div class="laundry-item">
                            <img src="images/cotton-wear.png" alt="Cotton Wear">
                            <label for="cotton-wear">Cotton Wear</label>
                            <input type="number" id="cotton-wear" name="cotton-wear" min="0" value="0">
                            <select id="cotton-wear-services" name="cotton-wear-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>

                        <div class="laundry-item">
                            <img src="images/jeans.png" alt="Jeans">
                            <label for="jeans">Jeans</label>
                            <input type="number" id="jeans" name="jeans" min="0" value="0">
                            <select id="jeans-services" name="jeans-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>

                        <div class="laundry-item">
                            <img src="images/shoes.png" alt="Shoe Cleaning">
                            <label for="shoes">Shoe Cleaning</label>
                            <input type="number" id="shoes" name="shoes" min="0" value="0">
                            <select id="shoes-services" name="shoes-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="polishing">Polishing</option>
                            </select>
                        </div>
                    </div>

                    <div class="laundry-items">
                        <!-- Row 2 -->
                        <div class="laundry-item">
                            <img src="images/linen-wear.png" alt="Linen Wear">
                            <label for="linen-wear">Linen Wear</label>
                            <input type="number" id="linen-wear" name="linen-wear" min="0" value="0">
                            <select id="linen-wear-services" name="linen-wear-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>

                        <div class="laundry-item">
                            <img src="images/coats-blazers.png" alt="Coats & Blazers">
                            <label for="coats-blazers">Coats & Blazers</label>
                            <input type="number" id="coats-blazers" name="coats-blazers" min="0" value="0">
                            <select id="coats-blazers-services" name="coats-blazers-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>

                        <div class="laundry-item">
                            <img src="images/special-care.png" alt="Special Care Garments">
                            <label for="special-care">Special Care Garments</label>
                            <input type="number" id="special-care" name="special-care" min="0" value="0">
                            <select id="special-care-services" name="special-care-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>

                        <div class="laundry-item">
                            <img src="images/other-items.png" alt="Other Items">
                            <label for="other-items">Other Items</label>
                            <input type="number" id="other-items" name="other-items" min="0" value="0">
                            <select id="other-items-services" name="other-items-services">
                                <option value="cleaning">Cleaning</option>
                                <option value="ironing">Ironing</option>
                                <option value="drycleaning">Dry Cleaning</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="form-section">
                    <button type="submit">Submit Request</button>
                </div>
            </form>
        </div>

        <!-- Summary Modal -->
        <div class="summary-container" id="summary-container">
            <div class="modal-content">
                <h3>Your Laundry Request Summary</h3>
                <ul id="summary-list"></ul>
                <p id="total-cost"></p>
                <p id="estimated-time"></p>
                <button id="close-summary" class="btn-close">Close</button>
            </div>
        </div>

        <!-- Special Statement -->
        <div class="special-statement">
            <p>Please be informed that bedsheets and other hotel linens will be serviced by housekeeping between 12:00 PM and 2:00 PM daily.</p>
        </div>

    </div>

    <script src="scriptt.js"></script>
</body>
</html>