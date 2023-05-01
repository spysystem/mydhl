<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentRequestContent
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
 * SupermodelIoLogisticsExpressCreateShipmentRequestContent Class Doc Comment
 *
 * @category Class
 * @description Here you can define all the properties related to the content of the prospected shipment
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SupermodelIoLogisticsExpressCreateShipmentRequestContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentModelFields
      */
    public static function GetModelFields(): SupermodelIoLogisticsExpressCreateShipmentRequestContentModelFields
    {
        return new SupermodelIoLogisticsExpressCreateShipmentRequestContentModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentModelAttributes
      */
    public static function GetModelAttributes(): SupermodelIoLogisticsExpressCreateShipmentRequestContentModelAttributes
    {
        return new SupermodelIoLogisticsExpressCreateShipmentRequestContentModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'supermodelIoLogisticsExpressCreateShipmentRequest_content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packages' => '\MyDHL\Model\SupermodelIoLogisticsExpressPackage[]',
        'is_customs_declarable' => 'bool',
        'declared_value' => 'float',
        'declared_value_currency' => 'string',
        'export_declaration' => '\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration',
        'description' => 'string',
        'us_filing_type_value' => 'string',
        'incoterm' => 'string',
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
        'packages' => null,
        'is_customs_declarable' => null,
        'declared_value' => null,
        'declared_value_currency' => null,
        'export_declaration' => null,
        'description' => null,
        'us_filing_type_value' => null,
        'incoterm' => null,
        'unit_of_measurement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'packages' => false,
		'is_customs_declarable' => false,
		'declared_value' => false,
		'declared_value_currency' => false,
		'export_declaration' => false,
		'description' => false,
		'us_filing_type_value' => false,
		'incoterm' => false,
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
        'packages' => 'packages',
        'is_customs_declarable' => 'isCustomsDeclarable',
        'declared_value' => 'declaredValue',
        'declared_value_currency' => 'declaredValueCurrency',
        'export_declaration' => 'exportDeclaration',
        'description' => 'description',
        'us_filing_type_value' => 'USFilingTypeValue',
        'incoterm' => 'incoterm',
        'unit_of_measurement' => 'unitOfMeasurement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packages' => 'setPackages',
        'is_customs_declarable' => 'setIsCustomsDeclarable',
        'declared_value' => 'setDeclaredValue',
        'declared_value_currency' => 'setDeclaredValueCurrency',
        'export_declaration' => 'setExportDeclaration',
        'description' => 'setDescription',
        'us_filing_type_value' => 'setUsFilingTypeValue',
        'incoterm' => 'setIncoterm',
        'unit_of_measurement' => 'setUnitOfMeasurement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packages' => 'getPackages',
        'is_customs_declarable' => 'getIsCustomsDeclarable',
        'declared_value' => 'getDeclaredValue',
        'declared_value_currency' => 'getDeclaredValueCurrency',
        'export_declaration' => 'getExportDeclaration',
        'description' => 'getDescription',
        'us_filing_type_value' => 'getUsFilingTypeValue',
        'incoterm' => 'getIncoterm',
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

    public const INCOTERM_EXW = 'EXW';
    public const INCOTERM_FCA = 'FCA';
    public const INCOTERM_CPT = 'CPT';
    public const INCOTERM_CIP = 'CIP';
    public const INCOTERM_DPU = 'DPU';
    public const INCOTERM_DAP = 'DAP';
    public const INCOTERM_DDP = 'DDP';
    public const INCOTERM_FAS = 'FAS';
    public const INCOTERM_FOB = 'FOB';
    public const INCOTERM_CFR = 'CFR';
    public const INCOTERM_CIF = 'CIF';
    public const INCOTERM_DAF = 'DAF';
    public const INCOTERM_DAT = 'DAT';
    public const INCOTERM_DDU = 'DDU';
    public const INCOTERM_DEQ = 'DEQ';
    public const INCOTERM_DES = 'DES';
    public const UNIT_OF_MEASUREMENT_METRIC = 'metric';
    public const UNIT_OF_MEASUREMENT_IMPERIAL = 'imperial';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncotermAllowableValues()
    {
        return [
            self::INCOTERM_EXW,
            self::INCOTERM_FCA,
            self::INCOTERM_CPT,
            self::INCOTERM_CIP,
            self::INCOTERM_DPU,
            self::INCOTERM_DAP,
            self::INCOTERM_DDP,
            self::INCOTERM_FAS,
            self::INCOTERM_FOB,
            self::INCOTERM_CFR,
            self::INCOTERM_CIF,
            self::INCOTERM_DAF,
            self::INCOTERM_DAT,
            self::INCOTERM_DDU,
            self::INCOTERM_DEQ,
            self::INCOTERM_DES,
        ];
    }

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
        $this->setIfExists('packages', $data ?? [], null);
        $this->setIfExists('is_customs_declarable', $data ?? [], null);
        $this->setIfExists('declared_value', $data ?? [], null);
        $this->setIfExists('declared_value_currency', $data ?? [], null);
        $this->setIfExists('export_declaration', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('us_filing_type_value', $data ?? [], null);
        $this->setIfExists('incoterm', $data ?? [], null);
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

        if ($this->container['packages'] === null) {
            $invalidProperties[] = "'packages' can't be null";
        }
        if ((count($this->container['packages']) > 999)) {
            $invalidProperties[] = "invalid value for 'packages', number of items must be less than or equal to 999.";
        }

        if ((count($this->container['packages']) < 1)) {
            $invalidProperties[] = "invalid value for 'packages', number of items must be greater than or equal to 1.";
        }

        if ($this->container['is_customs_declarable'] === null) {
            $invalidProperties[] = "'is_customs_declarable' can't be null";
        }
        if (!is_null($this->container['declared_value']) && ($this->container['declared_value'] > 999999999999999)) {
            $invalidProperties[] = "invalid value for 'declared_value', must be smaller than or equal to 999999999999999.";
        }

        if (!is_null($this->container['declared_value']) && ($this->container['declared_value'] < 0)) {
            $invalidProperties[] = "invalid value for 'declared_value', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['declared_value_currency']) && (mb_strlen($this->container['declared_value_currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'declared_value_currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['declared_value_currency']) && (mb_strlen($this->container['declared_value_currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'declared_value_currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 70)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 70.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[^\\s]/", $this->container['description'])) {
            $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\s]/.";
        }

        if (!is_null($this->container['us_filing_type_value']) && (mb_strlen($this->container['us_filing_type_value']) > 20)) {
            $invalidProperties[] = "invalid value for 'us_filing_type_value', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['us_filing_type_value']) && (mb_strlen($this->container['us_filing_type_value']) < 1)) {
            $invalidProperties[] = "invalid value for 'us_filing_type_value', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['incoterm'] === null) {
            $invalidProperties[] = "'incoterm' can't be null";
        }
        $allowedValues = $this->getIncotermAllowableValues();
        if (!is_null($this->container['incoterm']) && !in_array($this->container['incoterm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'incoterm', must be one of '%s'",
                $this->container['incoterm'],
                implode("', '", $allowedValues)
            );
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
     * Gets packages
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressPackage[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressPackage[] $packages Here you can define properties per package
     *
     * @return self
     */
    public function setPackages($packages)
    {
        if (is_null($packages)) {
            throw new \InvalidArgumentException('non-nullable packages cannot be null');
        }

        if ((count($packages) > 999)) {
            throw new \InvalidArgumentException('invalid value for $packages when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., number of items must be less than or equal to 999.');
        }
        if ((count($packages) < 1)) {
            throw new \InvalidArgumentException('invalid length for $packages when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., number of items must be greater than or equal to 1.');
        }
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets is_customs_declarable
     *
     * @return bool
     */
    public function getIsCustomsDeclarable()
    {
        return $this->container['is_customs_declarable'];
    }

    /**
     * Sets is_customs_declarable
     *
     * @param bool $is_customs_declarable For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).Note:If the shipment is dutiable, exportDeclaration element must be provided.
     *
     * @return self
     */
    public function setIsCustomsDeclarable($is_customs_declarable)
    {
        if (is_null($is_customs_declarable)) {
            throw new \InvalidArgumentException('non-nullable is_customs_declarable cannot be null');
        }
        $this->container['is_customs_declarable'] = $is_customs_declarable;

        return $this;
    }

    /**
     * Gets declared_value
     *
     * @return float|null
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value
     *
     * @param float|null $declared_value For customs purposes please advise on declared value of the shipment
     *
     * @return self
     */
    public function setDeclaredValue($declared_value)
    {
        if (is_null($declared_value)) {
            throw new \InvalidArgumentException('non-nullable declared_value cannot be null');
        }

        if (($declared_value > 999999999999999)) {
            throw new \InvalidArgumentException('invalid value for $declared_value when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be smaller than or equal to 999999999999999.');
        }
        if (($declared_value < 0)) {
            throw new \InvalidArgumentException('invalid value for $declared_value when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be bigger than or equal to 0.');
        }

        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets declared_value_currency
     *
     * @return string|null
     */
    public function getDeclaredValueCurrency()
    {
        return $this->container['declared_value_currency'];
    }

    /**
     * Sets declared_value_currency
     *
     * @param string|null $declared_value_currency For customs purposes please advise on declared value currency code of the shipment
     *
     * @return self
     */
    public function setDeclaredValueCurrency($declared_value_currency)
    {
        if (is_null($declared_value_currency)) {
            throw new \InvalidArgumentException('non-nullable declared_value_currency cannot be null');
        }
        if ((mb_strlen($declared_value_currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $declared_value_currency when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($declared_value_currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $declared_value_currency when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be bigger than or equal to 3.');
        }

        $this->container['declared_value_currency'] = $declared_value_currency;

        return $this;
    }

    /**
     * Gets export_declaration
     *
     * @return \MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration|null
     */
    public function getExportDeclaration()
    {
        return $this->container['export_declaration'];
    }

    /**
     * Sets export_declaration
     *
     * @param \MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration|null $export_declaration export_declaration
     *
     * @return self
     */
    public function setExportDeclaration($export_declaration)
    {
        if (is_null($export_declaration)) {
            throw new \InvalidArgumentException('non-nullable export_declaration cannot be null');
        }
        $this->container['export_declaration'] = $export_declaration;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Please enter description of your shipment
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 70)) {
            throw new \InvalidArgumentException('invalid length for $description when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be smaller than or equal to 70.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[^\\s]/", $description))) {
            throw new \InvalidArgumentException("invalid value for \$description when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must conform to the pattern /^[^\\s]/.");
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets us_filing_type_value
     *
     * @return string|null
     */
    public function getUsFilingTypeValue()
    {
        return $this->container['us_filing_type_value'];
    }

    /**
     * Sets us_filing_type_value
     *
     * @param string|null $us_filing_type_value This is used for the US AES4, FTR and ITN numbers to be printed on the Transport Label
     *
     * @return self
     */
    public function setUsFilingTypeValue($us_filing_type_value)
    {
        if (is_null($us_filing_type_value)) {
            throw new \InvalidArgumentException('non-nullable us_filing_type_value cannot be null');
        }
        if ((mb_strlen($us_filing_type_value) > 20)) {
            throw new \InvalidArgumentException('invalid length for $us_filing_type_value when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($us_filing_type_value) < 1)) {
            throw new \InvalidArgumentException('invalid length for $us_filing_type_value when calling SupermodelIoLogisticsExpressCreateShipmentRequestContent., must be bigger than or equal to 1.');
        }

        $this->container['us_filing_type_value'] = $us_filing_type_value;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return string
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param string $incoterm The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>          EXW ExWorks<BR>          FCA Free Carrier<BR>          CPT Carriage Paid To<BR>          CIP Carriage and Insurance Paid To<BR>          DPU Delivered at Place Unloaded<BR>          DAP Delivered at Place<BR>          DDP Delivered Duty Paid<BR>          FAS Free Alongside Ship<BR>          FOB Free on Board<BR>          CFR Cost and Freight<BR>          CIF Cost, Insurance and Freight<BR>          DAF Delivered at Frontier<BR>          DAT Delivered at Terminal<BR>          DDU Delivered Duty Unpaid<BR>          DEQ Delivery ex Quay<BR>          DES Delivered ex Ship
     *
     * @return self
     */
    public function setIncoterm($incoterm)
    {
        if (is_null($incoterm)) {
            throw new \InvalidArgumentException('non-nullable incoterm cannot be null');
        }
        $allowedValues = $this->getIncotermAllowableValues();
        if (!in_array($incoterm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'incoterm', must be one of '%s'",
                    $incoterm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incoterm'] = $incoterm;

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


