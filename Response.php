<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/27 027
 * Time: 22:04
 */

class Response
{
    /** @var ResponseHeaders */
    private $headers;
    /** @var string */
    private $body;

    /**
     * Response constructor.
     * @param ResponseHeaders $headers
     * @param string $body
     */
    public function __construct(ResponseHeaders $headers, $body)
    {
        $this->headers = $headers;
        $this->body    = $body;
    }

    /**
     * @return ResponseHeaders
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }


}
