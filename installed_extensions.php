<?php

/* List of installed additional extensions. If extensions are added to the list manually make sure they have unique and so far never used extension_ids as a keys, and $next_extension_id is also updated. More about format of this file yo will find in FA extension system documentation.*/
$next_extension_id = 11; // unique id for next installed extension

$installed_extensions = array (
  10 => 
  array (
    'package' => 'bussiness',
    'name' => 'Bussiness',
    'version' => '0.1.1',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/bussiness',
    'active' => false,
    'description' => '-- 业务管理模块医药行业 --',
    'SubPath' => 
    array (
      0 => 'Baseinfo',
    ),
  ),
);
