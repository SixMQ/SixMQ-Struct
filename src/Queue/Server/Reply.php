<?php
namespace SixMQ\Struct\Queue\Server;

use SixMQ\Struct\Util\Operation;
use SixMQ\Struct\BaseServerStruct;

class Reply extends BaseServerStruct
{
	/**
	 * 操作是否执行成功
	 *
	 * @var boolean
	 */
	public $success;
	
	/**
	 * 标志符，请求时传入的原样返回
	 *
	 * @var string
	 */
	public $flag;

	public function __construct($flag, $success = true, $operation = Operation::REPLY)
	{
		$this->flag = $flag;
		$this->success = $success;
		$this->operation = $operation;
	}
}