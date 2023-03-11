<?php

define('DB_DUPLICATE_ERROR', 1062);
define('SQL_MODE', 'STRICT_ALL_TABLES'); // prevents SQL injection with silent field content truncation

function connect_db($host, $username, $password, $dbname, $port = 3306)
{
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
}

function db_query($pdo, $sql, $params = array())
{
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt;
}

function db_fetch_row($stmt)
{
    return $stmt->fetch(PDO::FETCH_NUM);
}

function db_fetch_assoc($stmt)
{
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function db_fetch($stmt)
{
    return $stmt->fetch(PDO::FETCH_BOTH);
}

function db_seek($stmt, $record)
{
    return $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_ABS, $record);
}

function db_free_result($stmt)
{
    $stmt->closeCursor();
}

function db_num_rows($stmt)
{
    return $stmt->rowCount();
}

function db_num_fields($stmt)
{
    return $stmt->columnCount();
}

function db_escape($pdo, $value)
{
    return $pdo->quote($value);
}

function set_global_connection($company = -1)
{
    global $db, $path_to_root, $db_connections, $SysPrefs;
    // include config file
    include $path_to_root . '/config_db.php';

    if ($company == -1) {
        $company = user_company();
    }

    // get connection details for specified company
    $connection = $db_connections[$company];

    // set PDO connection
    $pdo = connect_db($connection['host'], $connection['dbuser'], $connection['dbpassword'], $connection['dbname'], !empty($connection['port']) ? $connection['port'] : 3306);

    // set default sql_mode to STRICT_ALL_TABLES
    db_query($pdo, "SET sql_mode = '" . SQL_MODE . "'");

    return $pdo;
}


function check_db_error($pdo, $err_msg, $sql, $exit = false)
{
    if ($pdo->errorCode() != '00000') {
        $error_info = $pdo->errorInfo();
        $error_msg = $error_info[2];
        exit($error_msg);
    }
}
