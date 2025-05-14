// script.js
document.getElementById("submitReview").addEventListener("click", function() {
    const reviewText = document.getElementById("reviewText").value;
    if (reviewText.trim() === "") {
        alert("Please write something before submitting!");
        return;
    }

    // Create a new feedback item
    const feedbackItem = document.createElement("div");
    feedbackItem.classList.add("feedback-item");
    feedbackItem.textContent = reviewText;

    // Append the feedback item to the feedback list
    document.getElementById("feedbackList").appendChild(feedbackItem);

    // Clear the textarea
    document.getElementById("reviewText").value = "";
});