<?php

declare(strict_types=1);

use celionatti\Bolt\Bolt;
use PhpStrike\app\controllers\SiteController;

/** @var Bolt $bolt */

/**
 * ========================================
 * Bolt - Router Usage ====================
 * ========================================
 */

// $bolt->router->get("/user", function() {
//     echo "User function routing...";
// });

$bolt->router->get("/", [SiteController::class, "welcome"]);
