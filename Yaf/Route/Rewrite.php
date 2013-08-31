<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:38
 * @Email:  wenjun1055@gmail.com
 * @File:   Rewrite.php
 * @Desc:   ...
 */
namespace Yaf\Route;

use Yaf;

final class Rewrite extends Route_Interface implements Route_Interface {
    /* constants */

    /* properties */
    protected $_route = NULL;
    protected $_default = NULL;
    protected $_verify = NULL;

    /* methods */
    public function __construct($match, array $route, array $verify = NULL) {
    }
    public function route($request) {
    }
}