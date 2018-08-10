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
	
}