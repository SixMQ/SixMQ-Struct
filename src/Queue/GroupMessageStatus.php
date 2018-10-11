<?php
namespace SixMQ\Struct\Queue;

abstract class GroupMessageStatus
{
    /**
     * 空闲
     */
    const FREE = 0;

    /**
     * 工作中
     */
    const WORKING = 1;

    /**
     * 已完成
     */
    const COMPLETE = 2;

    /**
     * 取消
     */
    const CANCEL = 3;
}