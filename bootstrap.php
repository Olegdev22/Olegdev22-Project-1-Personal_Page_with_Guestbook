<?php

declare(strict_types=1);

define('INCLUDES_DIR', __DIR__ . '/includes');
define('ROUTES_DIR', __DIR__ . '/routes');
define('TEMPLATES_DIR', __DIR__ . '/templates');
define('DB_DIR', __DIR__ . '/db');

require_once INCLUDES_DIR . '/router.php';
require_once INCLUDES_DIR . '/view.php';
require_once INCLUDES_DIR . '/db.php';