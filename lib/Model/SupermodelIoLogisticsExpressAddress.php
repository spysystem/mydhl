<?php
/**
 * SupermodelIoLogisticsExpressAddress
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
 * SupermodelIoLogisticsExpressAddress Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressAddressModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressAddressModelFields
    {
        return new SupermodelIoLogisticsExpressAddressModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressAddressModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressAddressModelAttributes
    {
        return new SupermodelIoLogisticsExpressAddressModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postal_code' => 'string',
        'city_name' => 'string',
        'country_code' => 'string',
        'province_code' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'county_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'postal_code' => null,
        'city_name' => null,
        'country_code' => null,
        'province_code' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'county_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'postal_code' => false,
		'city_name' => false,
		'country_code' => false,
		'province_code' => false,
		'address_line1' => false,
		'address_line2' => false,
		'address_line3' => false,
		'county_name' => false
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
        'postal_code' => 'postalCode',
        'city_name' => 'cityName',
        'country_code' => 'countryCode',
        'province_code' => 'provinceCode',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'county_name' => 'countyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postal_code' => 'setPostalCode',
        'city_name' => 'setCityName',
        'country_code' => 'setCountryCode',
        'province_code' => 'setProvinceCode',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'county_name' => 'setCountyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postal_code' => 'getPostalCode',
        'city_name' => 'getCityName',
        'country_code' => 'getCountryCode',
        'province_code' => 'getProvinceCode',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'county_name' => 'getCountyName'
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
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('province_code', $data ?? [], null);
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('address_line3', $data ?? [], null);
        $this->setIfExists('county_name', $data ?? [], null);
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

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 12)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['city_name'] === null) {
            $invalidProperties[] = "'city_name' can't be null";
        }
        if ((mb_strlen($this->container['city_name']) > 45)) {
            $invalidProperties[] = "invalid value for 'city_name', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['city_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'city_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['province_code']) && (mb_strlen($this->container['province_code']) > 35)) {
            $invalidProperties[] = "invalid value for 'province_code', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['province_code']) && (mb_strlen($this->container['province_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'province_code', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ((mb_strlen($this->container['address_line1']) > 45)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['address_line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 45)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) > 45)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['county_name']) && (mb_strlen($this->container['county_name']) > 45)) {
            $invalidProperties[] = "invalid value for 'county_name', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['county_name']) && (mb_strlen($this->container['county_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'county_name', the character length must be bigger than or equal to 1.";
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
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Please enter your postcode or leave empty if the address doesn't have a postcode
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        if ((mb_strlen($postal_code) > 12)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city_name
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     *
     * @param string $city_name Please enter the city
     *
     * @return self
     */
    public function setCityName($city_name)
    {
        if (is_null($city_name)) {
            throw new \InvalidArgumentException('non-nullable city_name cannot be null');
        }
        if ((mb_strlen($city_name) > 45)) {
            throw new \InvalidArgumentException('invalid length for $city_name when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($city_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city_name when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 1.');
        }

        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Please enter ISO country code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        if ((mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets province_code
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['province_code'];
    }

    /**
     * Sets province_code
     *
     * @param string|null $province_code Please enter your province or state code
     *
     * @return self
     */
    public function setProvinceCode($province_code)
    {
        if (is_null($province_code)) {
            throw new \InvalidArgumentException('non-nullable province_code cannot be null');
        }
        if ((mb_strlen($province_code) > 35)) {
            throw new \InvalidArgumentException('invalid length for $province_code when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($province_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $province_code when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 2.');
        }

        $this->container['province_code'] = $province_code;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 Please enter address line 1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            throw new \InvalidArgumentException('non-nullable address_line1 cannot be null');
        }
        if ((mb_strlen($address_line1) > 45)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($address_line1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 1.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Please enter address line 2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            throw new \InvalidArgumentException('non-nullable address_line2 cannot be null');
        }
        if ((mb_strlen($address_line2) > 45)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($address_line2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 1.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 Please enter address line 3
     *
     * @return self
     */
    public function setAddressLine3($address_line3)
    {
        if (is_null($address_line3)) {
            throw new \InvalidArgumentException('non-nullable address_line3 cannot be null');
        }
        if ((mb_strlen($address_line3) > 45)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($address_line3) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 1.');
        }

        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets county_name
     *
     * @return string|null
     */
    public function getCountyName()
    {
        return $this->container['county_name'];
    }

    /**
     * Sets county_name
     *
     * @param string|null $county_name Please enter your suburb or county name
     *
     * @return self
     */
    public function setCountyName($county_name)
    {
        if (is_null($county_name)) {
            throw new \InvalidArgumentException('non-nullable county_name cannot be null');
        }
        if ((mb_strlen($county_name) > 45)) {
            throw new \InvalidArgumentException('invalid length for $county_name when calling SupermodelIoLogisticsExpressAddress., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($county_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $county_name when calling SupermodelIoLogisticsExpressAddress., must be bigger than or equal to 1.');
        }

        $this->container['county_name'] = $county_name;

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


