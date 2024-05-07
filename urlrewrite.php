<?php
$arUrlRewrite = array(
  0 =>
  array(
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  1 =>
  array(
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  2 =>
  array(
    'CONDITION' => '#^/test/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/test/test.php',
    'SORT' => 100,
  ),
);
