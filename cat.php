<!DOCTYPE html>
<html>

<head>
    <title>Product Catalog</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    #navbar {
        width: 200px;
        height: 100vh;
        background-color: #f1f1f1;
        position: fixed;
        top: 0;
        left: 0;
        overflow-y: auto;
        padding: 20px;
        margin-top: 150px;
    }

    #navbar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #navbar li {
        margin-bottom: 10px;
    }

    #navbar label {
        display: block;
    }

    #navbar input[type="checkbox"] {
        margin-right: 5px;
    }

    #navbar a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    #navbar a.checked {
        background-color: #333;
        color: #fff;
    }

    #content {
        margin-left: 220px;
        padding: 20px;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .card {
        width: calc(25% - 20px);
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
    }

    .card .image-placeholder {
        width: 100%;
        height: 200px;
        background-color: #000;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .card h2 {
        margin-top: 0;
    }

    h1 {
        margin-top: 0;
    }
    </style>
    <script>
    function toggleCategory(category) {
        category.classList.toggle('checked');
    }
    </script>
</head>

<body>
    <div id="navbar">
        <ul>
            <li>
                <label>
                    <input type="checkbox" onchange="toggleCategory(this.nextElementSibling)">
                    <a href="#category1">Category 1</a>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" onchange="toggleCategory(this.nextElementSibling)">
                    <a href="#category2">Category 2</a>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" onchange="toggleCategory(this.nextElementSibling)">
                    <a href="#category3">Category 3</a>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" onchange="toggleCategory(this.nextElementSibling)">
                    <a href="#category4">Category 4</a>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" onchange="toggleCategory(this.nextElementSibling)">
                    <a href="#category5">Category 5</a>
                </label>
            </li>
        </ul>
    </div>

    <div id="content">
        <h1>Product Catalog</h1>

        <div class="cards">
            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 1</h2>
                <p>Description of Product 1.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 2</h2>
                <p>Description of Product 2.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 3</h2>
                <p>Description of Product 3.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 4</h2>
                <p>Description of Product 4.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 5</h2>
                <p>Description of Product 5.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 6</h2>
                <p>Description of Product 6.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 7</h2>
                <p>Description of Product 7.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 8</h2>
                <p>Description of Product 8.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 9</h2>
                <p>Description of Product 9.</p>
            </div>

            <div class="card">
                <div class="image-placeholder"></div>
                <h2>Product 10</h2>
                <p>Description of Product 10.</p>
            </div>
        </div>
    </div>
</body>

</html>