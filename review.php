<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <link rel="stylesheet" href="sstyles.css">
</head>
<body>
    <div class="container">
        <h1>Customer Reviews</h1>
        <div class="review-form">
            <h2>Leave a Review</h2>
            <textarea id="reviewText" placeholder="Write your review here..."></textarea>
            <button id="submitReview">Submit Review</button>
        </div>
        <div class="feedback-panel">
            <h2>Reviews</h2>
            <div class="feedback-box">
                <div id="feedbackList">
                    <!-- Reviews will appear here -->
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>