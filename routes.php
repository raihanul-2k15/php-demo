<?php

return function ($router) {
    $router->get('', 'IndexController');
    $router->get('snippet', 'SnippetController');
    $router->get('about', 'AboutController');
    $router->get('add_snippet', 'AddSnippetController');

    $router->post('add_snippet', 'AddSnippetController');
};
