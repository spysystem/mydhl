# # SupermodelIoLogisticsExpressPickupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**planned_pickup_date_and_time** | **string** | Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper&#39;s time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).&lt;BR&gt; |
**close_time** | **string** | The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) | [optional]
**location** | **string** | Provides information on where the package should be picked up by DHL courier. &lt;BR&gt; | [optional]
**location_type** | **string** | Provides information on where the package should be picked up by DHL courier. &lt;BR&gt; | [optional]
**accounts** | [**\MyDHL\Model\SupermodelIoLogisticsExpressAccount[]**](SupermodelIoLogisticsExpressAccount.md) |  |
**special_instructions** | [**\MyDHL\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsInner[]**](SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsInner.md) | Details special pickup instructions you may wish to send to the DHL Courier. | [optional]
**remark** | **string** | Please provide additional pickup remark | [optional]
**customer_details** | [**\MyDHL\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails**](SupermodelIoLogisticsExpressPickupRequestCustomerDetails.md) |  |
**shipment_details** | [**\MyDHL\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsInner[]**](SupermodelIoLogisticsExpressPickupRequestShipmentDetailsInner.md) | Please provide details related to shipment you want to do the pickup for |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
