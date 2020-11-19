<?php

namespace Enum;

class CommonEnum extends BaseEnum
{

    const SUCCESS = 1;
    const ERROR = 0;
    const ERROR_NOT_LOGIN = -1;
    const ERROR_SYSTEM = 999;

    const CURRENT_LIMITING = 10000;
    const INVALID_SIGN = 10001;
    const ERROR_NOT_AUTHORIZATION = 10002;
    const ERROR_REFER_NOT_AUTHORIZATION = 10003;
    const INVALID_TIMESTAMP = 10004;
    const INVALID_USERID = 10005;
    const INVALID_TOKEN = 10006;
    const ERROR_EXPIRE_TOKEN = 10007;
    const ERROR_NOT_AUTHORIZATION_IP = 10008;
    const ERROR_ILLEGAL_REQUEST = 10009;
    const INVALID_PARAMS = 10010;

    const ERROR_HEADER_NOT_EXIST_PARAMS = 10011;
    const ERROR_BODY_NOT_EXIST_PARAMS = 10012;


    public static $_defines = array(

        self::SUCCESS => '成功',
        self::ERROR => '失败',
        self::ERROR_NOT_LOGIN => '请先登录',
        self::ERROR_SYSTEM => '系统错误',//例如添加失败、修改失败 等错误操作返回系统错误

        self::CURRENT_LIMITING => '请稍后重试', //接口调用次数已达到设定上限，接口限流
        self::INVALID_SIGN => '无效签名，签名错误',
        self::ERROR_NOT_AUTHORIZATION => '无权限访问',
        self::ERROR_REFER_NOT_AUTHORIZATION => '无权限访问', //来自该refer的请求无访问权限
        self::INVALID_TIMESTAMP => '无效参数', //timestamp参数无效，timestamp校验不通过
        self::INVALID_USERID => '无效参数', //无效的userId，用户id非法
        self::INVALID_TOKEN => '无效Token', //无效的token，token验证失败
        self::ERROR_EXPIRE_TOKEN => '无效Token', //token过期，token过期
        self::ERROR_NOT_AUTHORIZATION_IP => '非法请求', //请求来自未经授权的ip ，非法ip
        self::ERROR_ILLEGAL_REQUEST => '非法请求', //非法请求
        self::INVALID_PARAMS => '无效参数',

        self::ERROR_HEADER_NOT_EXIST_PARAMS => '缺少必填公共参数', //header内xx不能为空
        self::ERROR_BODY_NOT_EXIST_PARAMS => '缺少必填参数', //body内xx不能为空
    );
}
