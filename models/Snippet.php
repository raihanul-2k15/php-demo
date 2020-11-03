<?php

class Snippet
{
    public $id;
    public $name;
    public $description;
    public $content;

    protected static $qb;

    public function save()
    {
        Snippet::$qb->insert('snippets', [
            'name' => $this->name,
            'description' => $this->description,
            'content' => $this->content,
        ]);
    }

    public static function init($_qb)
    {
        Snippet::$qb = $_qb;
    }

    public static function getAllSnippets()
    {
        return Snippet::$qb->selectAll('snippets', 'Snippet');
    }

    public static function getSnippetById($id)
    {
        return Snippet::$qb->selectOne('snippets', $id, 'Snippet');
    }
}
