<?php
/**
 * ShipmentInfoModelAttributes
 *
 * PHP version 7.2
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

/**
 * ShipmentInfoModelAttributes Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentInfoModelAttributes
{
    public string $strDropOffType = 'drop_off_type';
    public string $strServiceType = 'service_type';
    public string $strLocalServiceType = 'local_service_type';
    public string $strAccount = 'account';
    public string $strCurrency = 'currency';
    public string $strUnitOfMeasurement = 'unit_of_measurement';
    public string $strShipmentIdentificationNumber = 'shipment_identification_number';
    public string $strUseOwnShipmentIdentificationNumber = 'use_own_shipment_identification_number';
    public string $strLabelType = 'label_type';
    public string $strLabelTemplate = 'label_template';
    public string $strArchiveLabelTemplate = 'archive_label_template';
    public string $strCustomsInvoiceTemplate = 'customs_invoice_template';
    public string $strShipmentReceiptTemplate = 'shipment_receipt_template';
    public string $strPaperlessTradeEnabled = 'paperless_trade_enabled';
    public string $strParentShipmentIdentificationNumber = 'parent_shipment_identification_number';
    public string $strRequestTransliterateResponse = 'request_transliterate_response';
    public string $strRequestAdditionalInformation = 'request_additional_information';
    public string $strBilling = 'billing';
    public string $strDocumentImages = 'document_images';
    public string $strLabelOptions = 'label_options';
    public string $strSpecialServices = 'special_services';
}

