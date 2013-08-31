<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:36
 * @Email:  wenjun1055@gmail.com
 * @File:   Simple.php
 * @Desc:   ...
 */
namespace Yaf\Route;

use yaf;

final class Simple implements Route_Interface {
    /* constants */

    /* properties */
    protected $controller = NULL;
    protected $module = NULL;
    protected $action = NULL;

    /* methods */
    public function __construct($module_name, $controller_name, $action_name) {
    }
    public function route($request) {
    }
}