<?php
/**
 * ObjectSerializer
 *
 * PHP version 5
 *
 */

/** Package client
 * 
 * 
 * YuanJing OpenAPI SDK for PHP
 *
 * 
 *
 */

namespace Yjopenapi\Client\Api;

/**
 * ObjectSerializer Class Doc Comment
 *
 * @category Class
 * @package  Yjopenapi\Client
 */
class ObjectSerializer
{
    /**
     * Serialize data
     *
     * @param mixed  $data   the data to serialize
     * @param string $format the format of the type of the data
     *
     * @return string|object|array serialized form of $data
     */
    public static function sanitizeForSerialization($data, $format = null)
    {
        if (is_bool($data)) {
            return self::serializeBool((bool)$data);
        } elseif (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format('Y-m-dTH:i:sZ');
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::serialFormats();
            foreach ($data::serialTypes() as $property => $serialType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null
                    && !in_array($serialType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($serialType, 'getAllowableEnumValues')
                    && !in_array($value, $serialType::getAllowableEnumValues())) {
                    $imploded = implode("', '", $serialType::getAllowableEnumValues());
                    throw new \InvalidArgumentException("Invalid value for enum '$serialType', must be one of: '$imploded'");
                }
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $serialType, $formats[$property]);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param string[]|string|\DateTime $object an object to be serialized to a string
     * @param string|null $format the format of the parameter
     *
     * @return string the serialized object
     */
    public static function toQueryValue($object, $format = null)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object, $format);
        }
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in RFC3339
     *
     * @param string $value a string which will be part of the header
     *
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in RFC3339
     *
     * @param string $value the value of the form parameter
     *
     * @return string the form string
     */
    public static function toFormValue($value)
    {
        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in RFC3339
     * If it's a date, format it in Y-m-d
     *
     * @param string|\DateTime $value the value of the parameter
     * @param string|null $format the format of the parameter
     *
     * @return string the header string
     */
    public static function toString($value, $format = null)
    {
        if (is_bool($value)) {
            return self::serializeBool((bool)$value);
        } elseif (is_array($value)) {
            foreach ($value as $p => $v) {
                $value[$p] = self::sanitizeForSerialization($v);
            }
            return json_encode($value);
        } elseif ($value instanceof \DateTime) {
            return ($format === 'date') ? $value->format('Y-m-d') : $value->format('Y-m-dTH:i:sZ');
        } else {
            return $value;
        }
    }

    /**
    * Serialize an bool to a string.
    *
    * @param bool  $bool   bool to serialize to a string
    *
    * @return string
    */
    public static function serializeBool($bool) {
        return $bool ? 'true' : 'false';
    }

    /**
     * Serialize an array to a string.
     *
     * @param array  $collection                 collection to serialize to a string
     * @param string $collectionFormat           the format use for serialization (csv,
     * ssv, tsv, pipes, multi)
     * @param bool   $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return string
     */
    //public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    //{
    //    if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
    //        // http_build_query() almost does the job for us. We just
    //        // need to fix the result of multidimensional arrays.
    //        return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
    //    }
    //    switch ($collectionFormat) {
    //        case 'pipes':
    //            return implode('|', $collection);
    //
    //        case 'tsv':
    //            return implode("\t", $collection);
    //
    //        case 'ssv':
    //            return implode(' ', $collection);
    //
    //        case 'csv':
    //            // Deliberate fall through. CSV is default format.
    //        default:
    //            return implode(',', $collection);
    //    }
    //}

    /**
     * Deserialize a JSON string into an object
     *
     * @param mixed    $data          object or primitive to be deserialized
     * @param string   $class         class name is passed as a string
     * @param string[] $httpHeaders   HTTP headers
     * @param string   $discriminator discriminator if polymorphism is used
     *
     * @return object|array|null an single or an array of $class instances
     */
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        } elseif (substr($class, 0, 4) === 'map[') { // for associative array e.g. map[string,int]
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($class, -2), '[]') === 0) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        } elseif ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === '\DateTime') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                return new \DateTime($data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues())) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            // If a discriminator is defined and points to a valid subclass, use it.
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\Yjopenapi\Client\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
            $instance = new $class();
            foreach ($instance::serialTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }
}
