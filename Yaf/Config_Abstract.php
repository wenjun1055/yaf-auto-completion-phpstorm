<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:31
 * @Email:  wenjun1055@gmail.com
 * @File:   Config_Abstract.php
 * @Desc:   ...
 */
namespace Yaf;

abstract class Config_Abstract
{
    /* constants */

    /* properties */
    protected $_config = null;
    protected $_readonly = "1";

    /* methods */
    /**
     * @param string $name
     * @param mixed  $value
     * @return mixed
     */
    public function get($name, $value)
    {
    }

    /**
     * @return bool
     */
    public function readonly()
    {
    }

    /**
     * @return Yaf_Config_Abstract
     */
    public function set()
    {
    }

    /**
     * @return array
     */
    public function toArray()
    {
    }
}