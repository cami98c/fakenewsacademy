<?php
function db_connect() {
    $dsn = 'mysql:dbname=db_schema;host=localhost';
    return new PDO($dsn, 'root', '');
}
?>
