<?php
/**
 * RequestedShipmentModelAttributes
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
 * RequestedShipmentModelAttributes Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RequestedShipmentModelAttributes
{
    public string $strShipTimestamp = 'ship_timestamp';
    public string $strPickupLocationCloseTime = 'pickup_location_close_time';
    public string $strSpecialPickupInstruction = 'special_pickup_instruction';
    public string $strPickupLocation = 'pickup_location';
    public string $strPaymentInfo = 'payment_info';
    public string $strOnDemandDeliveryUrlRequest = 'on_demand_delivery_url_request';
    public string $strGetRateEstimates = 'get_rate_estimates';
    public string $strShipmentInfo = 'shipment_info';
    public string $strInternationalDetail = 'international_detail';
    public string $strOnDemandDeliveryOptions = 'on_demand_delivery_options';
    public string $strShip = 'ship';
    public string $strPackages = 'packages';
    public string $strShipmentNotifications = 'shipment_notifications';
    public string $strDeclaredValue = 'declared_value';
    public string $strDeclaredValueCurrecyCode = 'declared_value_currecy_code';
}
