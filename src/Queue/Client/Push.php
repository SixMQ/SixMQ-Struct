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
    public $block = 0;

    /**
     * 消费失败重试次数
     *
     * @var integer
     */
    public $retry = 0;

    /**
     * 超时时间，单位：秒，-1则为不限制
     * 超过超时时间则从队列中移除
     *
     * @var float
     */
	public $timeout = -1;

	/**
	 * 延迟执行的秒数，支持小数
	 *
	 * @var float
	 */
	public $delay;
	
    public function __construct($queueId, $data, $options = [])
    {
        $this->action = 'queue.push';
        $this->queueId = $queueId;
        $this->data = $data;
        foreach($options as $k => $v)
        {
            $this->$k = $v;
        }
	}
	
}