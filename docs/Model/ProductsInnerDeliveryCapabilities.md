# # ProductsInnerDeliveryCapabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_type_code** | **string** | Delivery Date capabilities considering customs clearance days.&lt;BR&gt;                QDDF - is the fastest (\&quot;docs\&quot;) transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered.&lt;BR&gt;                QDDC - constitutes DHL&#39;s service commitment as quoted at booking/shipment creation. QDDc builds in clearance time, and potentially other special operational non-transport component(s), when relevant. | [optional]
**estimated_delivery_date_and_time** | **string** | This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed | [optional]
**destination_service_area_code** | **string** | The DHL Service Area Code for the destination of the Shipment | [optional]
**destination_facility_area_code** | **string** | The DHL Facility Code for the Destination | [optional]
**delivery_additional_days** | **float** | This is additional transit delays (in days) for shipment delivered to the&lt;BR&gt;                mentioned city or postal area following arrival at the service area. | [optional]
**delivery_day_of_week** | **float** | Destination day of the week number | [optional]
**total_transit_days** | **float** | The number of transit days | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
