<?php
/**
 * EmployerAnnualSavingsEntity
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
 * EmployerAnnualSavingsEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployerAnnualSavingsEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployerAnnualSavingsEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
'end_date' => '\DateTime',
'employee_count' => 'int',
'employee_deductions_dollars' => 'float',
'employee_savings_dollars' => 'float',
'employer_gross_savings_dollars' => 'float',
'employer_fee_dollars' => 'float',
'employer_net_savings_dollars' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_date' => 'date',
'end_date' => 'date',
'employee_count' => 'int32',
'employee_deductions_dollars' => 'float',
'employee_savings_dollars' => 'float',
'employer_gross_savings_dollars' => 'float',
'employer_fee_dollars' => 'float',
'employer_net_savings_dollars' => 'float'    ];

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
        'start_date' => 'start_date',
'end_date' => 'end_date',
'employee_count' => 'employee_count',
'employee_deductions_dollars' => 'employee_deductions_dollars',
'employee_savings_dollars' => 'employee_savings_dollars',
'employer_gross_savings_dollars' => 'employer_gross_savings_dollars',
'employer_fee_dollars' => 'employer_fee_dollars',
'employer_net_savings_dollars' => 'employer_net_savings_dollars'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
'end_date' => 'setEndDate',
'employee_count' => 'setEmployeeCount',
'employee_deductions_dollars' => 'setEmployeeDeductionsDollars',
'employee_savings_dollars' => 'setEmployeeSavingsDollars',
'employer_gross_savings_dollars' => 'setEmployerGrossSavingsDollars',
'employer_fee_dollars' => 'setEmployerFeeDollars',
'employer_net_savings_dollars' => 'setEmployerNetSavingsDollars'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
'end_date' => 'getEndDate',
'employee_count' => 'getEmployeeCount',
'employee_deductions_dollars' => 'getEmployeeDeductionsDollars',
'employee_savings_dollars' => 'getEmployeeSavingsDollars',
'employer_gross_savings_dollars' => 'getEmployerGrossSavingsDollars',
'employer_fee_dollars' => 'getEmployerFeeDollars',
'employer_net_savings_dollars' => 'getEmployerNetSavingsDollars'    ];

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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['employee_count'] = isset($data['employee_count']) ? $data['employee_count'] : null;
        $this->container['employee_deductions_dollars'] = isset($data['employee_deductions_dollars']) ? $data['employee_deductions_dollars'] : null;
        $this->container['employee_savings_dollars'] = isset($data['employee_savings_dollars']) ? $data['employee_savings_dollars'] : 1380.53;
        $this->container['employer_gross_savings_dollars'] = isset($data['employer_gross_savings_dollars']) ? $data['employer_gross_savings_dollars'] : 305.81;
        $this->container['employer_fee_dollars'] = isset($data['employer_fee_dollars']) ? $data['employer_fee_dollars'] : 139.8;
        $this->container['employer_net_savings_dollars'] = isset($data['employer_net_savings_dollars']) ? $data['employer_net_savings_dollars'] : 166.01;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['employee_count'] === null) {
            $invalidProperties[] = "'employee_count' can't be null";
        }
        if ($this->container['employee_deductions_dollars'] === null) {
            $invalidProperties[] = "'employee_deductions_dollars' can't be null";
        }
        if ($this->container['employee_savings_dollars'] === null) {
            $invalidProperties[] = "'employee_savings_dollars' can't be null";
        }
        if ($this->container['employer_gross_savings_dollars'] === null) {
            $invalidProperties[] = "'employer_gross_savings_dollars' can't be null";
        }
        if ($this->container['employer_fee_dollars'] === null) {
            $invalidProperties[] = "'employer_fee_dollars' can't be null";
        }
        if ($this->container['employer_net_savings_dollars'] === null) {
            $invalidProperties[] = "'employer_net_savings_dollars' can't be null";
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
     * @param \DateTime $start_date The start date of the period in question
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
     * @param \DateTime $end_date The end date of the period in question
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets employee_count
     *
     * @return int
     */
    public function getEmployeeCount()
    {
        return $this->container['employee_count'];
    }

    /**
     * Sets employee_count
     *
     * @param int $employee_count The number of employees in question for this period. For a pay period it is the # ppl enrolled in that period,                                       For annual savings, it is the total # of employees, and for total savings, its the # of employees enrolled
     *
     * @return $this
     */
    public function setEmployeeCount($employee_count)
    {
        $this->container['employee_count'] = $employee_count;

        return $this;
    }

    /**
     * Gets employee_deductions_dollars
     *
     * @return float
     */
    public function getEmployeeDeductionsDollars()
    {
        return $this->container['employee_deductions_dollars'];
    }

    /**
     * Sets employee_deductions_dollars
     *
     * @param float $employee_deductions_dollars Total Employee deductions for this period
     *
     * @return $this
     */
    public function setEmployeeDeductionsDollars($employee_deductions_dollars)
    {
        $this->container['employee_deductions_dollars'] = $employee_deductions_dollars;

        return $this;
    }

    /**
     * Gets employee_savings_dollars
     *
     * @return float
     */
    public function getEmployeeSavingsDollars()
    {
        return $this->container['employee_savings_dollars'];
    }

    /**
     * Sets employee_savings_dollars
     *
     * @param float $employee_savings_dollars Estimated Employee tax savings for this period
     *
     * @return $this
     */
    public function setEmployeeSavingsDollars($employee_savings_dollars)
    {
        $this->container['employee_savings_dollars'] = $employee_savings_dollars;

        return $this;
    }

    /**
     * Gets employer_gross_savings_dollars
     *
     * @return float
     */
    public function getEmployerGrossSavingsDollars()
    {
        return $this->container['employer_gross_savings_dollars'];
    }

    /**
     * Sets employer_gross_savings_dollars
     *
     * @param float $employer_gross_savings_dollars Estimated Employer tax savings for this period not including Alice fees
     *
     * @return $this
     */
    public function setEmployerGrossSavingsDollars($employer_gross_savings_dollars)
    {
        $this->container['employer_gross_savings_dollars'] = $employer_gross_savings_dollars;

        return $this;
    }

    /**
     * Gets employer_fee_dollars
     *
     * @return float
     */
    public function getEmployerFeeDollars()
    {
        return $this->container['employer_fee_dollars'];
    }

    /**
     * Sets employer_fee_dollars
     *
     * @param float $employer_fee_dollars Alice Fee for this period
     *
     * @return $this
     */
    public function setEmployerFeeDollars($employer_fee_dollars)
    {
        $this->container['employer_fee_dollars'] = $employer_fee_dollars;

        return $this;
    }

    /**
     * Gets employer_net_savings_dollars
     *
     * @return float
     */
    public function getEmployerNetSavingsDollars()
    {
        return $this->container['employer_net_savings_dollars'];
    }

    /**
     * Sets employer_net_savings_dollars
     *
     * @param float $employer_net_savings_dollars Estimated Employer tax savings for this period minus  Alice fee
     *
     * @return $this
     */
    public function setEmployerNetSavingsDollars($employer_net_savings_dollars)
    {
        $this->container['employer_net_savings_dollars'] = $employer_net_savings_dollars;

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
