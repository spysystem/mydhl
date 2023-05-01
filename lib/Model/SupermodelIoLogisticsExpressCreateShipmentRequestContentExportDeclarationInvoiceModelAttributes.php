<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceModelAttributes
 *
 * PHP version 7.2
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

/**
 * SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Please provide invoice related information
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceModelAttributes
{
    public string $strNumber = 'number';
    public string $strDate = 'date';
    public string $strSignatureName = 'signature_name';
    public string $strSignatureTitle = 'signature_title';
    public string $strSignatureImage = 'signature_image';
    public string $strInstructions = 'instructions';
    public string $strCustomerDataTextEntries = 'customer_data_text_entries';
    public string $strTotalNetWeight = 'total_net_weight';
    public string $strTotalGrossWeight = 'total_gross_weight';
    public string $strCustomerReferences = 'customer_references';
    public string $strTermsOfPayment = 'terms_of_payment';
    public string $strIndicativeCustomsValues = 'indicative_customs_values';
}

