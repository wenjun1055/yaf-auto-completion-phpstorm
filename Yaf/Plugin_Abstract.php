<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:55
 * @Email:  wenjun5@staff.sina.com.cn
 * @File:   Plugin_Abstract.php
 * @Desc:   ...
 */
namespace Yaf;

abstract class Plugin_Abstract
{
    /* constants */

    /* properties */

    /* methods */

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }

    /**
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     * @return void
     */
    public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    }
}