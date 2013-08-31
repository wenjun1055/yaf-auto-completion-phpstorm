<?php
/**
 * Author: EagleWu <eaglewudi@gmail.com>
 * Date: 2013/08/31
 * File: Yaf-min.php
 * Desc: A merge compressed file of Yaf-Auto-Compelete project
 */

namespace Yaf {

    final class Application
    {
        /* constants */

        /* properties */
        protected $config = null;
        protected $dispatcher = null;
        static protected $_app = null;
        protected $_modules = null;
        protected $_running = "";
        protected $_environ = "product";
        protected $_err_no = "0";
        protected $_err_msg = "";

        /* methods */
        /**
         * @param mixed $config
         * @param string $envrion
         */
        public function __construct($config, $envrion = null)
        {
        }

        /**
         * @return void
         */
        public function run()
        {
        }

        /**
         * @param callable $entry,...
         * @return void
         */
        public function execute(callable $entry)
        {
        }

        /**
         * @return Yaf_Application|null
         */
        public static function app()
        {
        }

        /**
         * @return string
         */
        public function environ()
        {
        }

        /**
         * @param Yaf_Bootstrap_Abstract $bootstrap
         * @return Yaf_Application
         */
        public function bootstrap(Yaf_Bootstrap_Abstract $bootstrap = null)
        {
        }

        /**
         * @return Yaf_Config_Abstract
         */
        public function getConfig()
        {
        }

        /**
         * @return array
         */
        public function getModules()
        {
        }

        /**
         * @return Yaf_Dispatcher
         */
        public function getDispatcher()
        {
        }

        /**
         * @param string $directory
         * @return Yaf_Application
         */

        public function setAppDirectory($directory)
        {
        }

        /**
         * @return Yaf_Application
         */
        public function getAppDirectory()
        {
        }

        /**
         * @return int
         */
        public function getLastErrorNo()
        {
        }

        /**
         * @return string
         */
        public function getLastErrorMsg()
        {
        }

        /**
         * @return Yaf_Application
         */
        public function clearLastError()
        {
        }

        /**
         * @return void
         */
        public function __destruct()
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
    }


    abstract class Bootstrap_Abstract
    {
        /* constants */

        /* properties */

        /* methods */
    }

    abstract class Config_Abstract
    {
        /* constants */

        /* properties */
        protected $_config = null;
        protected $_readonly = "1";

        /* methods */
        /**
         * @param string $name
         * @param mixed $value
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
         * @param array $options
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
         * @param int $error_types
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
         * @param Yaf_Request_Abstract $request
         * @return Yaf_Response_Abstract
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
         * @param array $parameters
         * @return void
         */
        final protected function render($tpl, array $parameters = null)
        {
        }

        /**
         * @param string $tpl
         * @param array $parameters
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
         * @param array $parameters
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


    class Exception extends Exception
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }


    final class Loader
    {
        /* constants */

        /* properties */
        protected $_local_ns = null;
        protected $_library = null;
        protected $_global_library = null;
        static protected $_instance = null;

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
         * @param string $class_name
         * @return void
         */
        public function autoload($class_name)
        {
        }

        /**
         * @param string $local_library_path
         * @param string $global_library_path
         * @return Yaf_Loader
         */
        public static function getInstance($local_library_path = null, $global_library_path = null)
        {
        }

        /**
         * @return void
         */
        public function registerLocalNamespace($name_prefix)
        {
        }

        /**
         * @return mixed
         */
        public function getLocalNamespace()
        {
        }

        /**
         * @return void
         */
        public function clearLocalNamespace()
        {
        }

        /**
         * @return void
         */
        public function isLocalName($class_name)
        {
        }

        /**
         * @return void
         */
        public static function import($file)
        {
        }

        /**
         * @param string $directory
         * @param bool $is_global
         * @return Yaf_Loader
         */
        public function setLibraryPath($library_path, $is_global = null)
        {
        }

        /**
         * @param bool $is_global
         * @return Yaf_Loader
         */
        public function getLibraryPath($is_global = null)
        {
        }
    }

    abstract class Plugin_Abstract
    {
        /* constants */

        /* properties */

        /* methods */

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }

