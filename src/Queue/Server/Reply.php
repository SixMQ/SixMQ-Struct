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
     * 错误信息
     *
     * @var string
     */
    public $error;
    
    /**
     * 标志符，请求时传入的原样返回
     *
     * @var string
     */
    public $flag;

    public function __construct($success = true, $operation = Operation::REPLY)
    {
        $this->success = $success;
        $this->operation = $operation;
    }
}