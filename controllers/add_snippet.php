<?php

class AddSnippetController
{
    public function get()
    {
        require 'views/add_snippet.php';
    }
    public function post()
    {
        if (!array_key_exists('name', $_POST) || !array_key_exists('description', $_POST) || !array_key_exists('content', $_POST)) {
            die('Either of name, description, or content not provided.');
        }
        $snip = new Snippet();
        $snip->name = $_POST['name'];
        $snip->description = $_POST['description'];
        $snip->content = $_POST['content'];

        $snip->save();

        session_start();
        $_SESSION['flash'] = "Success! Snippet saved.";
        header('Location: /add_snippet');
    }
}
