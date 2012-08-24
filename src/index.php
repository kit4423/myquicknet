<?php

/**
 * index
 * @package MyQuickNet
 * @version 3.0
 * @copyright (c) 2012 MyQuickNet Development Group
 * @license http://opensource.org/licenses/MIT
 */
/**
 *
 */
call_user_func(function () {
            require_once(dirname(__FILE__) . '/config.php');

            try {
                ob_start();
                $controller = new \com\googlecode\myquicknet\testing\TestingMainController();
                $controller->run();
                ob_end_flush();
            } catch (Exception $e) {
                ob_end_clean();

                if (key_exists('SERVER_PROTOCOL', $_SERVER)) {
                    $status = (string) ($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
                    header($status);
                    header('Status: 500 Internal Server Error');
                    echo($status);
                } else {
                    header('Status: 500 Internal Server Error');
                    echo('Status: 500 Internal Server Error');
                }
            }
        });
?>