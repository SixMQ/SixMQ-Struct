<?php
namespace SixMQ\Struct\Util;

class MessageStatus
{
    /**
     * 空闲
     */
    const FREE = 1;

    /**
     * 工作中
     */
    const WORKING = 2;

    /**
     * 成功
     */
    const SUCCESS = 3;

    /**
     * 消费失败
     */
    const FAIL = 4;

    /**
     * 超时失败
     */
    const TIMEOUT = 5;

}