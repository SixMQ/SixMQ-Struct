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
	
}