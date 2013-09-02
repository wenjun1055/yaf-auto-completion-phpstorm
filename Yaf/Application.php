<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:07
 * @Email:  wenjun1055@gmail.com
 * @File:   Application.php
 * @Desc:   ...
 */

namespace Yaf;

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
     * @param mixed  $config
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
     * @param Yaf\Bootstrap_Abstract $bootstrap
     * @return Application
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
     * @return Dispatcher
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