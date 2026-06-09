<?php

declare(strict_types=1);

require_once __DIR__ . '/error_handling.php';

error_reporting(E_ALL);
set_exception_handler('exceptionHandler');
set_error_handler('errorHandler');

define('INCLUDES_DIR', __DIR__ . '/includes');
define('ROUTES_DIR', __DIR__ . '/routes');
define('TEMPLATES_DIR', __DIR__ . '/templates');
define('DB_DIR', __DIR__ . '/db');

require_once INCLUDES_DIR . '/router.php';
require_once INCLUDES_DIR . '/view.php';
require_once INCLUDES_DIR . '/db.php';
require_once INCLUDES_DIR . '/flash.php';
