<?php
namespace SixMQ\Struct\Queue\Client;

use SixMQ\Struct\BaseClientStruct;

class Push extends BaseClientStruct
{
	/**
	 * 队列ID
	 *
	 * @var string
	 */
	public $queueId;

	/**
	 * 数据，可以是字符串、对象等其它类型
	 *
	 * @var mixed
	 */
	public $data;
	
	/**
	 * 是否阻塞等待返回
	 * 0：默认，立即返回
	 * 小于0：阻塞等待，不限制时长
	 * 大于0：阻塞等待时长，单位：秒
	 *
	 * @var float
	 */
	public $block;

	public function __construct($queueId, $data, $block = 0)
	{
		$this->action = 'queue.push';
		$this->queueId = $queueId;
		$this->data = $data;
		$this->block = $block;
	}
}