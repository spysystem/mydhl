<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
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
 * SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo Class Doc Comment
 *
 * @category Class
 * @description Here you can find barcode details in base64
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoModelFields
    {
        return new SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoModelAttributes
    {
        return new SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressCreateShipmentResponse_barcodeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_identification_number_barcode_content' => 'string',
        'origin_destination_service_type_barcode_content' => 'string',
        'routing_barcode_content' => 'string',
        'tracking_number_barcodes' => '\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_identification_number_barcode_content' => null,
        'origin_destination_service_type_barcode_content' => null,
        'routing_barcode_content' => null,
        'tracking_number_barcodes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipment_identification_number_barcode_content' => false,
		'origin_destination_service_type_barcode_content' => false,
		'routing_barcode_content' => false,
		'tracking_number_barcodes' => false
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
        'shipment_identification_number_barcode_content' => 'shipmentIdentificationNumberBarcodeContent',
        'origin_destination_service_type_barcode_content' => 'originDestinationServiceTypeBarcodeContent',
        'routing_barcode_content' => 'routingBarcodeContent',
        'tracking_number_barcodes' => 'trackingNumberBarcodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_identification_number_barcode_content' => 'setShipmentIdentificationNumberBarcodeContent',
        'origin_destination_service_type_barcode_content' => 'setOriginDestinationServiceTypeBarcodeContent',
        'routing_barcode_content' => 'setRoutingBarcodeContent',
        'tracking_number_barcodes' => 'setTrackingNumberBarcodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_identification_number_barcode_content' => 'getShipmentIdentificationNumberBarcodeContent',
        'origin_destination_service_type_barcode_content' => 'getOriginDestinationServiceTypeBarcodeContent',
        'routing_barcode_content' => 'getRoutingBarcodeContent',
        'tracking_number_barcodes' => 'getTrackingNumberBarcodes'
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
        $this->setIfExists('shipment_identification_number_barcode_content', $data ?? [], null);
        $this->setIfExists('origin_destination_service_type_barcode_content', $data ?? [], null);
        $this->setIfExists('routing_barcode_content', $data ?? [], null);
        $this->setIfExists('tracking_number_barcodes', $data ?? [], null);
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

        if (!is_null($this->container['tracking_number_barcodes']) && (count($this->container['tracking_number_barcodes']) > 999)) {
            $invalidProperties[] = "invalid value for 'tracking_number_barcodes', number of items must be less than or equal to 999.";
        }

        if (!is_null($this->container['tracking_number_barcodes']) && (count($this->container['tracking_number_barcodes']) < 1)) {
            $invalidProperties[] = "invalid value for 'tracking_number_barcodes', number of items must be greater than or equal to 1.";
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
     * Gets shipment_identification_number_barcode_content
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumberBarcodeContent()
    {
        return $this->container['shipment_identification_number_barcode_content'];
    }

    /**
     * Sets shipment_identification_number_barcode_content
     *
     * @param string|null $shipment_identification_number_barcode_content Barcode base64 encoded airwaybill number
     *
     * @return self
     */
    public function setShipmentIdentificationNumberBarcodeContent($shipment_identification_number_barcode_content)
    {
        if (is_null($shipment_identification_number_barcode_content)) {
            throw new \InvalidArgumentException('non-nullable shipment_identification_number_barcode_content cannot be null');
        }
        $this->container['shipment_identification_number_barcode_content'] = $shipment_identification_number_barcode_content;

        return $this;
    }

    /**
     * Gets origin_destination_service_type_barcode_content
     *
     * @return string|null
     */
    public function getOriginDestinationServiceTypeBarcodeContent()
    {
        return $this->container['origin_destination_service_type_barcode_content'];
    }

    /**
     * Sets origin_destination_service_type_barcode_content
     *
     * @param string|null $origin_destination_service_type_barcode_content Barcode base64 image of origin service area code, destination service area code and global product code
     *
     * @return self
     */
    public function setOriginDestinationServiceTypeBarcodeContent($origin_destination_service_type_barcode_content)
    {
        if (is_null($origin_destination_service_type_barcode_content)) {
            throw new \InvalidArgumentException('non-nullable origin_destination_service_type_barcode_content cannot be null');
        }
        $this->container['origin_destination_service_type_barcode_content'] = $origin_destination_service_type_barcode_content;

        return $this;
    }

    /**
     * Gets routing_barcode_content
     *
     * @return string|null
     */
    public function getRoutingBarcodeContent()
    {
        return $this->container['routing_barcode_content'];
    }

    /**
     * Sets routing_barcode_content
     *
     * @param string|null $routing_barcode_content Barcode base64 image of DHL routing code
     *
     * @return self
     */
    public function setRoutingBarcodeContent($routing_barcode_content)
    {
        if (is_null($routing_barcode_content)) {
            throw new \InvalidArgumentException('non-nullable routing_barcode_content cannot be null');
        }
        $this->container['routing_barcode_content'] = $routing_barcode_content;

        return $this;
    }

    /**
     * Gets tracking_number_barcodes
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesInner[]|null
     */
    public function getTrackingNumberBarcodes()
    {
        return $this->container['tracking_number_barcodes'];
    }

    /**
     * Sets tracking_number_barcodes
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesInner[]|null $tracking_number_barcodes Here you can find barcode details for each piece
     *
     * @return self
     */
    public function setTrackingNumberBarcodes($tracking_number_barcodes)
    {
        if (is_null($tracking_number_barcodes)) {
            throw new \InvalidArgumentException('non-nullable tracking_number_barcodes cannot be null');
        }

        if ((count($tracking_number_barcodes) > 999)) {
            throw new \InvalidArgumentException('invalid value for $tracking_number_barcodes when calling SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo., number of items must be less than or equal to 999.');
        }
        if ((count($tracking_number_barcodes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tracking_number_barcodes when calling SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo., number of items must be greater than or equal to 1.');
        }
        $this->container['tracking_number_barcodes'] = $tracking_number_barcodes;

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


