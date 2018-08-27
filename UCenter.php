<?php
/**
 * Created by PhpStorm.
 * User: fuerm
 * Date: 18/8/27 027
 * Time: 21:44
 */

/**
 * Class UCenter
 *
 * @method UserInfo getUserInfo($userId)
 * @method UserInfo[] findUsers(FindUserParam $param)
 */
class UCenter extends AbstractApi
{
    protected function addApi($name, $path, $method = self::REQUEST_METHOD_POST)
    {
        return parent::addApi($name, "/Ucenter/{$path}", $method);
    }

    protected function init()
    {
        $this->addApi('getUserInfo', 'info/one')->setResponseClass(UserInfo::class);
        $this->addApi('findUsers', 'info/list')->setResponseClass(UserInfo::class);
    }
}