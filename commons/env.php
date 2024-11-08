<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS
//duong dan vao client
define('BASE_URL'       , 'http://localhost/mvc-oop-basic/mvc-oop-basic/');
//duong dan vao admin
define('BASE_URL_ADMIN'       , 'http://localhost/mvc-oop-basic/mvc-oop-basic/admin');

define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'xuongduan1');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');
