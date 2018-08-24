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
	 * 是否阻塞等待返回
	 * 0：默认，立即返回
	 * 小于0：阻塞等待，不限制时长
	 * 大于0：阻塞等待时长，单位：秒
	 *
	 * @var float
	 */
	public $block;

	public function __construct($queueId, $maxExpire, $block = 0)
	{
		$this->action = 'queue.pop';
		$this->queueId = $queueId;
		$this->maxExpire = $maxExpire;
		$this->block = $block;
	}
}