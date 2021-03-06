<?php

namespace NNV\TimeZoneDB;

class TimeZones
{
    /**
     * List of time zones
     * @var array
     */
    private $timeZones;

    public function __construct()
    {
        $this->timeZones = [
            "Asia/Kabul" => [
                "name" => "Afghanistan",
                "code" => "AF",
            ],
            "Europe/Mariehamn" => [
                "name" => "Aland Islands",
                "code" => "AX",
            ],
            "Europe/Tirane" => [
                "name" => "Albania",
                "code" => "AL",
            ],
            "Africa/Algiers" => [
                "name" => "Algeria",
                "code" => "DZ",
            ],
            "Pacific/Pago_Pago" => [
                "name" => "American Samoa",
                "code" => "AS",
            ],
            "Europe/Andorra" => [
                "name" => "Andorra",
                "code" => "AD",
            ],
            "Africa/Luanda" => [
                "name" => "Angola",
                "code" => "AO",
            ],
            "America/Anguilla" => [
                "name" => "Anguilla",
                "code" => "AI",
            ],
            "Antarctica/Casey" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Davis" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/DumontDUrville" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Mawson" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/McMurdo" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Palmer" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Rothera" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Syowa" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Troll" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "Antarctica/Vostok" => [
                "name" => "Antarctica",
                "code" => "AQ",
            ],
            "America/Antigua" => [
                "name" => "Antigua and Barbuda",
                "code" => "AG",
            ],
            "America/Argentina/Buenos_Aires" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Catamarca" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Cordoba" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Jujuy" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/La_Rioja" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Mendoza" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Rio_Gallegos" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Salta" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/San_Juan" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/San_Luis" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Tucuman" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "America/Argentina/Ushuaia" => [
                "name" => "Argentina",
                "code" => "AR",
            ],
            "Asia/Yerevan" => [
                "name" => "Armenia",
                "code" => "AM",
            ],
            "America/Aruba" => [
                "name" => "Aruba",
                "code" => "AW",
            ],
            "Antarctica/Macquarie" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Adelaide" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Brisbane" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Broken_Hill" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Currie" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Darwin" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Eucla" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Hobart" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Lindeman" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Lord_Howe" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Melbourne" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Perth" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Australia/Sydney" => [
                "name" => "Australia",
                "code" => "AU",
            ],
            "Europe/Vienna" => [
                "name" => "Austria",
                "code" => "AT",
            ],
            "Asia/Baku" => [
                "name" => "Azerbaijan",
                "code" => "AZ",
            ],
            "America/Nassau" => [
                "name" => "Bahamas",
                "code" => "BS",
            ],
            "Asia/Bahrain" => [
                "name" => "Bahrain",
                "code" => "BH",
            ],
            "Asia/Dhaka" => [
                "name" => "Bangladesh",
                "code" => "BD",
            ],
            "America/Barbados" => [
                "name" => "Barbados",
                "code" => "BB",
            ],
            "Europe/Minsk" => [
                "name" => "Belarus",
                "code" => "BY",
            ],
            "Europe/Brussels" => [
                "name" => "Belgium",
                "code" => "BE",
            ],
            "America/Belize" => [
                "name" => "Belize",
                "code" => "BZ",
            ],
            "Africa/Porto-Novo" => [
                "name" => "Benin",
                "code" => "BJ",
            ],
            "Atlantic/Bermuda" => [
                "name" => "Bermuda",
                "code" => "BM",
            ],
            "Asia/Thimphu" => [
                "name" => "Bhutan",
                "code" => "BT",
            ],
            "America/La_Paz" => [
                "name" => "Bolivia",
                "code" => "BO",
            ],
            "America/Kralendijk" => [
                "name" => "Bonaire, Saint Eustatius and Saba",
                "code" => "BQ",
            ],
            "Europe/Sarajevo" => [
                "name" => "Bosnia and Herzegovina",
                "code" => "BA",
            ],
            "Africa/Gaborone" => [
                "name" => "Botswana",
                "code" => "BW",
            ],
            "America/Araguaina" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Bahia" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Belem" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Boa_Vista" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Campo_Grande" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Cuiaba" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Eirunepe" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Fortaleza" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Maceio" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Manaus" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Noronha" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Porto_Velho" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Recife" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Rio_Branco" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Santarem" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "America/Sao_Paulo" => [
                "name" => "Brazil",
                "code" => "BR",
            ],
            "Indian/Chagos" => [
                "name" => "British Indian Ocean Territory",
                "code" => "IO",
            ],
            "America/Tortola" => [
                "name" => "British Virgin Islands",
                "code" => "VG",
            ],
            "Asia/Brunei" => [
                "name" => "Brunei",
                "code" => "BN",
            ],
            "Europe/Sofia" => [
                "name" => "Bulgaria",
                "code" => "BG",
            ],
            "Africa/Ouagadougou" => [
                "name" => "Burkina Faso",
                "code" => "BF",
            ],
            "Africa/Bujumbura" => [
                "name" => "Burundi",
                "code" => "BI",
            ],
            "Asia/Phnom_Penh" => [
                "name" => "Cambodia",
                "code" => "KH",
            ],
            "Africa/Douala" => [
                "name" => "Cameroon",
                "code" => "CM",
            ],
            "America/Atikokan" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Blanc-Sablon" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Cambridge_Bay" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Creston" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Dawson" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Dawson_Creek" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Edmonton" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Fort_Nelson" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Glace_Bay" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Goose_Bay" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Halifax" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Inuvik" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Iqaluit" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Moncton" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Nipigon" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Pangnirtung" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Rainy_River" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Rankin_Inlet" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Regina" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Resolute" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/St_Johns" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Swift_Current" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Thunder_Bay" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Toronto" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Vancouver" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Whitehorse" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Winnipeg" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "America/Yellowknife" => [
                "name" => "Canada",
                "code" => "CA",
            ],
            "Atlantic/Cape_Verde" => [
                "name" => "Cape Verde",
                "code" => "CV",
            ],
            "America/Cayman" => [
                "name" => "Cayman Islands",
                "code" => "KY",
            ],
            "Africa/Bangui" => [
                "name" => "Central African Republic",
                "code" => "CF",
            ],
            "Africa/Ndjamena" => [
                "name" => "Chad",
                "code" => "TD",
            ],
            "America/Punta_Arenas" => [
                "name" => "Chile",
                "code" => "CL",
            ],
            "America/Santiago" => [
                "name" => "Chile",
                "code" => "CL",
            ],
            "Pacific/Easter" => [
                "name" => "Chile",
                "code" => "CL",
            ],
            "Asia/Shanghai" => [
                "name" => "China",
                "code" => "CN",
            ],
            "Asia/Urumqi" => [
                "name" => "China",
                "code" => "CN",
            ],
            "Indian/Christmas" => [
                "name" => "Christmas Island",
                "code" => "CX",
            ],
            "Indian/Cocos" => [
                "name" => "Cocos Islands",
                "code" => "CC",
            ],
            "America/Bogota" => [
                "name" => "Colombia",
                "code" => "CO",
            ],
            "Indian/Comoro" => [
                "name" => "Comoros",
                "code" => "KM",
            ],
            "Pacific/Rarotonga" => [
                "name" => "Cook Islands",
                "code" => "CK",
            ],
            "America/Costa_Rica" => [
                "name" => "Costa Rica",
                "code" => "CR",
            ],
            "Europe/Zagreb" => [
                "name" => "Croatia",
                "code" => "HR",
            ],
            "America/Havana" => [
                "name" => "Cuba",
                "code" => "CU",
            ],
            "America/Curacao" => [
                "name" => "Cura??ao",
                "code" => "CW",
            ],
            "Asia/Famagusta" => [
                "name" => "Cyprus",
                "code" => "CY",
            ],
            "Asia/Nicosia" => [
                "name" => "Cyprus",
                "code" => "CY",
            ],
            "Europe/Prague" => [
                "name" => "Czech Republic",
                "code" => "CZ",
            ],
            "Africa/Kinshasa" => [
                "name" => "Democratic Republic of the Congo",
                "code" => "CD",
            ],
            "Africa/Lubumbashi" => [
                "name" => "Democratic Republic of the Congo",
                "code" => "CD",
            ],
            "Europe/Copenhagen" => [
                "name" => "Denmark",
                "code" => "DK",
            ],
            "Africa/Djibouti" => [
                "name" => "Djibouti",
                "code" => "DJ",
            ],
            "America/Dominica" => [
                "name" => "Dominica",
                "code" => "DM",
            ],
            "America/Santo_Domingo" => [
                "name" => "Dominican Republic",
                "code" => "DO",
            ],
            "Asia/Dili" => [
                "name" => "East Timor",
                "code" => "TL",
            ],
            "America/Guayaquil" => [
                "name" => "Ecuador",
                "code" => "EC",
            ],
            "Pacific/Galapagos" => [
                "name" => "Ecuador",
                "code" => "EC",
            ],
            "Africa/Cairo" => [
                "name" => "Egypt",
                "code" => "EG",
            ],
            "America/El_Salvador" => [
                "name" => "El Salvador",
                "code" => "SV",
            ],
            "Africa/Malabo" => [
                "name" => "Equatorial Guinea",
                "code" => "GQ",
            ],
            "Africa/Asmara" => [
                "name" => "Eritrea",
                "code" => "ER",
            ],
            "Europe/Tallinn" => [
                "name" => "Estonia",
                "code" => "EE",
            ],
            "Africa/Addis_Ababa" => [
                "name" => "Ethiopia",
                "code" => "ET",
            ],
            "Atlantic/Stanley" => [
                "name" => "Falkland Islands",
                "code" => "FK",
            ],
            "Atlantic/Faroe" => [
                "name" => "Faroe Islands",
                "code" => "FO",
            ],
            "Pacific/Fiji" => [
                "name" => "Fiji",
                "code" => "FJ",
            ],
            "Europe/Helsinki" => [
                "name" => "Finland",
                "code" => "FI",
            ],
            "Europe/Paris" => [
                "name" => "France",
                "code" => "FR",
            ],
            "America/Cayenne" => [
                "name" => "French Guiana",
                "code" => "GF",
            ],
            "Pacific/Gambier" => [
                "name" => "French Polynesia",
                "code" => "PF",
            ],
            "Pacific/Marquesas" => [
                "name" => "French Polynesia",
                "code" => "PF",
            ],
            "Pacific/Tahiti" => [
                "name" => "French Polynesia",
                "code" => "PF",
            ],
            "Indian/Kerguelen" => [
                "name" => "French Southern Territories",
                "code" => "TF",
            ],
            "Africa/Libreville" => [
                "name" => "Gabon",
                "code" => "GA",
            ],
            "Africa/Banjul" => [
                "name" => "Gambia",
                "code" => "GM",
            ],
            "Asia/Tbilisi" => [
                "name" => "Georgia",
                "code" => "GE",
            ],
            "Europe/Berlin" => [
                "name" => "Germany",
                "code" => "DE",
            ],
            "Europe/Busingen" => [
                "name" => "Germany",
                "code" => "DE",
            ],
            "Africa/Accra" => [
                "name" => "Ghana",
                "code" => "GH",
            ],
            "Europe/Gibraltar" => [
                "name" => "Gibraltar",
                "code" => "GI",
            ],
            "Europe/Athens" => [
                "name" => "Greece",
                "code" => "GR",
            ],
            "America/Danmarkshavn" => [
                "name" => "Greenland",
                "code" => "GL",
            ],
            "America/Godthab" => [
                "name" => "Greenland",
                "code" => "GL",
            ],
            "America/Scoresbysund" => [
                "name" => "Greenland",
                "code" => "GL",
            ],
            "America/Thule" => [
                "name" => "Greenland",
                "code" => "GL",
            ],
            "America/Grenada" => [
                "name" => "Grenada",
                "code" => "GD",
            ],
            "America/Guadeloupe" => [
                "name" => "Guadeloupe",
                "code" => "GP",
            ],
            "Pacific/Guam" => [
                "name" => "Guam",
                "code" => "GU",
            ],
            "America/Guatemala" => [
                "name" => "Guatemala",
                "code" => "GT",
            ],
            "Europe/Guernsey" => [
                "name" => "Guernsey",
                "code" => "GG",
            ],
            "Africa/Conakry" => [
                "name" => "Guinea",
                "code" => "GN",
            ],
            "Africa/Bissau" => [
                "name" => "Guinea-Bissau",
                "code" => "GW",
            ],
            "America/Guyana" => [
                "name" => "Guyana",
                "code" => "GY",
            ],
            "America/Port-au-Prince" => [
                "name" => "Haiti",
                "code" => "HT",
            ],
            "America/Tegucigalpa" => [
                "name" => "Honduras",
                "code" => "HN",
            ],
            "Asia/Hong_Kong" => [
                "name" => "Hong Kong",
                "code" => "HK",
            ],
            "Europe/Budapest" => [
                "name" => "Hungary",
                "code" => "HU",
            ],
            "Atlantic/Reykjavik" => [
                "name" => "Iceland",
                "code" => "IS",
            ],
            "Asia/Kolkata" => [
                "name" => "India",
                "code" => "IN",
            ],
            "Asia/Jakarta" => [
                "name" => "Indonesia",
                "code" => "ID",
            ],
            "Asia/Jayapura" => [
                "name" => "Indonesia",
                "code" => "ID",
            ],
            "Asia/Makassar" => [
                "name" => "Indonesia",
                "code" => "ID",
            ],
            "Asia/Pontianak" => [
                "name" => "Indonesia",
                "code" => "ID",
            ],
            "Asia/Tehran" => [
                "name" => "Iran",
                "code" => "IR",
            ],
            "Asia/Baghdad" => [
                "name" => "Iraq",
                "code" => "IQ",
            ],
            "Europe/Dublin" => [
                "name" => "Ireland",
                "code" => "IE",
            ],
            "Europe/Isle_of_Man" => [
                "name" => "Isle of Man",
                "code" => "IM",
            ],
            "Asia/Jerusalem" => [
                "name" => "Israel",
                "code" => "IL",
            ],
            "Europe/Rome" => [
                "name" => "Italy",
                "code" => "IT",
            ],
            "Africa/Abidjan" => [
                "name" => "Ivory Coast",
                "code" => "CI",
            ],
            "America/Jamaica" => [
                "name" => "Jamaica",
                "code" => "JM",
            ],
            "Asia/Tokyo" => [
                "name" => "Japan",
                "code" => "JP",
            ],
            "Europe/Jersey" => [
                "name" => "Jersey",
                "code" => "JE",
            ],
            "Asia/Amman" => [
                "name" => "Jordan",
                "code" => "JO",
            ],
            "Asia/Almaty" => [
                "name" => "Kazakhstan",
                "code" => "KZ",
            ],
            "Asia/Aqtau" => [
                "name" => "Kazakhstan",
                "code" => "KZ",
            ],
            "Asia/Aqtobe" => [
                "name" => "Kazakhstan",
                "code" => "KZ",
            ],
            "Asia/Atyrau" => [
                "name" => "Kazakhstan",
                "code" => "KZ",
            ],
            "Asia/Oral" => [
                "name" => "Kazakhstan",
                "code" => "KZ",
            ],
            "Asia/Qyzylorda" => [
                "name" => "Kazakhstan",
                "code" => "KZ",
            ],
            "Africa/Nairobi" => [
                "name" => "Kenya",
                "code" => "KE",
            ],
            "Pacific/Enderbury" => [
                "name" => "Kiribati",
                "code" => "KI",
            ],
            "Pacific/Kiritimati" => [
                "name" => "Kiribati",
                "code" => "KI",
            ],
            "Pacific/Tarawa" => [
                "name" => "Kiribati",
                "code" => "KI",
            ],
            "Asia/Kuwait" => [
                "name" => "Kuwait",
                "code" => "KW",
            ],
            "Asia/Bishkek" => [
                "name" => "Kyrgyzstan",
                "code" => "KG",
            ],
            "Asia/Vientiane" => [
                "name" => "Laos",
                "code" => "LA",
            ],
            "Europe/Riga" => [
                "name" => "Latvia",
                "code" => "LV",
            ],
            "Asia/Beirut" => [
                "name" => "Lebanon",
                "code" => "LB",
            ],
            "Africa/Maseru" => [
                "name" => "Lesotho",
                "code" => "LS",
            ],
            "Africa/Monrovia" => [
                "name" => "Liberia",
                "code" => "LR",
            ],
            "Africa/Tripoli" => [
                "name" => "Libya",
                "code" => "LY",
            ],
            "Europe/Vaduz" => [
                "name" => "Liechtenstein",
                "code" => "LI",
            ],
            "Europe/Vilnius" => [
                "name" => "Lithuania",
                "code" => "LT",
            ],
            "Europe/Luxembourg" => [
                "name" => "Luxembourg",
                "code" => "LU",
            ],
            "Asia/Macau" => [
                "name" => "Macao",
                "code" => "MO",
            ],
            "Europe/Skopje" => [
                "name" => "Macedonia",
                "code" => "MK",
            ],
            "Indian/Antananarivo" => [
                "name" => "Madagascar",
                "code" => "MG",
            ],
            "Africa/Blantyre" => [
                "name" => "Malawi",
                "code" => "MW",
            ],
            "Asia/Kuala_Lumpur" => [
                "name" => "Malaysia",
                "code" => "MY",
            ],
            "Asia/Kuching" => [
                "name" => "Malaysia",
                "code" => "MY",
            ],
            "Indian/Maldives" => [
                "name" => "Maldives",
                "code" => "MV",
            ],
            "Africa/Bamako" => [
                "name" => "Mali",
                "code" => "ML",
            ],
            "Europe/Malta" => [
                "name" => "Malta",
                "code" => "MT",
            ],
            "Pacific/Kwajalein" => [
                "name" => "Marshall Islands",
                "code" => "MH",
            ],
            "Pacific/Majuro" => [
                "name" => "Marshall Islands",
                "code" => "MH",
            ],
            "America/Martinique" => [
                "name" => "Martinique",
                "code" => "MQ",
            ],
            "Africa/Nouakchott" => [
                "name" => "Mauritania",
                "code" => "MR",
            ],
            "Indian/Mauritius" => [
                "name" => "Mauritius",
                "code" => "MU",
            ],
            "Indian/Mayotte" => [
                "name" => "Mayotte",
                "code" => "YT",
            ],
            "America/Bahia_Banderas" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Cancun" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Chihuahua" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Hermosillo" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Matamoros" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Mazatlan" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Merida" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Mexico_City" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Monterrey" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Ojinaga" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "America/Tijuana" => [
                "name" => "Mexico",
                "code" => "MX",
            ],
            "Pacific/Chuuk" => [
                "name" => "Micronesia",
                "code" => "FM",
            ],
            "Pacific/Kosrae" => [
                "name" => "Micronesia",
                "code" => "FM",
            ],
            "Pacific/Pohnpei" => [
                "name" => "Micronesia",
                "code" => "FM",
            ],
            "Europe/Chisinau" => [
                "name" => "Moldova",
                "code" => "MD",
            ],
            "Europe/Monaco" => [
                "name" => "Monaco",
                "code" => "MC",
            ],
            "Asia/Choibalsan" => [
                "name" => "Mongolia",
                "code" => "MN",
            ],
            "Asia/Hovd" => [
                "name" => "Mongolia",
                "code" => "MN",
            ],
            "Asia/Ulaanbaatar" => [
                "name" => "Mongolia",
                "code" => "MN",
            ],
            "Europe/Podgorica" => [
                "name" => "Montenegro",
                "code" => "ME",
            ],
            "America/Montserrat" => [
                "name" => "Montserrat",
                "code" => "MS",
            ],
            "Africa/Casablanca" => [
                "name" => "Morocco",
                "code" => "MA",
            ],
            "Africa/Maputo" => [
                "name" => "Mozambique",
                "code" => "MZ",
            ],
            "Asia/Yangon" => [
                "name" => "Myanmar",
                "code" => "MM",
            ],
            "Africa/Windhoek" => [
                "name" => "Namibia",
                "code" => "NA",
            ],
            "Pacific/Nauru" => [
                "name" => "Nauru",
                "code" => "NR",
            ],
            "Asia/Kathmandu" => [
                "name" => "Nepal",
                "code" => "NP",
            ],
            "Europe/Amsterdam" => [
                "name" => "Netherlands",
                "code" => "NL",
            ],
            "Pacific/Noumea" => [
                "name" => "New Caledonia",
                "code" => "NC",
            ],
            "Pacific/Auckland" => [
                "name" => "New Zealand",
                "code" => "NZ",
            ],
            "Pacific/Chatham" => [
                "name" => "New Zealand",
                "code" => "NZ",
            ],
            "America/Managua" => [
                "name" => "Nicaragua",
                "code" => "NI",
            ],
            "Africa/Niamey" => [
                "name" => "Niger",
                "code" => "NE",
            ],
            "Africa/Lagos" => [
                "name" => "Nigeria",
                "code" => "NG",
            ],
            "Pacific/Niue" => [
                "name" => "Niue",
                "code" => "NU",
            ],
            "Pacific/Norfolk" => [
                "name" => "Norfolk Island",
                "code" => "NF",
            ],
            "Asia/Pyongyang" => [
                "name" => "North Korea",
                "code" => "KP",
            ],
            "Pacific/Saipan" => [
                "name" => "Northern Mariana Islands",
                "code" => "MP",
            ],
            "Europe/Oslo" => [
                "name" => "Norway",
                "code" => "NO",
            ],
            "Asia/Muscat" => [
                "name" => "Oman",
                "code" => "OM",
            ],
            "Asia/Karachi" => [
                "name" => "Pakistan",
                "code" => "PK",
            ],
            "Pacific/Palau" => [
                "name" => "Palau",
                "code" => "PW",
            ],
            "Asia/Gaza" => [
                "name" => "Palestinian Territory",
                "code" => "PS",
            ],
            "Asia/Hebron" => [
                "name" => "Palestinian Territory",
                "code" => "PS",
            ],
            "America/Panama" => [
                "name" => "Panama",
                "code" => "PA",
            ],
            "Pacific/Bougainville" => [
                "name" => "Papua New Guinea",
                "code" => "PG",
            ],
            "Pacific/Port_Moresby" => [
                "name" => "Papua New Guinea",
                "code" => "PG",
            ],
            "America/Asuncion" => [
                "name" => "Paraguay",
                "code" => "PY",
            ],
            "America/Lima" => [
                "name" => "Peru",
                "code" => "PE",
            ],
            "Asia/Manila" => [
                "name" => "Philippines",
                "code" => "PH",
            ],
            "Pacific/Pitcairn" => [
                "name" => "Pitcairn",
                "code" => "PN",
            ],
            "Europe/Warsaw" => [
                "name" => "Poland",
                "code" => "PL",
            ],
            "Atlantic/Azores" => [
                "name" => "Portugal",
                "code" => "PT",
            ],
            "Atlantic/Madeira" => [
                "name" => "Portugal",
                "code" => "PT",
            ],
            "Europe/Lisbon" => [
                "name" => "Portugal",
                "code" => "PT",
            ],
            "America/Puerto_Rico" => [
                "name" => "Puerto Rico",
                "code" => "PR",
            ],
            "Asia/Qatar" => [
                "name" => "Qatar",
                "code" => "QA",
            ],
            "Africa/Brazzaville" => [
                "name" => "Republic of the Congo",
                "code" => "CG",
            ],
            "Indian/Reunion" => [
                "name" => "Reunion",
                "code" => "RE",
            ],
            "Europe/Bucharest" => [
                "name" => "Romania",
                "code" => "RO",
            ],
            "Asia/Anadyr" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Barnaul" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Chita" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Irkutsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Kamchatka" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Khandyga" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Krasnoyarsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Magadan" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Novokuznetsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Novosibirsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Omsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Sakhalin" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Srednekolymsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Tomsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Ust-Nera" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Vladivostok" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Yakutsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Asia/Yekaterinburg" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Astrakhan" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Kaliningrad" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Kirov" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Moscow" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Samara" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Saratov" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Simferopol" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Ulyanovsk" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Europe/Volgograd" => [
                "name" => "Russia",
                "code" => "RU",
            ],
            "Africa/Kigali" => [
                "name" => "Rwanda",
                "code" => "RW",
            ],
            "America/St_Barthelemy" => [
                "name" => "Saint Barth??lemy",
                "code" => "BL",
            ],
            "Atlantic/St_Helena" => [
                "name" => "Saint Helena",
                "code" => "SH",
            ],
            "America/St_Kitts" => [
                "name" => "Saint Kitts and Nevis",
                "code" => "KN",
            ],
            "America/St_Lucia" => [
                "name" => "Saint Lucia",
                "code" => "LC",
            ],
            "America/Marigot" => [
                "name" => "Saint Martin",
                "code" => "MF",
            ],
            "America/Miquelon" => [
                "name" => "Saint Pierre and Miquelon",
                "code" => "PM",
            ],
            "America/St_Vincent" => [
                "name" => "Saint Vincent and the Grenadines",
                "code" => "VC",
            ],
            "Pacific/Apia" => [
                "name" => "Samoa",
                "code" => "WS",
            ],
            "Europe/San_Marino" => [
                "name" => "San Marino",
                "code" => "SM",
            ],
            "Africa/Sao_Tome" => [
                "name" => "Sao Tome and Principe",
                "code" => "ST",
            ],
            "Asia/Riyadh" => [
                "name" => "Saudi Arabia",
                "code" => "SA",
            ],
            "Africa/Dakar" => [
                "name" => "Senegal",
                "code" => "SN",
            ],
            "Europe/Belgrade" => [
                "name" => "Serbia",
                "code" => "RS",
            ],
            "Indian/Mahe" => [
                "name" => "Seychelles",
                "code" => "SC",
            ],
            "Africa/Freetown" => [
                "name" => "Sierra Leone",
                "code" => "SL",
            ],
            "Asia/Singapore" => [
                "name" => "Singapore",
                "code" => "SG",
            ],
            "America/Lower_Princes" => [
                "name" => "Sint Maarten",
                "code" => "SX",
            ],
            "Europe/Bratislava" => [
                "name" => "Slovakia",
                "code" => "SK",
            ],
            "Europe/Ljubljana" => [
                "name" => "Slovenia",
                "code" => "SI",
            ],
            "Pacific/Guadalcanal" => [
                "name" => "Solomon Islands",
                "code" => "SB",
            ],
            "Africa/Mogadishu" => [
                "name" => "Somalia",
                "code" => "SO",
            ],
            "Africa/Johannesburg" => [
                "name" => "South Africa",
                "code" => "ZA",
            ],
            "Atlantic/South_Georgia" => [
                "name" => "South Georgia and the South Sandwich Islands",
                "code" => "GS",
            ],
            "Asia/Seoul" => [
                "name" => "South Korea",
                "code" => "KR",
            ],
            "Africa/Juba" => [
                "name" => "South Sudan",
                "code" => "SS",
            ],
            "Africa/Ceuta" => [
                "name" => "Spain",
                "code" => "ES",
            ],
            "Atlantic/Canary" => [
                "name" => "Spain",
                "code" => "ES",
            ],
            "Europe/Madrid" => [
                "name" => "Spain",
                "code" => "ES",
            ],
            "Asia/Colombo" => [
                "name" => "Sri Lanka",
                "code" => "LK",
            ],
            "Africa/Khartoum" => [
                "name" => "Sudan",
                "code" => "SD",
            ],
            "America/Paramaribo" => [
                "name" => "Suriname",
                "code" => "SR",
            ],
            "Arctic/Longyearbyen" => [
                "name" => "Svalbard and Jan Mayen",
                "code" => "SJ",
            ],
            "Africa/Mbabane" => [
                "name" => "Swaziland",
                "code" => "SZ",
            ],
            "Europe/Stockholm" => [
                "name" => "Sweden",
                "code" => "SE",
            ],
            "Europe/Zurich" => [
                "name" => "Switzerland",
                "code" => "CH",
            ],
            "Asia/Damascus" => [
                "name" => "Syria",
                "code" => "SY",
            ],
            "Asia/Taipei" => [
                "name" => "Taiwan",
                "code" => "TW",
            ],
            "Asia/Dushanbe" => [
                "name" => "Tajikistan",
                "code" => "TJ",
            ],
            "Africa/Dar_es_Salaam" => [
                "name" => "Tanzania",
                "code" => "TZ",
            ],
            "Asia/Bangkok" => [
                "name" => "Thailand",
                "code" => "TH",
            ],
            "Africa/Lome" => [
                "name" => "Togo",
                "code" => "TG",
            ],
            "Pacific/Fakaofo" => [
                "name" => "Tokelau",
                "code" => "TK",
            ],
            "Pacific/Tongatapu" => [
                "name" => "Tonga",
                "code" => "TO",
            ],
            "America/Port_of_Spain" => [
                "name" => "Trinidad and Tobago",
                "code" => "TT",
            ],
            "Africa/Tunis" => [
                "name" => "Tunisia",
                "code" => "TN",
            ],
            "Europe/Istanbul" => [
                "name" => "Turkey",
                "code" => "TR",
            ],
            "Asia/Ashgabat" => [
                "name" => "Turkmenistan",
                "code" => "TM",
            ],
            "America/Grand_Turk" => [
                "name" => "Turks and Caicos Islands",
                "code" => "TC",
            ],
            "Pacific/Funafuti" => [
                "name" => "Tuvalu",
                "code" => "TV",
            ],
            "America/St_Thomas" => [
                "name" => "U.S. Virgin Islands",
                "code" => "VI",
            ],
            "Africa/Kampala" => [
                "name" => "Uganda",
                "code" => "UG",
            ],
            "Europe/Kiev" => [
                "name" => "Ukraine",
                "code" => "UA",
            ],
            "Europe/Uzhgorod" => [
                "name" => "Ukraine",
                "code" => "UA",
            ],
            "Europe/Zaporozhye" => [
                "name" => "Ukraine",
                "code" => "UA",
            ],
            "Asia/Dubai" => [
                "name" => "United Arab Emirates",
                "code" => "AE",
            ],
            "Europe/London" => [
                "name" => "United Kingdom",
                "code" => "GB",
            ],
            "America/Adak" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Anchorage" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Boise" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Chicago" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Denver" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Detroit" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Indianapolis" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Knox" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Marengo" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Petersburg" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Tell_City" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Vevay" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Vincennes" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Indiana/Winamac" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Juneau" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Kentucky/Louisville" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Kentucky/Monticello" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Los_Angeles" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Menominee" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Metlakatla" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/New_York" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Nome" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/North_Dakota/Beulah" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/North_Dakota/Center" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/North_Dakota/New_Salem" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Phoenix" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Sitka" => [
                "name" => "United States",
                "code" => "US",
            ],
            "America/Yakutat" => [
                "name" => "United States",
                "code" => "US",
            ],
            "Pacific/Honolulu" => [
                "name" => "United States",
                "code" => "US",
            ],
            "Pacific/Midway" => [
                "name" => "United States Minor Outlying Islands",
                "code" => "UM",
            ],
            "Pacific/Wake" => [
                "name" => "United States Minor Outlying Islands",
                "code" => "UM",
            ],
            "America/Montevideo" => [
                "name" => "Uruguay",
                "code" => "UY",
            ],
            "Asia/Samarkand" => [
                "name" => "Uzbekistan",
                "code" => "UZ",
            ],
            "Asia/Tashkent" => [
                "name" => "Uzbekistan",
                "code" => "UZ",
            ],
            "Pacific/Efate" => [
                "name" => "Vanuatu",
                "code" => "VU",
            ],
            "Europe/Vatican" => [
                "name" => "Vatican",
                "code" => "VA",
            ],
            "America/Caracas" => [
                "name" => "Venezuela",
                "code" => "VE",
            ],
            "Asia/Ho_Chi_Minh" => [
                "name" => "Vietnam",
                "code" => "VN",
            ],
            "Pacific/Wallis" => [
                "name" => "Wallis and Futuna",
                "code" => "WF",
            ],
            "Africa/El_Aaiun" => [
                "name" => "Western Sahara",
                "code" => "EH",
            ],
            "Asia/Aden" => [
                "name" => "Yemen",
                "code" => "YE",
            ],
            "Africa/Lusaka" => [
                "name" => "Zambia",
                "code" => "ZM",
            ],
            "Africa/Harare" => [
                "name" => "Zimbabwe",
                "code" => "ZW",
            ],
        ];
    }

    /**
     * List of time zones supported by TimeZoneDB
     *
     * @return array List of time zones
     */
    public function listTimeZones()
    {
        return $this->timeZones;
    }

    /**
     * Country code to time zones
     *
     * @param  string $code Country code
     * @return array        List of time zones
     */
    public function codeToZones($code)
    {
        return $this->getZones("code", $code);
    }

    /**
     * Country name to time zones
     *
     * @param  string $country Country name
     * @return array           List of time zones
     */
    public function countryToZones($country)
    {
        return $this->getZones("name", $country);
    }

    /**
     * Time zone to country code
     *
     * @param  string $timeZone Time zone
     * @return string           Country code
     */
    public function zoneToCode($timeZone)
    {
        return $this->getZoneData($timeZone, "code");
    }

    /**
     * Time zone to country name
     *
     * @param  string $timeZone Time zone
     * @return string           Country name
     */
    public function zoneToCountry($timeZone)
    {
        return $this->getZoneData($timeZone, "name");
    }

    /**
     * Get time zones from specific value
     *
     * @param  string $zoneKey   Zone key
     * @param  string $zoneValue Zone value
     * @return array             List of time zones
     */
    private function getZones($zoneKey, $zoneValue)
    {
        $zones = array_map(function($zone, $zoneData) use ($zoneKey, $zoneValue) {
            if (strtolower($zoneData[$zoneKey]) === strtolower($zoneValue)) {
                return $zone;
            }
        }, array_keys($this->timeZones), $this->timeZones);

        return array_filter($zones);
    }

    /**
     * Ge time zone data by specific value
     *
     * @param  string $timeZone Time zone
     * @param  string $zoneKey  Zone key
     * @return string           Zone data pair with key
     */
    private function getZoneData($timeZone, $zoneKey)
    {
        $zoneData = "";

        if (isset($this->timeZones[$timeZone])) {
            $zoneData = $this->timeZones[$timeZone][$zoneKey];
        }

        return $zoneData;
    }
}
