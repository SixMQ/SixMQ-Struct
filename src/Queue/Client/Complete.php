<?php
namespace SixMQ\Struct\Queue\Client;

use SixMQ\Struct\BaseClientStruct;

class Complete extends BaseClientStruct
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
	 * 消息是否成功消费
	 *
	 * @var boolean
	 */
	public $success;

	/**
	 * 消费结果数据
	 *
	 * @var mixed
	 */
	public $data;
}