<?php
/**
 * LabelOptions
 *
 * PHP version 5
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
 * The version of the OpenAPI document: 1.0.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
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
 * LabelOptions Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LabelOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'printer_dpi' => 'string',
        'hide_account_in_waybill_document' => 'string',
        'request_waybill_document' => 'string',
        'number_of_waybill_document_copies' => 'int',
        'request_dhl_customs_invoice' => 'string',
        'dhl_customs_invoice_language' => 'string',
        'dhl_customs_invoice_type' => 'string',
        'request_shipment_receipt' => 'string',
        'customer_logo' => '\MyDHL\Model\CustomerLogo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'printer_dpi' => null,
        'hide_account_in_waybill_document' => null,
        'request_waybill_document' => null,
        'number_of_waybill_document_copies' => null,
        'request_dhl_customs_invoice' => null,
        'dhl_customs_invoice_language' => null,
        'dhl_customs_invoice_type' => null,
        'request_shipment_receipt' => null,
        'customer_logo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'printer_dpi' => false,
        'hide_account_in_waybill_document' => false,
        'request_waybill_document' => false,
        'number_of_waybill_document_copies' => false,
        'request_dhl_customs_invoice' => false,
        'dhl_customs_invoice_language' => false,
        'dhl_customs_invoice_type' => false,
        'request_shipment_receipt' => false,
        'customer_logo' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'printer_dpi' => 'PrinterDPI',
        'hide_account_in_waybill_document' => 'HideAccountInWaybillDocument',
        'request_waybill_document' => 'RequestWaybillDocument',
        'number_of_waybill_document_copies' => 'NumberOfWaybillDocumentCopies',
        'request_dhl_customs_invoice' => 'RequestDHLCustomsInvoice',
        'dhl_customs_invoice_language' => 'DHLCustomsInvoiceLanguage',
        'dhl_customs_invoice_type' => 'DHLCustomsInvoiceType',
        'request_shipment_receipt' => 'RequestShipmentReceipt',
        'customer_logo' => 'CustomerLogo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'printer_dpi' => 'setPrinterDpi',
        'hide_account_in_waybill_document' => 'setHideAccountInWaybillDocument',
        'request_waybill_document' => 'setRequestWaybillDocument',
        'number_of_waybill_document_copies' => 'setNumberOfWaybillDocumentCopies',
        'request_dhl_customs_invoice' => 'setRequestDhlCustomsInvoice',
        'dhl_customs_invoice_language' => 'setDhlCustomsInvoiceLanguage',
        'dhl_customs_invoice_type' => 'setDhlCustomsInvoiceType',
        'request_shipment_receipt' => 'setRequestShipmentReceipt',
        'customer_logo' => 'setCustomerLogo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'printer_dpi' => 'getPrinterDpi',
        'hide_account_in_waybill_document' => 'getHideAccountInWaybillDocument',
        'request_waybill_document' => 'getRequestWaybillDocument',
        'number_of_waybill_document_copies' => 'getNumberOfWaybillDocumentCopies',
        'request_dhl_customs_invoice' => 'getRequestDhlCustomsInvoice',
        'dhl_customs_invoice_language' => 'getDhlCustomsInvoiceLanguage',
        'dhl_customs_invoice_type' => 'getDhlCustomsInvoiceType',
        'request_shipment_receipt' => 'getRequestShipmentReceipt',
        'customer_logo' => 'getCustomerLogo'
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

    const REQUEST_DHL_CUSTOMS_INVOICE_Y = 'Y';
    const REQUEST_DHL_CUSTOMS_INVOICE_N = 'N';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_ENG = 'eng';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_BUL = 'bul';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_CZE = 'cze';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_DAN = 'dan';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_GER = 'ger';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_GRE = 'gre';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_EST = 'est';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_FIN = 'fin';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_FRE = 'fre';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_HUN = 'hun';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_ICE = 'ice';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_ITA = 'ita';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_LIT = 'lit';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_LAV = 'lav';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_DUT = 'dut';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_NNO = 'nno';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_POL = 'pol';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_POR = 'por';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_RUM = 'rum';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_SLV = 'slv';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_SLP = 'slp';
    const DHL_CUSTOMS_INVOICE_LANGUAGE_SPA = 'spa';
    const DHL_CUSTOMS_INVOICE_TYPE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const DHL_CUSTOMS_INVOICE_TYPE_PROFORMA_INVOICE = 'PROFORMA_INVOICE';
    const REQUEST_SHIPMENT_RECEIPT_Y = 'Y';
    const REQUEST_SHIPMENT_RECEIPT_N = 'N';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestDhlCustomsInvoiceAllowableValues()
    {
        return [
            self::REQUEST_DHL_CUSTOMS_INVOICE_Y,
            self::REQUEST_DHL_CUSTOMS_INVOICE_N,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDhlCustomsInvoiceLanguageAllowableValues()
    {
        return [
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_ENG,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_BUL,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_CZE,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_DAN,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_GER,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_GRE,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_EST,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_FIN,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_FRE,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_HUN,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_ICE,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_ITA,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_LIT,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_LAV,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_DUT,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_NNO,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_POL,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_POR,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_RUM,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_SLV,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_SLP,
            self::DHL_CUSTOMS_INVOICE_LANGUAGE_SPA,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDhlCustomsInvoiceTypeAllowableValues()
    {
        return [
            self::DHL_CUSTOMS_INVOICE_TYPE_COMMERCIAL_INVOICE,
            self::DHL_CUSTOMS_INVOICE_TYPE_PROFORMA_INVOICE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestShipmentReceiptAllowableValues()
    {
        return [
            self::REQUEST_SHIPMENT_RECEIPT_Y,
            self::REQUEST_SHIPMENT_RECEIPT_N,
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
        $this->setIfExists('printer_dpi', $data, null);
        $this->setIfExists('hide_account_in_waybill_document', $data, null);
        $this->setIfExists('request_waybill_document', $data, null);
        $this->setIfExists('number_of_waybill_document_copies', $data, null);
        $this->setIfExists('request_dhl_customs_invoice', $data, null);
        $this->setIfExists('dhl_customs_invoice_language', $data, null);
        $this->setIfExists('dhl_customs_invoice_type', $data, null);
        $this->setIfExists('request_shipment_receipt', $data, null);
        $this->setIfExists('customer_logo', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRequestDhlCustomsInvoiceAllowableValues();
        if (!is_null($this->container['request_dhl_customs_invoice']) && !in_array($this->container['request_dhl_customs_invoice'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'request_dhl_customs_invoice', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDhlCustomsInvoiceLanguageAllowableValues();
        if (!is_null($this->container['dhl_customs_invoice_language']) && !in_array($this->container['dhl_customs_invoice_language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dhl_customs_invoice_language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDhlCustomsInvoiceTypeAllowableValues();
        if (!is_null($this->container['dhl_customs_invoice_type']) && !in_array($this->container['dhl_customs_invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dhl_customs_invoice_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRequestShipmentReceiptAllowableValues();
        if (!is_null($this->container['request_shipment_receipt']) && !in_array($this->container['request_shipment_receipt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'request_shipment_receipt', must be one of '%s'",
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
     * Gets printer_dpi
     *
     * @return string|null
     */
    public function getPrinterDpi()
    {
        return $this->container['printer_dpi'];
    }

    /**
     * Sets printer_dpi
     *
     * @param string|null $printer_dpi printer_dpi
     *
     * @return $this
     */
    public function setPrinterDpi($printer_dpi)
    {

        if (is_null($printer_dpi)) {
            throw new \InvalidArgumentException('non-nullable printer_dpi cannot be null');
        }

        $this->container['printer_dpi'] = $printer_dpi;

        return $this;
    }

    /**
     * Gets hide_account_in_waybill_document
     *
     * @return string|null
     */
    public function getHideAccountInWaybillDocument()
    {
        return $this->container['hide_account_in_waybill_document'];
    }

    /**
     * Sets hide_account_in_waybill_document
     *
     * @param string|null $hide_account_in_waybill_document hide_account_in_waybill_document
     *
     * @return $this
     */
    public function setHideAccountInWaybillDocument($hide_account_in_waybill_document)
    {

        if (is_null($hide_account_in_waybill_document)) {
            throw new \InvalidArgumentException('non-nullable hide_account_in_waybill_document cannot be null');
        }

        $this->container['hide_account_in_waybill_document'] = $hide_account_in_waybill_document;

        return $this;
    }

    /**
     * Gets request_waybill_document
     *
     * @return string|null
     */
    public function getRequestWaybillDocument()
    {
        return $this->container['request_waybill_document'];
    }

    /**
     * Sets request_waybill_document
     *
     * @param string|null $request_waybill_document request_waybill_document
     *
     * @return $this
     */
    public function setRequestWaybillDocument($request_waybill_document)
    {

        if (is_null($request_waybill_document)) {
            throw new \InvalidArgumentException('non-nullable request_waybill_document cannot be null');
        }

        $this->container['request_waybill_document'] = $request_waybill_document;

        return $this;
    }

    /**
     * Gets number_of_waybill_document_copies
     *
     * @return int|null
     */
    public function getNumberOfWaybillDocumentCopies()
    {
        return $this->container['number_of_waybill_document_copies'];
    }

    /**
     * Sets number_of_waybill_document_copies
     *
     * @param int|null $number_of_waybill_document_copies number_of_waybill_document_copies
     *
     * @return $this
     */
    public function setNumberOfWaybillDocumentCopies($number_of_waybill_document_copies)
    {

        if (is_null($number_of_waybill_document_copies)) {
            throw new \InvalidArgumentException('non-nullable number_of_waybill_document_copies cannot be null');
        }

        $this->container['number_of_waybill_document_copies'] = $number_of_waybill_document_copies;

        return $this;
    }

    /**
     * Gets request_dhl_customs_invoice
     *
     * @return string|null
     */
    public function getRequestDhlCustomsInvoice()
    {
        return $this->container['request_dhl_customs_invoice'];
    }

    /**
     * Sets request_dhl_customs_invoice
     *
     * @param string|null $request_dhl_customs_invoice request_dhl_customs_invoice
     *
     * @return $this
     */
    public function setRequestDhlCustomsInvoice($request_dhl_customs_invoice)
    {
        $allowedValues = $this->getRequestDhlCustomsInvoiceAllowableValues();
        if (!is_null($request_dhl_customs_invoice) && !in_array($request_dhl_customs_invoice, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'request_dhl_customs_invoice', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($request_dhl_customs_invoice)) {
            throw new \InvalidArgumentException('non-nullable request_dhl_customs_invoice cannot be null');
        }

        $this->container['request_dhl_customs_invoice'] = $request_dhl_customs_invoice;

        return $this;
    }

    /**
     * Gets dhl_customs_invoice_language
     *
     * @return string|null
     */
    public function getDhlCustomsInvoiceLanguage()
    {
        return $this->container['dhl_customs_invoice_language'];
    }

    /**
     * Sets dhl_customs_invoice_language
     *
     * @param string|null $dhl_customs_invoice_language dhl_customs_invoice_language
     *
     * @return $this
     */
    public function setDhlCustomsInvoiceLanguage($dhl_customs_invoice_language)
    {
        $allowedValues = $this->getDhlCustomsInvoiceLanguageAllowableValues();
        if (!is_null($dhl_customs_invoice_language) && !in_array($dhl_customs_invoice_language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dhl_customs_invoice_language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($dhl_customs_invoice_language)) {
            throw new \InvalidArgumentException('non-nullable dhl_customs_invoice_language cannot be null');
        }

        $this->container['dhl_customs_invoice_language'] = $dhl_customs_invoice_language;

        return $this;
    }

    /**
     * Gets dhl_customs_invoice_type
     *
     * @return string|null
     */
    public function getDhlCustomsInvoiceType()
    {
        return $this->container['dhl_customs_invoice_type'];
    }

    /**
     * Sets dhl_customs_invoice_type
     *
     * @param string|null $dhl_customs_invoice_type dhl_customs_invoice_type
     *
     * @return $this
     */
    public function setDhlCustomsInvoiceType($dhl_customs_invoice_type)
    {
        $allowedValues = $this->getDhlCustomsInvoiceTypeAllowableValues();
        if (!is_null($dhl_customs_invoice_type) && !in_array($dhl_customs_invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'dhl_customs_invoice_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($dhl_customs_invoice_type)) {
            throw new \InvalidArgumentException('non-nullable dhl_customs_invoice_type cannot be null');
        }

        $this->container['dhl_customs_invoice_type'] = $dhl_customs_invoice_type;

        return $this;
    }

    /**
     * Gets request_shipment_receipt
     *
     * @return string|null
     */
    public function getRequestShipmentReceipt()
    {
        return $this->container['request_shipment_receipt'];
    }

    /**
     * Sets request_shipment_receipt
     *
     * @param string|null $request_shipment_receipt request_shipment_receipt
     *
     * @return $this
     */
    public function setRequestShipmentReceipt($request_shipment_receipt)
    {
        $allowedValues = $this->getRequestShipmentReceiptAllowableValues();
        if (!is_null($request_shipment_receipt) && !in_array($request_shipment_receipt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'request_shipment_receipt', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($request_shipment_receipt)) {
            throw new \InvalidArgumentException('non-nullable request_shipment_receipt cannot be null');
        }

        $this->container['request_shipment_receipt'] = $request_shipment_receipt;

        return $this;
    }

    /**
     * Gets customer_logo
     *
     * @return \MyDHL\Model\CustomerLogo|null
     */
    public function getCustomerLogo()
    {
        return $this->container['customer_logo'];
    }

    /**
     * Sets customer_logo
     *
     * @param \MyDHL\Model\CustomerLogo|null $customer_logo customer_logo
     *
     * @return $this
     */
    public function setCustomerLogo($customer_logo)
    {

        if (is_null($customer_logo)) {
            throw new \InvalidArgumentException('non-nullable customer_logo cannot be null');
        }

        $this->container['customer_logo'] = $customer_logo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


