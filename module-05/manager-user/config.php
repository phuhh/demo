<?php
// Routes Default
defined('_MODULE_DEFAULT') or define('_MODULE_DEFAULT', 'home');
defined('_ACTION_DEFAULT') or define('_ACTION_DEFAULT', 'lists');

// Ngăn chặn người dùng truy cập vào files trực tiếp
defined('_ACCESS_DENIED') or define('_ACCESS_DENIED', true);

// Thiết lập đường dẫn Host Root
defined('_WEB_HOST_ROOT') or define(
    '_WEB_HOST_ROOT',
    'http://' . $_SERVER['HTTP_HOST'] . '/php-basic/module-05/manager-user'
);

// Thiết lập dường dẫn Host Templates
defined('_WEB_HOST_TEMPLATES') or define(
    '_WEB_HOST_TEMPLATES',
    _WEB_HOST_ROOT . '/Templates'
);

// Thiết lập đường dẫn thư mục Root
// defined('_WEB_PATH_ROOT') or define('_WEB_PATH_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/php-basic/module-05/manager-user');
defined('_WEB_PATH_ROOT') or define('_WEB_PATH_ROOT', __DIR__);

// Thiết lập đường dẫn thư mục Templates
defined('_WEB_PATH_TEMPLATES') or define('_WEB_PATH_TEMPLATES', _WEB_PATH_ROOT . '/Templates');
