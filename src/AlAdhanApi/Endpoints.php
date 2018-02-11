<?php
namespace AlAdhanApi;

/**
 * Class Endpoints
 * @package AlAdhanApi
 */

class Endpoints {

    const TIMINGS = 'http://api.aladhan.com/v1/timings';

    const CALENDAR = 'http://api.aladhan.com/v1/calendar';

    const HIJRI_CALENDAR = 'http://api.aladhan.com/v1/hijriCalendar';

    const CURRENT_TIME = 'http://api.aladhan.com/v1/currentTime';

    const CURRENT_TIMESTAMP = 'http://api.aladhan.com/v1/currentTimestamp';

    const GOOGLE_GEOCODING = 'http://maps.googleapis.com/maps/api/geocode/json';

    const INFO_CITY = 'http://api.aladhan.com/v1/cityInfo';

    const INFO_ADDRESS = 'http://api.aladhan.com/v1/addressInfo';

    const TIMINGS_CITY = 'http://api.aladhan.com/v1/timingsByCity';

    const CALENDAR_CITY = 'http://api.aladhan.com/v1/calendarByCity';

    const HIJRI_CALENDAR_CITY = 'http://api.aladhan.com/v1/hijriCalendarByCity';

    const TIMINGS_ADDRESS = 'http://api.aladhan.com/v1/timingsByAddress';

    const CALENDAR_ADDRESS = 'http://api.aladhan.com/v1/calendarByAddress';

    const HIJRI_CALENDAR_ADDRESS = 'http://api.aladhan.com/v1/hijriCalendarByAddress';

    const HIJRI_TO_GREGORIAN_DATE = 'http://api.aladhan.com/v1/hToG';

    const GREGORIAN_TO_HIJRI_DATE = 'http://api.aladhan.com/v1/gToH';

    const GREGORIAN_TO_HIJRI_CALENDAR = 'http://api.aladhan.com/v1/gToHCalendar';

    const HIJRI_TO_GREGORIAN_CALENDAR = 'http://api.aladhan.com/v1/hToGCalendar';

    const NEXT_HIJRI_HOLIDAY = 'http://api.aladhan.com/v1/nextHijriHoliday';

    const CURRENT_ISLAMIC_MONTH = 'http://api.aladhan.com/v1/currentIslamicMonth';

    const CURRENT_ISLAMIC_YEAR = 'http://api.aladhan.com/v1/currentIslamicYear';

    const RAMADAN_ISLAMIC_YEAR_FROM_GREGORIAN = 'http://api.aladhan.com/v1/islamicYearFromGregorianForRamadan';
    const HIJRI_HOLIDAYS  = 'http://api.aladhan.com/v1/hijriHolidays';
    const SPECIAL_DAYS  = 'http://api.aladhan.com/v1/specialDays';
    const ISLAMIC_MONTHS  = 'http://api.aladhan.com/v1/islamicMonths';
}
