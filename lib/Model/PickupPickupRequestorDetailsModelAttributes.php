<?php
/**
 * PickupPickupRequestorDetailsModelAttributes
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
 * PickupPickupRequestorDetailsModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Please enter address and contact details of the individual requesting the pickup
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PickupPickupRequestorDetailsModelAttributes
{
    public string $strPostalAddress = 'postal_address';
    public string $strContactInformation = 'contact_information';
    public string $strRegistrationNumbers = 'registration_numbers';
    public string $strBankDetails = 'bank_details';
    public string $strTypeCode = 'type_code';
}

