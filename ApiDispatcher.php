<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/27 027
 * Time: 21:50
 */

class ApiDispatcher extends Request
{
    /** @var Api */
    private $api;
    /** @var string */
    private $requestClass;
    /** @var string */
    private $responseClass;

    /**
     * ApiConfig constructor.
     * @param Api $api
     * @param string $path
     * @param string $method
     */
    public function __construct(Api $api, $path, $method)
    {
        $this->api = $api;
        parent::__construct($path, $method);
    }

    /**
     * @param string $requestClass
     */
    public function setRequestClass($requestClass)
    {
        $this->requestClass = $requestClass;
    }

    /**
     * @param string $responseClass
     */
    public function setResponseClass($responseClass)
    {
        $this->responseClass = $responseClass;

    }

    public function dispatcher($params)
    {
        if (is_object($params)) {
            
        }
        //TODO::请求前的动作
        $response = $this->api->doRequest($this);
        //TODO::请求后的动作
    }
}

