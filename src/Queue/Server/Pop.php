<?php
namespace SixMQ\Struct\Queue\Server;

use SixMQ\Struct\BaseServerStruct;

class Pop extends BaseServerStruct
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