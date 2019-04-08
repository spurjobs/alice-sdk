<?php
/**
 * MostRecentComplianceReportCollectionEntity
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
 * MostRecentComplianceReportCollectionEntity Class Doc Comment
 *
 * @category Class
 * @description Indicate that org census has been completed
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MostRecentComplianceReportCollectionEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MostRecentComplianceReportCollectionEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_run' => 'string',
'reports' => '\Swagger\Client\Model\ReportEntity[]',
'status' => 'string',
'census_completed' => 'bool',
'census_updated_at' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_run' => null,
'reports' => null,
'status' => null,
'census_completed' => null,
'census_updated_at' => null    ];

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
        'last_run' => 'last_run',
'reports' => 'reports',
'status' => 'status',
'census_completed' => 'census_completed',
'census_updated_at' => 'census_updated_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_run' => 'setLastRun',
'reports' => 'setReports',
'status' => 'setStatus',
'census_completed' => 'setCensusCompleted',
'census_updated_at' => 'setCensusUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_run' => 'getLastRun',
'reports' => 'getReports',
'status' => 'getStatus',
'census_completed' => 'getCensusCompleted',
'census_updated_at' => 'getCensusUpdatedAt'    ];

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
        $this->container['last_run'] = isset($data['last_run']) ? $data['last_run'] : null;
        $this->container['reports'] = isset($data['reports']) ? $data['reports'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['census_completed'] = isset($data['census_completed']) ? $data['census_completed'] : null;
        $this->container['census_updated_at'] = isset($data['census_updated_at']) ? $data['census_updated_at'] : null;
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
     * Gets last_run
     *
     * @return string
     */
    public function getLastRun()
    {
        return $this->container['last_run'];
    }

    /**
     * Sets last_run
     *
     * @param string $last_run Collection's Created at.
     *
     * @return $this
     */
    public function setLastRun($last_run)
    {
        $this->container['last_run'] = $last_run;

        return $this;
    }

    /**
     * Gets reports
     *
     * @return \Swagger\Client\Model\ReportEntity[]
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     *
     * @param \Swagger\Client\Model\ReportEntity[] $reports List of Benefit reports
     *
     * @return $this
     */
    public function setReports($reports)
    {
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Collection status: pending | generated | failed
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets census_completed
     *
     * @return bool
     */
    public function getCensusCompleted()
    {
        return $this->container['census_completed'];
    }

    /**
     * Sets census_completed
     *
     * @param bool $census_completed Organization completed census?
     *
     * @return $this
     */
    public function setCensusCompleted($census_completed)
    {
        $this->container['census_completed'] = $census_completed;

        return $this;
    }

    /**
     * Gets census_updated_at
     *
     * @return string
     */
    public function getCensusUpdatedAt()
    {
        return $this->container['census_updated_at'];
    }

    /**
     * Sets census_updated_at
     *
     * @param string $census_updated_at Last time census was updated
     *
     * @return $this
     */
    public function setCensusUpdatedAt($census_updated_at)
    {
        $this->container['census_updated_at'] = $census_updated_at;

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
