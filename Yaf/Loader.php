<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:24
 * @Email:  wenjun1055@gmail.com
 * @File:   Loader.php
 * @Desc:   ...
 */
namespace Yaf;

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
     * @return Yaf\Loader
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
     * @param bool   $is_global
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