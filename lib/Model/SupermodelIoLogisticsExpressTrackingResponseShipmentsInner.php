<?php
/**
 * SupermodelIoLogisticsExpressTrackingResponseShipmentsInner
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
 * SupermodelIoLogisticsExpressTrackingResponseShipmentsInner Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressTrackingResponseShipmentsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerModelFields
    {
        return new SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerModelAttributes
    {
        return new SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressTrackingResponse_shipments_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_tracking_number' => 'string',
        'status' => 'string',
        'shipment_timestamp' => 'string',
        'product_code' => 'string',
        'description' => 'string',
        'shipper_details' => '\MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails',
        'receiver_details' => '\MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails',
        'total_weight' => 'float',
        'unit_of_measurements' => 'string',
        'shipper_references' => '\MyDHL\Model\SupermodelIoLogisticsExpressReference[]',
        'events' => '\MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner[]',
        'number_of_pieces' => 'float',
        'pieces' => '\MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner[]',
        'estimated_delivery_date' => 'string',
        'children_shipment_identification_numbers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_tracking_number' => null,
        'status' => null,
        'shipment_timestamp' => null,
        'product_code' => null,
        'description' => null,
        'shipper_details' => null,
        'receiver_details' => null,
        'total_weight' => null,
        'unit_of_measurements' => null,
        'shipper_references' => null,
        'events' => null,
        'number_of_pieces' => null,
        'pieces' => null,
        'estimated_delivery_date' => null,
        'children_shipment_identification_numbers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipment_tracking_number' => false,
		'status' => false,
		'shipment_timestamp' => false,
		'product_code' => false,
		'description' => false,
		'shipper_details' => false,
		'receiver_details' => false,
		'total_weight' => false,
		'unit_of_measurements' => false,
		'shipper_references' => false,
		'events' => false,
		'number_of_pieces' => false,
		'pieces' => false,
		'estimated_delivery_date' => false,
		'children_shipment_identification_numbers' => false
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
        'shipment_tracking_number' => 'shipmentTrackingNumber',
        'status' => 'status',
        'shipment_timestamp' => 'shipmentTimestamp',
        'product_code' => 'productCode',
        'description' => 'description',
        'shipper_details' => 'shipperDetails',
        'receiver_details' => 'receiverDetails',
        'total_weight' => 'totalWeight',
        'unit_of_measurements' => 'unitOfMeasurements',
        'shipper_references' => 'shipperReferences',
        'events' => 'events',
        'number_of_pieces' => 'numberOfPieces',
        'pieces' => 'pieces',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'children_shipment_identification_numbers' => 'childrenShipmentIdentificationNumbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_tracking_number' => 'setShipmentTrackingNumber',
        'status' => 'setStatus',
        'shipment_timestamp' => 'setShipmentTimestamp',
        'product_code' => 'setProductCode',
        'description' => 'setDescription',
        'shipper_details' => 'setShipperDetails',
        'receiver_details' => 'setReceiverDetails',
        'total_weight' => 'setTotalWeight',
        'unit_of_measurements' => 'setUnitOfMeasurements',
        'shipper_references' => 'setShipperReferences',
        'events' => 'setEvents',
        'number_of_pieces' => 'setNumberOfPieces',
        'pieces' => 'setPieces',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'children_shipment_identification_numbers' => 'setChildrenShipmentIdentificationNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_tracking_number' => 'getShipmentTrackingNumber',
        'status' => 'getStatus',
        'shipment_timestamp' => 'getShipmentTimestamp',
        'product_code' => 'getProductCode',
        'description' => 'getDescription',
        'shipper_details' => 'getShipperDetails',
        'receiver_details' => 'getReceiverDetails',
        'total_weight' => 'getTotalWeight',
        'unit_of_measurements' => 'getUnitOfMeasurements',
        'shipper_references' => 'getShipperReferences',
        'events' => 'getEvents',
        'number_of_pieces' => 'getNumberOfPieces',
        'pieces' => 'getPieces',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'children_shipment_identification_numbers' => 'getChildrenShipmentIdentificationNumbers'
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
        $this->setIfExists('shipment_tracking_number', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('shipment_timestamp', $data ?? [], null);
        $this->setIfExists('product_code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('shipper_details', $data ?? [], null);
        $this->setIfExists('receiver_details', $data ?? [], null);
        $this->setIfExists('total_weight', $data ?? [], null);
        $this->setIfExists('unit_of_measurements', $data ?? [], null);
        $this->setIfExists('shipper_references', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('number_of_pieces', $data ?? [], null);
        $this->setIfExists('pieces', $data ?? [], null);
        $this->setIfExists('estimated_delivery_date', $data ?? [], null);
        $this->setIfExists('children_shipment_identification_numbers', $data ?? [], null);
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

        if (!is_null($this->container['product_code']) && (mb_strlen($this->container['product_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'product_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['product_code']) && (mb_strlen($this->container['product_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'product_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['shipper_references']) && (count($this->container['shipper_references']) > 999)) {
            $invalidProperties[] = "invalid value for 'shipper_references', number of items must be less than or equal to 999.";
        }

        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
     * Gets shipment_tracking_number
     *
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->container['shipment_tracking_number'];
    }

    /**
     * Sets shipment_tracking_number
     *
     * @param string|null $shipment_tracking_number shipment_tracking_number
     *
     * @return self
     */
    public function setShipmentTrackingNumber($shipment_tracking_number)
    {
        if (is_null($shipment_tracking_number)) {
            throw new \InvalidArgumentException('non-nullable shipment_tracking_number cannot be null');
        }
        $this->container['shipment_tracking_number'] = $shipment_tracking_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets shipment_timestamp
     *
     * @return string|null
     */
    public function getShipmentTimestamp()
    {
        return $this->container['shipment_timestamp'];
    }

    /**
     * Sets shipment_timestamp
     *
     * @param string|null $shipment_timestamp shipment_timestamp
     *
     * @return self
     */
    public function setShipmentTimestamp($shipment_timestamp)
    {
        if (is_null($shipment_timestamp)) {
            throw new \InvalidArgumentException('non-nullable shipment_timestamp cannot be null');
        }
        $this->container['shipment_timestamp'] = $shipment_timestamp;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string|null $product_code DHL product code
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        if (is_null($product_code)) {
            throw new \InvalidArgumentException('non-nullable product_code cannot be null');
        }
        if ((mb_strlen($product_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $product_code when calling SupermodelIoLogisticsExpressTrackingResponseShipmentsInner., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($product_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $product_code when calling SupermodelIoLogisticsExpressTrackingResponseShipmentsInner., must be bigger than or equal to 1.');
        }

        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets shipper_details
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails|null
     */
    public function getShipperDetails()
    {
        return $this->container['shipper_details'];
    }

    /**
     * Sets shipper_details
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerShipperDetails|null $shipper_details shipper_details
     *
     * @return self
     */
    public function setShipperDetails($shipper_details)
    {
        if (is_null($shipper_details)) {
            throw new \InvalidArgumentException('non-nullable shipper_details cannot be null');
        }
        $this->container['shipper_details'] = $shipper_details;

        return $this;
    }

    /**
     * Gets receiver_details
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails|null
     */
    public function getReceiverDetails()
    {
        return $this->container['receiver_details'];
    }

    /**
     * Sets receiver_details
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerReceiverDetails|null $receiver_details receiver_details
     *
     * @return self
     */
    public function setReceiverDetails($receiver_details)
    {
        if (is_null($receiver_details)) {
            throw new \InvalidArgumentException('non-nullable receiver_details cannot be null');
        }
        $this->container['receiver_details'] = $receiver_details;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return float|null
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param float|null $total_weight total_weight
     *
     * @return self
     */
    public function setTotalWeight($total_weight)
    {
        if (is_null($total_weight)) {
            throw new \InvalidArgumentException('non-nullable total_weight cannot be null');
        }
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets unit_of_measurements
     *
     * @return string|null
     */
    public function getUnitOfMeasurements()
    {
        return $this->container['unit_of_measurements'];
    }

    /**
     * Sets unit_of_measurements
     *
     * @param string|null $unit_of_measurements unit_of_measurements
     *
     * @return self
     */
    public function setUnitOfMeasurements($unit_of_measurements)
    {
        if (is_null($unit_of_measurements)) {
            throw new \InvalidArgumentException('non-nullable unit_of_measurements cannot be null');
        }
        $this->container['unit_of_measurements'] = $unit_of_measurements;

        return $this;
    }

    /**
     * Gets shipper_references
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressReference[]|null
     */
    public function getShipperReferences()
    {
        return $this->container['shipper_references'];
    }

    /**
     * Sets shipper_references
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressReference[]|null $shipper_references shipper_references
     *
     * @return self
     */
    public function setShipperReferences($shipper_references)
    {
        if (is_null($shipper_references)) {
            throw new \InvalidArgumentException('non-nullable shipper_references cannot be null');
        }

        if ((count($shipper_references) > 999)) {
            throw new \InvalidArgumentException('invalid value for $shipper_references when calling SupermodelIoLogisticsExpressTrackingResponseShipmentsInner., number of items must be less than or equal to 999.');
        }
        $this->container['shipper_references'] = $shipper_references;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerEventsInner[] $events events
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            throw new \InvalidArgumentException('non-nullable events cannot be null');
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets number_of_pieces
     *
     * @return float|null
     */
    public function getNumberOfPieces()
    {
        return $this->container['number_of_pieces'];
    }

    /**
     * Sets number_of_pieces
     *
     * @param float|null $number_of_pieces number_of_pieces
     *
     * @return self
     */
    public function setNumberOfPieces($number_of_pieces)
    {
        if (is_null($number_of_pieces)) {
            throw new \InvalidArgumentException('non-nullable number_of_pieces cannot be null');
        }
        $this->container['number_of_pieces'] = $number_of_pieces;

        return $this;
    }

    /**
     * Gets pieces
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner[]|null
     */
    public function getPieces()
    {
        return $this->container['pieces'];
    }

    /**
     * Sets pieces
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsInnerPiecesInner[]|null $pieces pieces
     *
     * @return self
     */
    public function setPieces($pieces)
    {
        if (is_null($pieces)) {
            throw new \InvalidArgumentException('non-nullable pieces cannot be null');
        }
        $this->container['pieces'] = $pieces;

        return $this;
    }

    /**
     * Gets estimated_delivery_date
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param string|null $estimated_delivery_date estimated_delivery_date
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        if (is_null($estimated_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery_date cannot be null');
        }
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets children_shipment_identification_numbers
     *
     * @return string[]|null
     */
    public function getChildrenShipmentIdentificationNumbers()
    {
        return $this->container['children_shipment_identification_numbers'];
    }

    /**
     * Sets children_shipment_identification_numbers
     *
     * @param string[]|null $children_shipment_identification_numbers children_shipment_identification_numbers
     *
     * @return self
     */
    public function setChildrenShipmentIdentificationNumbers($children_shipment_identification_numbers)
    {
        if (is_null($children_shipment_identification_numbers)) {
            throw new \InvalidArgumentException('non-nullable children_shipment_identification_numbers cannot be null');
        }
        $this->container['children_shipment_identification_numbers'] = $children_shipment_identification_numbers;

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


