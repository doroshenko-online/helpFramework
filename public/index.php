<?php

use ishop\App;

require_once "../config/init.php";
require_once LIBS . DIRECTORY_SEPARATOR . 'functions.php';
require_once CONF.DIRECTORY_SEPARATOR.'routes.php';

new App();
