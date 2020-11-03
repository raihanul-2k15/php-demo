
<?php

class SnippetController
{
    public function get()
    {
        if (!array_key_exists('id', $_GET)) {
            die('id not provided');
        }
        $snippet = Snippet::getSnippetById($_GET['id']);
        require 'views/snippet.php';
    }
}
