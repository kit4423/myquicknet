<?php

/**
 * MQNBlob
 * @package MyQuickNet
 * @version 4.0
 * @copyright (c) 2012 MyQuickNet Development Group
 * @license http://opensource.org/licenses/MIT
 */

namespace com\googlecode\myquicknet\database;

/**
 *
 */
class MQNBlob {

    /**
     *
     * @var string
     */
    private $blob;

    /**
     *
     * @param string $blob
     */
    public function __construct($blob) {
        new \String($blob);
        $this->blob = (string) $blob;
    }

    /**
     * 
     * @return string
     */
    public function getBlob() {
        return $this->blob;
    }

}

?>
