<?php require 'partials/header.php';?>

<div class="container">
    <h2>Add new snippet</h2>
    <form method="post" action="/add_snippet">
    <div class="form-group">
        <label for="name"></label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="6"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require 'partials/footer.php';?>