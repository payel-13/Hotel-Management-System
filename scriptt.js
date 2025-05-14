const prices = {
    "baby-wear": { cleaning: 50, ironing: 50, dryCleaning: 150 },
    "cotton-wear": { cleaning: 80, ironing: 50, dryCleaning: 80 },
    "jeans": { cleaning: 150, ironing: 70, dryCleaning: 250 },
    "shoes": { cleaning: 150, polishing: 200 },
    "linen-wear": { cleaning: 120, ironing: 60, dryCleaning: 200 },
    "coats-blazers": { cleaning: 300, ironing: 600, dryCleaning: 1000 },
    "special-care": { cleaning: 1200, ironing: 500, dryCleaning: 1500 },
    "other-items": { cleaning: 50, ironing: 40, dryCleaning: 100 },
    express: 10
};

const estimatedTimes = {
    express: "1 day",
    dryCleaning: "3-4 days",
    ironing: "1-2 days",
    polishing: "1-2 days"
};

document.getElementById('laundry-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const items = [
        'baby-wear', 'cotton-wear', 'jeans', 'shoes',
        'linen-wear', 'coats-blazers', 'special-care', 'other-items'
    ];

    let totalCost = 0;
    let summaryList = '';
    let returnTime = "2-3 days";

    items.forEach(item => {
        const quantity = parseInt(document.getElementById(item).value);
        const service = document.getElementById(item + '-services').value;

        if (quantity > 0) {
            const cost = quantity * prices[item][service];
            totalCost += cost;
            summaryList += `<li>${quantity} ${item.replace('-', ' ')} - ${service} - ₹${cost}</li>`;
        }
    });

    // Add Express Service (if selected)
    if (document.getElementById('express').checked) {
        totalCost += prices.express;
        summaryList += `<li>Express Service - ₹${prices.express}</li>`;
        returnTime = estimatedTimes.express;
    }

    // Estimate Return Time based on services
    if (summaryList.includes('dryCleaning')) {
        returnTime = estimatedTimes.dryCleaning;
    } else if (summaryList.includes('ironing')) {
        returnTime = estimatedTimes.ironing;
    } else if (summaryList.includes('polishing')) {
        returnTime = estimatedTimes.polishing;
    }

    // Display Summary
    document.getElementById('summary-list').innerHTML = summaryList;
    document.getElementById('total-cost').innerText = `Total Cost: ₹${totalCost}`;
    document.getElementById('estimated-time').innerText = `Estimated Return Time: ${returnTime}`;

    // Show Summary Modal
    document.getElementById('summary-container').style.display = 'flex';
});

// Close the modal
document.getElementById('close-summary').addEventListener('click', function() {
    document.getElementById('summary-container').style.display = 'none';
});