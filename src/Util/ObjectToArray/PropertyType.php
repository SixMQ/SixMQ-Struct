<?php
namespace SixMQ\Struct\Util\ObjectToArray;

abstract class PropertyType
{
    /**
     * 文本
     */
    const TEXT = 1;

    /**
     * 整数
     */
    const INT = 2;

    /**
     * 小数
     */
    const FLOAT = 3;

    /**
     * 小数
     */
    const DOUBLE = 3;

    /**
     * 逻辑型
     */
    const BOOL = 4;

    /**
     * 逻辑型
     */
    const BOOLEAN = 4;

    /**
     * 其它
     */
    const OTHER = 5;

}