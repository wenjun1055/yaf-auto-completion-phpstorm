<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:55
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Registry.php
 * @Desc:   ...
 */
namespace Yaf;

final class Registry
{
    /* constants */

    /* properties */
    static protected $_instance = null;
    protected $_entries = null;

    /* methods */
    private function __construct()
    {
    }

    /**
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * @param string $name
     * @return mixed
     */
    public static function get($name)
    {
    }

    /**
     * @param string $name
     * @return void
     */
    public static function has($name)
    {
    }

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public static function set($name, $value)
    {
    }

    /**
     * @param string $name
     * @return void
     */
    public static function del($name)
    {
    }
}