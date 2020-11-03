<?php

class IndexController
{
    public function get()
    {
        $snippets = Snippet::getAllSnippets();
        require 'views/index.php';
    }
}
