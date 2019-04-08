<?php
/**
 * AliceStatsEntity
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
 * AliceStatsEntity Class Doc Comment
 *
 * @category Class
 * @description summary stats about the app
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AliceStatsEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AliceStatsEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
'total_employee_count' => 'int',
'total_employer_count' => 'int',
'total_organization_count' => 'int',
'penetration' => 'float',
'last_period_engagement' => '\Swagger\Client\Model\SpendingAnalysisEntity',
'last_period_mature_engagement' => '\Swagger\Client\Model\SpendingAnalysisEntity'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date',
'total_employee_count' => 'int32',
'total_employer_count' => 'int32',
'total_organization_count' => 'int32',
'penetration' => 'float',
'last_period_engagement' => null,
'last_period_mature_engagement' => null    ];

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
'total_employee_count' => 'total_employee_count',
'total_employer_count' => 'total_employer_count',
'total_organization_count' => 'total_organization_count',
'penetration' => 'penetration',
'last_period_engagement' => 'last_period_engagement',
'last_period_mature_engagement' => 'last_period_mature_engagement'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
'total_employee_count' => 'setTotalEmployeeCount',
'total_employer_count' => 'setTotalEmployerCount',
'total_organization_count' => 'setTotalOrganizationCount',
'penetration' => 'setPenetration',
'last_period_engagement' => 'setLastPeriodEngagement',
'last_period_mature_engagement' => 'setLastPeriodMatureEngagement'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
'total_employee_count' => 'getTotalEmployeeCount',
'total_employer_count' => 'getTotalEmployerCount',
'total_organization_count' => 'getTotalOrganizationCount',
'penetration' => 'getPenetration',
'last_period_engagement' => 'getLastPeriodEngagement',
'last_period_mature_engagement' => 'getLastPeriodMatureEngagement'    ];

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
        $this->container['total_employee_count'] = isset($data['total_employee_count']) ? $data['total_employee_count'] : 67;
        $this->container['total_employer_count'] = isset($data['total_employer_count']) ? $data['total_employer_count'] : 7;
        $this->container['total_organization_count'] = isset($data['total_organization_count']) ? $data['total_organization_count'] : 7;
        $this->container['penetration'] = isset($data['penetration']) ? $data['penetration'] : 0.78;
        $this->container['last_period_engagement'] = isset($data['last_period_engagement']) ? $data['last_period_engagement'] : null;
        $this->container['last_period_mature_engagement'] = isset($data['last_period_mature_engagement']) ? $data['last_period_mature_engagement'] : null;
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
     * Gets total_employee_count
     *
     * @return int
     */
    public function getTotalEmployeeCount()
    {
        return $this->container['total_employee_count'];
    }

    /**
     * Sets total_employee_count
     *
     * @param int $total_employee_count Total number of employees in the system
     *
     * @return $this
     */
    public function setTotalEmployeeCount($total_employee_count)
    {
        $this->container['total_employee_count'] = $total_employee_count;

        return $this;
    }

    /**
     * Gets total_employer_count
     *
     * @return int
     */
    public function getTotalEmployerCount()
    {
        return $this->container['total_employer_count'];
    }

    /**
     * Sets total_employer_count
     *
     * @param int $total_employer_count Total number of employers in the system
     *
     * @return $this
     */
    public function setTotalEmployerCount($total_employer_count)
    {
        $this->container['total_employer_count'] = $total_employer_count;

        return $this;
    }

    /**
     * Gets total_organization_count
     *
     * @return int
     */
    public function getTotalOrganizationCount()
    {
        return $this->container['total_organization_count'];
    }

    /**
     * Sets total_organization_count
     *
     * @param int $total_organization_count Total number of employers in the system
     *
     * @return $this
     */
    public function setTotalOrganizationCount($total_organization_count)
    {
        $this->container['total_organization_count'] = $total_organization_count;

        return $this;
    }

    /**
     * Gets penetration
     *
     * @return float
     */
    public function getPenetration()
    {
        return $this->container['penetration'];
    }

    /**
     * Sets penetration
     *
     * @param float $penetration ratio of employees to enrolled
     *
     * @return $this
     */
    public function setPenetration($penetration)
    {
        $this->container['penetration'] = $penetration;

        return $this;
    }

    /**
     * Gets last_period_engagement
     *
     * @return \Swagger\Client\Model\SpendingAnalysisEntity
     */
    public function getLastPeriodEngagement()
    {
        return $this->container['last_period_engagement'];
    }

    /**
     * Sets last_period_engagement
     *
     * @param \Swagger\Client\Model\SpendingAnalysisEntity $last_period_engagement last_period_engagement
     *
     * @return $this
     */
    public function setLastPeriodEngagement($last_period_engagement)
    {
        $this->container['last_period_engagement'] = $last_period_engagement;

        return $this;
    }

    /**
     * Gets last_period_mature_engagement
     *
     * @return \Swagger\Client\Model\SpendingAnalysisEntity
     */
    public function getLastPeriodMatureEngagement()
    {
        return $this->container['last_period_mature_engagement'];
    }

    /**
     * Sets last_period_mature_engagement
     *
     * @param \Swagger\Client\Model\SpendingAnalysisEntity $last_period_mature_engagement last_period_mature_engagement
     *
     * @return $this
     */
    public function setLastPeriodMatureEngagement($last_period_mature_engagement)
    {
        $this->container['last_period_mature_engagement'] = $last_period_mature_engagement;

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
