<?php
namespace SixMQ\Struct\Util\ObjectToArray;

trait TObjectToArray
{
    /**
     * 属性信息
     *
     * @var array
     */
    private static $propertyInfos = null;

    /**
     * 从存储中加载数据到对象
     *
     * @param array $data
     * @return static
     */
    public static function loadFromStore($data)
    {
        if(null === static::$propertyInfos)
        {
            $this->loadPropertyInfos();
        }
        foreach(static::$propertyInfos as $name => $option)
        {
            if(isset($data[$name]))
            {
                $value = $data[$name];
                switch($option['type'])
                {
                    case PropertyType::TEXT:
                        break;
                    case PropertyType::INT:
                        $value = (int)$value;
                        break;
                    case PropertyType::DOUBLE:
                        $value = (double)$value;
                        break;
                    case PropertyType::BOOLEAN:
                        $value = (bool)$value;
                        break;
                    default:
                        $value = json_decode($value, true);
                }
            }
            else
            {
                $value = null;
            }
            $this->$name = $value;
        }
    }

    /**
     * 将当前对象作为数组返回
     * @return array
     */
    public function toArray(): array
    {
        if(null === static::$propertyInfos)
        {
            $this->loadPropertyInfos();
        }
        $data = [];
        foreach(static::$propertyInfos as $name => $option)
        {
            $value = $this->$name;
            if(PropertyType::OTHER === $option['type'])
            {
                $value = json_encode($value);
            }
            $data[$name] = $value;
        }
        return $data;
    }

    /**
     * 加载属性信息
     *
     * @return void
     */
    private function loadPropertyInfos()
    {
        static::$propertyInfos = [];
        $refClass = new \ReflectionClass($this);
        foreach($refClass->getProperties(\ReflectionProperty::IS_PUBLIC) as $property)
        {
            $type = $this->getPropertyType($property);
            static::$propertyInfos[$property->name] = [
                'type'  =>  $type,
            ];
        }
    }

    /**
     * 获取属性类型
     *
     * @param \ReflectionProperty $property
     * @return int
     */
    private function getPropertyType(\ReflectionProperty $property)
    {
        $comment = $property->getDocComment();
        if(preg_match('/@var\s+([\S]+)/', $comment, $matches) > 0)
        {
            $typeStr = $matches[1];
            switch(strtolower($typeStr))
            {
                case 'string':
                    return PropertyType::TEXT;
                case 'int':
                case 'integer':
                    return PropertyType::INT;
                case 'float':
                case 'double':
                case 'number':
                    return PropertyType::DOUBLE;
                case 'bool':
                case 'boolean':
                    return PropertyType::BOOL;
                default:
                    return PropertyType::OTHER;
            }
        }
        else
        {
            throw new \RuntimeException(sprintf('class %s->%s does not have @var type', $property->getDeclaringClass()->name, $property->name));
        }
    }

}