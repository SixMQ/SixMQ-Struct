<?php
namespace SixMQ\Struct\Queue\Server;

use SixMQ\Struct\Queue\Server\Reply;

class Pop extends Reply
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
	 * 数据
	 *
	 * @var mixed
	 */
	public $data;
}