<?php

if(!defined('PHPUnit_MAIN_METHOD')) {
  define('PHPUnit_MAIN_METHOD', 'Caching_AllTests::main');
}

require_once 'TSqliteCacheTest.php';
require_once 'TAPCCacheTest.php';
require_once 'TMemCacheTest.php';

class Caching_AllTests {
  public static function main() {
    PHPUnit_TextUI_TestRunner::run(self::suite());
  }
  
  public static function suite() {
    $suite = new PHPUnit_Framework_TestSuite('System.Caching');
    
	$suite->addTestSuite('TSqliteCacheTest');
	$suite->addTestSuite('TAPCCacheTest');
	$suite->addTestSuite('TMemCacheTest');
	
    return $suite;
  }
}

if(PHPUnit_MAIN_METHOD == 'Caching_AllTests::main') {
  Caching_AllTests::main();
}
?>
