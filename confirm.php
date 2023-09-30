<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Order Confirmation</h2>

    <!-- Display selected books and total price -->
    <div id="cart">
        <h3>Selected Books:</h3>
        <ul id="bookList">
            <!-- JavaScript will populate this list -->
        </ul>
        <p>Total Price: $<span id="totalPrice">0.00</span></p>
    </div>

    <!-- Confirmation button -->
    <button onclick="confirmOrder()">Confirm Order</button>

    <script>
        // JavaScript code to populate the list of selected books and total price
        const cart = []; // Your shopping cart array containing selected books

        function populateCart() {
            const bookList = document.getElementById("bookList");
            const totalPrice = document.getElementById("totalPrice");

            // Clear existing content
            bookList.innerHTML = "";
            totalPrice.textContent = "0.00";

            // Loop through the cart and display each selected book
            cart.forEach(book => {
                const listItem = document.createElement("li");
                listItem.textContent = `${book.title} by ${book.author} - $${book.price.toFixed(2)}`;
                bookList.appendChild(listItem);
            });

            // Calculate and display the total price
            const total = cart.reduce((acc, book) => acc + book.price, 0);
            totalPrice.textContent = total.toFixed(2);
        }

        // Function to confirm the order (you can implement this)
        function confirmOrder() {
            // Implement code to proceed with the order, generate a receipt, etc.
        }

        // Call the populateCart function when the page loads
        window.onload = populateCart;
    </script>
</body>
</html>
