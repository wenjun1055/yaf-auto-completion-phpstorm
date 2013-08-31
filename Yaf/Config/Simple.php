<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:33
 * @Email:  wenjun1055@gmail.com
 * @File:   Simple.php
 * @Desc:   ...
 */
namespace Yaf\Config;

use yaf;

final class Simple extends Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable
{
    /* constants */

    /* properties */
    protected $_config = null;
    protected $_readonly = "";

    /* methods */
    /**
     * @param string $config_file
     * @param string $section
     */
    public function __construct($config_file, $section = null)
    {
    }

    /**
     * @param string $name
     * @return void
     */
    public function __isset($name)
    {
    }

    public function get($name = null)
    {
    }

    public function set($name, $value)
    {
    }

    /**
     * @return void
     */
    public function count()
    {
    }

    /**
     * @param string $name
     * @return void
     */
    public function offsetUnset($name)
    {
    }

    /**
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * @return void
     */
    public function current()
    {
    }

    /**
     * @return void
     */
    public function next()
    {
    }

    /**
     * @return void
     */
    public function valid()
    {
    }

    /**
     * @return void
     */
    public function key()
    {
    }

    /**
     * @return void
     */
    public function readonly()
    {
    }

    /**
     * @return void
     */
    public function toArray()
    {
    }

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function __set($name, $value)
    {
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name = null)
    {
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function offsetGet($name)
    {
    }

    /**
     * @param string $name
     * @return void
     */
    public function offsetExists($name)
    {
    }

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function offsetSet($name, $value)
    {
    }
}