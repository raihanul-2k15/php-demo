<?php require 'partials/header.php';?>

<div class="container">
    <h2><?=$snippet->name?></h2>
    <p><?=$snippet->description?></p>
    <pre><code>
        <?=htmlspecialchars($snippet->content)?>
    </code></pre>
</div>

<?php require 'partials/footer.php';?>