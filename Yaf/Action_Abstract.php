<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:29
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Action_Abstract.php
 * @Desc:   ...
 */
namespace Yaf;

abstract class Action_Abstract extends Controller_Abstract
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
    protected $_controller = null;

    /* methods */

    /**
     * @param mixed $arg,...
     * @return mixed
     */
    abstract public function execute($arg = null);

    /**
     * @return Yaf_Controller_Abstract
     */
    public function getController()
    {
    }

    final protected function render($tpl, array $parameters = null)
    {
    }

    final protected function display($tpl, array $parameters = null)
    {
    }

    final public function getRequest()
    {
    }

    final public function getResponse()
    {
    }

    final public function getModuleName()
    {
    }

    final public function getView()
    {
    }

    final public function initView(array $options = null)
    {
    }

    final public function setViewpath($view_directory)
    {
    }

    final public function getViewpath()
    {
    }

    final public function forward($module, $controller = null, $action = null, array $paramters = null)
    {
    }

    final public function redirect($url)
    {
    }

    final public function getInvokeArgs()
    {
    }

    final public function getInvokeArg($name)
    {
    }

    final public function __construct()
    {
    }

    final private function __clone()
    {
    }
}