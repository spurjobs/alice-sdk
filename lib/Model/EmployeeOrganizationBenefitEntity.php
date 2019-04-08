<?php
/**
 * EmployeeOrganizationBenefitEntity
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
 * EmployeeOrganizationBenefitEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeOrganizationBenefitEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeOrganizationBenefitEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'benefit_type' => 'string',
'enrollment_open' => 'bool',
'status' => 'string',
'safe_to_spend_limit' => 'int',
'plan_year_for_new_enrollment' => '\Swagger\Client\Model\PlanYearEntity',
'upcoming_plan_year' => '\Swagger\Client\Model\PlanYearEntity'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'benefit_type' => null,
'enrollment_open' => null,
'status' => null,
'safe_to_spend_limit' => 'int32',
'plan_year_for_new_enrollment' => null,
'upcoming_plan_year' => null    ];

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
        'name' => 'name',
'benefit_type' => 'benefit_type',
'enrollment_open' => 'enrollment_open',
'status' => 'status',
'safe_to_spend_limit' => 'safe_to_spend_limit',
'plan_year_for_new_enrollment' => 'plan_year_for_new_enrollment',
'upcoming_plan_year' => 'upcoming_plan_year'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'benefit_type' => 'setBenefitType',
'enrollment_open' => 'setEnrollmentOpen',
'status' => 'setStatus',
'safe_to_spend_limit' => 'setSafeToSpendLimit',
'plan_year_for_new_enrollment' => 'setPlanYearForNewEnrollment',
'upcoming_plan_year' => 'setUpcomingPlanYear'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'benefit_type' => 'getBenefitType',
'enrollment_open' => 'getEnrollmentOpen',
'status' => 'getStatus',
'safe_to_spend_limit' => 'getSafeToSpendLimit',
'plan_year_for_new_enrollment' => 'getPlanYearForNewEnrollment',
'upcoming_plan_year' => 'getUpcomingPlanYear'    ];

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

    const STATUS_ENABLED = 'enabled';
const STATUS_DISABLED = 'disabled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
self::STATUS_DISABLED,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'Mass transit';
        $this->container['benefit_type'] = isset($data['benefit_type']) ? $data['benefit_type'] : 'mass_transit';
        $this->container['enrollment_open'] = isset($data['enrollment_open']) ? $data['enrollment_open'] : true;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'enabled';
        $this->container['safe_to_spend_limit'] = isset($data['safe_to_spend_limit']) ? $data['safe_to_spend_limit'] : 500;
        $this->container['plan_year_for_new_enrollment'] = isset($data['plan_year_for_new_enrollment']) ? $data['plan_year_for_new_enrollment'] : null;
        $this->container['upcoming_plan_year'] = isset($data['upcoming_plan_year']) ? $data['upcoming_plan_year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['benefit_type'] === null) {
            $invalidProperties[] = "'benefit_type' can't be null";
        }
        if ($this->container['enrollment_open'] === null) {
            $invalidProperties[] = "'enrollment_open' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['safe_to_spend_limit'] === null) {
            $invalidProperties[] = "'safe_to_spend_limit' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of benefit
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets benefit_type
     *
     * @return string
     */
    public function getBenefitType()
    {
        return $this->container['benefit_type'];
    }

    /**
     * Sets benefit_type
     *
     * @param string $benefit_type Benefit type
     *
     * @return $this
     */
    public function setBenefitType($benefit_type)
    {
        $this->container['benefit_type'] = $benefit_type;

        return $this;
    }

    /**
     * Gets enrollment_open
     *
     * @return bool
     */
    public function getEnrollmentOpen()
    {
        return $this->container['enrollment_open'];
    }

    /**
     * Sets enrollment_open
     *
     * @param bool $enrollment_open Is enrollment open for this employee?
     *
     * @return $this
     */
    public function setEnrollmentOpen($enrollment_open)
    {
        $this->container['enrollment_open'] = $enrollment_open;

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
     * @param string $status Status of benefit
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets safe_to_spend_limit
     *
     * @return int
     */
    public function getSafeToSpendLimit()
    {
        return $this->container['safe_to_spend_limit'];
    }

    /**
     * Sets safe_to_spend_limit
     *
     * @param int $safe_to_spend_limit Contribution limit
     *
     * @return $this
     */
    public function setSafeToSpendLimit($safe_to_spend_limit)
    {
        $this->container['safe_to_spend_limit'] = $safe_to_spend_limit;

        return $this;
    }

    /**
     * Gets plan_year_for_new_enrollment
     *
     * @return \Swagger\Client\Model\PlanYearEntity
     */
    public function getPlanYearForNewEnrollment()
    {
        return $this->container['plan_year_for_new_enrollment'];
    }

    /**
     * Sets plan_year_for_new_enrollment
     *
     * @param \Swagger\Client\Model\PlanYearEntity $plan_year_for_new_enrollment plan_year_for_new_enrollment
     *
     * @return $this
     */
    public function setPlanYearForNewEnrollment($plan_year_for_new_enrollment)
    {
        $this->container['plan_year_for_new_enrollment'] = $plan_year_for_new_enrollment;

        return $this;
    }

    /**
     * Gets upcoming_plan_year
     *
     * @return \Swagger\Client\Model\PlanYearEntity
     */
    public function getUpcomingPlanYear()
    {
        return $this->container['upcoming_plan_year'];
    }

    /**
     * Sets upcoming_plan_year
     *
     * @param \Swagger\Client\Model\PlanYearEntity $upcoming_plan_year upcoming_plan_year
     *
     * @return $this
     */
    public function setUpcomingPlanYear($upcoming_plan_year)
    {
        $this->container['upcoming_plan_year'] = $upcoming_plan_year;

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
