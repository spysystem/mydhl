<?php
/**
 * SupermodelIoLogisticsExpressLandedCostRequestModelAttributes
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
 * SupermodelIoLogisticsExpressLandedCostRequestModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Landed cost request model description
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupermodelIoLogisticsExpressLandedCostRequestModelAttributes
{
    public string $strCustomerDetails = 'customer_details';
    public string $strAccounts = 'accounts';
    public string $strProductCode = 'product_code';
    public string $strLocalProductCode = 'local_product_code';
    public string $strUnitOfMeasurement = 'unit_of_measurement';
    public string $strCurrencyCode = 'currency_code';
    public string $strIsCustomsDeclarable = 'is_customs_declarable';
    public string $strIsDtpRequested = 'is_dtp_requested';
    public string $strIsInsuranceRequested = 'is_insurance_requested';
    public string $strGetCostBreakdown = 'get_cost_breakdown';
    public string $strCharges = 'charges';
    public string $strShipmentPurpose = 'shipment_purpose';
    public string $strTransportationMode = 'transportation_mode';
    public string $strMerchantSelectedCarrierName = 'merchant_selected_carrier_name';
    public string $strPackages = 'packages';
    public string $strItems = 'items';
    public string $strGetTariffFormula = 'get_tariff_formula';
    public string $strGetQuotationId = 'get_quotation_id';
}
