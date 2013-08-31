<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:54
 * @Email:  wenjun1055@gmail.com
 * @File:   Map.php
 * @Desc:   ...
 */
namespace Yaf\Route;

use Yaf;

final class Map implements Route_Interface {
    /* constants */

    /* properties */
    protected $_ctl_router = "";
    protected $_delimeter = NULL;

    /* methods */
    public function __construct($controller_prefer = NULL, $delimiter = NULL) {
    }
    public function route($request) {
    }
}