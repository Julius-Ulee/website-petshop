<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw-Paw</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./img/icon/favicon.png">
    <script src="script.js" defer></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='index.html'>Paw-Paw</a></div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.php">Shop</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="login.html" class="tbl-biru">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section class="home">
            <img src="./img/boarder/pet food-rafiki.png"/>
            <div class="kolom">
                <h2>Product List</h2>
            </div>
        </section>

        <section>
        <div class="container">
		<?php
		$products = [
			[
				'image' => './img/product/beef-dog.jpg',
				'title' => 'Beef Dog',
				'description' => 'Terbuat dari daging sapi segar dan berkualitas tinggi, mengandung nutrisi seimbang yang dibutuhkan anjing untuk kesehatan dan kesejahteraannya.',
				'price' => 'Rp. 150.000'
			],
			[
				'image' => './img/product/tuna-fish.jpg',
				'title' => 'Venison Dog',
				'description' => 'Ikan tuna memiliki daing yang berwarna merah muda hingga merah gelap, dengan tekstur yang lembut dan cita rasa yang kaya.',
				'price' => 'Rp. 300.000'
			],
			[
				'image' => './img/product/tuna-full-meal.jpg',
				'title' => 'Tuna Full Meal',
				'description' => 'Hidangan ini terdiri dari daging tuna segar yang dimasak dengan berbagai metode, seperti dipanggang, direbus, atau digoreng.',
				'price' => 'Rp. 300.000'
			]
		];

		foreach ($products as $product) {
			echo '<div class="product-card">';
			echo '<div class="product-image">';
			echo '<img src="' . $product['image'] . '" alt="Product Image">';
			echo '</div>';
			echo '<div class="product-info">';
			echo '<h3 class="product-title">' . $product['title'] . '</h3>';
			echo '<p class="product-description">' . $product['description'] . '</p>';
			echo '<span class="product-price">' . $product['price'] . '</span>';
			echo '<button class="add-to-cart">Add to Cart</button>';
			echo '</div>';
			echo '</div>';
		}
		?>
	</div>
    </section>

    
</body>
</html>