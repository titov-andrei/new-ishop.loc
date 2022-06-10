<?php

if (PHP_MAJOR_VERSION < 8) {
  die('Необходима версия PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';

echo "test" . "<br/>";

echo PHP_MAJOR_VERSION;
