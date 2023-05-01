<?php
/**
 * ProductsInner1DeliveryCapabilities
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
 * ProductsInner1DeliveryCapabilities Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductsInner1DeliveryCapabilities implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ProductsInner1DeliveryCapabilitiesModelFields
      */
    public static function GetModelFields(): ProductsInner1DeliveryCapabilitiesModelFields
    {
        return new ProductsInner1DeliveryCapabilitiesModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ProductsInner1DeliveryCapabilitiesModelAttributes
      */
    public static function GetModelAttributes(): ProductsInner1DeliveryCapabilitiesModelAttributes
    {
        return new ProductsInner1DeliveryCapabilitiesModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'products_inner_1_deliveryCapabilities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_type_code' => 'string',
        'estimated_delivery_date_and_time' => 'string',
        'destination_service_area_code' => 'string',
        'destination_facility_area_code' => 'string',
        'delivery_additional_days' => 'float',
        'delivery_day_of_week' => 'float',
        'total_transit_days' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_type_code' => null,
        'estimated_delivery_date_and_time' => null,
        'destination_service_area_code' => null,
        'destination_facility_area_code' => null,
        'delivery_additional_days' => null,
        'delivery_day_of_week' => null,
        'total_transit_days' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delivery_type_code' => false,
		'estimated_delivery_date_and_time' => false,
		'destination_service_area_code' => false,
		'destination_facility_area_code' => false,
		'delivery_additional_days' => false,
		'delivery_day_of_week' => false,
		'total_transit_days' => false
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
        'delivery_type_code' => 'deliveryTypeCode',
        'estimated_delivery_date_and_time' => 'estimatedDeliveryDateAndTime',
        'destination_service_area_code' => 'destinationServiceAreaCode',
        'destination_facility_area_code' => 'destinationFacilityAreaCode',
        'delivery_additional_days' => 'deliveryAdditionalDays',
        'delivery_day_of_week' => 'deliveryDayOfWeek',
        'total_transit_days' => 'totalTransitDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_type_code' => 'setDeliveryTypeCode',
        'estimated_delivery_date_and_time' => 'setEstimatedDeliveryDateAndTime',
        'destination_service_area_code' => 'setDestinationServiceAreaCode',
        'destination_facility_area_code' => 'setDestinationFacilityAreaCode',
        'delivery_additional_days' => 'setDeliveryAdditionalDays',
        'delivery_day_of_week' => 'setDeliveryDayOfWeek',
        'total_transit_days' => 'setTotalTransitDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_type_code' => 'getDeliveryTypeCode',
        'estimated_delivery_date_and_time' => 'getEstimatedDeliveryDateAndTime',
        'destination_service_area_code' => 'getDestinationServiceAreaCode',
        'destination_facility_area_code' => 'getDestinationFacilityAreaCode',
        'delivery_additional_days' => 'getDeliveryAdditionalDays',
        'delivery_day_of_week' => 'getDeliveryDayOfWeek',
        'total_transit_days' => 'getTotalTransitDays'
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
        $this->setIfExists('delivery_type_code', $data ?? [], null);
        $this->setIfExists('estimated_delivery_date_and_time', $data ?? [], null);
        $this->setIfExists('destination_service_area_code', $data ?? [], null);
        $this->setIfExists('destination_facility_area_code', $data ?? [], null);
        $this->setIfExists('delivery_additional_days', $data ?? [], null);
        $this->setIfExists('delivery_day_of_week', $data ?? [], null);
        $this->setIfExists('total_transit_days', $data ?? [], null);
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
     * Gets delivery_type_code
     *
     * @return string|null
     */
    public function getDeliveryTypeCode()
    {
        return $this->container['delivery_type_code'];
    }

    /**
     * Sets delivery_type_code
     *
     * @param string|null $delivery_type_code Delivery Date capabilities considering customs clearance days.<BR>                QDDF: is the fastest (\"docs\") transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered.<BR>                QDDC: constitutes DHL's service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special operational non-transport component(s), when relevant.
     *
     * @return self
     */
    public function setDeliveryTypeCode($delivery_type_code)
    {
        if (is_null($delivery_type_code)) {
            throw new \InvalidArgumentException('non-nullable delivery_type_code cannot be null');
        }
        $this->container['delivery_type_code'] = $delivery_type_code;

        return $this;
    }

    /**
     * Gets estimated_delivery_date_and_time
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDateAndTime()
    {
        return $this->container['estimated_delivery_date_and_time'];
    }

    /**
     * Sets estimated_delivery_date_and_time
     *
     * @param string|null $estimated_delivery_date_and_time This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed
     *
     * @return self
     */
    public function setEstimatedDeliveryDateAndTime($estimated_delivery_date_and_time)
    {
        if (is_null($estimated_delivery_date_and_time)) {
            throw new \InvalidArgumentException('non-nullable estimated_delivery_date_and_time cannot be null');
        }
        $this->container['estimated_delivery_date_and_time'] = $estimated_delivery_date_and_time;

        return $this;
    }

    /**
     * Gets destination_service_area_code
     *
     * @return string|null
     */
    public function getDestinationServiceAreaCode()
    {
        return $this->container['destination_service_area_code'];
    }

    /**
     * Sets destination_service_area_code
     *
     * @param string|null $destination_service_area_code The DHL Service Area Code for the destination of the Shipment
     *
     * @return self
     */
    public function setDestinationServiceAreaCode($destination_service_area_code)
    {
        if (is_null($destination_service_area_code)) {
            throw new \InvalidArgumentException('non-nullable destination_service_area_code cannot be null');
        }
        $this->container['destination_service_area_code'] = $destination_service_area_code;

        return $this;
    }

    /**
     * Gets destination_facility_area_code
     *
     * @return string|null
     */
    public function getDestinationFacilityAreaCode()
    {
        return $this->container['destination_facility_area_code'];
    }

    /**
     * Sets destination_facility_area_code
     *
     * @param string|null $destination_facility_area_code The DHL Facility Code for the Destination
     *
     * @return self
     */
    public function setDestinationFacilityAreaCode($destination_facility_area_code)
    {
        if (is_null($destination_facility_area_code)) {
            throw new \InvalidArgumentException('non-nullable destination_facility_area_code cannot be null');
        }
        $this->container['destination_facility_area_code'] = $destination_facility_area_code;

        return $this;
    }

    /**
     * Gets delivery_additional_days
     *
     * @return float|null
     */
    public function getDeliveryAdditionalDays()
    {
        return $this->container['delivery_additional_days'];
    }

    /**
     * Sets delivery_additional_days
     *
     * @param float|null $delivery_additional_days This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     *
     * @return self
     */
    public function setDeliveryAdditionalDays($delivery_additional_days)
    {
        if (is_null($delivery_additional_days)) {
            throw new \InvalidArgumentException('non-nullable delivery_additional_days cannot be null');
        }
        $this->container['delivery_additional_days'] = $delivery_additional_days;

        return $this;
    }

    /**
     * Gets delivery_day_of_week
     *
     * @return float|null
     */
    public function getDeliveryDayOfWeek()
    {
        return $this->container['delivery_day_of_week'];
    }

    /**
     * Sets delivery_day_of_week
     *
     * @param float|null $delivery_day_of_week Destination day of the week number
     *
     * @return self
     */
    public function setDeliveryDayOfWeek($delivery_day_of_week)
    {
        if (is_null($delivery_day_of_week)) {
            throw new \InvalidArgumentException('non-nullable delivery_day_of_week cannot be null');
        }
        $this->container['delivery_day_of_week'] = $delivery_day_of_week;

        return $this;
    }

    /**
     * Gets total_transit_days
     *
     * @return float|null
     */
    public function getTotalTransitDays()
    {
        return $this->container['total_transit_days'];
    }

    /**
     * Sets total_transit_days
     *
     * @param float|null $total_transit_days The number of transit days
     *
     * @return self
     */
    public function setTotalTransitDays($total_transit_days)
    {
        if (is_null($total_transit_days)) {
            throw new \InvalidArgumentException('non-nullable total_transit_days cannot be null');
        }
        $this->container['total_transit_days'] = $total_transit_days;

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


