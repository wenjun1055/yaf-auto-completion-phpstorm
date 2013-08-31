<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:34
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Simple.php
 * @Desc:   ...
 */
namespace Yaf\View;

use Yaf;

final class Simple implements View_Interface
{
    /* constants */

    /* properties */
    protected $_tpl_vars = null;
    protected $_tpl_dir = null;
    protected $_options = null;

    /* methods */

    /**
     * @param string $tempalte_dir
     * @param array  $options
     */
    public function __construct($tempalte_dir, array $options = null)
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

    /**
     * @param string $name
     * @param mixed  $value
     * @return bool
     */
    public function assign($name, $value = null)
    {
    }

    /**
     * @param string $tpl
     * @param array  $tpl_vars
     * @return string
     */
    public function render($tpl, $tpl_vars = null)
    {
    }


    /**
     * @param string $tpl
     * @param array  $tpl_vars
     * @return bool
     */
    public function display($tpl, $tpl_vars = null)
    {
    }

    /**
     * @param string $name
     * @param mixed  $value
     * @return bool
     */
    public function assignRef($name, &$value)
    {
    }

    /**
     * @param string $name
     * @return bool
     */
    public function clear($name = null)
    {
    }

    /**
     * @param string $template_dir
     * @return bool
     */
    public function setScriptPath($template_dir)
    {
    }

    /**
     * @return string
     */
    public function getScriptPath()
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
     * @param mixed  $value
     * @return void
     */
    public function __set($name, $value = null)
    {
    }

    public function eval($tpl_str, $vars = null)
    {
    }
}