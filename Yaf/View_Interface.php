<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:42
 * @Email:  wenjun1055@gmail.com
 * @File:   View_Interface.php
 * @Desc:   ...
 */
namespace Yaf;

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
     * @param array  $tpl_vars
     * @return bool
     */
    public function display($tpl, array $tpl_vars = null);

    /**
     * @return mixed
     */
    public function getScriptPath();

    /**
     * @param string $tpl
     * @param array  $tpl_vars
     * @return string
     */
    public function render($tpl, array $tpl_vars = null);

    /**
     * @param string $template_dir
     * @return void
     */
    public function setScriptPath($template_dir);
}