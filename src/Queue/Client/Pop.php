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
	
	/**
	 * 是否阻塞等待返回，默认为false，如果没有则返回success=false
	 *
	 * @var boolean
	 */
	public $block;

	public function __construct($queueId, $maxExpire, $block = false)
	{
		$this->action = 'queue.pop';
		$this->queueId = $queueId;
		$this->maxExpire = $maxExpire;
		$this->block = $block;
	}
}