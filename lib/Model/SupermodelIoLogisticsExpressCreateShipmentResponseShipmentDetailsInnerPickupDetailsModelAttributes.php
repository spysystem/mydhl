<?php
/**
 * SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelAttributes
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
 * SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Here you can find pickup details
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsInnerPickupDetailsModelAttributes
{
    public string $strLocalCutoffDateAndTime = 'local_cutoff_date_and_time';
    public string $strGmtCutoffTime = 'gmt_cutoff_time';
    public string $strCutoffTimeOffset = 'cutoff_time_offset';
    public string $strPickupEarliest = 'pickup_earliest';
    public string $strPickupLatest = 'pickup_latest';
    public string $strTotalTransitDays = 'total_transit_days';
    public string $strPickupAdditionalDays = 'pickup_additional_days';
    public string $strDeliveryAdditionalDays = 'delivery_additional_days';
    public string $strPickupDayOfWeek = 'pickup_day_of_week';
    public string $strDeliveryDayOfWeek = 'delivery_day_of_week';
}
