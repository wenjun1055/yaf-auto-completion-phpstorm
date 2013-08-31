<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午9:02
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   TypeError.php
 * @Desc:   ...
 */
namespace Yaf\Exception;

use Yaf;

class TypeError extends Exception {
    /* constants */

    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;

    /* methods */
    public function __construct() {
    }
    public function getPrevious() {
    }
    final private function __clone() {
    }
    final public function getMessage() {
    }
    final public function getCode() {
    }
    final public function getFile() {
    }
    final public function getLine() {
    }
    final public function getTrace() {
    }
    final public function getTraceAsString() {
    }
    public function __toString() {
    }
}