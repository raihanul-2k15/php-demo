<?php require 'partials/header.php';?>

<div class="container">
    <ul>
        <?php foreach ($snippets as $snip): ?>
        <div>
            <h4><?=$snip->name?></h4>
            <p><?=$snip->description?></p>
            <a href="/snippet?id=<?=$snip->id?>">View details</a>
        </div>
        <?php endforeach;?>
    </ul>
</div>

<?php require 'partials/footer.php';?>