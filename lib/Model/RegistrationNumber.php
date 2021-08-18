<?php
/**
 * RegistrationNumber
 *
 * PHP version 5
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Integration for DHL Express MyDHL Service
 *
 * OpenAPI description for the Integration with MyDHL
 *
 * The version of the OpenAPI document: 1.1.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDHL\Model;

use \ArrayAccess;
use \MyDHL\ObjectSerializer;

/**
 * RegistrationNumber Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RegistrationNumber implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegistrationNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'string',
        'number_type_code' => 'string',
        'number_issuer_country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'number' => null,
        'number_type_code' => null,
        'number_issuer_country_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'number' => false,
        'number_type_code' => false,
        'number_issuer_country_code' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'number' => 'Number',
        'number_type_code' => 'NumberTypeCode',
        'number_issuer_country_code' => 'NumberIssuerCountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'number_type_code' => 'setNumberTypeCode',
        'number_issuer_country_code' => 'setNumberIssuerCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'number_type_code' => 'getNumberTypeCode',
        'number_issuer_country_code' => 'getNumberIssuerCountryCode'
    ];

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
        return self::$openAPIModelName;
    }

    const NUMBER_TYPE_CODE_VAT = 'VAT';
    const NUMBER_TYPE_CODE_EIN = 'EIN';
    const NUMBER_TYPE_CODE_GST = 'GST';
    const NUMBER_TYPE_CODE_SSN = 'SSN';
    const NUMBER_TYPE_CODE_EOR = 'EOR';
    const NUMBER_TYPE_CODE_DUN = 'DUN';
    const NUMBER_TYPE_CODE_FED = 'FED';
    const NUMBER_TYPE_CODE_STA = 'STA';
    const NUMBER_TYPE_CODE_CNP = 'CNP';
    const NUMBER_TYPE_CODE_IE = 'IE';
    const NUMBER_TYPE_CODE_INN = 'INN';
    const NUMBER_TYPE_CODE_KPP = 'KPP';
    const NUMBER_TYPE_CODE_OGR = 'OGR';
    const NUMBER_TYPE_CODE_OKP = 'OKP';
    const NUMBER_TYPE_CODE_MRN = 'MRN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumberTypeCodeAllowableValues()
    {
        return [
            self::NUMBER_TYPE_CODE_VAT,
            self::NUMBER_TYPE_CODE_EIN,
            self::NUMBER_TYPE_CODE_GST,
            self::NUMBER_TYPE_CODE_SSN,
            self::NUMBER_TYPE_CODE_EOR,
            self::NUMBER_TYPE_CODE_DUN,
            self::NUMBER_TYPE_CODE_FED,
            self::NUMBER_TYPE_CODE_STA,
            self::NUMBER_TYPE_CODE_CNP,
            self::NUMBER_TYPE_CODE_IE,
            self::NUMBER_TYPE_CODE_INN,
            self::NUMBER_TYPE_CODE_KPP,
            self::NUMBER_TYPE_CODE_OGR,
            self::NUMBER_TYPE_CODE_OKP,
            self::NUMBER_TYPE_CODE_MRN,
        ];
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
        $this->setIfExists('number', $data, null);
        $this->setIfExists('number_type_code', $data, null);
        $this->setIfExists('number_issuer_country_code', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['number_type_code'] === null) {
            $invalidProperties[] = "'number_type_code' can't be null";
        }
        $allowedValues = $this->getNumberTypeCodeAllowableValues();
        if (!is_null($this->container['number_type_code']) && !in_array($this->container['number_type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'number_type_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['number_issuer_country_code'] === null) {
            $invalidProperties[] = "'number_issuer_country_code' can't be null";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {

        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets number_type_code
     *
     * @return string
     */
    public function getNumberTypeCode()
    {
        return $this->container['number_type_code'];
    }

    /**
     * Sets number_type_code
     *
     * @param string $number_type_code number_type_code
     *
     * @return $this
     */
    public function setNumberTypeCode($number_type_code)
    {
        $allowedValues = $this->getNumberTypeCodeAllowableValues();
        if (!in_array($number_type_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'number_type_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($number_type_code)) {
            throw new \InvalidArgumentException('non-nullable number_type_code cannot be null');
        }

        $this->container['number_type_code'] = $number_type_code;

        return $this;
    }

    /**
     * Gets number_issuer_country_code
     *
     * @return string
     */
    public function getNumberIssuerCountryCode()
    {
        return $this->container['number_issuer_country_code'];
    }

    /**
     * Sets number_issuer_country_code
     *
     * @param string $number_issuer_country_code number_issuer_country_code
     *
     * @return $this
     */
    public function setNumberIssuerCountryCode($number_issuer_country_code)
    {

        if (is_null($number_issuer_country_code)) {
            throw new \InvalidArgumentException('non-nullable number_issuer_country_code cannot be null');
        }

        $this->container['number_issuer_country_code'] = $number_issuer_country_code;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


