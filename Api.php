<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/27 027
 * Time: 21:29
 */

class Api
{
    const REQUEST_TYPE_SWOOLE = 'swoole';
    const REQUEST_TYPE_YARS   = 'yars';

    const REQUEST_METHOD_GET  = 'GET';
    const REQUEST_METHOD_POST = 'POST';

    private $type  = self::REQUEST_TYPE_SWOOLE;
    private $spare = self::REQUEST_TYPE_YARS;

    private $host = '';
    private $port = 9800;
    private $keep = true;

    /**
     * Api constructor.
     * @param string $host
     * @param int $port
     * @param string $type
     * @param string $spare
     * @param bool $keep
     */
    public function __construct($host, $port = 9800, $type = self::REQUEST_TYPE_SWOOLE, $spare = self::REQUEST_TYPE_YARS, $keep = true)
    {
        $this->host  = $host;
        $this->port  = $port;
        $this->type  = $type;
        $this->spare = $spare;
        $this->keep  = $keep;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param string $spare
     */
    public function setSpare($spare)
    {
        $this->spare = $spare;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @param bool $keep
     */
    public function setKeep($keep)
    {
        $this->keep = $keep;
    }

    public function doRequest(Request $request)
    {
        return new Response(null, '');
    }

    public static function factory($key)
    {
        /** @var array $config */
        $config = C($key);


        return new static($config['host'], $config['port'], $config['type'], $config['keep']);
    }

}