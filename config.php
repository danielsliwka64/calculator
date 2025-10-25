<?php
define('_SERVER_NAME', 'localhost:8080');
define('_SERVER_URL', 'http://' . _SERVER_NAME);
define('_APP_ROOT', '/calculator');
define('_APP_URL', _SERVER_URL . _APP_ROOT);
define('_ROOT_PATH', dirname(__FILE__));
define('_APP_PATH', _ROOT_PATH . '/app');

function out(&$param) {
    if (isset($param)) {
        echo htmlspecialchars($param);
    }
}
?>
