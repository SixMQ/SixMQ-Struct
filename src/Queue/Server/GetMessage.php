<?php
namespace SixMQ\Struct\Queue\Server;

use SixMQ\Struct\Queue\Server\Reply;

class GetMessage extends Reply
{
    /**
     * 消息ID
     *
     * @var string
     */
    public $messageId;
    
    /**
     * 消息数据
     *
     * @var mixed
     */
    public $message;
}