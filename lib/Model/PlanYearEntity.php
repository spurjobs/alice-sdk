<?php
/**
 * PlanYearEntity
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
 * PlanYearEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlanYearEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlanYearEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'start_date' => '\DateTime',
'end_date' => '\DateTime',
'calendar_year_at_start' => 'int',
'in_plan_year' => 'bool',
'enrollment_period_end_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'start_date' => 'date',
'end_date' => 'date',
'calendar_year_at_start' => 'int32',
'in_plan_year' => null,
'enrollment_period_end_date' => 'date'    ];

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
        'id' => 'id',
'start_date' => 'start_date',
'end_date' => 'end_date',
'calendar_year_at_start' => 'calendar_year_at_start',
'in_plan_year' => 'in_plan_year',
'enrollment_period_end_date' => 'enrollment_period_end_date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'calendar_year_at_start' => 'setCalendarYearAtStart',
'in_plan_year' => 'setInPlanYear',
'enrollment_period_end_date' => 'setEnrollmentPeriodEndDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'calendar_year_at_start' => 'getCalendarYearAtStart',
'in_plan_year' => 'getInPlanYear',
'enrollment_period_end_date' => 'getEnrollmentPeriodEndDate'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : 1;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['calendar_year_at_start'] = isset($data['calendar_year_at_start']) ? $data['calendar_year_at_start'] : 2018;
        $this->container['in_plan_year'] = isset($data['in_plan_year']) ? $data['in_plan_year'] : null;
        $this->container['enrollment_period_end_date'] = isset($data['enrollment_period_end_date']) ? $data['enrollment_period_end_date'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Plan year ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Start date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets calendar_year_at_start
     *
     * @return int
     */
    public function getCalendarYearAtStart()
    {
        return $this->container['calendar_year_at_start'];
    }

    /**
     * Sets calendar_year_at_start
     *
     * @param int $calendar_year_at_start Calendar year at time of start date
     *
     * @return $this
     */
    public function setCalendarYearAtStart($calendar_year_at_start)
    {
        $this->container['calendar_year_at_start'] = $calendar_year_at_start;

        return $this;
    }

    /**
     * Gets in_plan_year
     *
     * @return bool
     */
    public function getInPlanYear()
    {
        return $this->container['in_plan_year'];
    }

    /**
     * Sets in_plan_year
     *
     * @param bool $in_plan_year Are we currently in this plan year?
     *
     * @return $this
     */
    public function setInPlanYear($in_plan_year)
    {
        $this->container['in_plan_year'] = $in_plan_year;

        return $this;
    }

    /**
     * Gets enrollment_period_end_date
     *
     * @return \DateTime
     */
    public function getEnrollmentPeriodEndDate()
    {
        return $this->container['enrollment_period_end_date'];
    }

    /**
     * Sets enrollment_period_end_date
     *
     * @param \DateTime $enrollment_period_end_date Open enrollment end date
     *
     * @return $this
     */
    public function setEnrollmentPeriodEndDate($enrollment_period_end_date)
    {
        $this->container['enrollment_period_end_date'] = $enrollment_period_end_date;

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
