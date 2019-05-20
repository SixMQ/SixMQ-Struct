<?php
namespace SixMQ\Struct\Util\ObjectToArray;

use Imi\Enum\BaseEnum;
use Imi\Enum\Annotation\EnumItem;

class PropertyType extends BaseEnum
{
    /**
     * @EnumItem("文本")
     */
    const TEXT = 1;

    /**
     * @EnumItem("整数")
     */
    const INT = 2;

    /**
     * @EnumItem("小数")
     */
    const FLOAT = 3;

    /**
     * @EnumItem("小数")
     */
    const DOUBLE = 3;

    /**
     * @EnumItem("逻辑型")
     */
    const BOOL = 4;

    /**
     * @EnumItem("逻辑型")
     */
    const BOOLEAN = 4;

    /**
     * @EnumItem("其它")
     */
    const OTHER = 5;

}