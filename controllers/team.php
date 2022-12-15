<?php

$heading = "Team Page";

$config = require 'config.php';
$db = new Database($config['database']);
$posts = $db->query('select * from posts')->fetchAll();

require "views/team.view.php";