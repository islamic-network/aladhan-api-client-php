### AlAdhan Prayer Times API Client (PHP)
This is a PHP API client that uses the rest API at aladhan.com to generate prayer times for Islamic prayers.

For more information, please visit http://aladhan.com/rest-api.

### Installation
The API Client is a composer package. To use it, you need to run the following:
```
composer require aladhan/api-client
```

### Usage

#### Generating Prayer Times for a Given Day
To get prayer times for a given day, use:
```
$t = new \AlAdhanApi\Times($unix_timestamp , $timezone, $latitude, $longitude, $method);
$times = $t->get();
```

You can also do this by city:

```
$t = new \AlAdhanApi\TimesByCity('Dubai' , 'United Arab Emirates', $timestamp);
$times = $t->get();
```
The $unix_timestamp is a timestamp from the day you want prayer times for. Valid $timezones are listed @ http://php.net/manual/en/timezones.php. See the Getting Co-ordinates below for getting $latitude and $longitude. The $method options can be seen in the Methods class.

This will return hthe JSON output as shown on @ http://aladhan.com/rest-api#endpointTimings.

#### Generating prayer times for a given month:
To get a list of prayer times for an entire month in a given year, use:
```
$c = new \AlAdhanApi\Calendar($month, $year, $timezone, $latitude, $longitude);
$calendar = $c->get();
```

You can also do this by city:
```
$c = new \AlAdhanApi\CalendarByCity('Dubai', 'United Arab Emirates', $month, $year);
$calendar = $c->get();
```

### Getting Latitude and Longitude Co-ordinates
There's also a Location class included with this API that uses Google's geocoding API to convert an address into co-ordinates. Google's API has a free limit (but you need to be making thousands of requests a day for this to kick in), and then they'll cut you off unless you get a license. In any case, this should be sufficient for more people. If you will be making millions of requests, there are other ways to do this. Just get in touch if you need help.

```
$l = new \AlAdhanApi\Location('Sultanahmet Mosque, Istanbul, Turkey'); // Use a location of your choice here.
$latitude = $l->latitude;
$longitude = $l->longitude;
```
You can now use the above values with the Times or Calendar class to get your prayer times.

### Authors and Contributors
Meezaan-ud-Din Abdu Dhil-Jalali Wal-Ikram (@meezaan).

### Support or Contact
For support, please visit http://aladhan.com/rest-api or http://aladhan.com/contact.
