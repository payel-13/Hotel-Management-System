document.addEventListener('DOMContentLoaded', function() {
    const menuItemsContainer = document.getElementById('menu-items');
    const cartItemsContainer = document.getElementById('cart-items');
    const beverageItemsContainer = document.getElementById('beverage-items');
    const totalPriceElement = document.getElementById('total-price');
    const cartCountElement = document.getElementById('cart-count');

    // Sample menu items with images
    const sampleMenuItems = [
        { id: 1, name: 'Spaghetti Carbonara', description: 'Classic Italian pasta dish with eggs, cheese, pancetta, and pepper.', price: 999.00, image: 'images/spaghetti.jpg' },
        { id: 2, name: 'Margherita Pizza', description: 'Tomato, mozzarella, and fresh basil pizza.', price: 410.50, image: 'images/pizza.jpg' },
        { id: 3, name: 'Lasagna', description: 'A hearty Italian dish with layering sheets of pasta with béchamel or ricotta cheese, and mozzarella', price: 699.00, image: 'images/lazania.jpg' },
        { id: 4, name: 'Caesar Salad', description: 'Crisp romaine lettuce with Caesar dressing, croutons, parmesan and grilled tofu.', price: 599.00, image: 'images/salad.jpg' },
        { id: 5, name: 'Grilled Salmon', description: 'Salmon fillet grilled to perfection with lemon butter garlic sauce.', price: 1599.45, image: 'images/salmon.jpg' },
        { id: 6, name: 'Fish Tacos', description: 'Grilled fish wrapped in soft tortillas, topped with shredded cabbage, fresh salsa, avocado, and a creamy sauce', price: 599.00, image: 'images/tacos.jpg' },
        { id: 7, name: 'Ceviche ', description:  'Raw fish marinated in lime, mixed with chopped onions, cilantro, tomatoes, and peppers.Served with tortilla ' , price: 599.99, image: 'images/Cavi.jpg' },
        { id: 8, name: 'Ebi-fry  ', description:  'Japanese dish of crispy, golden-brown breaded shrimp, deep-fried to perfection with a tender, juicy interior.' , price: 399.99, image: 'images/shrimp.jpg' },
        { id: 9, name: 'Barbeque Platter ', description: 'Barbeque grilled meat, corn, and juicy vegetables' , price: 2999.00, image: 'images/bbq3.jpg' },
        { id: 10, name: 'Seafood Platter ', description:  'An assortment of fresh, cooked seafood: shrimp, crab legs, lobster.Served with lemon wedges, cocktail sauce, and melted garlic butter sauce' , price: 3999.99, image: 'images/seafood.jpg' },
        { id: 11, name: 'Tropical Shrimp and Chicken Skewer Platter ', description: 'Succulent, grilled shrimp and marinated chicken skewers, infused with tropical flavors such as pineapple, coconut, and citrus.' , price: 1999.99, image: 'images/chimp.jpg' },
    ];


    const sampleBeverageItems = [
        { id: 1, name: 'Coke', description: 'Classic Coca-Cola soft drink.', price: 59.00, image: 'images/coke.jpg' },
        { id: 2, name: 'Lemonade', description: 'Refreshing lemonade with a hint of mint.', price: 120.49, image: 'images/lemonade.jpg' },
        { id: 3, name: 'Iced Tea', description: 'Chilled iced tea with lemon.', price: 150.00, image: 'images/icedtea.jpg' },
        { id: 4, name: 'Cold brewed Coffee', description: 'Cold brewed coffee, perfect for any time of the day.', price: 120.00, image: 'images/coffee.jpg' },
        { id: 5, name: 'Matcha Tea', description: 'Vibrant, finely ground green tea with a rich, smooth flavor and a soothing, earthy aroma', price: 160.99, image: 'images/tea.jpg' },
        { id: 6, name: 'Cucumber Cooler', description: 'A soothing blend of cucumber, lime, and mint with a splash of soda water, perfect for a light and refreshing experience.', price: 109.00, image: 'images/cucumber.jpg' },
        { id: 7, name: 'Mojito', description: 'A refreshing blend of mint, lime, and sparkling water, with a touch of sweetness and a hint of zest.', price: 120.09, image: 'images/mojito.jpg' },
        { id: 8, name: 'Pina Colada', description: 'Tropical blend of pineapple and coconut', price: 189.00, image: 'images/pina.jpg' },
        { id: 9, name: 'Shirley Temple', description: ' A classic mix of ginger ale, grenadine, and a splash of citrus, with a cherry on top.', price: 170.00, image: 'images/shirley.jfif' },
        { id: 10, name:'Watermelon Punch', description: 'A refreshing blend of juicy watermelon, zesty lime, and mint, this vibrant punch is a cool delight.', price: 120.00, image: 'images/punch.jpg' },
    ];

    let cart = [];

    // Function to render a menu item
    function renderMenuItem(item) {
        const div = document.createElement('div');
        div.className = 'menu-item';
        div.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <h3>${item.name}</h3>
            <p>${item.description}</p>
            <span>₹${item.price.toFixed(2)}</span>
            <button data-id="${item.id}">Add to Cart</button>
        `;
        return div;
    }

    // Function to render a beverage item
    function renderBeverageItem(item) {
        const div = document.createElement('div');
        div.className = 'menu-item';
        div.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <h3>${item.name}</h3>
            <p>${item.description}</p>
            <span>₹${item.price.toFixed(2)}</span>
            <button data-id="${item.id}">Add to Cart</button>
        `;
        return div;
    }

    // Function to render a cart item
    function renderCartItem(item) {
        const div = document.createElement('div');
        div.className = 'cart-item';
        div.innerHTML = `
            <input type="checkbox" data-id="${item.id}" checked>
            <span>${item.name}</span>
            <span>₹${item.price.toFixed(2)}</span>
        `;
        return div;
    }

    // Update cart display
    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let total = 0;
        cart.forEach(item => {
            cartItemsContainer.appendChild(renderCartItem(item));
            total += item.price;
        });
        totalPriceElement.textContent = total.toFixed(2);
        cartCountElement.textContent = `(${cart.length})`;
    }

    // Handle item addition to cart
    menuItemsContainer.addEventListener('click', function(event) {
        if (event.target.tagName === 'BUTTON') {
            const id = parseInt(event.target.getAttribute('data-id'));
            const item = sampleMenuItems.find(item => item.id === id);
            if (item) {
                cart.push(item);
                updateCart();
            }
        }
    });

    beverageItemsContainer.addEventListener('click', function(event) {
        if (event.target.tagName === 'BUTTON') {
            const id = parseInt(event.target.getAttribute('data-id'));
            const item = sampleBeverageItems.find(item => item.id === id);
            if (item) {
                cart.push(item);
                updateCart();
            }
        }
    });

    // Handle checkbox change to update total price
    cartItemsContainer.addEventListener('change', function(event) {
        if (event.target.tagName === 'INPUT' && event.target.type === 'checkbox') {
            const id = parseInt(event.target.getAttribute('data-id'));
            const item = cart.find(item => item.id === id);
            if (item) {
                item.selected = event.target.checked;
                updateTotal();
            }
        }
    });

    // Update the total price based on selected items
    function updateTotal() {
        const selectedItems = cart.filter(item => item.selected !== false);
        const total = selectedItems.reduce((acc, item) => acc + item.price, 0);
        totalPriceElement.textContent = total.toFixed(2);
    }

    // Handle checkout
    document.getElementById('checkout').addEventListener('click', function() {
        if (cart.length === 0) {
            alert('Your cart is empty.');
            return;
        }

        const total = parseFloat(totalPriceElement.textContent);
        if (total === 0) {
            alert('No items selected for checkout.');
            return;
        }

        alert(`Thank you for your purchase! Your total is ₹${total.toFixed(2)}.`);
        cart = [];
        updateCart();
    });

    // Render sample menu items
    sampleMenuItems.forEach(item => {
        menuItemsContainer.appendChild(renderMenuItem(item));
    });
     // Render sample beverage items
     sampleBeverageItems.forEach(item => {
        beverageItemsContainer.appendChild(renderBeverageItem(item));
    });
});