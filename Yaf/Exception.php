<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:56
 * @Email:  wenjun1055@gmail.com
 * @File:   Exception.php
 * @Desc:   ...
 */
namespace yaf;

class Exception extends Exception {
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