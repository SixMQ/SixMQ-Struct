<?php
namespace SixMQ\Struct\Queue\Server;

use SixMQ\Struct\Queue\Server\Reply;

class Push extends Reply
{
    /**
     * 队列ID
     *
     * @var string
     */
    public $queueId;
    
    /**
     * 消息ID
     *
     * @var string
     */
    public $messageId;
    
    /**
     * 消息是否被消费完成
     *
     * @var boolean
     */
    public $consum = false;

    /**
     * 消息是否成功消费
     * 只有当$consum为true时，才有效
     *
     * @var boolean
     */
    public $resultSuccess = false;

    /**
     * 消费结果数据
     *
     * @var mixed
     */
    public $resultData;
}