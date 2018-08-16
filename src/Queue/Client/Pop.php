<?php
namespace SixMQ\Struct\Queue\Client;

use SixMQ\Struct\BaseClientStruct;

class Pop extends BaseClientStruct
{
	/**
	 * 队列ID
	 *
	 * @var string
	 */
	public $queueId;
	
	/**
	 * 消息处理，最大超时时间
	 *
	 * @var int
	 */
	public $maxExpire;
}