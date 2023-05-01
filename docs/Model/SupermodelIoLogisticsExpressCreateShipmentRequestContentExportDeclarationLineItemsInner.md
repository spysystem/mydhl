# # SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **int** | Please provide line item number |
**description** | **string** | Please provide description of the line item |
**price** | **float** | Please provide unit or article price line item value |
**quantity** | [**\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerQuantity**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerQuantity.md) |  |
**commodity_codes** | [**\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCommodityCodesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCommodityCodesInner.md) | Please provide Commodity codes for the shipment at item line level | [optional]
**export_reason_type** | **string** | Please provide the reason for export | [optional]
**manufacturer_country** | **string** | Please enter two letter ISO manufacturer country code |
**export_control_classification_number** | **string** | Please enter Export Control Classification Number info&lt;BR&gt;                    This is required for EEI filing US country usage | [optional]
**weight** | [**\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerWeight**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerWeight.md) |  |
**is_taxes_paid** | **bool** | Please provide if the Taxes is paid for the line item | [optional]
**additional_information** | **string[]** | Please provide the additional information | [optional]
**customer_references** | [**\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomerReferencesInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomerReferencesInner.md) | Please provide the Customer References for the line item | [optional]
**customs_documents** | [**\MyDHL\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomsDocumentsInner[]**](SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsInnerCustomsDocumentsInner.md) | Please provide the customs documents details | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
