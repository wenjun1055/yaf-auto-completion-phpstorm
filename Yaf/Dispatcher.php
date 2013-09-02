<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:23
 * @Email:  wenjun1055@gmail.com
 * @File:   Dispatcher.php
 * @Desc:   ...
 */
namespace Yaf;

final class Dispatcher
{
    /* constants */

    /* properties */
    protected $_router = null;
    protected $_view = null;
    protected $_request = null;
    protected $_plugins = null;
    static protected $_instance = null;
    protected $_auto_render = "1";
    protected $_return_response = "";
    protected $_instantly_flush = "";
    protected $_default_module = null;
    protected $_default_controller = null;
    protected $_default_action = null;

    /* methods */
    /**
     * @return Yaf_Dispatcher
     */
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
     * @return void
     */
    private function __sleep()
    {
    }

    /**
     * @return void
     */
    private function __wakeup()
    {
    }

    /**
     * @return Yaf_Dispatcher
     */
    public function enableView()
    {
    }

    /**
     * @return Yaf_Dispatcher
     */
    public function disableView()
    {
    }

    /**
     * @param string $templates_dir
     * @param array  $options
     * @return Yaf_View_Interface
     */
    public function initView($templates_dir, array $options = null)
    {
    }

    /**
     * @param Yaf_View_Interface $view
     * @return Yaf_Dispatcher
     */
    public function setView(Yaf_View_Interface $view)
    {
    }

    /**
     * @param Yaf_Request_Abstract $request
     * @return Yaf_Dispatcher
     */
    public function setRequest(Yaf_Request_Abstract $request)
    {
    }

    /**
     * @return Yaf_Application
     */
    public function getApplication()
    {
    }

    /**
     * @return Yaf_Router
     */
    public function getRouter()
    {
    }

    /**
     * @return Yaf_Request_Abstract
     */
    public function getRequest()
    {
    }

    /**
     * @param callable $callback
     * @param int      $error_types
     * @return Yaf_Dispatcher
     */
    public function setErrorHandler(callable $callback, $error_types)
    {
    }

    /**
     * @param string $module
     * @return Yaf_Dispatcher
     */
    public function setDefaultModule($module)
    {
    }

    /**
     * @param string $controller
     * @return Yaf_Dispatcher
     */
    public function setDefaultController($controller)
    {
    }

    /**
     * @param string $action
     * @return Yaf_Dispatcher
     */
    public function setDefaultAction($action)
    {
    }

    /**
     * @param bool $flag
     * @return Yaf_Dispatcher
     */
    public function returnResponse($flag)
    {
    }

    /**
     * @param bool $flag
     * @return Yaf_Dispatcher
     */
    public function autoRender($flag)
    {
    }

    /**
     * @param bool $flag
     * @return Yaf_Dispatcher
     */
    public function flushInstantly($flag)
    {
    }

    /**
     * @return Yaf_Dispatcher
     */
    public static function getInstance()
    {
    }

    /**
     * @param Request_Abstract $request
     * @return Response_Abstract
     */
    public function dispatch(Yaf_Request_Abstract $request)
    {
    }

    /**
     * @param bool $flag
     * @return Yaf_Dispatcher
     */
    public function throwException($flag = null)
    {
    }

    public function catchException($flag = null)
    {
    }

    /**
     * @param Yaf_Plugin_Abstract $plugin
     * @return Yaf_Dispatcher
     */
    public function registerPlugin(Yaf_Plugin_Abstract $plugin)
    {
    }
}