        /**
         * @param Yaf_Request_Abstract $request
         * @param Yaf_Response_Abstract $response
         * @return void
         */
        public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
        {
        }
    }

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


    abstract class Request_Abstract
    {
        /* constants */
        const SCHEME_HTTP = http;
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

    abstract class Response_Abstract
    {
        /* constants */

        /* properties */
        protected $_header = NULL;
        protected $_body = NULL;
        protected $_sendheader = "";

        /* methods */
        public function __construct()
        {
        }

        public function __destruct()
        {
        }

        private function __clone()
        {
        }

        private function __toString()
        {
        }

        public function setBody()
        {
        }

        public function appendBody()
        {
        }

        public function prependBody()
        {
        }

        public function clearBody()
        {
        }

        public function getBody()
        {
        }

        public function setHeader()
        {
        }

        protected function setAllHeaders()
        {
        }

        public function getHeader()
        {
        }

        public function clearHeaders()
        {
        }

        public function setRedirect()
        {
        }

        public function response()
        {
        }
    }

    abstract class Route_Interface
    {
        abstract public function route()
        {

        }
    }

    final class Router
    {
        /* constants */

        /* properties */
        protected $_routes = NULL;
        protected $_current = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function addRoute()
        {
        }

        public function addConfig()
        {
        }

        public function route()
        {
        }

        public function getRoute()
        {
        }

        public function getRoutes()
        {
        }

        public function getCurrentRoute()
        {
        }
    }

    final class Session implements Iterator, Traversable, ArrayAccess, Countable
    {
        /* constants */

        /* properties */
        static protected $_instance = NULL;
        protected $_session = NULL;
        protected $_started = "";

        /* methods */
        private function __construct()
        {
        }

        private function __clone()
        {
        }

        private function __sleep()
        {
        }

        private function __wakeup()
        {
        }

        public static function getInstance()
        {
        }

        public function start()
        {
        }

        public function get($name)
        {
        }

        public function has($name)
        {
        }

        public function set($name, $value)
        {
        }

        public function del($name)
        {
        }

        public function count()
        {
        }

        public function rewind()
        {
        }

        public function next()
        {
        }

        public function current()
        {
        }

        public function key()
        {
        }

        public function valid()
        {
        }

        public function offsetGet($name)
        {
        }

        public function offsetSet($name, $value)
        {
        }

        public function offsetExists($name)
        {
        }

        public function offsetUnset($name)
        {
        }

        public function __get($name)
        {
        }

        public function __isset($name)
        {
        }

        public function __set($name, $value)
        {
        }

        public function __unset($name)
        {
        }
    }

    interface Yaf_View_Interface
    {
        /**
         * @param string $name
         * @param string $value
         * @return bool
         */
        public function assign($name, $value = null);

        /**
         * @param string $tpl
         * @param array $tpl_vars
         * @return bool
         */
        public function display($tpl, array $tpl_vars = null);

        /**
         * @return mixed
         */
        public function getScriptPath();

        /**
         * @param string $tpl
         * @param array $tpl_vars
         * @return string
         */
        public function render($tpl, array $tpl_vars = null);

        /**
         * @param string $template_dir
         * @return void
         */
        public function setScriptPath($template_dir);
    }

}


namespace Yaf\Config {

    use Yaf;

    final class Ini extends Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable
    {
        /* constants */

        /* properties */
        protected $_config = null;
        protected $_readonly = "1";

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
        public function toArray()
        {
        }

        /**
         * @return void
         */
        public function readonly()
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

        /**
         * @param string $name
         * @return mixed
         */
        public function __get($name = null)
        {
        }

        /**
         * @param string $name
         * @param mixed $value
         * @return void
         */
        public function __set($name, $value)
        {
        }
    }


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

}


namespace Yaf\Exception {

    use Yaf;

    class DispatchFailed extends Exception
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class LoadFailed extends Exception
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class RouterFailed extends Exception
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class StartupError extends Exception
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class TypeError extends Exception
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

}

namespace Yaf\Exception\LoadFailed {

    use Yaf\Exception;

    class Action extends LoadFailed
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class Controller extends LoadFailed
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class Module extends LoadFailed
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

    class View extends LoadFailed
    {
        /* constants */

        /* properties */
        protected $message = NULL;
        protected $code = "0";
        protected $file = NULL;
        protected $line = NULL;
        protected $previous = NULL;

        /* methods */
        public function __construct()
        {
        }

        public function getPrevious()
        {
        }

        final private function __clone()
        {
        }

        final public function getMessage()
        {
        }

        final public function getCode()
        {
        }

        final public function getFile()
        {
        }

        final public function getLine()
        {
        }

        final public function getTrace()
        {
        }

        final public function getTraceAsString()
        {
        }

        public function __toString()
        {
        }
    }

}


namespace Yaf\Request {

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

    final class Simple extends Request_Abstract
    {
        /* constants */
        const SCHEME_HTTP = http;
        const SCHEME_HTTPS = https;

        /* properties */
        public $module = NULL;
        public $controller = NULL;
        public $action = NULL;
        public $method = NULL;
        protected $params = NULL;
        protected $language = NULL;
        protected $_exception = NULL;
        protected $_base_uri = "";
        protected $uri = "";
        protected $dispatched = "";
        protected $routed = "";

        /* methods */
        public function __construct()
        {
        }

        /**
         * @return void
         */
        private function __clone()
        {
        }

        public function getQuery()
        {
        }

        public function getRequest()
        {
        }

