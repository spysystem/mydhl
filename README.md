# OpenAPIClient-php

OpenAPI description for the Integration with MyDHL

For more information, please visit [http://spysystem.dk](http://spysystem.dk).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/spysystem/mydhl.git"
    }
  ],
  "require": {
    "spysystem/mydhl": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

```

## API Endpoints

All URIs are relative to *https://wsbexpress.dhl.com/rest/sndpt*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DHLClientApi* | [**requestRate**](docs/Api/DHLClientApi.md#requestrate) | **POST** /RateRequest | Requests a Shipment Rate
*DHLClientApi* | [**requestShipment**](docs/Api/DHLClientApi.md#requestshipment) | **POST** /ShipmentRequest | Create a Shipment

## Models

- [AdditionalInformation](docs/Model/AdditionalInformation.md)
- [Address](docs/Model/Address.md)
- [Billing](docs/Model/Billing.md)
- [Charge](docs/Model/Charge.md)
- [Charges](docs/Model/Charges.md)
- [Commodities](docs/Model/Commodities.md)
- [Contact](docs/Model/Contact.md)
- [CustomerLogo](docs/Model/CustomerLogo.md)
- [Details](docs/Model/Details.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Document](docs/Model/Document.md)
- [DocumentImage](docs/Model/DocumentImage.md)
- [DocumentImages](docs/Model/DocumentImages.md)
- [Documents](docs/Model/Documents.md)
- [ExportDeclaration](docs/Model/ExportDeclaration.md)
- [ExportLineItem](docs/Model/ExportLineItem.md)
- [ExportLineItems](docs/Model/ExportLineItems.md)
- [InternationalDetail](docs/Model/InternationalDetail.md)
- [InvoiceDeclarationText](docs/Model/InvoiceDeclarationText.md)
- [InvoiceDeclarationTexts](docs/Model/InvoiceDeclarationTexts.md)
- [InvoiceSignature](docs/Model/InvoiceSignature.md)
- [LabelImage](docs/Model/LabelImage.md)
- [LabelOptions](docs/Model/LabelOptions.md)
- [Model401Response](docs/Model/Model401Response.md)
- [Notification](docs/Model/Notification.md)
- [OnDemandDeliveryOptions](docs/Model/OnDemandDeliveryOptions.md)
- [PackageResult](docs/Model/PackageResult.md)
- [Packages](docs/Model/Packages.md)
- [PackagesResult](docs/Model/PackagesResult.md)
- [Provider](docs/Model/Provider.md)
- [RateRequest](docs/Model/RateRequest.md)
- [RateRequestPackages](docs/Model/RateRequestPackages.md)
- [RateRequestRequest](docs/Model/RateRequestRequest.md)
- [RateRequestRequestedPackage](docs/Model/RateRequestRequestedPackage.md)
- [RateRequestRequestedShipment](docs/Model/RateRequestRequestedShipment.md)
- [RateRequestResponse](docs/Model/RateRequestResponse.md)
- [RateRequestShip](docs/Model/RateRequestShip.md)
- [RateRequestStakeHolder](docs/Model/RateRequestStakeHolder.md)
- [RateResponse](docs/Model/RateResponse.md)
- [Reason](docs/Model/Reason.md)
- [RegistrationNumber](docs/Model/RegistrationNumber.md)
- [RegistrationNumbers](docs/Model/RegistrationNumbers.md)
- [Request](docs/Model/Request.md)
- [RequestedPackage](docs/Model/RequestedPackage.md)
- [RequestedShipment](docs/Model/RequestedShipment.md)
- [Response](docs/Model/Response.md)
- [ResponseContact](docs/Model/ResponseContact.md)
- [ResponseShip](docs/Model/ResponseShip.md)
- [ResponseSteakHolder](docs/Model/ResponseSteakHolder.md)
- [Service](docs/Model/Service.md)
- [ServiceArea](docs/Model/ServiceArea.md)
- [ServiceHeader](docs/Model/ServiceHeader.md)
- [Ship](docs/Model/Ship.md)
- [ShipmentInfo](docs/Model/ShipmentInfo.md)
- [ShipmentNotification](docs/Model/ShipmentNotification.md)
- [ShipmentNotifications](docs/Model/ShipmentNotifications.md)
- [ShipmentRequest](docs/Model/ShipmentRequest.md)
- [ShipmentRequestRequest](docs/Model/ShipmentRequestRequest.md)
- [ShipmentRequestResponse](docs/Model/ShipmentRequestResponse.md)
- [ShipmentResponse](docs/Model/ShipmentResponse.md)
- [SpecialService](docs/Model/SpecialService.md)
- [SpecialServices](docs/Model/SpecialServices.md)
- [StakeHolder](docs/Model/StakeHolder.md)
- [TotalChargeType](docs/Model/TotalChargeType.md)
- [TotalChargeTypes](docs/Model/TotalChargeTypes.md)
- [TotalNet](docs/Model/TotalNet.md)
- [Weight](docs/Model/Weight.md)

## Authorization

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

thomas@spysystem.dk

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
