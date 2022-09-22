<?php
/**
 * ShipmentNotification
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
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
 * ShipmentNotification Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentNotification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ShipmentNotificationModelFields
      */
    public static function GetModelFields(): ShipmentNotificationModelFields
    {
        return new ShipmentNotificationModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ShipmentNotificationModelAttributes
      */
    public static function GetModelAttributes(): ShipmentNotificationModelAttributes
    {
        return new ShipmentNotificationModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notification_method' => 'string',
        'email_address' => 'string',
        'bespoke_message' => 'string',
        'language_code' => 'string',
        'language_country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'notification_method' => null,
        'email_address' => null,
        'bespoke_message' => null,
        'language_code' => null,
        'language_country_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'notification_method' => false,
		'email_address' => false,
		'bespoke_message' => false,
		'language_code' => false,
		'language_country_code' => false
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
        'notification_method' => 'NotificationMethod',
        'email_address' => 'EmailAddress',
        'bespoke_message' => 'BespokeMessage',
        'language_code' => 'LanguageCode',
        'language_country_code' => 'LanguageCountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notification_method' => 'setNotificationMethod',
        'email_address' => 'setEmailAddress',
        'bespoke_message' => 'setBespokeMessage',
        'language_code' => 'setLanguageCode',
        'language_country_code' => 'setLanguageCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notification_method' => 'getNotificationMethod',
        'email_address' => 'getEmailAddress',
        'bespoke_message' => 'getBespokeMessage',
        'language_code' => 'getLanguageCode',
        'language_country_code' => 'getLanguageCountryCode'
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

    public const NOTIFICATION_METHOD_EMAIL = 'EMAIL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotificationMethodAllowableValues()
    {
        return [
            self::NOTIFICATION_METHOD_EMAIL,
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
        $this->setIfExists('notification_method', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('bespoke_message', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('language_country_code', $data ?? [], null);
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

        if ($this->container['notification_method'] === null) {
            $invalidProperties[] = "'notification_method' can't be null";
        }
        $allowedValues = $this->getNotificationMethodAllowableValues();
        if (!is_null($this->container['notification_method']) && !in_array($this->container['notification_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'notification_method', must be one of '%s'",
                $this->container['notification_method'],
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
     * Gets notification_method
     *
     * @return string
     */
    public function getNotificationMethod()
    {
        return $this->container['notification_method'];
    }

    /**
     * Sets notification_method
     *
     * @param string $notification_method notification_method
     *
     * @return self
     */
    public function setNotificationMethod($notification_method)
    {
        $allowedValues = $this->getNotificationMethodAllowableValues();
        if (!in_array($notification_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'notification_method', must be one of '%s'",
                    $notification_method,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($notification_method)) {
            throw new \InvalidArgumentException('non-nullable notification_method cannot be null');
        }

        $this->container['notification_method'] = $notification_method;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {

        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }

        $this->container['email_address'] = $email_address;

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
     * @param string|null $bespoke_message bespoke_message
     *
     * @return self
     */
    public function setBespokeMessage($bespoke_message)
    {

        if (is_null($bespoke_message)) {
            throw new \InvalidArgumentException('non-nullable bespoke_message cannot be null');
        }

        $this->container['bespoke_message'] = $bespoke_message;

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
     * @param string|null $language_code language_code
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {

        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
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
     * @param string|null $language_country_code language_country_code
     *
     * @return self
     */
    public function setLanguageCountryCode($language_country_code)
    {

        if (is_null($language_country_code)) {
            throw new \InvalidArgumentException('non-nullable language_country_code cannot be null');
        }

        $this->container['language_country_code'] = $language_country_code;

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


