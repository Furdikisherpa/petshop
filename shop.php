<?php
require_once "Database/connection.php";

$query = "SELECT * FROM food";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/shop.css">
</head>
<body>
    <?php require_once "header.php"; ?>
    
    <h2 class="product-heading">Products</h2>
    <hr>

    <div class="product-container">
        <?php foreach ($result as $single) : ?>
            <div class="product-item">
                <div class="product-image">
                    <a href="view_details.php?id=<?php echo $single['id']; ?>">
                    <img src="pimages/<?php echo $single['image']; ?>" alt="<?php echo $single['image']; ?>">
                    </a>
                </div>
                <div class="product-name">
                <a href="view_details.php?id=<?php echo $single['id']; ?>"><?php echo $single['name']; ?></div></a>
                <div class="product-details">
                <div class="product-price">
                    <a href="view_details.php?id=<?php echo $single['id']; ?>"><?php echo $single['price']; ?></a>
                </div>
                    <!-- <button>Add to cart</button> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="footer">
    <?php require_once "footer.php" ?>
    </div>
    
</body>
</html>
