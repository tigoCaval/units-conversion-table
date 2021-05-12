# UNITS CONVERSION TABLE
CONVERSION TABLE OF UNITS OF LENGTH

- This package can be used with any PHP application or Frameworks/PHP.
- Download package: ```composer require tigo/units-conversion```
- MIT license. ***Feel free to use this project***. ***Leave a star :star: or make a fork !***

*If you found this project useful, consider making a donation to support the developer.* 

[![paypal](https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=5SCQFF9FDUYNW)
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/donate?hosted_button_id=XLUUH8EL85UXE)

## Identification code (Unit of length)
```
Directory: ..\src\Length\StandardUnit.php
```
* Hectometer = 1 
* Dekameter = 2
* Meter = 3
* Decimeter = 4
* Centimeter = 5
* Millimeter = 6
* Yard = 7
* Feet = 8
* Inche = 9
* Kilometer = 10
## Introduction
Somewhere in your project, you may need to use autoload
 ```php
 include __DIR__ ."/vendor/autoload.php";
 ```
 Example: CONVERSION TABLE OF UNITS OF LENGTH
 ```php
    use Tigo\UnitsConversion\ClientLength; //import class 
    $client = new ClientLength();
    /**
      Example: Converting kilometer to meter
      $client->convert(kilometer, meter, value)
    **/
    print_r($client->convert(10, 3, 23)) // result: 23000 (meter)
    
    /**
      Example: Converting Yard to Inche
      $client->convert(yard, inche, value)
    **/
    print_r($client->convert(7, 9, 23)) // result: 828 (inche)
 ```
### Supporting this project
If you are interested in supporting this project, you can help in many ways. Leave a star :star: or make a donation of any value.

### Sponsor supporting this project
- []
### Contributors
 - [Tiago A C Pereira](https://github.com/tigoCaval) 
 - [list of contributors](https://github.com/tigoCaval/units-conversion-table/graphs/contributors)
### License
MIT license. See the archive [License](https://github.com/tigoCaval/units-conversion-table/blob/main/LICENSE)
