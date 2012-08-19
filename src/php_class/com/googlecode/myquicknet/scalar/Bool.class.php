<?php

/**
 * Bool
 * @package MyQuickNet
 * @version 2.1
 * @copyright (c) 2012 MyQuickNet Development Group
 * @license http://opensource.org/licenses/MIT
 */

/**
 *
 */
class Bool extends Scalar {

    /**
     *
     * @param bool $v
     */
    public function __construct($v) {
        if (is_bool($v)) {
            parent::__construct($v);
        } else {
            throw new InvalidArgumentException();
        }
    }

    /**
     *
     * @param mixed $v
     * @return Bool
     */
    public static function parse($v) {
        $v = (bool) $v;
        return new Bool($v);
    }

}

?>
