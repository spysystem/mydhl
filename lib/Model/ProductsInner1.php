<?php
/**
 * ProductsInner1
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
 * ProductsInner1 Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductsInner1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ProductsInner1ModelFields
      */
    public static function GetModelFields(): ProductsInner1ModelFields
    {
        return new ProductsInner1ModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ProductsInner1ModelAttributes
      */
    public static function GetModelAttributes(): ProductsInner1ModelAttributes
    {
        return new ProductsInner1ModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'products_inner_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_name' => 'string',
        'product_code' => 'string',
        'local_product_code' => 'string',
        'local_product_country_code' => 'string',
        'network_type_code' => 'string',
        'is_customer_agreement' => 'bool',
        'weight' => '\MyDHL\Model\Weight1',
        'total_price' => '\MyDHL\Model\ProductsInner1TotalPriceInner[]',
        'total_price_breakdown' => '\MyDHL\Model\ProductsInner1TotalPriceBreakdownInner[]',
        'detailed_price_breakdown' => '\MyDHL\Model\ProductsInner1DetailedPriceBreakdownInner[]',
        'service_code_mutually_exclusive_groups' => '\MyDHL\Model\ProductsInnerServiceCodeMutuallyExclusiveGroupsInner[]',
        'service_code_dependency_rule_groups' => '\MyDHL\Model\ProductsInnerServiceCodeDependencyRuleGroupsInner[]',
        'pickup_capabilities' => '\MyDHL\Model\ProductsInner1PickupCapabilities',
        'delivery_capabilities' => '\MyDHL\Model\ProductsInner1DeliveryCapabilities',
        'items' => 'object[]',
        'pricing_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_name' => null,
        'product_code' => null,
        'local_product_code' => null,
        'local_product_country_code' => null,
        'network_type_code' => null,
        'is_customer_agreement' => null,
        'weight' => null,
        'total_price' => null,
        'total_price_breakdown' => null,
        'detailed_price_breakdown' => null,
        'service_code_mutually_exclusive_groups' => null,
        'service_code_dependency_rule_groups' => null,
        'pickup_capabilities' => null,
        'delivery_capabilities' => null,
        'items' => null,
        'pricing_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_name' => false,
		'product_code' => false,
		'local_product_code' => false,
		'local_product_country_code' => false,
		'network_type_code' => false,
		'is_customer_agreement' => false,
		'weight' => false,
		'total_price' => false,
		'total_price_breakdown' => false,
		'detailed_price_breakdown' => false,
		'service_code_mutually_exclusive_groups' => false,
		'service_code_dependency_rule_groups' => false,
		'pickup_capabilities' => false,
		'delivery_capabilities' => false,
		'items' => false,
		'pricing_date' => false
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
        'product_name' => 'productName',
        'product_code' => 'productCode',
        'local_product_code' => 'localProductCode',
        'local_product_country_code' => 'localProductCountryCode',
        'network_type_code' => 'networkTypeCode',
        'is_customer_agreement' => 'isCustomerAgreement',
        'weight' => 'weight',
        'total_price' => 'totalPrice',
        'total_price_breakdown' => 'totalPriceBreakdown',
        'detailed_price_breakdown' => 'detailedPriceBreakdown',
        'service_code_mutually_exclusive_groups' => 'serviceCodeMutuallyExclusiveGroups',
        'service_code_dependency_rule_groups' => 'serviceCodeDependencyRuleGroups',
        'pickup_capabilities' => 'pickupCapabilities',
        'delivery_capabilities' => 'deliveryCapabilities',
        'items' => 'items',
        'pricing_date' => 'pricingDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_name' => 'setProductName',
        'product_code' => 'setProductCode',
        'local_product_code' => 'setLocalProductCode',
        'local_product_country_code' => 'setLocalProductCountryCode',
        'network_type_code' => 'setNetworkTypeCode',
        'is_customer_agreement' => 'setIsCustomerAgreement',
        'weight' => 'setWeight',
        'total_price' => 'setTotalPrice',
        'total_price_breakdown' => 'setTotalPriceBreakdown',
        'detailed_price_breakdown' => 'setDetailedPriceBreakdown',
        'service_code_mutually_exclusive_groups' => 'setServiceCodeMutuallyExclusiveGroups',
        'service_code_dependency_rule_groups' => 'setServiceCodeDependencyRuleGroups',
        'pickup_capabilities' => 'setPickupCapabilities',
        'delivery_capabilities' => 'setDeliveryCapabilities',
        'items' => 'setItems',
        'pricing_date' => 'setPricingDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_name' => 'getProductName',
        'product_code' => 'getProductCode',
        'local_product_code' => 'getLocalProductCode',
        'local_product_country_code' => 'getLocalProductCountryCode',
        'network_type_code' => 'getNetworkTypeCode',
        'is_customer_agreement' => 'getIsCustomerAgreement',
        'weight' => 'getWeight',
        'total_price' => 'getTotalPrice',
        'total_price_breakdown' => 'getTotalPriceBreakdown',
        'detailed_price_breakdown' => 'getDetailedPriceBreakdown',
        'service_code_mutually_exclusive_groups' => 'getServiceCodeMutuallyExclusiveGroups',
        'service_code_dependency_rule_groups' => 'getServiceCodeDependencyRuleGroups',
        'pickup_capabilities' => 'getPickupCapabilities',
        'delivery_capabilities' => 'getDeliveryCapabilities',
        'items' => 'getItems',
        'pricing_date' => 'getPricingDate'
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
        $this->setIfExists('product_name', $data ?? [], null);
        $this->setIfExists('product_code', $data ?? [], null);
        $this->setIfExists('local_product_code', $data ?? [], null);
        $this->setIfExists('local_product_country_code', $data ?? [], null);
        $this->setIfExists('network_type_code', $data ?? [], null);
        $this->setIfExists('is_customer_agreement', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('total_price', $data ?? [], null);
        $this->setIfExists('total_price_breakdown', $data ?? [], null);
        $this->setIfExists('detailed_price_breakdown', $data ?? [], null);
        $this->setIfExists('service_code_mutually_exclusive_groups', $data ?? [], null);
        $this->setIfExists('service_code_dependency_rule_groups', $data ?? [], null);
        $this->setIfExists('pickup_capabilities', $data ?? [], null);
        $this->setIfExists('delivery_capabilities', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('pricing_date', $data ?? [], null);
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

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
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
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string|null $product_name Name of the DHL Express product
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        if (is_null($product_name)) {
            throw new \InvalidArgumentException('non-nullable product_name cannot be null');
        }
        $this->container['product_name'] = $product_name;

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
     * @param string|null $product_code This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        if (is_null($product_code)) {
            throw new \InvalidArgumentException('non-nullable product_code cannot be null');
        }
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets local_product_code
     *
     * @return string|null
     */
    public function getLocalProductCode()
    {
        return $this->container['local_product_code'];
    }

    /**
     * Sets local_product_code
     *
     * @param string|null $local_product_code This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @return self
     */
    public function setLocalProductCode($local_product_code)
    {
        if (is_null($local_product_code)) {
            throw new \InvalidArgumentException('non-nullable local_product_code cannot be null');
        }
        $this->container['local_product_code'] = $local_product_code;

        return $this;
    }

    /**
     * Gets local_product_country_code
     *
     * @return string|null
     */
    public function getLocalProductCountryCode()
    {
        return $this->container['local_product_country_code'];
    }

    /**
     * Sets local_product_country_code
     *
     * @param string|null $local_product_country_code The country code for the local service used
     *
     * @return self
     */
    public function setLocalProductCountryCode($local_product_country_code)
    {
        if (is_null($local_product_country_code)) {
            throw new \InvalidArgumentException('non-nullable local_product_country_code cannot be null');
        }
        $this->container['local_product_country_code'] = $local_product_country_code;

        return $this;
    }

    /**
     * Gets network_type_code
     *
     * @return string|null
     */
    public function getNetworkTypeCode()
    {
        return $this->container['network_type_code'];
    }

    /**
     * Sets network_type_code
     *
     * @param string|null $network_type_code The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product
     *
     * @return self
     */
    public function setNetworkTypeCode($network_type_code)
    {
        if (is_null($network_type_code)) {
            throw new \InvalidArgumentException('non-nullable network_type_code cannot be null');
        }
        $this->container['network_type_code'] = $network_type_code;

        return $this;
    }

    /**
     * Gets is_customer_agreement
     *
     * @return bool|null
     */
    public function getIsCustomerAgreement()
    {
        return $this->container['is_customer_agreement'];
    }

    /**
     * Sets is_customer_agreement
     *
     * @param bool|null $is_customer_agreement Indicator that the product only can be offered to customers with prior agreement.
     *
     * @return self
     */
    public function setIsCustomerAgreement($is_customer_agreement)
    {
        if (is_null($is_customer_agreement)) {
            throw new \InvalidArgumentException('non-nullable is_customer_agreement cannot be null');
        }
        $this->container['is_customer_agreement'] = $is_customer_agreement;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \MyDHL\Model\Weight1
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \MyDHL\Model\Weight1 $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return \MyDHL\Model\ProductsInner1TotalPriceInner[]
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param \MyDHL\Model\ProductsInner1TotalPriceInner[] $total_price total_price
     *
     * @return self
     */
    public function setTotalPrice($total_price)
    {
        if (is_null($total_price)) {
            throw new \InvalidArgumentException('non-nullable total_price cannot be null');
        }
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets total_price_breakdown
     *
     * @return \MyDHL\Model\ProductsInner1TotalPriceBreakdownInner[]|null
     */
    public function getTotalPriceBreakdown()
    {
        return $this->container['total_price_breakdown'];
    }

    /**
     * Sets total_price_breakdown
     *
     * @param \MyDHL\Model\ProductsInner1TotalPriceBreakdownInner[]|null $total_price_breakdown total_price_breakdown
     *
     * @return self
     */
    public function setTotalPriceBreakdown($total_price_breakdown)
    {
        if (is_null($total_price_breakdown)) {
            throw new \InvalidArgumentException('non-nullable total_price_breakdown cannot be null');
        }
        $this->container['total_price_breakdown'] = $total_price_breakdown;

        return $this;
    }

    /**
     * Gets detailed_price_breakdown
     *
     * @return \MyDHL\Model\ProductsInner1DetailedPriceBreakdownInner[]|null
     */
    public function getDetailedPriceBreakdown()
    {
        return $this->container['detailed_price_breakdown'];
    }

    /**
     * Sets detailed_price_breakdown
     *
     * @param \MyDHL\Model\ProductsInner1DetailedPriceBreakdownInner[]|null $detailed_price_breakdown detailed_price_breakdown
     *
     * @return self
     */
    public function setDetailedPriceBreakdown($detailed_price_breakdown)
    {
        if (is_null($detailed_price_breakdown)) {
            throw new \InvalidArgumentException('non-nullable detailed_price_breakdown cannot be null');
        }
        $this->container['detailed_price_breakdown'] = $detailed_price_breakdown;

        return $this;
    }

    /**
     * Gets service_code_mutually_exclusive_groups
     *
     * @return \MyDHL\Model\ProductsInnerServiceCodeMutuallyExclusiveGroupsInner[]|null
     */
    public function getServiceCodeMutuallyExclusiveGroups()
    {
        return $this->container['service_code_mutually_exclusive_groups'];
    }

    /**
     * Sets service_code_mutually_exclusive_groups
     *
     * @param \MyDHL\Model\ProductsInnerServiceCodeMutuallyExclusiveGroupsInner[]|null $service_code_mutually_exclusive_groups Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @return self
     */
    public function setServiceCodeMutuallyExclusiveGroups($service_code_mutually_exclusive_groups)
    {
        if (is_null($service_code_mutually_exclusive_groups)) {
            throw new \InvalidArgumentException('non-nullable service_code_mutually_exclusive_groups cannot be null');
        }
        $this->container['service_code_mutually_exclusive_groups'] = $service_code_mutually_exclusive_groups;

        return $this;
    }

    /**
     * Gets service_code_dependency_rule_groups
     *
     * @return \MyDHL\Model\ProductsInnerServiceCodeDependencyRuleGroupsInner[]|null
     */
    public function getServiceCodeDependencyRuleGroups()
    {
        return $this->container['service_code_dependency_rule_groups'];
    }

    /**
     * Sets service_code_dependency_rule_groups
     *
     * @param \MyDHL\Model\ProductsInnerServiceCodeDependencyRuleGroupsInner[]|null $service_code_dependency_rule_groups Dependency rule groups for a particular serviceCode.
     *
     * @return self
     */
    public function setServiceCodeDependencyRuleGroups($service_code_dependency_rule_groups)
    {
        if (is_null($service_code_dependency_rule_groups)) {
            throw new \InvalidArgumentException('non-nullable service_code_dependency_rule_groups cannot be null');
        }
        $this->container['service_code_dependency_rule_groups'] = $service_code_dependency_rule_groups;

        return $this;
    }

    /**
     * Gets pickup_capabilities
     *
     * @return \MyDHL\Model\ProductsInner1PickupCapabilities|null
     */
    public function getPickupCapabilities()
    {
        return $this->container['pickup_capabilities'];
    }

    /**
     * Sets pickup_capabilities
     *
     * @param \MyDHL\Model\ProductsInner1PickupCapabilities|null $pickup_capabilities pickup_capabilities
     *
     * @return self
     */
    public function setPickupCapabilities($pickup_capabilities)
    {
        if (is_null($pickup_capabilities)) {
            throw new \InvalidArgumentException('non-nullable pickup_capabilities cannot be null');
        }
        $this->container['pickup_capabilities'] = $pickup_capabilities;

        return $this;
    }

    /**
     * Gets delivery_capabilities
     *
     * @return \MyDHL\Model\ProductsInner1DeliveryCapabilities|null
     */
    public function getDeliveryCapabilities()
    {
        return $this->container['delivery_capabilities'];
    }

    /**
     * Sets delivery_capabilities
     *
     * @param \MyDHL\Model\ProductsInner1DeliveryCapabilities|null $delivery_capabilities delivery_capabilities
     *
     * @return self
     */
    public function setDeliveryCapabilities($delivery_capabilities)
    {
        if (is_null($delivery_capabilities)) {
            throw new \InvalidArgumentException('non-nullable delivery_capabilities cannot be null');
        }
        $this->container['delivery_capabilities'] = $delivery_capabilities;

        return $this;
    }

    /**
     * Gets items
     *
     * @return object[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param object[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets pricing_date
     *
     * @return string|null
     */
    public function getPricingDate()
    {
        return $this->container['pricing_date'];
    }

    /**
     * Sets pricing_date
     *
     * @param string|null $pricing_date The date when the rates for DHL products and services is provided
     *
     * @return self
     */
    public function setPricingDate($pricing_date)
    {
        if (is_null($pricing_date)) {
            throw new \InvalidArgumentException('non-nullable pricing_date cannot be null');
        }
        $this->container['pricing_date'] = $pricing_date;

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


