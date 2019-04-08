<?php
/**
 * PayrollConfigEntity
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
 * PayrollConfigEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayrollConfigEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayrollConfigEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'employer' => '\Swagger\Client\Model\EmployerMinimalEntity',
'pay_period_type' => 'string',
'first_notional_payday' => '\DateTime',
'days_paid_in_arrears' => 'int',
'deadline_days_before_payday' => 'int',
'periodic_payday' => 'int',
'monthly_payday' => 'string',
'twice_monthly_type' => 'int',
'twice_monthly_payday_1' => 'string',
'twice_monthly_payday_2' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'employer' => null,
'pay_period_type' => null,
'first_notional_payday' => 'date',
'days_paid_in_arrears' => 'int32',
'deadline_days_before_payday' => 'int32',
'periodic_payday' => 'int32',
'monthly_payday' => null,
'twice_monthly_type' => 'int32',
'twice_monthly_payday_1' => null,
'twice_monthly_payday_2' => null    ];

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
'employer' => 'employer',
'pay_period_type' => 'pay_period_type',
'first_notional_payday' => 'first_notional_payday',
'days_paid_in_arrears' => 'days_paid_in_arrears',
'deadline_days_before_payday' => 'deadline_days_before_payday',
'periodic_payday' => 'periodic_payday',
'monthly_payday' => 'monthly_payday',
'twice_monthly_type' => 'twice_monthly_type',
'twice_monthly_payday_1' => 'twice_monthly_payday_1',
'twice_monthly_payday_2' => 'twice_monthly_payday_2'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'employer' => 'setEmployer',
'pay_period_type' => 'setPayPeriodType',
'first_notional_payday' => 'setFirstNotionalPayday',
'days_paid_in_arrears' => 'setDaysPaidInArrears',
'deadline_days_before_payday' => 'setDeadlineDaysBeforePayday',
'periodic_payday' => 'setPeriodicPayday',
'monthly_payday' => 'setMonthlyPayday',
'twice_monthly_type' => 'setTwiceMonthlyType',
'twice_monthly_payday_1' => 'setTwiceMonthlyPayday1',
'twice_monthly_payday_2' => 'setTwiceMonthlyPayday2'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'employer' => 'getEmployer',
'pay_period_type' => 'getPayPeriodType',
'first_notional_payday' => 'getFirstNotionalPayday',
'days_paid_in_arrears' => 'getDaysPaidInArrears',
'deadline_days_before_payday' => 'getDeadlineDaysBeforePayday',
'periodic_payday' => 'getPeriodicPayday',
'monthly_payday' => 'getMonthlyPayday',
'twice_monthly_type' => 'getTwiceMonthlyType',
'twice_monthly_payday_1' => 'getTwiceMonthlyPayday1',
'twice_monthly_payday_2' => 'getTwiceMonthlyPayday2'    ];

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

    const PAY_PERIOD_TYPE_WEEKLY = 'weekly';
const PAY_PERIOD_TYPE_FORTNIGHTLY = 'fortnightly';
const PAY_PERIOD_TYPE_TWICE_PER_MONTH = 'twice_per_month';
const PAY_PERIOD_TYPE_MONTHLY = 'monthly';
const PERIODIC_PAYDAY_1 = 1;
const PERIODIC_PAYDAY_2 = 2;
const PERIODIC_PAYDAY_3 = 3;
const PERIODIC_PAYDAY_4 = 4;
const PERIODIC_PAYDAY_5 = 5;
const MONTHLY_PAYDAY__1 = '1';
const MONTHLY_PAYDAY__2 = '2';
const MONTHLY_PAYDAY__3 = '3';
const MONTHLY_PAYDAY__4 = '4';
const MONTHLY_PAYDAY__5 = '5';
const MONTHLY_PAYDAY__6 = '6';
const MONTHLY_PAYDAY__7 = '7';
const MONTHLY_PAYDAY__8 = '8';
const MONTHLY_PAYDAY__9 = '9';
const MONTHLY_PAYDAY__10 = '10';
const MONTHLY_PAYDAY__11 = '11';
const MONTHLY_PAYDAY__12 = '12';
const MONTHLY_PAYDAY__13 = '13';
const MONTHLY_PAYDAY__14 = '14';
const MONTHLY_PAYDAY__15 = '15';
const MONTHLY_PAYDAY__16 = '16';
const MONTHLY_PAYDAY__17 = '17';
const MONTHLY_PAYDAY__18 = '18';
const MONTHLY_PAYDAY__19 = '19';
const MONTHLY_PAYDAY__20 = '20';
const MONTHLY_PAYDAY__21 = '21';
const MONTHLY_PAYDAY__22 = '22';
const MONTHLY_PAYDAY__23 = '23';
const MONTHLY_PAYDAY__24 = '24';
const MONTHLY_PAYDAY__25 = '25';
const MONTHLY_PAYDAY__26 = '26';
const MONTHLY_PAYDAY__27 = '27';
const MONTHLY_PAYDAY__28 = '28';
const MONTHLY_PAYDAY__29 = '29';
const MONTHLY_PAYDAY__30 = '30';
const MONTHLY_PAYDAY_LAST_DAY_OF_MONTH = 'last_day_of_month';
const TWICE_MONTHLY_PAYDAY1__1 = '1';
const TWICE_MONTHLY_PAYDAY1__2 = '2';
const TWICE_MONTHLY_PAYDAY1__3 = '3';
const TWICE_MONTHLY_PAYDAY1__4 = '4';
const TWICE_MONTHLY_PAYDAY1__5 = '5';
const TWICE_MONTHLY_PAYDAY1__6 = '6';
const TWICE_MONTHLY_PAYDAY1__7 = '7';
const TWICE_MONTHLY_PAYDAY1__8 = '8';
const TWICE_MONTHLY_PAYDAY1__9 = '9';
const TWICE_MONTHLY_PAYDAY1__10 = '10';
const TWICE_MONTHLY_PAYDAY1__11 = '11';
const TWICE_MONTHLY_PAYDAY1__12 = '12';
const TWICE_MONTHLY_PAYDAY1__13 = '13';
const TWICE_MONTHLY_PAYDAY1__14 = '14';
const TWICE_MONTHLY_PAYDAY1__15 = '15';
const TWICE_MONTHLY_PAYDAY1__16 = '16';
const TWICE_MONTHLY_PAYDAY1__17 = '17';
const TWICE_MONTHLY_PAYDAY2__14 = '14';
const TWICE_MONTHLY_PAYDAY2__15 = '15';
const TWICE_MONTHLY_PAYDAY2__16 = '16';
const TWICE_MONTHLY_PAYDAY2__17 = '17';
const TWICE_MONTHLY_PAYDAY2__18 = '18';
const TWICE_MONTHLY_PAYDAY2__19 = '19';
const TWICE_MONTHLY_PAYDAY2__20 = '20';
const TWICE_MONTHLY_PAYDAY2__21 = '21';
const TWICE_MONTHLY_PAYDAY2__22 = '22';
const TWICE_MONTHLY_PAYDAY2__23 = '23';
const TWICE_MONTHLY_PAYDAY2__24 = '24';
const TWICE_MONTHLY_PAYDAY2__25 = '25';
const TWICE_MONTHLY_PAYDAY2__26 = '26';
const TWICE_MONTHLY_PAYDAY2__27 = '27';
const TWICE_MONTHLY_PAYDAY2__28 = '28';
const TWICE_MONTHLY_PAYDAY2__29 = '29';
const TWICE_MONTHLY_PAYDAY2__30 = '30';
const TWICE_MONTHLY_PAYDAY2_LAST_DAY_OF_MONTH = 'last_day_of_month';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayPeriodTypeAllowableValues()
    {
        return [
            self::PAY_PERIOD_TYPE_WEEKLY,
self::PAY_PERIOD_TYPE_FORTNIGHTLY,
self::PAY_PERIOD_TYPE_TWICE_PER_MONTH,
self::PAY_PERIOD_TYPE_MONTHLY,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodicPaydayAllowableValues()
    {
        return [
            self::PERIODIC_PAYDAY_1,
self::PERIODIC_PAYDAY_2,
self::PERIODIC_PAYDAY_3,
self::PERIODIC_PAYDAY_4,
self::PERIODIC_PAYDAY_5,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMonthlyPaydayAllowableValues()
    {
        return [
            self::MONTHLY_PAYDAY__1,
self::MONTHLY_PAYDAY__2,
self::MONTHLY_PAYDAY__3,
self::MONTHLY_PAYDAY__4,
self::MONTHLY_PAYDAY__5,
self::MONTHLY_PAYDAY__6,
self::MONTHLY_PAYDAY__7,
self::MONTHLY_PAYDAY__8,
self::MONTHLY_PAYDAY__9,
self::MONTHLY_PAYDAY__10,
self::MONTHLY_PAYDAY__11,
self::MONTHLY_PAYDAY__12,
self::MONTHLY_PAYDAY__13,
self::MONTHLY_PAYDAY__14,
self::MONTHLY_PAYDAY__15,
self::MONTHLY_PAYDAY__16,
self::MONTHLY_PAYDAY__17,
self::MONTHLY_PAYDAY__18,
self::MONTHLY_PAYDAY__19,
self::MONTHLY_PAYDAY__20,
self::MONTHLY_PAYDAY__21,
self::MONTHLY_PAYDAY__22,
self::MONTHLY_PAYDAY__23,
self::MONTHLY_PAYDAY__24,
self::MONTHLY_PAYDAY__25,
self::MONTHLY_PAYDAY__26,
self::MONTHLY_PAYDAY__27,
self::MONTHLY_PAYDAY__28,
self::MONTHLY_PAYDAY__29,
self::MONTHLY_PAYDAY__30,
self::MONTHLY_PAYDAY_LAST_DAY_OF_MONTH,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTwiceMonthlyPayday1AllowableValues()
    {
        return [
            self::TWICE_MONTHLY_PAYDAY1__1,
self::TWICE_MONTHLY_PAYDAY1__2,
self::TWICE_MONTHLY_PAYDAY1__3,
self::TWICE_MONTHLY_PAYDAY1__4,
self::TWICE_MONTHLY_PAYDAY1__5,
self::TWICE_MONTHLY_PAYDAY1__6,
self::TWICE_MONTHLY_PAYDAY1__7,
self::TWICE_MONTHLY_PAYDAY1__8,
self::TWICE_MONTHLY_PAYDAY1__9,
self::TWICE_MONTHLY_PAYDAY1__10,
self::TWICE_MONTHLY_PAYDAY1__11,
self::TWICE_MONTHLY_PAYDAY1__12,
self::TWICE_MONTHLY_PAYDAY1__13,
self::TWICE_MONTHLY_PAYDAY1__14,
self::TWICE_MONTHLY_PAYDAY1__15,
self::TWICE_MONTHLY_PAYDAY1__16,
self::TWICE_MONTHLY_PAYDAY1__17,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTwiceMonthlyPayday2AllowableValues()
    {
        return [
            self::TWICE_MONTHLY_PAYDAY2__14,
self::TWICE_MONTHLY_PAYDAY2__15,
self::TWICE_MONTHLY_PAYDAY2__16,
self::TWICE_MONTHLY_PAYDAY2__17,
self::TWICE_MONTHLY_PAYDAY2__18,
self::TWICE_MONTHLY_PAYDAY2__19,
self::TWICE_MONTHLY_PAYDAY2__20,
self::TWICE_MONTHLY_PAYDAY2__21,
self::TWICE_MONTHLY_PAYDAY2__22,
self::TWICE_MONTHLY_PAYDAY2__23,
self::TWICE_MONTHLY_PAYDAY2__24,
self::TWICE_MONTHLY_PAYDAY2__25,
self::TWICE_MONTHLY_PAYDAY2__26,
self::TWICE_MONTHLY_PAYDAY2__27,
self::TWICE_MONTHLY_PAYDAY2__28,
self::TWICE_MONTHLY_PAYDAY2__29,
self::TWICE_MONTHLY_PAYDAY2__30,
self::TWICE_MONTHLY_PAYDAY2_LAST_DAY_OF_MONTH,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['employer'] = isset($data['employer']) ? $data['employer'] : null;
        $this->container['pay_period_type'] = isset($data['pay_period_type']) ? $data['pay_period_type'] : null;
        $this->container['first_notional_payday'] = isset($data['first_notional_payday']) ? $data['first_notional_payday'] : null;
        $this->container['days_paid_in_arrears'] = isset($data['days_paid_in_arrears']) ? $data['days_paid_in_arrears'] : null;
        $this->container['deadline_days_before_payday'] = isset($data['deadline_days_before_payday']) ? $data['deadline_days_before_payday'] : null;
        $this->container['periodic_payday'] = isset($data['periodic_payday']) ? $data['periodic_payday'] : null;
        $this->container['monthly_payday'] = isset($data['monthly_payday']) ? $data['monthly_payday'] : null;
        $this->container['twice_monthly_type'] = isset($data['twice_monthly_type']) ? $data['twice_monthly_type'] : null;
        $this->container['twice_monthly_payday_1'] = isset($data['twice_monthly_payday_1']) ? $data['twice_monthly_payday_1'] : null;
        $this->container['twice_monthly_payday_2'] = isset($data['twice_monthly_payday_2']) ? $data['twice_monthly_payday_2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['employer'] === null) {
            $invalidProperties[] = "'employer' can't be null";
        }
        if ($this->container['pay_period_type'] === null) {
            $invalidProperties[] = "'pay_period_type' can't be null";
        }
        $allowedValues = $this->getPayPeriodTypeAllowableValues();
        if (!is_null($this->container['pay_period_type']) && !in_array($this->container['pay_period_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_period_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['first_notional_payday'] === null) {
            $invalidProperties[] = "'first_notional_payday' can't be null";
        }
        if ($this->container['days_paid_in_arrears'] === null) {
            $invalidProperties[] = "'days_paid_in_arrears' can't be null";
        }
        if ($this->container['deadline_days_before_payday'] === null) {
            $invalidProperties[] = "'deadline_days_before_payday' can't be null";
        }
        $allowedValues = $this->getPeriodicPaydayAllowableValues();
        if (!is_null($this->container['periodic_payday']) && !in_array($this->container['periodic_payday'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'periodic_payday', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMonthlyPaydayAllowableValues();
        if (!is_null($this->container['monthly_payday']) && !in_array($this->container['monthly_payday'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'monthly_payday', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTwiceMonthlyPayday1AllowableValues();
        if (!is_null($this->container['twice_monthly_payday_1']) && !in_array($this->container['twice_monthly_payday_1'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'twice_monthly_payday_1', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTwiceMonthlyPayday2AllowableValues();
        if (!is_null($this->container['twice_monthly_payday_2']) && !in_array($this->container['twice_monthly_payday_2'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'twice_monthly_payday_2', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param int $id Payroll config ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets employer
     *
     * @return \Swagger\Client\Model\EmployerMinimalEntity
     */
    public function getEmployer()
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param \Swagger\Client\Model\EmployerMinimalEntity $employer employer
     *
     * @return $this
     */
    public function setEmployer($employer)
    {
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets pay_period_type
     *
     * @return string
     */
    public function getPayPeriodType()
    {
        return $this->container['pay_period_type'];
    }

    /**
     * Sets pay_period_type
     *
     * @param string $pay_period_type The pay cycle
     *
     * @return $this
     */
    public function setPayPeriodType($pay_period_type)
    {
        $allowedValues = $this->getPayPeriodTypeAllowableValues();
        if (!in_array($pay_period_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_period_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_period_type'] = $pay_period_type;

        return $this;
    }

    /**
     * Gets first_notional_payday
     *
     * @return \DateTime
     */
    public function getFirstNotionalPayday()
    {
        return $this->container['first_notional_payday'];
    }

    /**
     * Sets first_notional_payday
     *
     * @param \DateTime $first_notional_payday First notional payday
     *
     * @return $this
     */
    public function setFirstNotionalPayday($first_notional_payday)
    {
        $this->container['first_notional_payday'] = $first_notional_payday;

        return $this;
    }

    /**
     * Gets days_paid_in_arrears
     *
     * @return int
     */
    public function getDaysPaidInArrears()
    {
        return $this->container['days_paid_in_arrears'];
    }

    /**
     * Sets days_paid_in_arrears
     *
     * @param int $days_paid_in_arrears Number of days paid in arrears
     *
     * @return $this
     */
    public function setDaysPaidInArrears($days_paid_in_arrears)
    {
        $this->container['days_paid_in_arrears'] = $days_paid_in_arrears;

        return $this;
    }

    /**
     * Gets deadline_days_before_payday
     *
     * @return int
     */
    public function getDeadlineDaysBeforePayday()
    {
        return $this->container['deadline_days_before_payday'];
    }

    /**
     * Sets deadline_days_before_payday
     *
     * @param int $deadline_days_before_payday Business days before payday to make the Alice deadline
     *
     * @return $this
     */
    public function setDeadlineDaysBeforePayday($deadline_days_before_payday)
    {
        $this->container['deadline_days_before_payday'] = $deadline_days_before_payday;

        return $this;
    }

    /**
     * Gets periodic_payday
     *
     * @return int
     */
    public function getPeriodicPayday()
    {
        return $this->container['periodic_payday'];
    }

    /**
     * Sets periodic_payday
     *
     * @param int $periodic_payday The day of the week for payday, only applies to pay_period_type: weekly, fortnightly
     *
     * @return $this
     */
    public function setPeriodicPayday($periodic_payday)
    {
        $allowedValues = $this->getPeriodicPaydayAllowableValues();
        if (!is_null($periodic_payday) && !in_array($periodic_payday, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'periodic_payday', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['periodic_payday'] = $periodic_payday;

        return $this;
    }

    /**
     * Gets monthly_payday
     *
     * @return string
     */
    public function getMonthlyPayday()
    {
        return $this->container['monthly_payday'];
    }

    /**
     * Sets monthly_payday
     *
     * @param string $monthly_payday The day of the month for payday, only applies to pay_period_type: monthly
     *
     * @return $this
     */
    public function setMonthlyPayday($monthly_payday)
    {
        $allowedValues = $this->getMonthlyPaydayAllowableValues();
        if (!is_null($monthly_payday) && !in_array($monthly_payday, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'monthly_payday', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['monthly_payday'] = $monthly_payday;

        return $this;
    }

    /**
     * Gets twice_monthly_type
     *
     * @return int
     */
    public function getTwiceMonthlyType()
    {
        return $this->container['twice_monthly_type'];
    }

    /**
     * Sets twice_monthly_type
     *
     * @param int $twice_monthly_type The days of the month for payday, only applies to pay_period_type: twice_per_month
     *
     * @return $this
     */
    public function setTwiceMonthlyType($twice_monthly_type)
    {
        $this->container['twice_monthly_type'] = $twice_monthly_type;

        return $this;
    }

    /**
     * Gets twice_monthly_payday_1
     *
     * @return string
     */
    public function getTwiceMonthlyPayday1()
    {
        return $this->container['twice_monthly_payday_1'];
    }

    /**
     * Sets twice_monthly_payday_1
     *
     * @param string $twice_monthly_payday_1 The first day of the month for payday, only applies to pay_period_type: twice_per_month, twice_monthly_type: other
     *
     * @return $this
     */
    public function setTwiceMonthlyPayday1($twice_monthly_payday_1)
    {
        $allowedValues = $this->getTwiceMonthlyPayday1AllowableValues();
        if (!is_null($twice_monthly_payday_1) && !in_array($twice_monthly_payday_1, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'twice_monthly_payday_1', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['twice_monthly_payday_1'] = $twice_monthly_payday_1;

        return $this;
    }

    /**
     * Gets twice_monthly_payday_2
     *
     * @return string
     */
    public function getTwiceMonthlyPayday2()
    {
        return $this->container['twice_monthly_payday_2'];
    }

    /**
     * Sets twice_monthly_payday_2
     *
     * @param string $twice_monthly_payday_2 The second day of the month for payday, only applies to pay_period_type: twice_per_month, twice_monthly_type: other
     *
     * @return $this
     */
    public function setTwiceMonthlyPayday2($twice_monthly_payday_2)
    {
        $allowedValues = $this->getTwiceMonthlyPayday2AllowableValues();
        if (!is_null($twice_monthly_payday_2) && !in_array($twice_monthly_payday_2, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'twice_monthly_payday_2', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['twice_monthly_payday_2'] = $twice_monthly_payday_2;

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
