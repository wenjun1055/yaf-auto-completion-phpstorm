<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:56
 * @Email:  wenjun1055@gmail.com
 * @File:   Session.php
 * @Desc:   ...
 */
namespace Yaf;

final class Session implements Iterator, Traversable, ArrayAccess, Countable {
    /* constants */

    /* properties */
    static protected $_instance = NULL;
    protected $_session = NULL;
    protected $_started = "";

    /* methods */
    private function __construct() {
    }
    private function __clone() {
    }
    private function __sleep() {
    }
    private function __wakeup() {
    }
    public static function getInstance() {
    }
    public function start() {
    }
    public function get($name) {
    }
    public function has($name) {
    }
    public function set($name, $value) {
    }
    public function del($name) {
    }
    public function count() {
    }
    public function rewind() {
    }
    public function next() {
    }
    public function current() {
    }
    public function key() {
    }
    public function valid() {
    }
    public function offsetGet($name) {
    }
    public function offsetSet($name, $value) {
    }
    public function offsetExists($name) {
    }
    public function offsetUnset($name) {
    }
    public function __get($name) {
    }
    public function __isset($name) {
    }
    public function __set($name, $value) {
    }
    public function __unset($name) {
    }
}