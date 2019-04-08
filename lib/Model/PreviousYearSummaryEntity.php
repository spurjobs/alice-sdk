<?php
/**
 * PreviousYearSummaryEntity
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
 * PreviousYearSummaryEntity Class Doc Comment
 *
 * @category Class
 * @description Previous year summary
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PreviousYearSummaryEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PreviousYearSummaryEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enrolled_in_previous_year' => 'bool',
'previous_year' => 'int',
'total_contributions' => 'float',
'amount_remaining' => 'float',
'contribution_days_remaining' => 'int',
'top_up_start_date' => '\DateTime',
'top_up_end_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enrolled_in_previous_year' => null,
'previous_year' => 'int32',
'total_contributions' => 'float',
'amount_remaining' => 'float',
'contribution_days_remaining' => 'int32',
'top_up_start_date' => 'date',
'top_up_end_date' => 'date'    ];

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
        'enrolled_in_previous_year' => 'enrolled_in_previous_year',
'previous_year' => 'previous_year',
'total_contributions' => 'total_contributions',
'amount_remaining' => 'amount_remaining',
'contribution_days_remaining' => 'contribution_days_remaining',
'top_up_start_date' => 'top_up_start_date',
'top_up_end_date' => 'top_up_end_date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enrolled_in_previous_year' => 'setEnrolledInPreviousYear',
'previous_year' => 'setPreviousYear',
'total_contributions' => 'setTotalContributions',
'amount_remaining' => 'setAmountRemaining',
'contribution_days_remaining' => 'setContributionDaysRemaining',
'top_up_start_date' => 'setTopUpStartDate',
'top_up_end_date' => 'setTopUpEndDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enrolled_in_previous_year' => 'getEnrolledInPreviousYear',
'previous_year' => 'getPreviousYear',
'total_contributions' => 'getTotalContributions',
'amount_remaining' => 'getAmountRemaining',
'contribution_days_remaining' => 'getContributionDaysRemaining',
'top_up_start_date' => 'getTopUpStartDate',
'top_up_end_date' => 'getTopUpEndDate'    ];

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
        $this->container['enrolled_in_previous_year'] = isset($data['enrolled_in_previous_year']) ? $data['enrolled_in_previous_year'] : null;
        $this->container['previous_year'] = isset($data['previous_year']) ? $data['previous_year'] : 2018;
        $this->container['total_contributions'] = isset($data['total_contributions']) ? $data['total_contributions'] : 1000.0;
        $this->container['amount_remaining'] = isset($data['amount_remaining']) ? $data['amount_remaining'] : 4000.0;
        $this->container['contribution_days_remaining'] = isset($data['contribution_days_remaining']) ? $data['contribution_days_remaining'] : 30;
        $this->container['top_up_start_date'] = isset($data['top_up_start_date']) ? $data['top_up_start_date'] : null;
        $this->container['top_up_end_date'] = isset($data['top_up_end_date']) ? $data['top_up_end_date'] : null;
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
     * Gets enrolled_in_previous_year
     *
     * @return bool
     */
    public function getEnrolledInPreviousYear()
    {
        return $this->container['enrolled_in_previous_year'];
    }

    /**
     * Sets enrolled_in_previous_year
     *
     * @param bool $enrolled_in_previous_year Was employee enrolled in previous year
     *
     * @return $this
     */
    public function setEnrolledInPreviousYear($enrolled_in_previous_year)
    {
        $this->container['enrolled_in_previous_year'] = $enrolled_in_previous_year;

        return $this;
    }

    /**
     * Gets previous_year
     *
     * @return int
     */
    public function getPreviousYear()
    {
        return $this->container['previous_year'];
    }

    /**
     * Sets previous_year
     *
     * @param int $previous_year Previous calendar year
     *
     * @return $this
     */
    public function setPreviousYear($previous_year)
    {
        $this->container['previous_year'] = $previous_year;

        return $this;
    }

    /**
     * Gets total_contributions
     *
     * @return float
     */
    public function getTotalContributions()
    {
        return $this->container['total_contributions'];
    }

    /**
     * Sets total_contributions
     *
     * @param float $total_contributions Total contributions (in dollars) for last tax year
     *
     * @return $this
     */
    public function setTotalContributions($total_contributions)
    {
        $this->container['total_contributions'] = $total_contributions;

        return $this;
    }

    /**
     * Gets amount_remaining
     *
     * @return float
     */
    public function getAmountRemaining()
    {
        return $this->container['amount_remaining'];
    }

    /**
     * Sets amount_remaining
     *
     * @param float $amount_remaining Amount remaining (in dollars) for last tax year
     *
     * @return $this
     */
    public function setAmountRemaining($amount_remaining)
    {
        $this->container['amount_remaining'] = $amount_remaining;

        return $this;
    }

    /**
     * Gets contribution_days_remaining
     *
     * @return int
     */
    public function getContributionDaysRemaining()
    {
        return $this->container['contribution_days_remaining'];
    }

    /**
     * Sets contribution_days_remaining
     *
     * @param int $contribution_days_remaining Number of days remaining to contribute
     *
     * @return $this
     */
    public function setContributionDaysRemaining($contribution_days_remaining)
    {
        $this->container['contribution_days_remaining'] = $contribution_days_remaining;

        return $this;
    }

    /**
     * Gets top_up_start_date
     *
     * @return \DateTime
     */
    public function getTopUpStartDate()
    {
        return $this->container['top_up_start_date'];
    }

    /**
     * Sets top_up_start_date
     *
     * @param \DateTime $top_up_start_date Top up period start date
     *
     * @return $this
     */
    public function setTopUpStartDate($top_up_start_date)
    {
        $this->container['top_up_start_date'] = $top_up_start_date;

        return $this;
    }

    /**
     * Gets top_up_end_date
     *
     * @return \DateTime
     */
    public function getTopUpEndDate()
    {
        return $this->container['top_up_end_date'];
    }

    /**
     * Sets top_up_end_date
     *
     * @param \DateTime $top_up_end_date Top up period end date
     *
     * @return $this
     */
    public function setTopUpEndDate($top_up_end_date)
    {
        $this->container['top_up_end_date'] = $top_up_end_date;

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