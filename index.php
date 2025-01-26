<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Storage</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-oYYX1jI3JtK/oytRoAFDbGox8r+QmowcH8Xv3fVdTk4PvlfHB3g6IPCBdFVozr5y" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
    body {
        background: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .header {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: white;
        padding: 20px 0;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .book-form {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .book-list {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .btn-primary {
        background: #6a11cb;
        border: none;
    }

    .btn-primary:hover {
        background: #2575fc;
    }

    .book-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .book-card img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 15px;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <h1>Book Storage System</h1>
        <p>Your digital library, organized and accessible</p>
    </header>

    <!-- Main Content -->
    <div class="container mt-5">
        <!-- Form لإضافة كتاب جديد -->
        <div class="book-form">
            <h2 class="mb-4 text-center">Add a New Book</h2>
            <form id="bookForm">
                <div class="mb-3">
                    <label for="title" class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter book title" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="Enter author name" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category">
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control" id="year" placeholder="Enter publication year">
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" placeholder="Enter ISBN">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Book</button>
            </form>
        </div>

        <!-- عرض قائمة الكتب -->
        <div class="book-list mt-5">
            <h2 class="mb-4 text-center">Books List</h2>
            <div id="bookList">
                <!-- يتم إضافة الكتب هنا -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-NjFjGKJbjhL8ZSWZe9IIMxDR/I9Gy5yFDp8yD1JqQi0wRVW44vhwIYZpovtMzDK5" crossorigin="anonymous">
    </script>

    <!-- Custom JS -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const bookList = document.getElementById('bookList');
        const bookForm = document.getElementById('bookForm');

        // إضافة كتاب جديد
        bookForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const title = document.getElementById('title').value;
            const author = document.getElementById('author').value;
            const category = document.getElementById('category').value;
            const year = document.getElementById('year').value;

            const bookCard = `
                    <div class="book-card">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Book Cover">
                            <div>
                                <h5>${title}</h5>
                                <p class="mb-0">${author} | ${category} | ${year}</p>
                            </div>
                        </div>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </div>
                `;

            bookList.innerHTML += bookCard;
            bookForm.reset();
        });

        // حذف كتاب
        bookList.addEventListener('click', (e) => {
            if (e.target.classList.contains('btn-danger')) {
                e.target.parentElement.remove();
            }
        });
    });
    </script>
</body>

</html>
