<?php

namespace ShaileshMatariya\Gsuite\Addon;

use ReflectionObject;
use ReflectionProperty;
use stdClass;

class GoogleModel
{
    const NULL_VALUE = '{}gapi-php-null';
    protected $modelData = [];

    public function toSimpleObject()
    {
        $object = new stdClass();

        // Process all public properties.
        $reflect = new ReflectionObject($this);
        $props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($props as $member) {
            $name = $member->getName();
            $result = $this->getSimpleValue($this->$name);
            if ($result !== null) {
                $object->$name = $this->nullPlaceholderCheck($result);
            }
        }

        return $object;
    }

    /**
     * Handle different types of values, primarily
     * other objects and map and array data types.
     */
    private function getSimpleValue($value)
    {
        if ($value instanceof self) {
            return $value->toSimpleObject();
        } elseif (is_array($value)) {
            $return = [];
            foreach ($value as $key => $a_value) {
                $a_value = $this->getSimpleValue($a_value);
                if ($a_value !== null) {
                    $return[$key] = $this->nullPlaceholderCheck($a_value);
                }
            }

            return $return;
        }

        return $value;
    }

    /**
     * Check whether the value is the null placeholder and return true null.
     */
    private function nullPlaceholderCheck($value)
    {
        if ($value === self::NULL_VALUE) {
            return;
        }

        return $value;
    }
}
