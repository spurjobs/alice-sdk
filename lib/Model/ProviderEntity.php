<?php
/**
 * ProviderEntity
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
 * ProviderEntity Class Doc Comment
 *
 * @category Class
 * @description Verifies access token and returns associated dependent care provider
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProviderEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProviderEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'email' => 'string',
'tel' => 'string',
'tax_identification_number' => 'string',
'is_individual' => 'bool',
'is_ssn' => 'bool',
'over_eighteen' => 'bool',
'is_tax_exempt' => 'bool',
'signatory_name' => 'string',
'employee_name' => 'string',
'documents' => '\Swagger\Client\Model\DocumentEntity[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'email' => null,
'tel' => null,
'tax_identification_number' => null,
'is_individual' => null,
'is_ssn' => null,
'over_eighteen' => null,
'is_tax_exempt' => null,
'signatory_name' => null,
'employee_name' => null,
'documents' => null    ];

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
'email' => 'email',
'tel' => 'tel',
'tax_identification_number' => 'tax_identification_number',
'is_individual' => 'is_individual',
'is_ssn' => 'is_ssn',
'over_eighteen' => 'over_eighteen',
'is_tax_exempt' => 'is_tax_exempt',
'signatory_name' => 'signatory_name',
'employee_name' => 'employee_name',
'documents' => 'documents'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'email' => 'setEmail',
'tel' => 'setTel',
'tax_identification_number' => 'setTaxIdentificationNumber',
'is_individual' => 'setIsIndividual',
'is_ssn' => 'setIsSsn',
'over_eighteen' => 'setOverEighteen',
'is_tax_exempt' => 'setIsTaxExempt',
'signatory_name' => 'setSignatoryName',
'employee_name' => 'setEmployeeName',
'documents' => 'setDocuments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'email' => 'getEmail',
'tel' => 'getTel',
'tax_identification_number' => 'getTaxIdentificationNumber',
'is_individual' => 'getIsIndividual',
'is_ssn' => 'getIsSsn',
'over_eighteen' => 'getOverEighteen',
'is_tax_exempt' => 'getIsTaxExempt',
'signatory_name' => 'getSignatoryName',
'employee_name' => 'getEmployeeName',
'documents' => 'getDocuments'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'Some Day Care';
        $this->container['email'] = isset($data['email']) ? $data['email'] : 'some_dc@example.com';
        $this->container['tel'] = isset($data['tel']) ? $data['tel'] : '1231231234';
        $this->container['tax_identification_number'] = isset($data['tax_identification_number']) ? $data['tax_identification_number'] : '123-45-6789';
        $this->container['is_individual'] = isset($data['is_individual']) ? $data['is_individual'] : null;
        $this->container['is_ssn'] = isset($data['is_ssn']) ? $data['is_ssn'] : null;
        $this->container['over_eighteen'] = isset($data['over_eighteen']) ? $data['over_eighteen'] : null;
        $this->container['is_tax_exempt'] = isset($data['is_tax_exempt']) ? $data['is_tax_exempt'] : null;
        $this->container['signatory_name'] = isset($data['signatory_name']) ? $data['signatory_name'] : '01/0/2010';
        $this->container['employee_name'] = isset($data['employee_name']) ? $data['employee_name'] : 'Moe';
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
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
     * @param string $name Provider name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Provider email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->container['tel'];
    }

    /**
     * Sets tel
     *
     * @param string $tel Provider tel
     *
     * @return $this
     */
    public function setTel($tel)
    {
        $this->container['tel'] = $tel;

        return $this;
    }

    /**
     * Gets tax_identification_number
     *
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['tax_identification_number'];
    }

    /**
     * Sets tax_identification_number
     *
     * @param string $tax_identification_number Tax ID
     *
     * @return $this
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        $this->container['tax_identification_number'] = $tax_identification_number;

        return $this;
    }

    /**
     * Gets is_individual
     *
     * @return bool
     */
    public function getIsIndividual()
    {
        return $this->container['is_individual'];
    }

    /**
     * Sets is_individual
     *
     * @param bool $is_individual Provider is an individual as opposed to a business
     *
     * @return $this
     */
    public function setIsIndividual($is_individual)
    {
        $this->container['is_individual'] = $is_individual;

        return $this;
    }

    /**
     * Gets is_ssn
     *
     * @return bool
     */
    public function getIsSsn()
    {
        return $this->container['is_ssn'];
    }

    /**
     * Sets is_ssn
     *
     * @param bool $is_ssn Tax ID is a Social Security number, maybe business EIN or individual ITIN otherwise
     *
     * @return $this
     */
    public function setIsSsn($is_ssn)
    {
        $this->container['is_ssn'] = $is_ssn;

        return $this;
    }

    /**
     * Gets over_eighteen
     *
     * @return bool
     */
    public function getOverEighteen()
    {
        return $this->container['over_eighteen'];
    }

    /**
     * Sets over_eighteen
     *
     * @param bool $over_eighteen Provider is over 18 years of age
     *
     * @return $this
     */
    public function setOverEighteen($over_eighteen)
    {
        $this->container['over_eighteen'] = $over_eighteen;

        return $this;
    }

    /**
     * Gets is_tax_exempt
     *
     * @return bool
     */
    public function getIsTaxExempt()
    {
        return $this->container['is_tax_exempt'];
    }

    /**
     * Sets is_tax_exempt
     *
     * @param bool $is_tax_exempt Provider is a tax-exempt business
     *
     * @return $this
     */
    public function setIsTaxExempt($is_tax_exempt)
    {
        $this->container['is_tax_exempt'] = $is_tax_exempt;

        return $this;
    }

    /**
     * Gets signatory_name
     *
     * @return string
     */
    public function getSignatoryName()
    {
        return $this->container['signatory_name'];
    }

    /**
     * Sets signatory_name
     *
     * @param string $signatory_name Signatory name for a provider that is a business
     *
     * @return $this
     */
    public function setSignatoryName($signatory_name)
    {
        $this->container['signatory_name'] = $signatory_name;

        return $this;
    }

    /**
     * Gets employee_name
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string $employee_name Associated employee name
     *
     * @return $this
     */
    public function setEmployeeName($employee_name)
    {
        $this->container['employee_name'] = $employee_name;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Swagger\Client\Model\DocumentEntity[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Swagger\Client\Model\DocumentEntity[] $documents List of documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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