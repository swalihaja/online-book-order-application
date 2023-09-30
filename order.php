// JavaScript code to handle adding books to the shopping cart
const cart = []; // Initialize an empty shopping cart array

function addToCart(book) {
    cart.push(book); // Add the book to the cart array
}

// Example usage:
const book1 = {
    title: "Book 1",
    author: "Author 1",
    price: 20.0
};

const book2 = {
    title: "Book 2",
    author: "Author 2",
    price: 25.0
};

addToCart(book1); // Add Book 1 to the cart
addToCart(book2); // Add Book 2 to the cart

// You can now access the cart array to view the selected books
console.log(cart);
