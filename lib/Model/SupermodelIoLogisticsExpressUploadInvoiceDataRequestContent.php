<?php
/**
 * SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
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
 * SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent Class Doc Comment
 *
 * @category Class
 * @description Here you can define all the properties related to the content of the prospected shipment
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentModelFields
    {
        return new SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentModelAttributes
    {
        return new SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressUploadInvoiceDataRequest_content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'export_declaration' => '\MyDHL\Model\SupermodelIoLogisticsExpressExportDeclaration[]',
        'currency' => 'string',
        'unit_of_measurement' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'export_declaration' => null,
        'currency' => null,
        'unit_of_measurement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'export_declaration' => false,
		'currency' => false,
		'unit_of_measurement' => false
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
        'export_declaration' => 'exportDeclaration',
        'currency' => 'currency',
        'unit_of_measurement' => 'unitOfMeasurement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'export_declaration' => 'setExportDeclaration',
        'currency' => 'setCurrency',
        'unit_of_measurement' => 'setUnitOfMeasurement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'export_declaration' => 'getExportDeclaration',
        'currency' => 'getCurrency',
        'unit_of_measurement' => 'getUnitOfMeasurement'
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

    public const UNIT_OF_MEASUREMENT_METRIC = 'metric';
    public const UNIT_OF_MEASUREMENT_IMPERIAL = 'imperial';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitOfMeasurementAllowableValues()
    {
        return [
            self::UNIT_OF_MEASUREMENT_METRIC,
            self::UNIT_OF_MEASUREMENT_IMPERIAL,
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
        $this->setIfExists('export_declaration', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('unit_of_measurement', $data ?? [], null);
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

        if ($this->container['export_declaration'] === null) {
            $invalidProperties[] = "'export_declaration' can't be null";
        }
        if ((count($this->container['export_declaration']) > 20)) {
            $invalidProperties[] = "invalid value for 'export_declaration', number of items must be less than or equal to 20.";
        }

        if ((count($this->container['export_declaration']) < 1)) {
            $invalidProperties[] = "invalid value for 'export_declaration', number of items must be greater than or equal to 1.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['unit_of_measurement'] === null) {
            $invalidProperties[] = "'unit_of_measurement' can't be null";
        }
        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!is_null($this->container['unit_of_measurement']) && !in_array($this->container['unit_of_measurement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit_of_measurement', must be one of '%s'",
                $this->container['unit_of_measurement'],
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
     * Gets export_declaration
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressExportDeclaration[]
     */
    public function getExportDeclaration()
    {
        return $this->container['export_declaration'];
    }

    /**
     * Sets export_declaration
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressExportDeclaration[] $export_declaration Here you can find all details related to export declaration
     *
     * @return self
     */
    public function setExportDeclaration($export_declaration)
    {
        if (is_null($export_declaration)) {
            throw new \InvalidArgumentException('non-nullable export_declaration cannot be null');
        }

        if ((count($export_declaration) > 20)) {
            throw new \InvalidArgumentException('invalid value for $export_declaration when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent., number of items must be less than or equal to 20.');
        }
        if ((count($export_declaration) < 1)) {
            throw new \InvalidArgumentException('invalid length for $export_declaration when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent., number of items must be greater than or equal to 1.');
        }
        $this->container['export_declaration'] = $export_declaration;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency For customs purposes please advise on currency code of the indicated amount in invoice.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets unit_of_measurement
     *
     * @return string
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unit_of_measurement'];
    }

    /**
     * Sets unit_of_measurement
     *
     * @param string $unit_of_measurement Please enter Unit of measurement - metric,imperial
     *
     * @return self
     */
    public function setUnitOfMeasurement($unit_of_measurement)
    {
        if (is_null($unit_of_measurement)) {
            throw new \InvalidArgumentException('non-nullable unit_of_measurement cannot be null');
        }
        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!in_array($unit_of_measurement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit_of_measurement', must be one of '%s'",
                    $unit_of_measurement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_of_measurement'] = $unit_of_measurement;

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

