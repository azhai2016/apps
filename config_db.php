<?php

/*Connection Information for the database
$def_coy - the default company that is pre-selected on login

'host' - the computer ip address or name where the database is. The default is 'localhost' assuming that the web server is also the sql server.

'port' - the computer port where the database is. The default is '3306'. Set empty for default.

'dbuser' - the user name under which the company database should be accessed.
  NB it is not secure to use root as the dbuser with no password - a user with appropriate privileges must be set up.

'dbpassword' - the password required for the dbuser to authorise the above database user.

'dbname' - the name of the database as defined in the RDMS being used. Typically RDMS allow many databases to be maintained under the same server.
'collation' - the character set used for the database.
'tbpref' - prefix on table names, or '' if not used. Always use non-empty prefixes if multiply company use the same database.
*/


$def_coy = 0;

$tb_pref_counter = 4;

/*$host = '192.168.8.16';

$user = 'test';

$pwd = 'Test123';

$dbname = 'phprms';

$mssql_db_connections = array(
		1=>array('host' => $host,
		'port' => '1433',
		'user' => $user,
		'password' => $pwd,
		'name' => $dbname,
		'driver_options' => array(
			3 => 0,
		  )),
       );

 */$db_connections = array (
  0 => 
  array (
    'name' => 'demo',
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'fbapp',
    'collation' => 'utf8',
    'tbpref' => '0_',
    'dbuser' => 'root',
    'dbpassword' => 'azsOFT2022',
  ),
  1 => 
  array (
    'name' => '南京医药徐州恩华有限公司',
    'host' => 'localhost',
    'port' => '3306',
    'dbuser' => 'root',
    'dbpassword' => 'azsOFT2022',
    'dbname' => 'fbapp',
    'collation' => 'utf8',
    'tbpref' => '1_',
  ),
  2 => 
  array (
    'name' => '江苏盐淮百信连锁药业有限公司',
    'host' => 'localhost',
    'port' => '3306',
    'dbuser' => 'root',
    'dbpassword' => 'azsOFT2022',
    'dbname' => 'fbapp',
    'collation' => 'utf8',
    'tbpref' => '2_',
  ),
  3 => 
  array (
    'name' => '徐州恩华统一医药连锁有限公司',
    'host' => 'localhost',
    'port' => '3306',
    'dbuser' => 'root',
    'dbpassword' => 'azsOFT2022',
    'dbname' => 'rebate',
    'collation' => 'utf8',
    'tbpref' => '3_',
  ),
);
