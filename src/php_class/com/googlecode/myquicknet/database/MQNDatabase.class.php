<?php

/**
 * MQNDatabase
 * @package MyQuickNet
 * @version 3.0
 * @copyright (c) 2012 MyQuickNet Development Group
 * @license http://opensource.org/licenses/MIT
 */

namespace com\googlecode\myquicknet\database;

/**
 *
 */
class MQNDatabase {

    /**
     *
     * @param array $config
     */
    public function __construct(array $config) {
        
    }

    /**
     *
     * @return bool
     */
    public function begin() {
        return false;
    }

    /**
     *
     * @return bool
     */
    public function close() {
        return false;
    }

    /**
     *
     * @return bool
     */
    public function commit() {
        return false;
    }

    /**
     *
     * @return bool
     */
    public function connect() {
        return false;
    }

    /**
     *
     * @param string $string
     * @return string
     */
    public function escapeString($string) {
        new \String($string);
        return $string;
    }

    /**
     *
     * @return bool
     */
    public function isReady() {
        return false;
    }

    /**
     * 
     * @param string $sql
     * @return \com\googlecode\myquicknet\database\MQNDatabaseStatement
     */
    public function prepare($sql) {
        new \String($sql);
        $statement = new MQNDatabaseStatement(array());
        return $statement;
    }

    /**
     *
     * @param string $sql
     * @return array|bool
     */
    public function query($sql) {
        new \String($sql);
        return false;
    }

    /**
     *
     * @param string $sql
     * @return array|bool
     */
    public function queryForUpdate($sql) {
        new \String($sql);
        return false;
    }

    /**
     *
     * @param string $sql
     * @param int $rowCount
     * @param int $offset
     * @return array|bool
     */
    public function queryLimit($sql, $rowCount, $offset = 0) {
        new \String($sql);
        new \Int($rowCount);
        new \Int($offset);
        return false;
    }

    /**
     *
     * @param string $sql
     * @param int $rowCount
     * @param int $offset
     * @return array|bool
     */
    public function queryLimitForUpdate($sql, $rowCount, $offset = 0) {
        new \String($sql);
        new \Int($rowCount);
        new \Int($offset);
        return false;
    }

    /**
     *
     * @return bool
     */
    public function rollback() {
        return false;
    }

}

?>
