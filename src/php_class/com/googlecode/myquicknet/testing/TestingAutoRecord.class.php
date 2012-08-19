<?php

/**
 * TestingAutoRecord
 * @package MyQuickNet
 * @version 2.1
 * @copyright (c) 2012 MyQuickNet Development Group
 * @license http://opensource.org/licenses/MIT
 */

/**
 *
 */
class TestingAutoRecord extends TestingAutoRecordConfig {

    /**
     *
     * @param array $config
     */
    public function __construct(array $config = array()) {
        parent::__construct();
    }

    /**
     *
     * @return string
     */
    public function methodA() {
        return 'TestingAutoRecord';
    }

}

?>
