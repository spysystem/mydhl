<?php
/**
 * ShipmentResponse
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
 * ShipmentResponse Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ShipmentResponseModelFields
      */
    public static function GetModelFields(): ShipmentResponseModelFields
    {
        return new ShipmentResponseModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ShipmentResponseModelAttributes
      */
    public static function GetModelAttributes(): ShipmentResponseModelAttributes
    {
        return new ShipmentResponseModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_identification_number' => 'string',
        'dispatch_confirmation_number' => 'string',
        'on_demand_delivery_url' => 'string',
        'response' => '\MyDHL\Model\Response',
        'notification' => '\MyDHL\Model\Notification[]',
        'packages_result' => '\MyDHL\Model\PackagesResult',
        'label_image' => '\MyDHL\Model\LabelImage[]',
        'documents' => '\MyDHL\Model\Documents',
        'total_net' => '\MyDHL\Model\TotalNet[]',
        'additional_information' => '\MyDHL\Model\AdditionalInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_identification_number' => null,
        'dispatch_confirmation_number' => null,
        'on_demand_delivery_url' => null,
        'response' => null,
        'notification' => null,
        'packages_result' => null,
        'label_image' => null,
        'documents' => null,
        'total_net' => null,
        'additional_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipment_identification_number' => false,
		'dispatch_confirmation_number' => false,
		'on_demand_delivery_url' => false,
		'response' => false,
		'notification' => false,
		'packages_result' => false,
		'label_image' => false,
		'documents' => false,
		'total_net' => false,
		'additional_information' => false
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
        'shipment_identification_number' => 'ShipmentIdentificationNumber',
        'dispatch_confirmation_number' => 'DispatchConfirmationNumber',
        'on_demand_delivery_url' => 'OnDemandDeliveryURL',
        'response' => 'Response',
        'notification' => 'Notification',
        'packages_result' => 'PackagesResult',
        'label_image' => 'LabelImage',
        'documents' => 'Documents',
        'total_net' => 'TotalNet',
        'additional_information' => 'AdditionalInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_identification_number' => 'setShipmentIdentificationNumber',
        'dispatch_confirmation_number' => 'setDispatchConfirmationNumber',
        'on_demand_delivery_url' => 'setOnDemandDeliveryUrl',
        'response' => 'setResponse',
        'notification' => 'setNotification',
        'packages_result' => 'setPackagesResult',
        'label_image' => 'setLabelImage',
        'documents' => 'setDocuments',
        'total_net' => 'setTotalNet',
        'additional_information' => 'setAdditionalInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_identification_number' => 'getShipmentIdentificationNumber',
        'dispatch_confirmation_number' => 'getDispatchConfirmationNumber',
        'on_demand_delivery_url' => 'getOnDemandDeliveryUrl',
        'response' => 'getResponse',
        'notification' => 'getNotification',
        'packages_result' => 'getPackagesResult',
        'label_image' => 'getLabelImage',
        'documents' => 'getDocuments',
        'total_net' => 'getTotalNet',
        'additional_information' => 'getAdditionalInformation'
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
        $this->setIfExists('shipment_identification_number', $data ?? [], null);
        $this->setIfExists('dispatch_confirmation_number', $data ?? [], null);
        $this->setIfExists('on_demand_delivery_url', $data ?? [], null);
        $this->setIfExists('response', $data ?? [], null);
        $this->setIfExists('notification', $data ?? [], null);
        $this->setIfExists('packages_result', $data ?? [], null);
        $this->setIfExists('label_image', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('total_net', $data ?? [], null);
        $this->setIfExists('additional_information', $data ?? [], null);
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

        if ($this->container['notification'] === null) {
            $invalidProperties[] = "'notification' can't be null";
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
     * Gets shipment_identification_number
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->container['shipment_identification_number'];
    }

    /**
     * Sets shipment_identification_number
     *
     * @param string|null $shipment_identification_number shipment_identification_number
     *
     * @return self
     */
    public function setShipmentIdentificationNumber($shipment_identification_number)
    {

        if (is_null($shipment_identification_number)) {
            throw new \InvalidArgumentException('non-nullable shipment_identification_number cannot be null');
        }

        $this->container['shipment_identification_number'] = $shipment_identification_number;

        return $this;
    }

    /**
     * Gets dispatch_confirmation_number
     *
     * @return string|null
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->container['dispatch_confirmation_number'];
    }

    /**
     * Sets dispatch_confirmation_number
     *
     * @param string|null $dispatch_confirmation_number dispatch_confirmation_number
     *
     * @return self
     */
    public function setDispatchConfirmationNumber($dispatch_confirmation_number)
    {

        if (is_null($dispatch_confirmation_number)) {
            throw new \InvalidArgumentException('non-nullable dispatch_confirmation_number cannot be null');
        }

        $this->container['dispatch_confirmation_number'] = $dispatch_confirmation_number;

        return $this;
    }

    /**
     * Gets on_demand_delivery_url
     *
     * @return string|null
     */
    public function getOnDemandDeliveryUrl()
    {
        return $this->container['on_demand_delivery_url'];
    }

    /**
     * Sets on_demand_delivery_url
     *
     * @param string|null $on_demand_delivery_url on_demand_delivery_url
     *
     * @return self
     */
    public function setOnDemandDeliveryUrl($on_demand_delivery_url)
    {

        if (is_null($on_demand_delivery_url)) {
            throw new \InvalidArgumentException('non-nullable on_demand_delivery_url cannot be null');
        }

        $this->container['on_demand_delivery_url'] = $on_demand_delivery_url;

        return $this;
    }

    /**
     * Gets response
     *
     * @return \MyDHL\Model\Response|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \MyDHL\Model\Response|null $response response
     *
     * @return self
     */
    public function setResponse($response)
    {

        if (is_null($response)) {
            throw new \InvalidArgumentException('non-nullable response cannot be null');
        }

        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return \MyDHL\Model\Notification[]
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param \MyDHL\Model\Notification[] $notification notification
     *
     * @return self
     */
    public function setNotification($notification)
    {

        if (is_null($notification)) {
            throw new \InvalidArgumentException('non-nullable notification cannot be null');
        }

        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets packages_result
     *
     * @return \MyDHL\Model\PackagesResult|null
     */
    public function getPackagesResult()
    {
        return $this->container['packages_result'];
    }

    /**
     * Sets packages_result
     *
     * @param \MyDHL\Model\PackagesResult|null $packages_result packages_result
     *
     * @return self
     */
    public function setPackagesResult($packages_result)
    {

        if (is_null($packages_result)) {
            throw new \InvalidArgumentException('non-nullable packages_result cannot be null');
        }

        $this->container['packages_result'] = $packages_result;

        return $this;
    }

    /**
     * Gets label_image
     *
     * @return \MyDHL\Model\LabelImage[]|null
     */
    public function getLabelImage()
    {
        return $this->container['label_image'];
    }

    /**
     * Sets label_image
     *
     * @param \MyDHL\Model\LabelImage[]|null $label_image label_image
     *
     * @return self
     */
    public function setLabelImage($label_image)
    {

        if (is_null($label_image)) {
            throw new \InvalidArgumentException('non-nullable label_image cannot be null');
        }

        $this->container['label_image'] = $label_image;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \MyDHL\Model\Documents|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \MyDHL\Model\Documents|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {

        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }

        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets total_net
     *
     * @return \MyDHL\Model\TotalNet[]|null
     */
    public function getTotalNet()
    {
        return $this->container['total_net'];
    }

    /**
     * Sets total_net
     *
     * @param \MyDHL\Model\TotalNet[]|null $total_net total_net
     *
     * @return self
     */
    public function setTotalNet($total_net)
    {

        if (is_null($total_net)) {
            throw new \InvalidArgumentException('non-nullable total_net cannot be null');
        }

        $this->container['total_net'] = $total_net;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return \MyDHL\Model\AdditionalInformation|null
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param \MyDHL\Model\AdditionalInformation|null $additional_information additional_information
     *
     * @return self
     */
    public function setAdditionalInformation($additional_information)
    {

        if (is_null($additional_information)) {
            throw new \InvalidArgumentException('non-nullable additional_information cannot be null');
        }

        $this->container['additional_information'] = $additional_information;

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


