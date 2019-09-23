<?php
namespace SixMQ\Struct\Queue\Server;

use SixMQ\Struct\Queue\Server\Reply;

class Pop extends Reply
{
    /**
     * 队列ID
     * 支持传入数组，即支持多个队列ID。但每次还是只会返回一个消息。
     *
     * @var string|string[]
     */
    public $queueId;
    
    /**
     * 消息ID
     *
     * @var string
     */
    public $messageId;

    /**
     * 数据
     *
     * @var mixed
     */
    public $data;
}