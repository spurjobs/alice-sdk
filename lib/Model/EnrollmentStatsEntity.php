<?php
/**
 * EnrollmentStatsEntity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alice Payroll Provider API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EnrollmentStatsEntity Class Doc Comment
 *
 * @category Class
 * @description weekly stats on enrollments and which cohort they came from
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnrollmentStatsEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnrollmentStatsEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
'enrollment_count' => 'int',
'new_account_enrollment_count' => 'int',
'semi_new_account_enrollment_count' => 'int',
'old_account_enrollment_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date',
'enrollment_count' => 'int32',
'new_account_enrollment_count' => 'int32',
'semi_new_account_enrollment_count' => 'int32',
'old_account_enrollment_count' => 'int32'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date' => 'date',
'enrollment_count' => 'enrollment_count',
'new_account_enrollment_count' => 'new_account_enrollment_count',
'semi_new_account_enrollment_count' => 'semi_new_account_enrollment_count',
'old_account_enrollment_count' => 'old_account_enrollment_count'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
'enrollment_count' => 'setEnrollmentCount',
'new_account_enrollment_count' => 'setNewAccountEnrollmentCount',
'semi_new_account_enrollment_count' => 'setSemiNewAccountEnrollmentCount',
'old_account_enrollment_count' => 'setOldAccountEnrollmentCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
'enrollment_count' => 'getEnrollmentCount',
'new_account_enrollment_count' => 'getNewAccountEnrollmentCount',
'semi_new_account_enrollment_count' => 'getSemiNewAccountEnrollmentCount',
'old_account_enrollment_count' => 'getOldAccountEnrollmentCount'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['enrollment_count'] = isset($data['enrollment_count']) ? $data['enrollment_count'] : 56;
        $this->container['new_account_enrollment_count'] = isset($data['new_account_enrollment_count']) ? $data['new_account_enrollment_count'] : 17;
        $this->container['semi_new_account_enrollment_count'] = isset($data['semi_new_account_enrollment_count']) ? $data['semi_new_account_enrollment_count'] : 31;
        $this->container['old_account_enrollment_count'] = isset($data['old_account_enrollment_count']) ? $data['old_account_enrollment_count'] : 8;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Date these stats relate to
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets enrollment_count
     *
     * @return int
     */
    public function getEnrollmentCount()
    {
        return $this->container['enrollment_count'];
    }

    /**
     * Sets enrollment_count
     *
     * @param int $enrollment_count Number of employees that enrolled within a 1 week period
     *
     * @return $this
     */
    public function setEnrollmentCount($enrollment_count)
    {
        $this->container['enrollment_count'] = $enrollment_count;

        return $this;
    }

    /**
     * Gets new_account_enrollment_count
     *
     * @return int
     */
    public function getNewAccountEnrollmentCount()
    {
        return $this->container['new_account_enrollment_count'];
    }

    /**
     * Sets new_account_enrollment_count
     *
     * @param int $new_account_enrollment_count Number of employees enrolled who are from accounts <= 1 week old
     *
     * @return $this
     */
    public function setNewAccountEnrollmentCount($new_account_enrollment_count)
    {
        $this->container['new_account_enrollment_count'] = $new_account_enrollment_count;

        return $this;
    }

    /**
     * Gets semi_new_account_enrollment_count
     *
     * @return int
     */
    public function getSemiNewAccountEnrollmentCount()
    {
        return $this->container['semi_new_account_enrollment_count'];
    }

    /**
     * Sets semi_new_account_enrollment_count
     *
     * @param int $semi_new_account_enrollment_count Number of employees enrolled who are from accounts > 1 week old and <= 30 days old
     *
     * @return $this
     */
    public function setSemiNewAccountEnrollmentCount($semi_new_account_enrollment_count)
    {
        $this->container['semi_new_account_enrollment_count'] = $semi_new_account_enrollment_count;

        return $this;
    }

    /**
     * Gets old_account_enrollment_count
     *
     * @return int
     */
    public function getOldAccountEnrollmentCount()
    {
        return $this->container['old_account_enrollment_count'];
    }

    /**
     * Sets old_account_enrollment_count
     *
     * @param int $old_account_enrollment_count Number of employees enrolled who are from accounts > 30 days old
     *
     * @return $this
     */
    public function setOldAccountEnrollmentCount($old_account_enrollment_count)
    {
        $this->container['old_account_enrollment_count'] = $old_account_enrollment_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}