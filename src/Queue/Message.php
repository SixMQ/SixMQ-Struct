<?php
namespace SixMQ\Struct\Queue;

class Message
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

	/**
	 * 消息首次入库时间戳
	 *
	 * @var int
	 */
	public $firstInTime;

	/**
	 * 消息最后一次入库时间
	 *
	 * @var int
	 */
	public $inTime;

	/**
	 * 消息是否被消费完成
	 *
	 * @var boolean
	 */
	public $consum = false;
	
	/**
	 * 消息是否成功消费
	 *
	 * @var boolean
	 */
	public $success = false;

	/**
	 * 消费结果数据
	 *
	 * @var mixed
	 */
	public $resultData;

	/**
	 * 消费失败重试次数
	 *
	 * @var int
	 */
	public $retry;

	/**
	 * 消息超时时间，单位：秒
	 *
	 * @var float
	 */
	public $timeout;

	public function __construct($data, $messageId)
	{
		$this->data = $data;
		$this->messageId = $messageId;
		$this->inTime = $this->firstInTime = microtime(true);
	}
}