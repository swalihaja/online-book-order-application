<!DOCTYPE html>
<html>
<head>
    <title>Online Book Ordering</title>
</head>
<body>
    <!-- HTML form for adding book details -->
    <form id="bookForm">
        <label for="title">Title:</label>
        <input type="text" id="title" placeholder="Title" required>
        <br>

        <label for="author">Author:</label>
        <input type="text" id="author" placeholder="Author" required>
        <br>

        <label for="price">Price:</label>
        <input type="number" id="price" placeholder="Price" required>
        <br>

        <button type="button" onclick="addBook()">Add Book</button>
    </form>

    <script>
        // JavaScript function to add a book
        function addBook() {
            // Get input values
            const title = document.getElementById("title").value;
            const author = document.getElementById("author").value;
            const price = document.getElementById("price").value;

            // Create a JavaScript object to represent the book
            const book = {
                title: title,
                author: author,
                price: parseFloat(price) // Parse price as a float
            };

            // TODO: You should send this book object to the server via AJAX for further processing
            // Example AJAX request:
            // fetch('/server.php', {
            //     method: 'POST',
            //     body: JSON.stringify(book),
            //     headers: {
            //         'Content-Type': 'application/json'
            //     }
            // })
            // .then(response => response.json())
            // .then(data => {
            //     // Handle server response here
            // })
            // .catch(error => {
            //     console.error('Error:', error);
            // });
            // This is a comment
        }
    </script>
</body>
</html>
