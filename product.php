<?php include('header.php'); ?>

<!-- Product Page Content -->
<div class="product-page">
    <div class="product-images">
        <!-- Display product images -->
        <img src="images/products/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="main-image">
        <!-- You can add thumbnails for additional images -->
    </div>
    
    <div class="product-details">
        <h1><?php echo $product['name']; ?></h1>
        <p class="product-description"><?php echo $product['description']; ?></p>
        <p class="product-price">$<?php echo number_format($product['price'], 2); ?></p>
        
        <!-- Product Attributes: Size, Color, etc. -->
        <form action="add_to_cart.php" method="POST">
            <div class="product-attributes">
                <label for="size">Size:</label>
                <select name="size" id="size">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                </select>
            </div>
            <div class="product-attributes">
                <label for="color">Color:</label>
                <select name="color" id="color">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>
            </div>
            <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
        
        <!-- Display Reviews and Ratings -->
        <div class="product-reviews">
            <h3>Customer Reviews</h3>
            <div class="reviews-list">
                <!-- Display product reviews dynamically -->
                <p>★★★★☆</p>
                <p>"Great product! Highly recommend."</p>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>