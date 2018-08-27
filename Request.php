<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/27 027
 * Time: 21:56
 */

class Request
{
    const METHOD_GET  = 'GET';
    const METHOD_POST = 'POST';

    /** @var string */
    protected $path;
    /** @var string */
    protected $method;
    /** @var RequestHeaders */
    protected $headers;
    /** @var array */
    protected $query;
    /** @var RequestBody */
    protected $body;

    /**
     * Request constructor.
     * @param string $path
     * @param string $method
     */
    public function __construct($path = '/', $method = self::METHOD_GET)
    {
        $this->path   = $path;
        $this->method = $method;

    }

    public function addHeader(Header $header)
    {
        $this->headers[] = $header;
    }

    /**
     * @return RequestHeaders
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param RequestHeaders $headers
     */
    public function setHeaders(RequestHeaders $headers)
    {
        $this->headers = $headers;
    }

    public function addQuery($key, $value)
    {
        $this->query[$key] = $value;
    }

    /**
     * @return array
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param array $query
     */
    public function setQuery(array $query)
    {
        $this->query = $query;
    }

    /**
     * @return RequestBody
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param RequestBody $body
     */
    public function setBody(RequestBody $body)
    {
        $this->body = $body;
    }


}

