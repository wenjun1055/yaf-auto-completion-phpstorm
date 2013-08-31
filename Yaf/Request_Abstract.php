<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:13
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Request_Abstract.php
 * @Desc:   ...
 */
namespace Yaf;

abstract class Request_Abstract
{
    /* constants */
    const SCHEME_HTTP  = http;
    const SCHEME_HTTPS = https;

    /* properties */
    public $module = null;
    public $controller = null;
    public $action = null;
    public $method = null;
    protected $params = null;
    protected $language = null;
    protected $_exception = null;
    protected $_base_uri = "";
    protected $uri = "";
    protected $dispatched = "";
    protected $routed = "";

    /* methods */

    /**
     * @return mixed
     */
    public function isGet()
    {
    }

    /**
     * @return mixed
     */
    public function isPost()
    {
    }

    /**
     * @return mixed
     */
    public function isPut()
    {
    }

    /**
     * @return mixed
     */
    public function isHead()
    {
    }

    /**
     * @return mixed
     */
    public function isOptions()
    {
    }

    /**
     * @return mixed
     */
    public function isCli()
    {
    }

    /**
     * @return mixed
     */
    public function isXmlHttpRequest()
    {
    }

    /**
     * @param string $name
     * @param string $default
     * @return mixed
     */
    public function getServer($name, $default = null)
    {
    }

    /**
     * @param string $name
     * @param string $default
     * @return mixed
     */
    public function getEnv($name, $default = null)
    {
    }

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function setParam($name, $value = null)
    {
    }

    /**
     * @param string $name
     * @param string $default
     * @return mixed
     */
    public function getParam($name, $default = null)
    {
    }

    /**
     * @return array
     */
    public function getParams()
    {
    }

    /**
     * @return mixed
     */
    public function getException()
    {
    }

    /**
     * @return mixed
     */
    public function getModuleName()
    {
    }

    /**
     * @return mixed
     */
    public function getControllerName()
    {
    }

    /**
     * @return mixed
     */
    public function getActionName()
    {
    }

    /**
     * @param string $module
     * @return void
     */
    public function setModuleName($module)
    {
    }

    /**
     * @param string $controller
     * @return void
     */
    public function setControllerName($controller)
    {
    }

    /**
     * @param string $action
     * @return void
     */
    public function setActionName($action)
    {
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
    }

    /**
     * @param string $uri
     * @return void
     */
    public function setBaseUri($uir)
    {
    }

    /**
     * @return mixed
     */
    public function getBaseUri()
    {
    }

    /**
     * @return mixed
     */
    public function getRequestUri()
    {
    }

    /**
     * @param string $uri
     * @return void
     */
    public function setRequestUri($uir)
    {
    }

    /**
     * @return mixed
     */
    public function isDispatched()
    {
    }

    /**
     * @return void
     */
    public function setDispatched()
    {
    }

    /**
     * @return mixed
     */
    public function isRouted()
    {
    }

    /**
     * @param string $flag
     * @return void
     */
    public function setRouted($flag = null)
    {
    }
}