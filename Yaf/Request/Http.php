<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:14
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Http.php
 * @Desc:   ...
 */
namespace Yaf\Request;

use Yaf;

class Http extends Request_Abstract
{
    /* constants */

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
    public function getQuery()
    {
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
    }

    /**
     * @return mixed
     */
    public function getCookie()
    {
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
    }

    /**
     * @return mixed
     */
    public function get()
    {
    }

    /**
     * @return mixed
     */
    public function isXmlHttpRequest()
    {
    }

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return void
     */
    private function __clone()
    {
    }

    public function isGet()
    {
    }

    public function isPost()
    {
    }

    public function isPut()
    {
    }

    public function isHead()
    {
    }

    public function isOptions()
    {
    }

    public function isCli()
    {
    }

    public function getServer($name, $default = null)
    {
    }

    public function getEnv($name, $default = null)
    {
    }

    public function setParam($name, $value = null)
    {
    }

    public function getParam($name, $default = null)
    {
    }

    public function getParams()
    {
    }

    public function getException()
    {
    }

    public function getModuleName()
    {
    }

    public function getControllerName()
    {
    }

    public function getActionName()
    {
    }

    public function setModuleName($module)
    {
    }

    public function setControllerName($controller)
    {
    }

    public function setActionName($action)
    {
    }

    public function getMethod()
    {
    }

    public function getLanguage()
    {
    }

    public function setBaseUri($uir)
    {
    }

    public function getBaseUri()
    {
    }

    public function getRequestUri()
    {
    }

    public function setRequestUri($uir)
    {
    }

    public function isDispatched()
    {
    }

    public function setDispatched()
    {
    }

    public function isRouted()
    {
    }

    public function setRouted($flag = null)
    {
    }
}
