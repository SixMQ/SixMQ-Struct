<?php
namespace SixMQ\Struct\Queue;

use SixMQ\Struct\Util\ObjectToArray\TObjectToArray;

class Message
{
    use TObjectToArray;

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
     * 消息分组Id
     *
     * @var string
     */
    public $groupId;

    /**
     * 消息首次入库时间戳
     *
     * @var float
     */
    public $firstInTime;

    /**
     * 消息最后一次入库时间
     *
     * @var float
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

	/**
	 * 延迟执行的秒数，支持小数
	 *
	 * @var float
	 */
    public $delay;

    /**
     * 延迟后允许执行的时间，时间戳
     *
     * @var float
     */
    public $delayRunTime;

    public function __construct($data, $messageId)
    {
        $this->data = $data;
        $this->messageId = $messageId;
        $this->inTime = $this->firstInTime = microtime(true);
    }

}