<?php
namespace SixMQ\Struct;

use SixMQ\Util\Operation;

class BaseServerStruct
{
	/**
	 * 操作是否执行成功
	 *
	 * @var boolean
	 */
	public $success;

	/**
	 * 操作类型
	 *
	 * @var string
	 */
	public $operation;

	public function __construct($success = true, $operation = Operation::REPLY)
	{
		$this->success = $success;
		$this->operation = $operation;
	}
}