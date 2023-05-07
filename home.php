<?php

// Get the 4 most recently added products for hp
$stmt = $pdo->prepare('SELECT * FROM books ORDER BY dateofpublishing DESC LIMIT 6');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=page_header('Home')?>

<div class="featured">
    <h2>Books</h2>
    <p>Books to keep you entertained </p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Recently Added Books</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="500" height="500" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &pound;<?=$product['price']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>