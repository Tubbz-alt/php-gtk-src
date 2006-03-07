<?php
// Call GtkImageMenuItemTest::main() if this source file is executed directly.
if (!defined("PHPUnit2_MAIN_METHOD")) {
    define("PHPUnit2_MAIN_METHOD", "GtkImageMenuItemTest::main");
}

require_once "PHPUnit2/Framework/TestCase.php";
require_once "PHPUnit2/Framework/TestSuite.php";

// You may remove the following line when all tests have been implemented.
require_once "PHPUnit2/Framework/IncompleteTestError.php";



/**
 * Test class for GtkImageMenuItem.
 * Generated by PHPUnit2_Util_Skeleton on 2006-03-07 at 13:26:41.
 */
class GtkImageMenuItemTest extends PHPUnit2_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit2/TextUI/TestRunner.php";

        $suite  = new PHPUnit2_Framework_TestSuite("GtkImageMenuItemTest");
        $result = PHPUnit2_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     * @todo Implement testGet_image().
     */
    public function testGet_image() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testSet_image().
     */
    public function testSet_image() {
        // Remove the following line when you implement this test.
        throw new PHPUnit2_Framework_IncompleteTestError;
    }
}

// Call GtkImageMenuItemTest::main() if this source file is executed directly.
if (PHPUnit2_MAIN_METHOD == "GtkImageMenuItemTest::main") {
    GtkImageMenuItemTest::main();
}
?>
