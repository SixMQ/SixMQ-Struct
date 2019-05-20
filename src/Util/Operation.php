<?php
namespace SixMQ\Struct\Util;

use Imi\Enum\BaseEnum;
use Imi\Enum\Annotation\EnumItem;

class Operation extends BaseEnum
{
    /**
     * @EnumItem("操作回复")
     */
    const REPLY = 'reply';

}