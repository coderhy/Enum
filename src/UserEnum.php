<?php

namespace CoderHe\Enum;

class UserEnum extends BaseEnum
{
    const ERROR_NOTSUPPORT_OVERSEAS = 16001;
    const ERROR_LOGINTOKEN = 16002;
    const ERROR_PASSWORD = 16003;

    const ERROR_NOT_EXIST_USER = 16100;

    public static $_defines = array(
        self::ERROR_NOTSUPPORT_OVERSEAS => '暂时不支持海外语音验证码服务',
        self::ERROR_LOGINTOKEN => 'loginToken失效或不合法',
        self::ERROR_PASSWORD => '密码错误,请重新尝试',

        self::ERROR_NOT_EXIST_USER => '用户不存在',
    );

}
