<?php

declare(strict_types=1);

namespace App\Constants;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * Class CodeConstant
 * @package App\Constants
 * @Constants
 */
class CodeConstant extends AbstractConstants
{
    /**
     * @Message("Request Error")
     */
    const ERROR = 0;

    /**
     * @Message("请求参数错误")
     */
    const BAD_REQUEST = 400;

    /**
     * @Message("请先登录")
     */
    const UNAUTHENTICATED = 401;

    /**
     * @Message("无权访问该资源")
     */
    const DISALLOW = 403;

    /**
     * @Message("请求资源不存在")
     */
    const RECORD_NOT_FOUND = 404;

    /**
     * @Message("Method Not Allowed")
     */
    const METHOD_NOT_ALLOWED = 405;

    /**
     * @Message("验证错误")
     */
    const VALIDATE_ERROR = 422;

    /**
     * @Message("Server Error")
     */
    const SERVER_ERROR = 500;

    /**
     * @Message("系统参数错误")
     */
    const SYSTEM_INVALID = 700;

    /**
     * @Message("保存数据失败，请重试")
     */
    const SAVE_DATA_ERROR = 1001;

    /**
     * @Message("QueryException")
     */
    const QUERY_EXCEPTION = 1002;

    /**
     * @Message("用户名或者密码错误")
     */
    const INCORRECT_PASSWORD = 1003;

    /**
     * @Message("请求参数错误")
     */
    const PARAMS_ERROR = 1005;

    /**
     * @Message("用户已禁用")
     */
    const USER_DISABLE = 1007;

    /**
     * @Message("短信发送失败")
     */
    const SMS_SEND_FAILED = 1009;

    /**
     * @Message("crsf token 验证不通过")
     */
    const TOKEN_MISMATCH = 1010;
}
