<?php
/**
 * OrganizationSummaryEntity
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
 * OrganizationSummaryEntity Class Doc Comment
 *
 * @category Class
 * @description Gives a summary of the org sufficient to present them in the dashboard view
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganizationSummaryEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrganizationSummaryEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'dependent_care_enabled' => 'bool',
'healthcare_enabled' => 'bool',
'cafeteria_plan' => '\Swagger\Client\Model\DocumentEntity',
'compliance_tests_runnable' => 'bool',
'census_completed' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'dependent_care_enabled' => null,
'healthcare_enabled' => null,
'cafeteria_plan' => null,
'compliance_tests_runnable' => null,
'census_completed' => null    ];

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
'dependent_care_enabled' => 'dependent_care_enabled',
'healthcare_enabled' => 'healthcare_enabled',
'cafeteria_plan' => 'cafeteria_plan',
'compliance_tests_runnable' => 'compliance_tests_runnable',
'census_completed' => 'census_completed'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'dependent_care_enabled' => 'setDependentCareEnabled',
'healthcare_enabled' => 'setHealthcareEnabled',
'cafeteria_plan' => 'setCafeteriaPlan',
'compliance_tests_runnable' => 'setComplianceTestsRunnable',
'census_completed' => 'setCensusCompleted'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'dependent_care_enabled' => 'getDependentCareEnabled',
'healthcare_enabled' => 'getHealthcareEnabled',
'cafeteria_plan' => 'getCafeteriaPlan',
'compliance_tests_runnable' => 'getComplianceTestsRunnable',
'census_completed' => 'getCensusCompleted'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dependent_care_enabled'] = isset($data['dependent_care_enabled']) ? $data['dependent_care_enabled'] : true;
        $this->container['healthcare_enabled'] = isset($data['healthcare_enabled']) ? $data['healthcare_enabled'] : null;
        $this->container['cafeteria_plan'] = isset($data['cafeteria_plan']) ? $data['cafeteria_plan'] : null;
        $this->container['compliance_tests_runnable'] = isset($data['compliance_tests_runnable']) ? $data['compliance_tests_runnable'] : true;
        $this->container['census_completed'] = isset($data['census_completed']) ? $data['census_completed'] : null;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dependent_care_enabled
     *
     * @return bool
     */
    public function getDependentCareEnabled()
    {
        return $this->container['dependent_care_enabled'];
    }

    /**
     * Sets dependent_care_enabled
     *
     * @param bool $dependent_care_enabled Is dependent care enabled?
     *
     * @return $this
     */
    public function setDependentCareEnabled($dependent_care_enabled)
    {
        $this->container['dependent_care_enabled'] = $dependent_care_enabled;

        return $this;
    }

    /**
     * Gets healthcare_enabled
     *
     * @return bool
     */
    public function getHealthcareEnabled()
    {
        return $this->container['healthcare_enabled'];
    }

    /**
     * Sets healthcare_enabled
     *
     * @param bool $healthcare_enabled Is healthcare enabled?
     *
     * @return $this
     */
    public function setHealthcareEnabled($healthcare_enabled)
    {
        $this->container['healthcare_enabled'] = $healthcare_enabled;

        return $this;
    }

    /**
     * Gets cafeteria_plan
     *
     * @return \Swagger\Client\Model\DocumentEntity
     */
    public function getCafeteriaPlan()
    {
        return $this->container['cafeteria_plan'];
    }

    /**
     * Sets cafeteria_plan
     *
     * @param \Swagger\Client\Model\DocumentEntity $cafeteria_plan cafeteria_plan
     *
     * @return $this
     */
    public function setCafeteriaPlan($cafeteria_plan)
    {
        $this->container['cafeteria_plan'] = $cafeteria_plan;

        return $this;
    }

    /**
     * Gets compliance_tests_runnable
     *
     * @return bool
     */
    public function getComplianceTestsRunnable()
    {
        return $this->container['compliance_tests_runnable'];
    }

    /**
     * Sets compliance_tests_runnable
     *
     * @param bool $compliance_tests_runnable Can compliance test be ran
     *
     * @return $this
     */
    public function setComplianceTestsRunnable($compliance_tests_runnable)
    {
        $this->container['compliance_tests_runnable'] = $compliance_tests_runnable;

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
     * @param bool $census_completed Organization completed compliance census?
     *
     * @return $this
     */
    public function setCensusCompleted($census_completed)
    {
        $this->container['census_completed'] = $census_completed;

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
