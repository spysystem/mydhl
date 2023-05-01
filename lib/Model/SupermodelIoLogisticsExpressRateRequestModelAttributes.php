<?php
/**
 * SupermodelIoLogisticsExpressRateRequestModelAttributes
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
 * SupermodelIoLogisticsExpressRateRequestModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Definition of /rates request message
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupermodelIoLogisticsExpressRateRequestModelAttributes
{
    public string $strCustomerDetails = 'customer_details';
    public string $strAccounts = 'accounts';
    public string $strProductCode = 'product_code';
    public string $strLocalProductCode = 'local_product_code';
    public string $strValueAddedServices = 'value_added_services';
    public string $strProductsAndServices = 'products_and_services';
    public string $strPayerCountryCode = 'payer_country_code';
    public string $strPlannedShippingDateAndTime = 'planned_shipping_date_and_time';
    public string $strUnitOfMeasurement = 'unit_of_measurement';
    public string $strIsCustomsDeclarable = 'is_customs_declarable';
    public string $strMonetaryAmount = 'monetary_amount';
    public string $strRequestAllValueAddedServices = 'request_all_value_added_services';
    public string $strEstimatedDeliveryDate = 'estimated_delivery_date';
    public string $strGetAdditionalInformation = 'get_additional_information';
    public string $strReturnStandardProductsOnly = 'return_standard_products_only';
    public string $strNextBusinessDay = 'next_business_day';
    public string $strProductTypeCode = 'product_type_code';
    public string $strPackages = 'packages';
}

