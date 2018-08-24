<?php
namespace SixMQ\Struct\Queue\Client;

use SixMQ\Struct\BaseClientStruct;

class GetMessage extends BaseClientStruct
{
	/**
	 * 消息ID
	 *
	 * @var string
	 */
	public $messageId;

	public function __construct($messageId)
	{
		$this->action = 'queue.getMessage';
		$this->messageId = $messageId;
	}
}