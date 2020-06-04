<?php
namespace AlAdhanApi;

/**
 * Class Endpoints
 * @package AlAdhanApi
 */

class Endpoints {

    /** Timings **/
    const TIMINGS = '/v1/timings';

    const CALENDAR = '/v1/calendar';

    const TIMINGS_CITY = '/v1/timingsByCity';

    const CALENDAR_CITY = '/v1/calendarByCity';

    const TIMINGS_ADDRESS = '/v1/timingsByAddress';

    const CALENDAR_ADDRESS = '/v1/calendarByAddress';

    /** Hijri Calendar **/
    const HIJRI_CALENDAR = '/v1/hijriCalendar';

    const HIJRI_CALENDAR_CITY = '/v1/hijriCalendarByCity';

    const HIJRI_CALENDAR_ADDRESS = '/v1/hijriCalendarByAddress';

    const HIJRI_TO_GREGORIAN_DATE = '/v1/hToG';

    const GREGORIAN_TO_HIJRI_DATE = '/v1/gToH';

    const GREGORIAN_TO_HIJRI_CALENDAR = '/v1/gToHCalendar';

    const HIJRI_TO_GREGORIAN_CALENDAR = '/v1/hToGCalendar';

    const NEXT_HIJRI_HOLIDAY = '/v1/nextHijriHoliday';

    const CURRENT_ISLAMIC_MONTH = '/v1/currentIslamicMonth';

    const CURRENT_ISLAMIC_YEAR = '/v1/currentIslamicYear';

    const RAMADAN_ISLAMIC_YEAR_FROM_GREGORIAN = '/v1/islamicYearFromGregorianForRamadan';

    const HIJRI_HOLIDAYS  = '/v1/hijriHolidays';

    const HIJRI_HOLIDAYS_BY_YEAR = '/v1/islamicHolidaysByHijriYear';

    const SPECIAL_DAYS  = '/v1/specialDays';

    const ISLAMIC_MONTHS  = '/v1/islamicMonths';

    /** Other **/
    const CURRENT_TIME = '/v1/currentTime';

    const CURRENT_TIMESTAMP = '/v1/currentTimestamp';

    const GOOGLE_GEOCODING = 'http://maps.googleapis.com/maps/api/geocode/json';

    const INFO_CITY = '/v1/cityInfo';

    const INFO_ADDRESS = '/v1/addressInfo';







}
