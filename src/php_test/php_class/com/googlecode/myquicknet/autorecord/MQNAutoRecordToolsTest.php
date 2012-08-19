<?php

/**
 * MQNAutoRecordToolsTest
 * @package MyQuickNet
 * @version 2.1
 * @copyright (c) 2012 MyQuickNet Development Group
 * @license http://opensource.org/licenses/MIT
 */

/**
 * Test class for MQNAutoRecordTools.
 */
class MQNAutoRecordToolsTest extends PHPUnit_Framework_TestCase {

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    public function test1() {
        $fieldName = MQNAutoRecordTools::shortFieldNameToFieldName('MyFieldName');
        $this->assertEquals('my_field_name', $fieldName);
    }

}

?>
