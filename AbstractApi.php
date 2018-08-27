<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/27 027
 * Time: 21:45
 */

abstract class AbstractApi extends Api
{
    const CONFIG_KEY = '';

    /** @var static */
    private static $instance;

    /** @var ApiDispatcher[] */
    private $dispatchers = [];

    abstract protected function init();

    protected function addApi($name, $path, $method = self::REQUEST_METHOD_GET)
    {
        $dispatcher = new ApiDispatcher($this, $path, $method);
        $this->addDispatcher($name, $dispatcher);
        return $dispatcher;
    }

    protected function addDispatcher($name, ApiDispatcher $dispatcher)
    {
        $this->dispatchers[$name] = $dispatcher;
    }

    public function doRequest(Request $request)
    {
        $request  = $this->requestBefore($request);
        $response = parent::doRequest($request);
        return $this->responseAfter($response);
    }

    protected function requestBefore(Request $request)
    {
        return $request;
    }

    protected function responseAfter(Response $response)
    {
        return $response;
    }

    public static function __callStatic($name, $arguments)
    {
        if (empty(self::$instance)) {
            self::$instance = static::factory(static::CONFIG_KEY);
            self::$instance->init();
        }

        if (!is_array($arguments) && !is_object($arguments)) {
            throw new RuntimeException();
        }

        if (isset(self::$instance->dispatchers[$name])) {
            self::$instance->dispatchers[$name];

        }
    }

}

