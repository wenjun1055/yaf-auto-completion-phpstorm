<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:26
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Response_Abstract.php
 * @Desc:   ...
 */
namespace Yaf;

abstract class Response_Abstract {
    /* constants */

    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "";

    /* methods */
    public function __construct() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __toString() {
    }
    public function setBody() {
    }
    public function appendBody() {
    }
    public function prependBody() {
    }
    public function clearBody() {
    }
    public function getBody() {
    }
    public function setHeader() {
    }
    protected function setAllHeaders() {
    }
    public function getHeader() {
    }
    public function clearHeaders() {
    }
    public function setRedirect() {
    }
    public function response() {
    }
}