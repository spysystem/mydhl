<?php
/**
 * Billing
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
 * The version of the OpenAPI document: 1.0.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
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
 * Billing Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Billing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Billing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipper_account_number' => 'string',
        'shipping_payment_type' => 'string',
        'billing_account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shipper_account_number' => null,
        'shipping_payment_type' => null,
        'billing_account_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'shipper_account_number' => false,
        'shipping_payment_type' => false,
        'billing_account_number' => false
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
        'shipper_account_number' => 'ShipperAccountNumber',
        'shipping_payment_type' => 'ShippingPaymentType',
        'billing_account_number' => 'BillingAccountNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipper_account_number' => 'setShipperAccountNumber',
        'shipping_payment_type' => 'setShippingPaymentType',
        'billing_account_number' => 'setBillingAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipper_account_number' => 'getShipperAccountNumber',
        'shipping_payment_type' => 'getShippingPaymentType',
        'billing_account_number' => 'getBillingAccountNumber'
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

    const SHIPPING_PAYMENT_TYPE_S = 'S';
    const SHIPPING_PAYMENT_TYPE_R = 'R';
    const SHIPPING_PAYMENT_TYPE_T = 'T';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingPaymentTypeAllowableValues()
    {
        return [
            self::SHIPPING_PAYMENT_TYPE_S,
            self::SHIPPING_PAYMENT_TYPE_R,
            self::SHIPPING_PAYMENT_TYPE_T,
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
        $this->setIfExists('shipper_account_number', $data, null);
        $this->setIfExists('shipping_payment_type', $data, null);
        $this->setIfExists('billing_account_number', $data, null);
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

        if ($this->container['shipper_account_number'] === null) {
            $invalidProperties[] = "'shipper_account_number' can't be null";
        }
        if ($this->container['shipping_payment_type'] === null) {
            $invalidProperties[] = "'shipping_payment_type' can't be null";
        }
        $allowedValues = $this->getShippingPaymentTypeAllowableValues();
        if (!is_null($this->container['shipping_payment_type']) && !in_array($this->container['shipping_payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipping_payment_type', must be one of '%s'",
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
     * Gets shipper_account_number
     *
     * @return string
     */
    public function getShipperAccountNumber()
    {
        return $this->container['shipper_account_number'];
    }

    /**
     * Sets shipper_account_number
     *
     * @param string $shipper_account_number shipper_account_number
     *
     * @return $this
     */
    public function setShipperAccountNumber($shipper_account_number)
    {

        if (is_null($shipper_account_number)) {
            throw new \InvalidArgumentException('non-nullable shipper_account_number cannot be null');
        }

        $this->container['shipper_account_number'] = $shipper_account_number;

        return $this;
    }

    /**
     * Gets shipping_payment_type
     *
     * @return string
     */
    public function getShippingPaymentType()
    {
        return $this->container['shipping_payment_type'];
    }

    /**
     * Sets shipping_payment_type
     *
     * @param string $shipping_payment_type shipping_payment_type
     *
     * @return $this
     */
    public function setShippingPaymentType($shipping_payment_type)
    {
        $allowedValues = $this->getShippingPaymentTypeAllowableValues();
        if (!in_array($shipping_payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shipping_payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($shipping_payment_type)) {
            throw new \InvalidArgumentException('non-nullable shipping_payment_type cannot be null');
        }

        $this->container['shipping_payment_type'] = $shipping_payment_type;

        return $this;
    }

    /**
     * Gets billing_account_number
     *
     * @return string|null
     */
    public function getBillingAccountNumber()
    {
        return $this->container['billing_account_number'];
    }

    /**
     * Sets billing_account_number
     *
     * @param string|null $billing_account_number billing_account_number
     *
     * @return $this
     */
    public function setBillingAccountNumber($billing_account_number)
    {

        if (is_null($billing_account_number)) {
            throw new \InvalidArgumentException('non-nullable billing_account_number cannot be null');
        }

        $this->container['billing_account_number'] = $billing_account_number;

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
}


