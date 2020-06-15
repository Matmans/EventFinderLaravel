<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Country;
use App\Genre;
use App\Artist;
use App\Song;
use App\Ticket_status;
use App\Concert;

class AddDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Landen toevoegen */
        Country::insert(
            [
                'name' => 'Afghanisatan',
                'code' => 'AF',
                'created_at' => '2020-06-06 10:00:00'
            ]           
        );
        Country::insert(
            [
                'name' => 'Albania',
                'code' => 'AL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Algeria',
                'code' => 'DZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'American Samoa',
                'code' => 'DS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Andorra',
                'code' => 'AD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Angola',
                'code' => 'AO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Anguilla',
                'code' => 'AI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Antartica',
                'code' => 'AQ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Antigua and Barbuda',
                'code' => 'AG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Argentina',
                'code' => 'AR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Armenia',
                'code' => 'AM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Aruba',
                'code' => 'AW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Australia',
                'code' => 'AU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Austria',
                'code' => 'AT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Azerbaijan',
                'code' => 'AZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bahamas',
                'code' => 'BS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bahrain',
                'code' => 'BH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bangladesh',
                'code' => 'BD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Barbados',
                'code' => 'BB',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Belarus',
                'code' => 'BY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Belgium',
                'code' => 'BE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Belize',
                'code' => 'BZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Benin',
                'code' => 'BJ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bermuda',
                'code' => 'BM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bhutan',
                'code' => 'BT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bolivia',
                'code' => 'BO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Botswana',
                'code' => 'BW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Brazil',
                'code' => 'BR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Brunei Darussalam',
                'code' => 'BN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Bulgaria',
                'code' => 'BG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Burundi',
                'code' => 'BI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cambodia',
                'code' => 'KH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cameroon',
                'code' => 'CM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Canada',
                'code' => 'CA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cape Verde',
                'code' => 'CV',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Central African Republic',
                'code' => 'CF',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Chad',
                'code' => 'TD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Chile',
                'code' => 'CL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'China',
                'code' => 'CN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Christmas Island',
                'code' => 'CX',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Colombia',
                'code' => 'CO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Comoros',
                'code' => 'KM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Democratic Republic of the Congo',
                'code' => 'CD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Republic of Congo',
                'code' => 'CG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cook Islands',
                'code' => 'CK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Costa Rica',
                'code' => 'CR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Croatia (Hrvatska)',
                'code' => 'HR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cuba',
                'code' => 'CU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Cyprus',
                'code' => 'CY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Denmark',
                'code' => 'DK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Djibouti',
                'code' => 'DJ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Dominica',
                'code' => 'DM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'East Timor',
                'code' => 'TP',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Ecuador',
                'code' => 'EC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Egypt',
                'code' => 'EG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'El Salvador',
                'code' => 'SV',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Eritrea',
                'code' => 'ER',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Estonia',
                'code' => 'EE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Ethiopia',
                'code' => 'ET',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Falkland Islands (Malvinas)',
                'code' => 'FK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Fiji',
                'code' => 'FJ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Finland',
                'code' => 'FI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'France',
                'code' => 'FR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'France, Metropolitan',
                'code' => 'FX',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'French Guiana',
                'code' => 'GF',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'French Polynesia',
                'code' => 'PF',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'French Southern Territories',
                'code' => 'Tf',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Gabon',
                'code' => 'GA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Gambia',
                'code' => 'GM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Georgia',
                'code' => 'GE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Germany',
                'code' => 'DE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Ghana',
                'code' => 'GH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Gibraltar',
                'code' => 'GI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guernsey',
                'code' => 'GK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Greece',
                'code' => 'GR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Greenland',
                'code' => 'GL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Grenada',
                'code' => 'GD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guam',
                'code' => 'GU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guatemala',
                'code' => 'GT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guinea',
                'code' => 'GN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Guyana',
                'code' => 'GY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Haiti',
                'code' => 'HT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Heard and Mc Donald Islands',
                'code' => 'HM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Honduras',
                'code' => 'HN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Hong Kong',
                'code' => 'HK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Hungary',
                'code' => 'HU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Iceland',
                'code' => 'IS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'India',
                'code' => 'IN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Isle of Man',
                'code' => 'IM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Indonesia',
                'code' => 'ID',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Iran',
                'code' => 'IR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Iraq',
                'code' => 'IQ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Ireland',
                'code' => 'IE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Isreal',
                'code' => 'IL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Italy',
                'code' => 'IT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Ivory Coast',
                'code' => 'CI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Jersey',
                'code' => 'JE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Jamaica',
                'code' => 'JM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Japan',
                'code' => 'JP',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Jordan',
                'code' => 'JO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Kenya',
                'code' => 'KE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Kiribati',
                'code' => 'KI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'North Korea',
                'code' => 'KP',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'South Korea',
                'code' => 'KR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Kosovo',
                'code' => 'XK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Kuwait',
                'code' => 'KW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Lao Peoples Democratic Republic',
                'code' => 'LA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Latvia',
                'code' => 'LV',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Lebanon',
                'code' => 'LB',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Lesotho',
                'code' => 'LS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Liberia',
                'code' => 'LR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Libyan Arab Jamahiriya',
                'code' => 'LI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Lithuania',
                'code' => 'LT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Luxembourg',
                'code' => 'LU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Macau',
                'code' => 'MO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'North Macedonia',
                'code' => 'MK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Madagascar',
                'code' => 'MG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Malawi',
                'code' => 'MW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Malaysia',
                'code' => 'MY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Maldives',
                'code' => 'MV',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mali',
                'code' => 'ML',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Malta',
                'code' => 'MT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Marshall Islands',
                'code' => '',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Martinique',
                'code' => 'MQ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mauritania',
                'code' => 'MR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mauritius',
                'code' => 'MU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mayotte',
                'code' => 'TY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mexico',
                'code' => 'MX',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Federated States of Micronesia',
                'code' => 'FM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Republic of Moldova',
                'code' => 'MD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Monaco',
                'code' => 'MC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mongolia',
                'code' => 'MN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Montenegro',
                'code' => 'ME',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Montserrat',
                'code' => 'MS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Morocco',
                'code' => 'MA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Mozambique',
                'code' => 'MZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Myanmar',
                'code' => 'MN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Namibia',
                'code' => 'NA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Nauru',
                'code' => 'NR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Nepal',
                'code' => 'NP',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Netherlands',
                'code' => 'NL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Netherlands Antilles',
                'code' => 'AN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'New Caledonia',
                'code' => 'NC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'New Zealand',
                'code' => 'NZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Nicaragua',
                'code' => 'NI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Niger',
                'code' => 'NE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Nigeria',
                'code' => 'NG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Niue',
                'code' => 'NU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Norfolk Island',
                'code' => 'NF',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Norther Mariana Islands',
                'code' => 'MP',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Norway',
                'code' => 'NO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Oman',
                'code' => 'OM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Pakistan',
                'code' => 'PK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Palau',
                'code' => 'PW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Palestine',
                'code' => 'PS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Panama',
                'code' => 'PA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Papua New Guinea',
                'code' => 'PG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Paraguay',
                'code' => 'PY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Peru',
                'code' => 'PE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Philippines',
                'code' => 'PH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Pitcairn',
                'code' => 'PN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Poland',
                'code' => 'PL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Portugal',
                'code' => 'Pt',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Qatar',
                'code' => 'QA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Reunion',
                'code' => 'RE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Romania',
                'code' => 'RO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Russian Federation',
                'code' => 'RU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Rwanda',
                'code' => 'RW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Saint Lucia',
                'code' => 'LC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Samoa',
                'code' => 'WS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'San Marino',
                'code' => 'SM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Senegal',
                'code' => 'SN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Serbia',
                'code' => 'RS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Seychelles',
                'code' => 'SC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Singapore',
                'code' => 'SG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Slovakia',
                'code' => 'SK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Slovenia',
                'code' => 'SI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Somalia',
                'code' => 'SO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'South Africa',
                'code' => 'ZA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'South Georgia South Sandwich Islands',
                'code' => 'GS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'South Sudan',
                'code' => 'SS',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Spain',
                'code' => 'ES',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'St. Helena',
                'code' => 'SH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'St. Pierre and Miquelon',
                'code' => 'PM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Sudan',
                'code' => 'SD',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Suriname',
                'code' => 'SR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Svalbard and Jan Mayen Islands',
                'code' => 'SJ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Swaziland',
                'code' => 'SZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Sweden',
                'code' => 'SE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Switzerland',
                'code' => 'CH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Syrian Arab Republic',
                'code' => 'SY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Taiwan',
                'code' => 'TW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'United Republic of Tanzania',
                'code' => 'TZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Thailand',
                'code' => 'TH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Togo',
                'code' => 'TG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Tokelau',
                'code' => 'TK',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Tonga',
                'code' => 'TO',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Tunisia',
                'code' => 'TN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Turkey',
                'code' => 'TR',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Tuvalu',
                'code' => 'TV',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Uganda',
                'code' => 'UG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Ukraine',
                'code' => 'UA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'United Kingdom',
                'code' => 'GB',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'United States',
                'code' => 'US',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'United States minor outlying islands',
                'code' => 'UM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Uruguay',
                'code' => 'UY',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Vanuatu',
                'code' => 'VU',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Vatican City State',
                'code' => 'VA',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Venezuela',
                'code' => 'VE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Vietnam',
                'code' => 'VN',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Virgin Islands (British)',
                'code' => 'VG',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Virgin Islands (U.S.)',
                'code' => 'VI',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Waillis and Futuna Islands',
                'code' => 'WF',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Western Sahara',
                'code' => 'EH',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Yemen',
                'code' => 'YE',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Zambia',
                'code' => 'ZM',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );
        Country::insert(
            [
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'created_at' => '2020-06-06 10:00:00'
            ]         
        );

        /* Genres toevoegen */
        Genre::insert(
            [
                'name' => 'Alternative',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Anime',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Blues',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Children',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Classical',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Comedy',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Commerical',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Country',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Dance',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Breakbeat / Breakstep',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Hardcore',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'House',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Techno',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Trance',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Disney',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Easy Listening',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Electronic',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Ambient',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Chiptune',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Downtempo',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Drum & Bass',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Electro',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Electro acoustic',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Electronica',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Electronic Rock',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Eurodance',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Hi-NRG',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'UK Garage',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Enka',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'French Pop',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Folk Music',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'German Folk',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'German Pop',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Fitness & Workout',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Hip-Hop / Rap',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Holliday',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Indie Pop',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Industrial',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Inspirational',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Instrumental',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'J-Pop',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Jazz',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'K-Pop',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Karaoke',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Kayokyoku',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Latin',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Brazilian',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'New Age',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Opera',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Pop',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Post-Disco',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Progressive',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'R&B / Soul',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Reggae',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Rock',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Singer / Songwriter',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Soundtrack',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Spoken Word',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Tex-Mex / Tejano',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'Vocal',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );
        Genre::insert(
            [
                'name' => 'World',
                'created_at' => '2020-06-06 18:00:00'
            ]         
        );

        /* Ticket_status toevoegen */
        Ticket_status::insert(
            [
                'id' => 1,
                'name' => 'Nog geen info',
                'created_at' => '2020-06-06 12:00:00'
            ]         
        );
        Ticket_status::insert(
            [
                'id' => 2,
                'name' => 'Tickets beschikbaar',
                'created_at' => '2020-06-06 12:00:00'
            ]         
        );
        Ticket_status::insert(
            [
                'id' => 3,
                'name' => 'Uitverkocht',
                'created_at' => '2020-06-06 12:00:00'
            ]         
        );
        Ticket_status::insert(
            [
                'id' => 4,
                'name' => 'Geannuleerd',
                'created_at' => '2020-06-06 12:00:00'
            ]         
        );

        /* Artist toevoegen */
        Artist::insert(
            [
                'name' => 'Cage the Elephant',
                'formation' => 2006,
                'genre_id' => 55,
                'origin' => 'Bowling Green, Kentucky',
                'country_id' => 232,
                'facebooklink' => 'https://www.facebook.com/cagetheelephant/',
                'twitterlink' => 'https://twitter.com/CageTheElephant',
                'youtubelink' => 'https://www.youtube.com/user/cagetheelephant',
                'piclink' => 'https://www.dansendeberen.be/wp-content/uploads/cage-the-elephant-new-album-social-cues-neil-krug.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Maroon 5',
                'formation' => 1994,
                'genre_id' => 55,
                'origin' => 'Los Angeles, California',
                'country_id' => 232,
                'facebooklink' => 'https://www.facebook.com/maroon5/',
                'twitterlink' => 'https://twitter.com/maroon5',
                'youtubelink' => 'https://www.youtube.com/user/Maroon5',
                'piclink' => 'https://upload.wikimedia.org/wikipedia/commons/1/19/Maroon_5%2C_2011.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Stormzy',
                'formation' => 2010,
                'genre_id' => 55,
                'origin' => 'Norbuy, London',
                'country_id' => 231,
                'facebooklink' => 'https://www.facebook.com/stormzyofficial/',
                'twitterlink' => 'https://twitter.com/stormzy',
                'youtubelink' => 'https://www.youtube.com/user/StormzyTV',
                'piclink' => 'https://d3s4rtoucjtwa6.cloudfront.net/artistes/1500-1575897914.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'The Coronas',
                'formation' => 2003,
                'genre_id' => 55,
                'origin' => 'Terenure, Dublin',
                'country_id' => 105,
                'facebooklink' => 'https://www.facebook.com/thecoronasofficial/',
                'twitterlink' => 'https://twitter.com/TheCoronas',
                'youtubelink' => 'https://www.youtube.com/user/thecoronasrock',
                'piclink' => 'https://gratefulweb.com/sites/default/files/images/articles/vZdcZxcxZXc.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'The Weeknd',
                'formation' => 2010,
                'genre_id' => 53,
                'origin' => 'Toronto, Ontario',
                'country_id' => 38,
                'facebooklink' => 'https://www.facebook.com/theweeknd/',
                'twitterlink' => 'https://twitter.com/theweeknd',
                'youtubelink' => 'https://www.youtube.com/user/xoxxxoooxo',
                'piclink' => 'https://ondemand.nrj.be/Images/NRJVL/Nieuws/1200-1280/14528.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Red Hot Chili Peppers',
                'formation' => 1983,
                'genre_id' => 55,
                'origin' => 'Los Angeles, California',
                'country_id' => 232,
                'facebooklink' => 'https://www.facebook.com/ChiliPeppers/',
                'twitterlink' => 'https://twitter.com/chilipeppers',
                'youtubelink' => 'https://www.youtube.com/user/RHCPtv',
                'piclink' => 'https://oor.nl/media/2020/02/211F073457A01C812A-1024x681-1.jpeg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Calvin Harris',
                'formation' => 2002,
                'genre_id' => 22,
                'origin' => 'Dumfries, Scotland',
                'country_id' => 231,
                'facebooklink' => 'https://www.facebook.com/calvinharris/',
                'twitterlink' => 'https://twitter.com/calvinharris',
                'youtubelink' => 'https://www.youtube.com/user/icreateddisco',
                'piclink' => 'https://media.resources.festicket.com/www/artists/Calvin_Harris_Press_Shot.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Kendrick Lamar',
                'formation' => 2004,
                'genre_id' => 35,
                'origin' => 'Compton, California',
                'country_id' => 232,
                'facebooklink' => 'https://www.facebook.com/kendricklamar/',
                'twitterlink' => 'https://twitter.com/kendricklamar',
                'youtubelink' => 'https://www.youtube.com/user/KendrickLamarVEVO',
                'piclink' => 'https://upload.wikimedia.org/wikipedia/commons/3/32/Pulitzer2018-portraits-kendrick-lamar.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Taylor Swift',
                'formation' => 2006,
                'genre_id' => 50,
                'origin' => 'West Reading, Pennsylvania',
                'country_id' => 232,
                'facebooklink' => 'https://www.facebook.com/TaylorSwift',
                'twitterlink' => 'https://twitter.com/taylorswift13',
                'youtubelink' => 'https://www.youtube.com/taylorswift',
                'piclink' => 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Taylor_Swift_AMAs_2019.png',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        Artist::insert(
            [
                'name' => 'Ed Sheeran',
                'formation' => 1991,
                'genre_id' => 50,
                'origin' => 'Halifax',
                'country_id' => 231,
                'facebooklink' => 'https://www.facebook.com/EdSheeranMusic',
                'twitterlink' => 'https://twitter.com/edsheeran',
                'youtubelink' => 'https://www.youtube.com/user/EdSheeran?app=desktop',
                'piclink' => 'https://images.nrc.nl/fBM49xCxkTQvApou87uvvltuay0=/1280x/filters:no_upscale()/s3/static.nrc.nl/bvhw/files/2019/07/data47075223-5788e1.jpg',
                'created_at' => '2020-06-07 12:00:00'
            ]         
        );
        
        /* Songs toevoegen */
                                /* LYRICS WERKEN NIE */
        Song::insert(
            [
                'id' => 1, 
                'name' => 'Supermarket flowers', 
                'artist_id' => 10, 
                'genre_id' => 50, 
                'youtubelink' => '3Mk0F6mLKik', 
                'lyrics' => "
I took the supermarket flowers from the windowsill
I threw the day old tea from the cup
Packed up the photo album Matthew had made
Memories of a life that's been loved
Took the get well soon cards and stuffed animals
Poured the old ginger beer down the sink
Dad always told me, don't you cry when you're down
But mum, there's a tear every time that I blink

Oh I'm in pieces, it's tearing me up, but I know
A heart that's broke is a heart that's been loved

So I'll sing Hallelujah
You were an angel in the shape of my mum
When I fell down you'd be there holding me up
Spread your wings as you go
And when God takes you back we'll say Hallelujah
You're home

I fluffed the pillows, made the beds, stacked the chairs up
Folded your nightgowns neatly in a case
John says he'd drive then put his hand on my cheek
And wiped a tear from the side of my face

I hope that I see the world as you did cause I know
A life with love is a life that's been lived

So I'll sing Hallelujah
You were an angel in the shape of my mum
When I fell down you'd be there holding me up
Spread your wings as you go
And when God takes you back we'll say Hallelujah
You're home

Hallelujah
You were an angel in the shape of my mum
You got to see the person that I have become
Spread your wing
And I know that when God took you back he said Hallelujah
You're home
                ",
                'awards' => '', 
                'created_at' => '2020-06-07 17:33:00'
            ]         
        );


        /* Concerten toevoegen */
        Concert::insert(
            [
                'artist_id' => 10,
                'location' => 'Trump Tower',
                'country_id' => 232,
                'date' => '2020-08-20 19:00:00',
                'meetandgreet' => 0,
                'merchandise' => 0,
                'ticketlink' => "www.makeamericagreatagain.com",
                'ticket_status_id' => 4,
                'created_at' => '2020-06-10 12:00:00'
            ]         
        );
        Concert::insert(
            [
                'artist_id' => 10,
                'location' => 'Silicon Valley',
                'country_id' => 232,
                'date' => '2020-08-20 19:00:00',
                'meetandgreet' => 1,
                'merchandise' => 1,
                'ticketlink' => "www.google.be",
                'ticket_status_id' => 1,
                'created_at' => '2020-06-10 12:00:00'
            ]         
        );
        

        /* VOYAGER RECORDS DIE NODIG ZIJN OM TE WERKEN */
          
        /* Menus toevoegen */
        DB::table('menus')->insert(
            [
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
            ]
        );

        /* Menu_items toevoegen */
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
                'route' => 'voyager.dashboard',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => '',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 12:10:51',
                'route' => 'voyager.media.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
                'route' => 'voyager.users.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => '',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
                'route' => 'voyager.roles.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => '',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 12:10:51',
                'route' => '',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => '',
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 12:10:51',
                'route' => 'voyager.menus.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => '',
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 12:10:51',
                'route' => 'voyager.database.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => '',
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 13:07:34',
                'route' => 'voyager.bread.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 12:37:16',
                'route' => 'voyager.settings.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Songs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-music',
                'color' => '',
                'parent_id' => 19,
                'order' => 1,
                'created_at' => '2020-06-08 10:51:58',
                'updated_at' => '2020-06-08 12:37:21',
                'route' => 'voyager.song.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Artists',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '',
                'parent_id' => 19,
                'order' => 4,
                'created_at' => '2020-06-08 10:56:25',
                'updated_at' => '2020-06-08 12:37:29',
                'route' => 'voyager.artist.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Genres',
                'url' => '',
                'target' => '_self',
                'icon_class' => '',
                'color' => '',
                'parent_id' => 19,
                'order' => 2,
                'created_at' => '2020-06-08 10:57:15',
                'updated_at' => '2020-06-08 12:37:25',
                'route' => 'voyager.genre.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Concerts',
                'url' => '',
                'target' => '_self',
                'icon_class' => '',
                'color' => '',
                'parent_id' => 19,
                'order' => 3,
                'created_at' => '2020-06-08 12:13:26',
                'updated_at' => '2020-06-08 12:37:27',
                'route' => 'voyager.concert.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Edit',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-edit',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-06-08 12:37:01',
                'updated_at' => '2020-06-09 11:12:47',
                'route' => '',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Tickets',
                'url' => '',
                'target' => '_self',
                'icon_class' => '',
                'color' => '',
                'parent_id' => 19,
                'order' => 5,
                'created_at' => '2020-06-08 12:41:19',
                'updated_at' => '2020-06-08 13:07:34',
                'route' => 'voyager.ticket.index',
                'parameters' => '',
            ]
        );
        DB::table('menu_items')->insert(
            [
                'menu_id' => 1,
                'title' => 'Countries',
                'url' => '',
                'target' => '_self',
                'icon_class' => '',
                'color' => '',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2020-06-13 15:33:59',
                'updated_at' => '2020-06-13 15:33:59',
                'route' => 'voyager.country.index',
                'parameters' => '',
            ]
        );
        
        /* Settings toevoegen */
        DB::table('settings')->insert(
            [
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'EventFinder',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Know when and where your favorite artists will perform!',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\June2020\mQs9cBCg2bkfm8R8rrBT.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => '',
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Eventfinder Admin',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Eventfinder admin page',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings\June2020\ZGWrS3jlrVAeuJSCYZuz.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings\June2020\homsNBso5tnVahpz0kbS.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ]
        );
        DB::table('settings')->insert(
            [
                'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => '',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ]
        );

        /* Permissions toevoegen */
        DB::table('permissions')->insert(
            [
                'key' => 'browse_admin',
                'table_name' => '',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
            ]
        );
        DB::table('permissions')->insert(
            [
                'key' => 'browse_bread',
                'table_name' => '',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
            ]
        );
        DB::table('permissions')->insert(
            [
                'key' => 'browse_database',
                'table_name' => '',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
            ]
        );
        DB::table('permissions')->insert(
            [
                'key' => 'browse_media',
                'table_name' => '',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
            ]
        );
        DB::table('permissions')->insert(
            [
                'key' => 'browse_compass',
                'table_name' => '',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 10:09:30',
            ]
        );
        

        /* Roles toevoegen */
        DB::table('roles')->insert(
            [
                'id' => 1,
                'name' => 'SuperAdmin',
                'display_name' => 'Super Admin',
                'created_at' => '2020-06-08 10:09:30',
                'updated_at' => '2020-06-08 13:10:30',
            ]
        );
        DB::table('roles')->insert(
            [
                'id' => 2,
                'name' => 'Admin',
                'display_name' => 'Admin',
                'created_at' => '2020-06-08 13:10:09',
                'updated_at' => '2020-06-08 13:10:09',
            ]
        );
        DB::table('roles')->insert(
            [
                'id' => 3,
                'name' => 'Gebruiker',
                'display_name' => 'Gebruiker',
                'created_at' => '2020-06-12 14:10:12',
                'updated_at' => '2020-06-12 14:10:12',
            ]
        );

        /* Permission_role toevoegen */
        DB::table('permission_role')->insert(
            [
                'permission_id' => 1,
                'role_id' => 2,
            ]
        );
        DB::table('permission_role')->insert(
            [
                'permission_id' => 2,
                'role_id' => 2,
            ]
        );
        DB::table('permission_role')->insert(
            [
                'permission_id' => 3,
                'role_id' => 2,
            ]
        );
        DB::table('permission_role')->insert(
            [
                'permission_id' => 4,
                'role_id' => 2,
            ]
        );
        DB::table('permission_role')->insert(
            [
                'permission_id' => 5,
                'role_id' => 2,
            ]
        );

        /* Users toevoegen */
        DB::table('users')->insert(
            [
                'role_id' => 2,
                'name' => 'Admin',
                'email' => 'testadmin@eventfinder.com',
                'avatar' => 'users\\June2020\\xxdsrCQK2Dp2pnWbp3IW.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NhtPpF4vC8rXX3dbhgNjnOJb4sBB2qebwHyaiOCZ4pFgKl3ltS7ca',
                'country_id' => '21',
                'remember_token' => NULL,
                'settings' => '{\"locale\":\"en\"}',
                'created_at' => NULL,
                'updated_at' => '2020-06-12 19:44:25',
            ]
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}