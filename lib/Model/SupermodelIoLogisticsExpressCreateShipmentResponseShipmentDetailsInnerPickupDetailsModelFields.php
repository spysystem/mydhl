<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelFields
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
 * SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelFields Class Doc Comment
 *
 * @category Class
 * @description Here you can find pickup details
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelFields
{
    public string $strLocalCutoffDateAndTime = 'localCutoffDateAndTime';
    public string $strGmtCutoffTime = 'gmtCutoffTime';
    public string $strCutoffTimeOffset = 'cutoffTimeOffset';
    public string $strPickupEarliest = 'pickupEarliest';
    public string $strPickupLatest = 'pickupLatest';
    public string $strTotalTransitDays = 'totalTransitDays';
    public string $strPickupAdditionalDays = 'pickupAdditionalDays';
    public string $strDeliveryAdditionalDays = 'deliveryAdditionalDays';
    public string $strPickupDayOfWeek = 'pickupDayOfWeek';
    public string $strDeliveryDayOfWeek = 'deliveryDayOfWeek';
}

