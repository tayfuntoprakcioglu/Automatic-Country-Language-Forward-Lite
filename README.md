# Automatic Country Language Forward Lite
Automatic language routing based on location, simple and customizable.

# Setup
Set the Automatic Language Forward Lite page as index.php. Your visitors should see this page first.

# Settings
It is very simple to add a language forwarding page, specify the address you will forward to with a single line.</br></br>Sample:
```php
"country-code" => "/url-address/",
```

Adding multiple languages. You can add unlimited languages and direct them.</br></br>Sample:
```php
$country = array(
"country-code" => "/url-address/",  
"country-code" => "/url-address/",
"country-code" => "/url-address/",
.
.
.
);
```

Set your default address page. Define a default address that you will automatically forward to countries where you do not provide language support.</br></br>Sample:
```php
$language = 'default-address-country-code';
```

# Country Language Codes
The countries you are viewing at the bottom are listed according to their codes.</br>

| Country   | Code |
| ------------- | ------------- |
| U.A.E (United Arab Emirates)|ae| 
| Albania|al| 
| Armenia|am| 
| Argentina|ar| 
| Austria|at| 
| Australia|au| 
| Azerbaijan|az| 
| Bosnia and Herzegovina|ba| 
| Belgium|be| 	
| Bulgaria|bg| 
| Bahrain|bh| 
| Bolivia|bo|
| Brazil|br|
| Canada|ca|
| Switzerland|ch|
| Chile|cl|
| China	|cn|
| Colombia|co|
| Costa Rica|cr|
| Czech Republic|cz|
| Germany|de|
| Denmark|dk|
| Dominican Republic|do|
| Algeria|dz|
| Ecuador|ec|
| Estonia|ee|
| Spain|es|
| Egypt|eg|
| Finland|fi|
| France|fr|
| United Kingdom|gb|
| Georgia|ge|
| Greece|gr|
| Guatemala|gt|
| Hong Kong S.A.R.|	hk|
| Honduras|hn|
| Croatia|hr|
| Hungary|hu|
| Indonesia|id|
| Ireland|ie|
| Israel|il|
| India|in
| Iraq|	iq|
| Iran|	ir|
| Iceland|is|
| Italy|it|
| Jordan|jo|
| Japan|jp|
| Kenya|ke|
| Korea|kr|
| Kuwait|kw|
| Lebanon|lb|
| Lithuania|lt|
| Latvia|lv|
| Luxembourg|lu|
| Libya|ly|
| Morocco|ma|
| Former Yugoslav Republic of Macedonia|mk|
| Malta|mt|
| Malaysia|my|
| Mexico|mx	|
| Nicaragua|ni|
| Netherlands|nl|
| New Zealand|nz|
| Norway|no|
| Oman|om|
| Panama|pa|
| Peru|pe|
| Republic of the Philippines|ph|
| Poland|	pl
| Islamic Republic of Pakistan|pk|
| Puerto Rico|pr|
| Portugal|pt|
| Paraguay|py|
| Qatar|qa|
| Romania|ro|
| Russia|ru|
| Saudi Arabia|sa|
| Sweden|se|
| Singapore|sg|
| Slovakia|sk|
| Slovenia|sl|
| Serbia|sp|
| El Salvador|sv|
| Syria|sy|
| Taiwan|tw|
| Thailand|th|	
| Tunisia|tn|
| Turkey|tr|
| Ukraine|ua|
| United States|us|	
| Vietnam|vn|
| Yemen|ye|	
| South Africa|za|

</br></br></br>This version was used in 2015. It was revised and uploaded to GitHub in 2023.