<?php
$product_images = ['bamboo-toothbrush.jpg', 'beeswax-wraps.jpg', 'water-bottle.jpg', 'trash-bags.jpg'];
foreach($product_images as $img) {
    if(!file_exists('images/'.$img)) {
       
    }
}
?>

<?php
$host = 'sql207.infinityfree.com';
$dbname = 'dragonstone';
$username = 'if0_40290031';
$password = 'GenHayesX1';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();
?>
