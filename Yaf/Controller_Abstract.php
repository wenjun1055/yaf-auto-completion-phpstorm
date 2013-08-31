<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:28
 * @Email:  wenjun1055@gmail.com
 * @File:   Controller_Abstract.php
 * @Desc:   ...
 */
namespace Yaf;

abstract class Controller_Abstract
{
    /* constants */

    /* properties */
    public $actions = null;
    protected $_module = null;
    protected $_name = null;
    protected $_request = null;
    protected $_response = null;
    protected $_invoke_args = null;
    protected $_view = null;

    /* methods */

    /**
     * @param string $tpl
     * @param array  $parameters
     * @return void
     */
    final protected function render($tpl, array $parameters = null)
    {
    }

    /**
     * @param string $tpl
     * @param array  $parameters
     * @return void
     */
    final protected function display($tpl, array $parameters = null)
    {
    }

    /**
     * @return Yaf_Request_Abstract
     */
    final public function getRequest()
    {
    }

    /**
     * @return Yaf_Response_Abstract
     */
    final public function getResponse()
    {
    }

    /**
     * @return mixed
     */
    final public function getModuleName()
    {
    }

    /**
     * @return mixed
     */
    final public function getView()
    {
    }

    /**
     * @param array $options
     * @return void
     */
    final public function initView(array $options = null)
    {
    }

    /**
     * @param string $view_directory
     * @return void
     */
    final public function setViewpath($view_directory)
    {
    }

    /**
     * @return mixed
     */
    final public function getViewpath()
    {
    }

    /**
     * @param string $module
     * @param string $controller
     * @param string $action
     * @param array  $parameters
     * @return void
     */
    final public function forward($module, $controller = null, $action = null, array $paramters = null)
    {
    }

    /**
     * @param string $url
     * @return void
     */
    final public function redirect($url)
    {
    }

    /**
     * @return mixed
     */
    final public function getInvokeArgs()
    {
    }

    /**
     * @param string $name
     * @return mixed
     */
    final public function getInvokeArg($name)
    {
    }

    final public function __construct()
    {
    }

    /**
     * @return void
     */
    final private function __clone()
    {
    }
}