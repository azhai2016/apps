<?php
/*
$dsn = 'odbc:Driver={FreeTDS};Server=SqlServer;Database=ehhr';
$username = 'sjdj';
$password = 'sjdj';

try {
    $conn = new PDO($dsn, $username, $password);
    echo "Connected to the database successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} 

*/

/*
$server = 'SQL2005'; // FreeTDS 配置中的配置块名称
$user = 'sjdj';
$password = 'sjdj';
$database = 'ehhr';

$dsn = "odbc:Driver=FreeTDS;Server=SqlServer;Port=1433;TDS_Version=8.0;ClientCharset=UTF-8";
$user = "sjdj";
$password = "sjdj";

$conn = odbc_connect($dsn, $user, $password);

if ($conn) {
    echo "成功连接到 SQL Server<br>";
    // 在这里执行 SQL 查询和操作
    odbc_close($conn);
} else {
    echo "连接失败：" . odbc_errormsg();
}
*/

ini_set('display_errors', 0);
error_reporting(E_ALL);
/*
echo 'OK';
echo exec('whoami');
echo get_current_user();

$dsn = "odbc:DSN=SqlServer2005";

$defaultOptions = array(
    PDO::ATTR_TIMEOUT => 30,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);


try {
    $pdo = new PDO($dsn, 'sjdj', 'sjdj');

    $query = "SELECT getdate() as column1,getdate() as column2";
    $statement = $pdo->query($query);

    // 处理查询结果
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo "Column1: " . $row['column1'] . ", Column2: " . $row['column2'] . "<br>";
    }

    // 关闭连接
    $pdo = null;

    echo "成功连接到 SQL Server<br>";
} catch (PDOException $e) {
    echo "连接失败：" . $e->getMessage();
}
*/

$dsn = "odbc:Driver=FreeTDS;Server=192.168.8.148;Port=1433;TDS_Version=8.0;ClientCharset=UTF-8;TraceFile=/var/log/trace.log;TraceLevel=4";
$user = "sjdj";
$password = "sjdj";

try {
    $pdo = new PDO($dsn, $user, $password);

    $query = "SELECT getdate() as column1,getdate() as column2";
    $statement = $pdo->query($query);

    // 处理查询结果
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo "Column1: " . $row['column1'] . ", Column2: " . $row['column2'] . "<br>";
    }

    // 关闭连接
    $pdo = null;

    echo "成功连接到 SQL Server<br>";

    // 在这里执行 SQL 查询和操作
} catch (PDOException $e) {
    echo "连接失败：" . $e->getMessage();
}
