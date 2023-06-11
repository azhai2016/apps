<?php

/* List of installed additional extensions. If extensions are added to the list manually make sure they have unique and so far never used extension_ids as a keys, and $next_extension_id is also updated. More about format of this file yo will find in FA extension system documentation.*/
$next_extension_id = 12; // unique id for next installed extension

$installed_extensions = array (
  3 => 
  array (
    'package' => 'rebate_sales',
    'name' => '销售返利',
    'version' => '0.1.1',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rebate_sales',
    'active' => false,
    'description' => '-- 医药流通企业_返利折让系统_销售返利   --',
    'SubPath' => 
    array (
      0 => 'rebate_sales',
    ),
  ),
  4 => 
  array (
    'package' => 'baseinfo',
    'name' => '基本信息扩展',
    'version' => '0.1.1',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/baseinfo',
    'active' => false,
    'description' => '-- 医药行业基础信息扩展 --',
    'SubPath' => 
    array (
      0 => 'baseinfo',
    ),
  ),
  7 => 
  array (
    'package' => 'rebate_purchase',
    'name' => '采购返利',
    'version' => '0.1.1',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/rebate_purchase',
    'active' => false,
    'description' => '-- 医药流通企业_返利折让系统 --',
    'SubPath' => 
    array (
      0 => 'rebate_purchase',
    ),
  ),
  11 => 
  array (
    'package' => 'qms',
    'name' => '采购商品报价系统',
    'version' => '0.1.1',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/qms',
    'active' => false,
    'description' => '-- 采购商品报价系统  --',
    'SubPath' => 
    array (
      0 => 'qms',
    ),
  ),
);
