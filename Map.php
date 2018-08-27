<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/28 028
 * Time: 0:54
 */

class Map extends ArrayObject
{
    /** @var callable|string */
    private $valueType;

    /**
     * Map constructor.
     * @param string | callable $valueType
     */
    public function __construct($valueType)
    {
        $this->valueType = $valueType;
    }

    public function offsetSet($index, $value)
    {
        if (is_string($this->valueType)) {

        } else if (is_callable($this->valueType)) {
            $value = call_user_func($this->valueType, $value);
        }

        parent::offsetSet($index, $value);
    }
}

