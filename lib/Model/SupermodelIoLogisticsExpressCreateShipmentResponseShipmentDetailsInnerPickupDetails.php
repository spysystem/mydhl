<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetails
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
 * SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetails Class Doc Comment
 *
 * @category Class
 * @description Here you can find pickup details
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelFields
    {
        return new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelAttributes
    {
        return new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressCreateShipmentResponse_shipmentDetails_inner_pickupDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'local_cutoff_date_and_time' => 'string',
        'gmt_cutoff_time' => 'string',
        'cutoff_time_offset' => 'string',
        'pickup_earliest' => 'string',
        'pickup_latest' => 'string',
        'total_transit_days' => 'string',
        'pickup_additional_days' => 'string',
        'delivery_additional_days' => 'string',
        'pickup_day_of_week' => 'string',
        'delivery_day_of_week' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'local_cutoff_date_and_time' => null,
        'gmt_cutoff_time' => null,
        'cutoff_time_offset' => null,
        'pickup_earliest' => null,
        'pickup_latest' => null,
        'total_transit_days' => null,
        'pickup_additional_days' => null,
        'delivery_additional_days' => null,
        'pickup_day_of_week' => null,
        'delivery_day_of_week' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'local_cutoff_date_and_time' => false,
		'gmt_cutoff_time' => false,
		'cutoff_time_offset' => false,
		'pickup_earliest' => false,
		'pickup_latest' => false,
		'total_transit_days' => false,
		'pickup_additional_days' => false,
		'delivery_additional_days' => false,
		'pickup_day_of_week' => false,
		'delivery_day_of_week' => false
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
        'local_cutoff_date_and_time' => 'localCutoffDateAndTime',
        'gmt_cutoff_time' => 'gmtCutoffTime',
        'cutoff_time_offset' => 'cutoffTimeOffset',
        'pickup_earliest' => 'pickupEarliest',
        'pickup_latest' => 'pickupLatest',
        'total_transit_days' => 'totalTransitDays',
        'pickup_additional_days' => 'pickupAdditionalDays',
        'delivery_additional_days' => 'deliveryAdditionalDays',
        'pickup_day_of_week' => 'pickupDayOfWeek',
        'delivery_day_of_week' => 'deliveryDayOfWeek'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local_cutoff_date_and_time' => 'setLocalCutoffDateAndTime',
        'gmt_cutoff_time' => 'setGmtCutoffTime',
        'cutoff_time_offset' => 'setCutoffTimeOffset',
        'pickup_earliest' => 'setPickupEarliest',
        'pickup_latest' => 'setPickupLatest',
        'total_transit_days' => 'setTotalTransitDays',
        'pickup_additional_days' => 'setPickupAdditionalDays',
        'delivery_additional_days' => 'setDeliveryAdditionalDays',
        'pickup_day_of_week' => 'setPickupDayOfWeek',
        'delivery_day_of_week' => 'setDeliveryDayOfWeek'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local_cutoff_date_and_time' => 'getLocalCutoffDateAndTime',
        'gmt_cutoff_time' => 'getGmtCutoffTime',
        'cutoff_time_offset' => 'getCutoffTimeOffset',
        'pickup_earliest' => 'getPickupEarliest',
        'pickup_latest' => 'getPickupLatest',
        'total_transit_days' => 'getTotalTransitDays',
        'pickup_additional_days' => 'getPickupAdditionalDays',
        'delivery_additional_days' => 'getDeliveryAdditionalDays',
        'pickup_day_of_week' => 'getPickupDayOfWeek',
        'delivery_day_of_week' => 'getDeliveryDayOfWeek'
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
        $this->setIfExists('local_cutoff_date_and_time', $data ?? [], null);
        $this->setIfExists('gmt_cutoff_time', $data ?? [], null);
        $this->setIfExists('cutoff_time_offset', $data ?? [], null);
        $this->setIfExists('pickup_earliest', $data ?? [], null);
        $this->setIfExists('pickup_latest', $data ?? [], null);
        $this->setIfExists('total_transit_days', $data ?? [], null);
        $this->setIfExists('pickup_additional_days', $data ?? [], null);
        $this->setIfExists('delivery_additional_days', $data ?? [], null);
        $this->setIfExists('pickup_day_of_week', $data ?? [], null);
        $this->setIfExists('delivery_day_of_week', $data ?? [], null);
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
     * Gets local_cutoff_date_and_time
     *
     * @return string|null
     */
    public function getLocalCutoffDateAndTime()
    {
        return $this->container['local_cutoff_date_and_time'];
    }

    /**
     * Sets local_cutoff_date_and_time
     *
     * @param string|null $local_cutoff_date_and_time Pickup booking cutoff time
     *
     * @return self
     */
    public function setLocalCutoffDateAndTime($local_cutoff_date_and_time)
    {
        if (is_null($local_cutoff_date_and_time)) {
            throw new \InvalidArgumentException('non-nullable local_cutoff_date_and_time cannot be null');
        }
        $this->container['local_cutoff_date_and_time'] = $local_cutoff_date_and_time;

        return $this;
    }

    /**
     * Gets gmt_cutoff_time
     *
     * @return string|null
     */
    public function getGmtCutoffTime()
    {
        return $this->container['gmt_cutoff_time'];
    }

    /**
     * Sets gmt_cutoff_time
     *
     * @param string|null $gmt_cutoff_time Pickup cutoff time in GMT
     *
     * @return self
     */
    public function setGmtCutoffTime($gmt_cutoff_time)
    {
        if (is_null($gmt_cutoff_time)) {
            throw new \InvalidArgumentException('non-nullable gmt_cutoff_time cannot be null');
        }
        $this->container['gmt_cutoff_time'] = $gmt_cutoff_time;

        return $this;
    }

    /**
     * Gets cutoff_time_offset
     *
     * @return string|null
     */
    public function getCutoffTimeOffset()
    {
        return $this->container['cutoff_time_offset'];
    }

    /**
     * Sets cutoff_time_offset
     *
     * @param string|null $cutoff_time_offset Pickup booking cutoff time in GMT offset
     *
     * @return self
     */
    public function setCutoffTimeOffset($cutoff_time_offset)
    {
        if (is_null($cutoff_time_offset)) {
            throw new \InvalidArgumentException('non-nullable cutoff_time_offset cannot be null');
        }
        $this->container['cutoff_time_offset'] = $cutoff_time_offset;

        return $this;
    }

    /**
     * Gets pickup_earliest
     *
     * @return string|null
     */
    public function getPickupEarliest()
    {
        return $this->container['pickup_earliest'];
    }

    /**
     * Sets pickup_earliest
     *
     * @param string|null $pickup_earliest The DHL earliest time possible for pickup
     *
     * @return self
     */
    public function setPickupEarliest($pickup_earliest)
    {
        if (is_null($pickup_earliest)) {
            throw new \InvalidArgumentException('non-nullable pickup_earliest cannot be null');
        }
        $this->container['pickup_earliest'] = $pickup_earliest;

        return $this;
    }

    /**
     * Gets pickup_latest
     *
     * @return string|null
     */
    public function getPickupLatest()
    {
        return $this->container['pickup_latest'];
    }

    /**
     * Sets pickup_latest
     *
     * @param string|null $pickup_latest The DHL latest time possible for pickup
     *
     * @return self
     */
    public function setPickupLatest($pickup_latest)
    {
        if (is_null($pickup_latest)) {
            throw new \InvalidArgumentException('non-nullable pickup_latest cannot be null');
        }
        $this->container['pickup_latest'] = $pickup_latest;

        return $this;
    }

    /**
     * Gets total_transit_days
     *
     * @return string|null
     */
    public function getTotalTransitDays()
    {
        return $this->container['total_transit_days'];
    }

    /**
     * Sets total_transit_days
     *
     * @param string|null $total_transit_days The number of transit days
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
     * Gets pickup_additional_days
     *
     * @return string|null
     */
    public function getPickupAdditionalDays()
    {
        return $this->container['pickup_additional_days'];
    }

    /**
     * Sets pickup_additional_days
     *
     * @param string|null $pickup_additional_days This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area
     *
     * @return self
     */
    public function setPickupAdditionalDays($pickup_additional_days)
    {
        if (is_null($pickup_additional_days)) {
            throw new \InvalidArgumentException('non-nullable pickup_additional_days cannot be null');
        }
        $this->container['pickup_additional_days'] = $pickup_additional_days;

        return $this;
    }

    /**
     * Gets delivery_additional_days
     *
     * @return string|null
     */
    public function getDeliveryAdditionalDays()
    {
        return $this->container['delivery_additional_days'];
    }

    /**
     * Sets delivery_additional_days
     *
     * @param string|null $delivery_additional_days This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area
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
     * Gets pickup_day_of_week
     *
     * @return string|null
     */
    public function getPickupDayOfWeek()
    {
        return $this->container['pickup_day_of_week'];
    }

    /**
     * Sets pickup_day_of_week
     *
     * @param string|null $pickup_day_of_week Pickup day of the week number
     *
     * @return self
     */
    public function setPickupDayOfWeek($pickup_day_of_week)
    {
        if (is_null($pickup_day_of_week)) {
            throw new \InvalidArgumentException('non-nullable pickup_day_of_week cannot be null');
        }
        $this->container['pickup_day_of_week'] = $pickup_day_of_week;

        return $this;
    }

    /**
     * Gets delivery_day_of_week
     *
     * @return string|null
     */
    public function getDeliveryDayOfWeek()
    {
        return $this->container['delivery_day_of_week'];
    }

    /**
     * Sets delivery_day_of_week
     *
     * @param string|null $delivery_day_of_week Destination day of the week number
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


