# kh-date-converter
Laravel PHP package use to conver en date to khmer date. Ex: 2023-01-01 to ថ្ងៃទី០១ ខែមករា ឆ្នាំ២០២៣

## Installation
You can install the package via composer:
```bash
composer require cambodev/date-converter
```

## Configuration
##### Laravel 5.5 and above
You don't have to do anything else, this package autoloads the Service Provider and create the Alias, using the new Auto-Discovery feature.
Add the Service Provider and Facade alias to your config/app.php

##### Laravel 5.4 and below
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

$dateTime  = KmFormat::to($date);
$dateTime->day(); // ២២
$dateTime->fullDay(); // ពុធ
$dateTime->month(); // ០៥
$dateTime->fullMonth(); // ឧសភា
$dateTime->year(); // ២០១៩
$dateTime->minute(); // ០០
$dateTime->hour(); // ០០
$dateTime->meridiem(); // ព្រឹក
$dateTime->week(); // ៤
$dateTime->fullWeek(); // សប្តាហ៍ទី៤
$dateTime->weekOfYear(); // ២១
$dateTime->fullWeekOfYear(); // សប្តាហ៍ទី២១
$dateTime->quarter(); // ២
$dateTime->fullQuarter(); // ត្រីមាសទី២
```
## Format

| Format | Output |
|:--------| :--------: |
|L		    |០១/១២/ឆ្នាំ២០២៣|
|LL		    |១៧ សីហា ឆ្នាំ២០២៣|
|LLT		|១៧ សីហា ឆ្នាំ២០២៣ ០៥:០០ ល្ងាច|
|LLL		|ព្រហស្បតិ៍ ១៧ សីហា ឆ្នាំ២០២៣|
|LLLT	|ព្រហស្បតិ៍ ១៧ សីហា ឆ្នាំ២០២៣ ០៥:០០ ល្ងាច|
|LLLL	|ថ្ងៃព្រហស្បតិ៍ ទី១៧ ខែសីហា ឆ្នាំ២០២៣|
|LLLLT	|ថ្ងៃព្រហស្បតិ៍ ទី១៧ ខែសីហា ឆ្នាំ២០២៣ ០៥:០០ ល្ងាច|

## License
CamboDev is licensed under the MIT License
