<?php
namespace SixMQ\Struct;

class BaseClientStruct
{
	/**
	 * 动作
	 *
	 * @var string
	 */
	public $action;

	/**
	 * 标志符，响应时原样返回
	 *
	 * @var string
	 */
	public $flag;
}