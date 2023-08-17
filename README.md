# kh-date-converter
Laravel PHP package use to conver en date to khmer date. Ex: 2023-01-01 to ថ្ងៃទី០១ ខែមករា ឆ្នាំ២០២៣

## Installation
You can install the package via composer:
```bash
composer require cambodev/date-converter
```

## Configuration
Add the Service Provider and Facade alias to your config/app.php
```php
CamboDev\DateConverter\ConverterServiceProvider::class,
'KmFormat' => CamboDev\DateConverter\KmFormatFacade::class,
```
## Using
Use the Facade
```php
$date = date('Y-m-d H:i:s');
$dateTime  = KmFormat::to($date)->format("LLLL");

echo $dateTime;
```
## License
CamboDev is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
