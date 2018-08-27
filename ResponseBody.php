<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/28 028
 * Time: 0:52
 */

class ResponseBody
{
    /** @var string */
    private $content;

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}