        public function getPost()
        {
        }

        public function getCookie()
        {
        }

        public function getFiles()
        {
        }

        public function get()
        {
        }

        public function isXmlHttpRequest()
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

        public function getServer($name, $default = NULL)
        {
        }

        public function getEnv($name, $default = NULL)
        {
        }

        public function setParam($name, $value = NULL)
        {
        }

        public function getParam($name, $default = NULL)
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

        public function setRouted($flag = NULL)
        {
        }
    }

}


namespace Yaf\Response {

    use Yaf;


    class Cli extends Response_Abstract
    {
        /* constants */

        /* properties */
        protected $_header = NULL;
        protected $_body = NULL;
        protected $_sendheader = "";

        /* methods */
        public function __construct()
        {
        }

        public function __destruct()
        {
        }

        private function __clone()
        {
        }

        private function __toString()
        {
        }

        public function setBody()
        {
        }

        public function appendBody()
        {
        }

        public function prependBody()
        {
        }

        public function clearBody()
        {
        }

        public function getBody()
        {
        }

        public function setHeader()
        {
        }

        protected function setAllHeaders()
        {
        }

        public function getHeader()
        {
        }

        public function clearHeaders()
        {
        }

        public function setRedirect()
        {
        }

        public function response()
        {
        }
    }

    class Http extends Response_Abstract
    {
        /* constants */

        /* properties */
        protected $_header = NULL;
        protected $_body = NULL;
        protected $_sendheader = "1";
        protected $_response_code = "200";

        /* methods */
        public function __construct()
        {
        }

        public function __destruct()
        {
        }

        private function __clone()
        {
        }

        private function __toString()
        {
        }

        public function setBody()
        {
        }

        public function appendBody()
        {
        }

        public function prependBody()
        {
        }

        public function clearBody()
        {
        }

        public function getBody()
        {
        }

        public function setHeader()
        {
        }

        protected function setAllHeaders()
        {
        }

        public function getHeader()
        {
        }

        public function clearHeaders()
        {
        }

        public function setRedirect()
        {
        }

        public function response()
        {
        }
    }

}

namespace Yaf\Route {

    use Yaf;

    final class Map implements Route_Interface
    {
        /* constants */

        /* properties */
        protected $_ctl_router = "";
        protected $_delimeter = NULL;

        /* methods */
        public function __construct($controller_prefer = NULL, $delimiter = NULL)
        {
        }

        public function route($request)
        {
        }
    }

    final class Regex extends Route_Interface implements Route_Interface
    {
        /* constants */

        /* properties */
        protected $_route = NULL;
        protected $_default = NULL;
        protected $_maps = NULL;
        protected $_verify = NULL;

        /* methods */
        public function __construct($match, array $route, array $map = NULL, array $verify = NULL)
        {
        }

        public function route($request)
        {
        }
    }

    final class Rewrite extends Route_Interface implements Route_Interface
    {
        /* constants */

        /* properties */
        protected $_route = NULL;
        protected $_default = NULL;
        protected $_verify = NULL;

        /* methods */
        public function __construct($match, array $route, array $verify = NULL)
        {
        }

        public function route($request)
        {
        }
    }

    final class Simple implements Route_Interface
    {
        /* constants */

        /* properties */
        protected $controller = NULL;
        protected $module = NULL;
        protected $action = NULL;

        /* methods */
        public function __construct($module_name, $controller_name, $action_name)
        {
        }

        public function route($request)
        {
        }
    }

    class Static implements Router {
        /* constants */

        /* properties */

        /* methods */
        public
        function match($uri)
        {
        }

        public
        function route($request)
        {
        }

        public
        function __construct()
        {
        }

        public
        function addRoute()
        {
        }

        public
        function addConfig()
        {
        }

        public
        function getRoute()
        {
        }

        public
        function getRoutes()
        {
        }

        public
        function getCurrentRoute()
        {
        }
    }

    final class Supervar implements Route_Interface
    {
        /* constants */

        /* properties */
        protected $_var_name = NULL;

        /* methods */
        public function __construct($supervar_name)
        {
        }

        public function route($request)
        {
        }
    }

}


namespace Yaf\View {

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
         * @param array $options
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
         * @param mixed $value
         * @return bool
         */
        public function assign($name, $value = null)
        {
        }

        /**
         * @param string $tpl
         * @param array $tpl_vars
         * @return string
         */
        public function render($tpl, $tpl_vars = null)
        {
        }


        /**
         * @param string $tpl
         * @param array $tpl_vars
         * @return bool
         */
        public function display($tpl, $tpl_vars = null)
        {
        }

        /**
         * @param string $name
         * @param mixed $value
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
         * @param mixed $value
         * @return void
         */
        public function __set($name, $value = null)
        {
        }

        public function eval($tpl_str, $vars = null)
    {
    }
}
}
