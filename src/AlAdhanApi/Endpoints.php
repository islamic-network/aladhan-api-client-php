<?php
namespace AlAdhanApi;

/**
 * Class Endpoints
 * @package AlAdhanApi
 */

class Endpoints {

    /**
     *
     */
    const TIMINGS = 'http://api.aladhan.com/timings';

    /**
     *
     */
    const CALENDAR = 'http://api.aladhan.com/calendar';

    /**
     *
     */
    const CURRENT_TIME = 'http://api.aladhan.com/currentTime';

    /**
     *
     */
    const CURRENT_TIMESTAMP = 'http://api.aladhan.com/currentTimestamp';

    /**
     *
     */
    const GOOGLE_GEOCODING = 'http://maps.googleapis.com/maps/api/geocode/json';

    /**
     *
     */
    const INFO_CITY = 'http://api.aladhan.com/cityInfo';

    /**
     *
     */
    const INFO_ADDRESS = 'http://api.aladhan.com/addressInfo';

    /**
     *
     */
    const TIMINGS_CITY = 'http://api.aladhan.com/timingsByCity';

    /**
     *
     */
    const CALENDAR_CITY = 'http://api.aladhan.com/calendarByCity';

    /**
     *
     */
    const TIMINGS_ADDRESS = 'http://api.aladhan.com/timingsByAddress';

    /**
     *
     */
    const CALENDAR_ADDRESS = 'http://api.aladhan.com/calendarByAddress';

    const HIJRI_TO_GREGORIAN_DATE = 'http://api.aladhan.com/hToG';

    const GREGORIAN_TO_HIJRI_DATE = 'http://api.aladhan.com/gToH';

    const GREGORIAN_TO_HIJRI_CALENDAR = 'http://api.aladhan.com/gToHCalendar';

    const HIJRI_TO_GREGORIAN_CALENDAR = 'http://api.aladhan.com/hToGCalendar';

    const NEXT_HIJRI_HOLIDAY = 'http://api.aladhan.com/nextHijriHoliday';

    const CURRENT_ISLAMIC_MONTH = 'http://api.aladhan.com/currentIslamicMonth';

    const CURRENT_ISLAMIC_YEAR = 'http://api.aladhan.com/currentIslamicYear';

    const RAMADAN_ISLAMIC_YEAR_FROM_GREGORIAN = 'http://api.aladhan.com/islamicYearFromGregorianForRamadan';
}
