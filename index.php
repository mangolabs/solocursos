<?php

// Get config
$config = require 'config.php';

// Get page
$section = isset($_GET['section'])? $_GET['section'] : 'home';

// Get fixtures
$data = json_decode(file_get_contents('fixtures/' . $section . '.json'));

// Render
include 'views/' . $section . '.php';