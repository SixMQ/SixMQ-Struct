<?php
namespace SixMQ\Struct\Queue\Client;

use SixMQ\Struct\BaseClientStruct;

class Remove extends BaseClientStruct
{
    /**
     * 消息ID
     *
     * @var string
     */
    public $messageId;

    public function __construct($messageId)
    {
        $this->action = 'queue.remove';
        $this->messageId = $messageId;
    }
}