<?php
/**
 * PickupPickupRequestorDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DHL Express APIs (MyDHL API)
 *
 * Welcome to the official DHL Express APIs (MyDHL API) below are the published API Documentation to fulfill your shipping needs with DHL Express.  Please follow the process described [here](https://developer.dhl.com/api-reference/dhl-express-mydhl-api#get-started-section/user-guide--get-access) to request access to the DHL Express - MyDHL API services    In case you already have DHL Express - MyDHL API Service credentials please ensure to use the endpoints/environments listed  [here](https://developer.dhl.com/api-reference/dhl-express-mydhl-api#get-started-section/user-guide--environments)
 *
 * The version of the OpenAPI document: 2.7.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * PickupPickupRequestorDetails Class Doc Comment
 *
 * @category Class
 * @description Please enter address and contact details of the individual requesting the pickup
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PickupPickupRequestorDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PickupPickupRequestorDetailsModelFields
      */
    public static function GetModelFields(): PickupPickupRequestorDetailsModelFields
    {
        return new PickupPickupRequestorDetailsModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PickupPickupRequestorDetailsModelAttributes
      */
    public static function GetModelAttributes(): PickupPickupRequestorDetailsModelAttributes
    {
        return new PickupPickupRequestorDetailsModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pickup_pickupRequestorDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postal_address' => '\MyDHL\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest',
        'contact_information' => '\MyDHL\Model\SupermodelIoLogisticsExpressContact',
        'registration_numbers' => '\MyDHL\Model\SupermodelIoLogisticsExpressRegistrationNumbers[]',
        'bank_details' => '\MyDHL\Model\SupermodelIoLogisticsExpressBankDetailsInner[]',
        'type_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'postal_address' => null,
        'contact_information' => null,
        'registration_numbers' => null,
        'bank_details' => null,
        'type_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'postal_address' => false,
		'contact_information' => false,
		'registration_numbers' => false,
		'bank_details' => false,
		'type_code' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'postal_address' => 'postalAddress',
        'contact_information' => 'contactInformation',
        'registration_numbers' => 'registrationNumbers',
        'bank_details' => 'bankDetails',
        'type_code' => 'typeCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postal_address' => 'setPostalAddress',
        'contact_information' => 'setContactInformation',
        'registration_numbers' => 'setRegistrationNumbers',
        'bank_details' => 'setBankDetails',
        'type_code' => 'setTypeCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postal_address' => 'getPostalAddress',
        'contact_information' => 'getContactInformation',
        'registration_numbers' => 'getRegistrationNumbers',
        'bank_details' => 'getBankDetails',
        'type_code' => 'getTypeCode'
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

    public const TYPE_CODE_BUSINESS = 'business';
    public const TYPE_CODE_DIRECT_CONSUMER = 'direct_consumer';
    public const TYPE_CODE_GOVERNMENT = 'government';
    public const TYPE_CODE_OTHER = 'other';
    public const TYPE_CODE__PRIVATE = 'private';
    public const TYPE_CODE_RESELLER = 'reseller';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeCodeAllowableValues()
    {
        return [
            self::TYPE_CODE_BUSINESS,
            self::TYPE_CODE_DIRECT_CONSUMER,
            self::TYPE_CODE_GOVERNMENT,
            self::TYPE_CODE_OTHER,
            self::TYPE_CODE__PRIVATE,
            self::TYPE_CODE_RESELLER,
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
        $this->setIfExists('postal_address', $data ?? [], null);
        $this->setIfExists('contact_information', $data ?? [], null);
        $this->setIfExists('registration_numbers', $data ?? [], null);
        $this->setIfExists('bank_details', $data ?? [], null);
        $this->setIfExists('type_code', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['postal_address'] === null) {
            $invalidProperties[] = "'postal_address' can't be null";
        }
        if ($this->container['contact_information'] === null) {
            $invalidProperties[] = "'contact_information' can't be null";
        }
        if (!is_null($this->container['registration_numbers']) && (count($this->container['registration_numbers']) > 50)) {
            $invalidProperties[] = "invalid value for 'registration_numbers', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['bank_details']) && (count($this->container['bank_details']) > 1)) {
            $invalidProperties[] = "invalid value for 'bank_details', number of items must be less than or equal to 1.";
        }

        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!is_null($this->container['type_code']) && !in_array($this->container['type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type_code', must be one of '%s'",
                $this->container['type_code'],
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
     * Gets postal_address
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postal_address postal_address
     *
     * @return self
     */
    public function setPostalAddress($postal_address)
    {
        if (is_null($postal_address)) {
            throw new \InvalidArgumentException('non-nullable postal_address cannot be null');
        }
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets contact_information
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressContact
     */
    public function getContactInformation()
    {
        return $this->container['contact_information'];
    }

    /**
     * Sets contact_information
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressContact $contact_information contact_information
     *
     * @return self
     */
    public function setContactInformation($contact_information)
    {
        if (is_null($contact_information)) {
            throw new \InvalidArgumentException('non-nullable contact_information cannot be null');
        }
        $this->container['contact_information'] = $contact_information;

        return $this;
    }

    /**
     * Gets registration_numbers
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressRegistrationNumbers[]|null
     */
    public function getRegistrationNumbers()
    {
        return $this->container['registration_numbers'];
    }

    /**
     * Sets registration_numbers
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressRegistrationNumbers[]|null $registration_numbers registration_numbers
     *
     * @return self
     */
    public function setRegistrationNumbers($registration_numbers)
    {
        if (is_null($registration_numbers)) {
            throw new \InvalidArgumentException('non-nullable registration_numbers cannot be null');
        }

        if ((count($registration_numbers) > 50)) {
            throw new \InvalidArgumentException('invalid value for $registration_numbers when calling PickupPickupRequestorDetails., number of items must be less than or equal to 50.');
        }
        $this->container['registration_numbers'] = $registration_numbers;

        return $this;
    }

    /**
     * Gets bank_details
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressBankDetailsInner[]|null
     */
    public function getBankDetails()
    {
        return $this->container['bank_details'];
    }

    /**
     * Sets bank_details
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressBankDetailsInner[]|null $bank_details bank_details
     *
     * @return self
     */
    public function setBankDetails($bank_details)
    {
        if (is_null($bank_details)) {
            throw new \InvalidArgumentException('non-nullable bank_details cannot be null');
        }

        if ((count($bank_details) > 1)) {
            throw new \InvalidArgumentException('invalid value for $bank_details when calling PickupPickupRequestorDetails., number of items must be less than or equal to 1.');
        }
        $this->container['bank_details'] = $bank_details;

        return $this;
    }

    /**
     * Gets type_code
     *
     * @return string|null
     */
    public function getTypeCode()
    {
        return $this->container['type_code'];
    }

    /**
     * Sets type_code
     *
     * @param string|null $type_code Please enter the business party type of the pickup requestor.
     *
     * @return self
     */
    public function setTypeCode($type_code)
    {
        if (is_null($type_code)) {
            throw new \InvalidArgumentException('non-nullable type_code cannot be null');
        }
        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!in_array($type_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type_code', must be one of '%s'",
                    $type_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_code'] = $type_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return (string)json_encode(
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


