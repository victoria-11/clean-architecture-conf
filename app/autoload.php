<?php

require_once(__DIR__ . '/models/autoload.php');
require_once(__DIR__ . '/conferences/autoload.php');
require_once(__DIR__ . '/works/autoload.php');

use Works\Deliveries\WorkController;

$controller = new WorkController();

$controller->create();
