<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner
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
 * SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInnerModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInnerModelFields
    {
        return new SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInnerModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInnerModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInnerModelAttributes
    {
        return new SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInnerModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressCreateShipmentRequest_shipmentNotification_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type_code' => 'string',
        'receiver_id' => 'string',
        'language_code' => 'string',
        'language_country_code' => 'string',
        'bespoke_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type_code' => null,
        'receiver_id' => null,
        'language_code' => null,
        'language_country_code' => null,
        'bespoke_message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type_code' => false,
		'receiver_id' => false,
		'language_code' => false,
		'language_country_code' => false,
		'bespoke_message' => false
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
        'type_code' => 'typeCode',
        'receiver_id' => 'receiverId',
        'language_code' => 'languageCode',
        'language_country_code' => 'languageCountryCode',
        'bespoke_message' => 'bespokeMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_code' => 'setTypeCode',
        'receiver_id' => 'setReceiverId',
        'language_code' => 'setLanguageCode',
        'language_country_code' => 'setLanguageCountryCode',
        'bespoke_message' => 'setBespokeMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_code' => 'getTypeCode',
        'receiver_id' => 'getReceiverId',
        'language_code' => 'getLanguageCode',
        'language_country_code' => 'getLanguageCountryCode',
        'bespoke_message' => 'getBespokeMessage'
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

    public const TYPE_CODE_EMAIL = 'email';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeCodeAllowableValues()
    {
        return [
            self::TYPE_CODE_EMAIL,
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
        $this->setIfExists('type_code', $data ?? [], null);
        $this->setIfExists('receiver_id', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], 'eng');
        $this->setIfExists('language_country_code', $data ?? [], 'UK');
        $this->setIfExists('bespoke_message', $data ?? [], null);
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

        if ($this->container['type_code'] === null) {
            $invalidProperties[] = "'type_code' can't be null";
        }
        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!is_null($this->container['type_code']) && !in_array($this->container['type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type_code', must be one of '%s'",
                $this->container['type_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['receiver_id'] === null) {
            $invalidProperties[] = "'receiver_id' can't be null";
        }
        if ((mb_strlen($this->container['receiver_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'receiver_id', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['receiver_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'receiver_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['language_code']) && (mb_strlen($this->container['language_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'language_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['language_code']) && (mb_strlen($this->container['language_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'language_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['language_country_code']) && (mb_strlen($this->container['language_country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'language_country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['language_country_code']) && (mb_strlen($this->container['language_country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'language_country_code', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['bespoke_message']) && (mb_strlen($this->container['bespoke_message']) > 250)) {
            $invalidProperties[] = "invalid value for 'bespoke_message', the character length must be smaller than or equal to 250.";
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
     * Gets type_code
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->container['type_code'];
    }

    /**
     * Sets type_code
     *
     * @param string $type_code Please enter channel type to send the notification by. At this moment only email is supported
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
     * Gets receiver_id
     *
     * @return string
     */
    public function getReceiverId()
    {
        return $this->container['receiver_id'];
    }

    /**
     * Sets receiver_id
     *
     * @param string $receiver_id Please enter notification receiver email address
     *
     * @return self
     */
    public function setReceiverId($receiver_id)
    {
        if (is_null($receiver_id)) {
            throw new \InvalidArgumentException('non-nullable receiver_id cannot be null');
        }
        if ((mb_strlen($receiver_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $receiver_id when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($receiver_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $receiver_id when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be bigger than or equal to 1.');
        }

        $this->container['receiver_id'] = $receiver_id;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code Please enter three letter lanuage code in which you wish to receive the notification in
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }
        if ((mb_strlen($language_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $language_code when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($language_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $language_code when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be bigger than or equal to 3.');
        }

        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets language_country_code
     *
     * @return string|null
     */
    public function getLanguageCountryCode()
    {
        return $this->container['language_country_code'];
    }

    /**
     * Sets language_country_code
     *
     * @param string|null $language_country_code Please enter two letter language country code
     *
     * @return self
     */
    public function setLanguageCountryCode($language_country_code)
    {
        if (is_null($language_country_code)) {
            throw new \InvalidArgumentException('non-nullable language_country_code cannot be null');
        }
        if ((mb_strlen($language_country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $language_country_code when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($language_country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $language_country_code when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be bigger than or equal to 2.');
        }

        $this->container['language_country_code'] = $language_country_code;

        return $this;
    }

    /**
     * Gets bespoke_message
     *
     * @return string|null
     */
    public function getBespokeMessage()
    {
        return $this->container['bespoke_message'];
    }

    /**
     * Sets bespoke_message
     *
     * @param string|null $bespoke_message Please enter your message which will be added to the DHL Express notification email
     *
     * @return self
     */
    public function setBespokeMessage($bespoke_message)
    {
        if (is_null($bespoke_message)) {
            throw new \InvalidArgumentException('non-nullable bespoke_message cannot be null');
        }
        if ((mb_strlen($bespoke_message) > 250)) {
            throw new \InvalidArgumentException('invalid length for $bespoke_message when calling SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationInner., must be smaller than or equal to 250.');
        }

        $this->container['bespoke_message'] = $bespoke_message;

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

