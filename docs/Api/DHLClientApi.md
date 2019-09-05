# MyDHL\DHLClientApi

All URIs are relative to *https://wsbexpress.dhl.com/rest/sndpt*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestRate**](DHLClientApi.md#requestRate) | **POST** /RateRequest | Requests a Shipment Rate
[**requestShipment**](DHLClientApi.md#requestShipment) | **POST** /ShipmentRequest | Create a Shipment



## requestRate

> \MyDHL\Model\RateResponseResponse requestRate($data)

Requests a Shipment Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = MyDHL\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Api\DHLClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \MyDHL\Model\RateRequestRequest(); // \MyDHL\Model\RateRequestRequest | Rate Request Data

try {
    $result = $apiInstance->requestRate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHLClientApi->requestRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\MyDHL\Model\RateRequestRequest**](../Model/RateRequestRequest.md)| Rate Request Data | [optional]

### Return type

[**\MyDHL\Model\RateResponseResponse**](../Model/RateResponseResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## requestShipment

> \MyDHL\Model\ShipmentRequestResponse requestShipment($data)

Create a Shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = MyDHL\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MyDHL\Api\DHLClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \MyDHL\Model\ShipmentRequestRequest(); // \MyDHL\Model\ShipmentRequestRequest | Shipment Data

try {
    $result = $apiInstance->requestShipment($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DHLClientApi->requestShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\MyDHL\Model\ShipmentRequestRequest**](../Model/ShipmentRequestRequest.md)| Shipment Data | [optional]

### Return type

[**\MyDHL\Model\ShipmentRequestResponse**](../Model/ShipmentRequestResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

