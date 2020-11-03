<?php

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'models/Snippet.php';

Snippet::init(new QueryBuilder(Connection::make()));

require 'core/Router.php';
require 'core/Request.php';

require 'controllers/index.php';
require 'controllers/about.php';
require 'controllers/snippet.php';
require 'controllers/add_snippet.php';
