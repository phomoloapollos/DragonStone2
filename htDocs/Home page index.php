<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <h1>Welcome to DragonStone</h1>
        <p>Eco-friendly products for Green living</p>
        <a href="#products" class="btn btn-primary">Shop Now</a>
    </div>
</section>

<section id="products" class="products">
    <div class="container">
        <h2>Our Products</h2>
        <div class="product-grid">
            <?php
            $stmt = $pdo->query("SELECT * FROM products LIMIT 12");
            while($product = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
            <div class="product-card">
                <img src="images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                <p><?php echo htmlspecialchars(substr($product['description'], 0, 80)); ?>...</p>
                <div class="product-footer">
                    <span class="price">$<?php echo number_format($product['price'], 2); ?></span>
                    <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-secondary">View</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
