<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('regions')->insert([
        //     [
        //         'code' => '010000000',
        //         'description' => 'REGION I (ILOCOS REGION)',
        //         'region_code' => '01'
        //     ],
        //     [
        //         'code' => '020000000',
        //         'description' => 'REGION II (CAGAYAN VALLEY)',
        //         'region_code' => '02'
        //     ],
        //     [
        //         'code' => '030000000',
        //         'description' => 'REGION III (CENTRAL LUZON)',
        //         'region_code' => '03'
        //     ],
        //     [
        //         'code' => '040000000',
        //         'description' => 'REGION IV-A (CALABARZON)',
        //         'region_code' => '04'
        //     ],
        //     [
        //         'code' => '170000000',
        //         'description' => 'REGION IV-B (MIMAROPA)',
        //         'region_code' => '17'
        //     ],
        //     [
        //         'code' => '050000000',
        //         'description' => 'REGION V (BICOL REGION)',
        //         'region_code' => '05'
        //     ],
        //     [
        //         'code' => '060000000',
        //         'description' => 'REGION VI (WESTERN VISAYAS)',
        //         'region_code' => '06'
        //     ],
        //     [
        //         'code' => '070000000',
        //         'description' => 'REGION VII (CENTRAL VISAYAS)',
        //         'region_code' => '07'
        //     ],
        //     [
        //         'code' => '080000000',
        //         'description' => 'REGION VIII (EASTERN VISAYAS)',
        //         'region_code' => '08'
        //     ],
        //     [
        //         'code' => '090000000',
        //         'description' => 'REGION IX (ZAMBOANGA PENINSULA)',
        //         'region_code' => '09'
        //     ],
        //     [
        //         'code' => '100000000',
        //         'description' => 'REGION X (NORTHERN MINDANAO)',
        //         'region_code' => '10'
        //     ],
        //     [
        //         'code' => '110000000',
        //         'description' => 'REGION XI (DAVAO REGION)',
        //         'region_code' => '11'
        //     ],
        //     [
        //         'code' => '120000000',
        //         'description' => 'REGION XII (SOCCSKSARGEN)',
        //         'region_code' => '12'
        //     ],
        //     [
        //         'code' => '130000000',
        //         'description' => 'NATIONAL CAPITAL REGION (NCR)',
        //         'region_code' => '13'
        //     ],
        //     [
        //         'code' => '140000000',
        //         'description' => 'CORDILLERA ADMINISTRATIVE REGION (CAR)',
        //         'region_code' => '14'
        //     ],
        //     [
        //         'code' => '150000000',
        //         'description' => 'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)',
        //         'region_code' => '15'
        //     ],
        //     [
        //         'code' => '160000000',
        //         'description' => 'REGION XIII (Caraga)',
        //         'region_code' => '16'
        //     ]
        // ]);

        // DB::table('provinces')->insert([
        //     [
        //         'code' => '012800000',
        //         'description' => 'ILOCOS NORTE',
        //         'region_code' => '01',
        //         'province_code' => '0128',
        //     ],
        //     [
        //         'code' => '012900000',
        //         'description' => 'ILOCOS SUR',
        //         'region_code' => '01',
        //         'province_code' => '0129',
        //     ],
        //     [
        //         'code' => '013300000',
        //         'description' => 'LA UNION',
        //         'region_code' => '01',
        //         'province_code' => '0133',
        //     ],
        //     [
        //         'code' => '015500000',
        //         'description' => 'PANGASINAN',
        //         'region_code' => '01',
        //         'province_code' => '0155',
        //     ],
        //     [
        //         'code' => '020900000',
        //         'description' => 'BATANES',
        //         'region_code' => '02',
        //         'province_code' => '0209',
        //     ],
        //     [
        //         'code' => '021500000',
        //         'description' => 'CAGAYAN',
        //         'region_code' => '02',
        //         'province_code' => '0215',
        //     ],
        //     [
        //         'code' => '023100000',
        //         'description' => 'ISABELA',
        //         'region_code' => '02',
        //         'province_code' => '0231',
        //     ],
        //     [
        //         'code' => '025000000',
        //         'description' => 'NUEVA VIZCAYA',
        //         'region_code' => '02',
        //         'province_code' => '0250',
        //     ],
        //     [
        //         'code' => '025700000',
        //         'description' => 'QUIRINO',
        //         'region_code' => '02',
        //         'province_code' => '0257',
        //     ],
        //     [
        //         'code' => '030800000',
        //         'description' => 'BATAAN',
        //         'region_code' => '03',
        //         'province_code' => '0308',
        //     ],
        //     [
        //         'code' => '031400000',
        //         'description' => 'BULACAN',
        //         'region_code' => '03',
        //         'province_code' => '0314',
        //     ],
        //     [
        //         'code' => '034900000',
        //         'description' => 'NUEVA ECIJA',
        //         'region_code' => '03',
        //         'province_code' => '0349',
        //     ],
        //     [
        //         'code' => '035400000',
        //         'description' => 'PAMPANGA',
        //         'region_code' => '03',
        //         'province_code' => '0354',
        //     ],
        //     [
        //         'code' => '036900000',
        //         'description' => 'TARLAC',
        //         'region_code' => '03',
        //         'province_code' => '0369',
        //     ],
        //     [
        //         'code' => '037100000',
        //         'description' => 'ZAMBALES',
        //         'region_code' => '03',
        //         'province_code' => '0371',
        //     ],
        //     [
        //         'code' => '037700000',
        //         'description' => 'AURORA',
        //         'region_code' => '03',
        //         'province_code' => '0377',
        //     ],
        //     [
        //         'code' => '041000000',
        //         'description' => 'BATANGAS',
        //         'region_code' => '04',
        //         'province_code' => '0410',
        //     ],
        //     [
        //         'code' => '042100000',
        //         'description' => 'CAVITE',
        //         'region_code' => '04',
        //         'province_code' => '0421',
        //     ],
        //     [
        //         'code' => '043400000',
        //         'description' => 'LAGUNA',
        //         'region_code' => '04',
        //         'province_code' => '0434',
        //     ],
        //     [
        //         'code' => '045600000',
        //         'description' => 'QUEZON',
        //         'region_code' => '04',
        //         'province_code' => '0456',
        //     ],
        //     [
        //         'code' => '045800000',
        //         'description' => 'RIZAL',
        //         'region_code' => '04',
        //         'province_code' => '0458',
        //     ],
        //     [
        //         'code' => '174000000',
        //         'description' => 'MARINDUQUE',
        //         'region_code' => '17',
        //         'province_code' => '1740',
        //     ],
        //     [
        //         'code' => '175100000',
        //         'description' => 'OCCIDENTAL MINDORO',
        //         'region_code' => '17',
        //         'province_code' => '1751',
        //     ],
        //     [
        //         'code' => '175200000',
        //         'description' => 'ORIENTAL MINDORO',
        //         'region_code' => '17',
        //         'province_code' => '1752',
        //     ],
        //     [
        //         'code' => '175300000',
        //         'description' => 'PALAWAN',
        //         'region_code' => '17',
        //         'province_code' => '1753',
        //     ],
        //     [
        //         'code' => '175900000',
        //         'description' => 'ROMBLON',
        //         'region_code' => '17',
        //         'province_code' => '1759',
        //     ],
        //     [
        //         'code' => '050500000',
        //         'description' => 'ALBAY',
        //         'region_code' => '05',
        //         'province_code' => '0505',
        //     ],
        //     [
        //         'code' => '051600000',
        //         'description' => 'CAMARINES NORTE',
        //         'region_code' => '05',
        //         'province_code' => '0516',
        //     ],
        //     [
        //         'code' => '051700000',
        //         'description' => 'CAMARINES SUR',
        //         'region_code' => '05',
        //         'province_code' => '0517',
        //     ],
        //     [
        //         'code' => '052000000',
        //         'description' => 'CATANDUANES',
        //         'region_code' => '05',
        //         'province_code' => '0520',
        //     ],
        //     [
        //         'code' => '054100000',
        //         'description' => 'MASBATE',
        //         'region_code' => '05',
        //         'province_code' => '0541',
        //     ],
        //     [
        //         'code' => '056200000',
        //         'description' => 'SORSOGON',
        //         'region_code' => '05',
        //         'province_code' => '0562',
        //     ],
        //     [
        //         'code' => '060400000',
        //         'description' => 'AKLAN',
        //         'region_code' => '06',
        //         'province_code' => '0604',
        //     ],
        //     [
        //         'code' => '060600000',
        //         'description' => 'ANTIQUE',
        //         'region_code' => '06',
        //         'province_code' => '0606',
        //     ],
        //     [
        //         'code' => '061900000',
        //         'description' => 'CAPIZ',
        //         'region_code' => '06',
        //         'province_code' => '0619',
        //     ],
        //     [
        //         'code' => '063000000',
        //         'description' => 'ILOILO',
        //         'region_code' => '06',
        //         'province_code' => '0630',
        //     ],
        //     [
        //         'code' => '064500000',
        //         'description' => 'NEGROS OCCIDENTAL',
        //         'region_code' => '06',
        //         'province_code' => '0645',
        //     ],
        //     [
        //         'code' => '067900000',
        //         'description' => 'GUIMARAS',
        //         'region_code' => '06',
        //         'province_code' => '0679',
        //     ],
        //     [
        //         'code' => '071200000',
        //         'description' => 'BOHOL',
        //         'region_code' => '07',
        //         'province_code' => '0712',
        //     ],
        //     [
        //         'code' => '072200000',
        //         'description' => 'CEBU',
        //         'region_code' => '07',
        //         'province_code' => '0722',
        //     ],
        //     [
        //         'code' => '074600000',
        //         'description' => 'NEGROS ORIENTAL',
        //         'region_code' => '07',
        //         'province_code' => '0746',
        //     ],
        //     [
        //         'code' => '076100000',
        //         'description' => 'SIQUIJOR',
        //         'region_code' => '07',
        //         'province_code' => '0761',
        //     ],
        //     [
        //         'code' => '082600000',
        //         'description' => 'EASTERN SAMAR',
        //         'region_code' => '08',
        //         'province_code' => '0826',
        //     ],
        //     [
        //         'code' => '083700000',
        //         'description' => 'LEYTE',
        //         'region_code' => '08',
        //         'province_code' => '0837',
        //     ],
        //     [
        //         'code' => '084800000',
        //         'description' => 'NORTHERN SAMAR',
        //         'region_code' => '08',
        //         'province_code' => '0848',
        //     ],
        //     [
        //         'code' => '086000000',
        //         'description' => 'SAMAR (WESTERN SAMAR)',
        //         'region_code' => '08',
        //         'province_code' => '0860',
        //     ],
        //     [
        //         'code' => '086400000',
        //         'description' => 'SOUTHERN LEYTE',
        //         'region_code' => '08',
        //         'province_code' => '0864',
        //     ],
        //     [
        //         'code' => '087800000',
        //         'description' => 'BILIRAN',
        //         'region_code' => '08',
        //         'province_code' => '0878',
        //     ],
        //     [
        //         'code' => '097200000',
        //         'description' => 'ZAMBOANGA DEL NORTE',
        //         'region_code' => '09',
        //         'province_code' => '0972',
        //     ],
        //     [
        //         'code' => '097300000',
        //         'description' => 'ZAMBOANGA DEL SUR',
        //         'region_code' => '09',
        //         'province_code' => '0973',
        //     ],
        //     [
        //         'code' => '098300000',
        //         'description' => 'ZAMBOANGA SIBUGAY',
        //         'region_code' => '09',
        //         'province_code' => '0983',
        //     ],
        //     [
        //         'code' => '099700000',
        //         'description' => 'CITY OF ISABELA',
        //         'region_code' => '09',
        //         'province_code' => '0997',
        //     ],
        //     [
        //         'code' => '101300000',
        //         'description' => 'BUKIDNON',
        //         'region_code' => '10',
        //         'province_code' => '1013',
        //     ],
        //     [
        //         'code' => '101800000',
        //         'description' => 'CAMIGUIN',
        //         'region_code' => '10',
        //         'province_code' => '1018',
        //     ],
        //     [
        //         'code' => '103500000',
        //         'description' => 'LANAO DEL NORTE',
        //         'region_code' => '10',
        //         'province_code' => '1035',
        //     ],
        //     [
        //         'code' => '104200000',
        //         'description' => 'MISAMIS OCCIDENTAL',
        //         'region_code' => '10',
        //         'province_code' => '1042',
        //     ],
        //     [
        //         'code' => '104300000',
        //         'description' => 'MISAMIS ORIENTAL',
        //         'region_code' => '10',
        //         'province_code' => '1043',
        //     ],
        //     [
        //         'code' => '112300000',
        //         'description' => 'DAVAO DEL NORTE',
        //         'region_code' => '11',
        //         'province_code' => '1123',
        //     ],
        //     [
        //         'code' => '112400000',
        //         'description' => 'DAVAO DEL SUR',
        //         'region_code' => '11',
        //         'province_code' => '1124',
        //     ],
        //     [
        //         'code' => '112500000',
        //         'description' => 'DAVAO ORIENTAL',
        //         'region_code' => '11',
        //         'province_code' => '1125',
        //     ],
        //     [
        //         'code' => '118200000',
        //         'description' => 'COMPOSTELA VALLEY',
        //         'region_code' => '11',
        //         'province_code' => '1182',
        //     ],
        //     [
        //         'code' => '118600000',
        //         'description' => 'DAVAO OCCIDENTAL',
        //         'region_code' => '11',
        //         'province_code' => '1186',
        //     ],
        //     [
        //         'code' => '124700000',
        //         'description' => 'COTABATO (NORTH COTABATO)',
        //         'region_code' => '12',
        //         'province_code' => '1247',
        //     ],
        //     [
        //         'code' => '126300000',
        //         'description' => 'SOUTH COTABATO',
        //         'region_code' => '12',
        //         'province_code' => '1263',
        //     ],
        //     [
        //         'code' => '126500000',
        //         'description' => 'SULTAN KUDARAT',
        //         'region_code' => '12',
        //         'province_code' => '1265',
        //     ],
        //     [
        //         'code' => '128000000',
        //         'description' => 'SARANGANI',
        //         'region_code' => '12',
        //         'province_code' => '1280',
        //     ],
        //     [
        //         'code' => '129800000',
        //         'description' => 'COTABATO CITY',
        //         'region_code' => '12',
        //         'province_code' => '1298',
        //     ],
        //     [
        //         'code' => '133900000',
        //         'description' => 'NCR, CITY OF MANILA, FIRST DISTRICT',
        //         'region_code' => '13',
        //         'province_code' => '1339',
        //     ],
        //     [
        //         'code' => '133900000',
        //         'description' => 'CITY OF MANILA',
        //         'region_code' => '13',
        //         'province_code' => '1339',
        //     ],
        //     [
        //         'code' => '137400000',
        //         'description' => 'NCR, SECOND DISTRICT',
        //         'region_code' => '13',
        //         'province_code' => '1374',
        //     ],
        //     [
        //         'code' => '137500000',
        //         'description' => 'NCR, THIRD DISTRICT',
        //         'region_code' => '13',
        //         'province_code' => '1375',
        //     ],
        //     [
        //         'code' => '137600000',
        //         'description' => 'NCR, FOURTH DISTRICT',
        //         'region_code' => '13',
        //         'province_code' => '1376',
        //     ],
        //     [
        //         'code' => '140100000',
        //         'description' => 'ABRA',
        //         'region_code' => '14',
        //         'province_code' => '1401',
        //     ],
        //     [
        //         'code' => '141100000',
        //         'description' => 'BENGUET',
        //         'region_code' => '14',
        //         'province_code' => '1411',
        //     ],
        //     [
        //         'code' => '142700000',
        //         'description' => 'IFUGAO',
        //         'region_code' => '14',
        //         'province_code' => '1427',
        //     ],
        //     [
        //         'code' => '143200000',
        //         'description' => 'KALINGA',
        //         'region_code' => '14',
        //         'province_code' => '1432',
        //     ],
        //     [
        //         'code' => '144400000',
        //         'description' => 'MOUNTAIN PROVINCE',
        //         'region_code' => '14',
        //         'province_code' => '1444',
        //     ],
        //     [
        //         'code' => '148100000',
        //         'description' => 'APAYAO',
        //         'region_code' => '14',
        //         'province_code' => '1481',
        //     ],
        //     [
        //         'code' => '150700000',
        //         'description' => 'BASILAN',
        //         'region_code' => '15',
        //         'province_code' => '1507',
        //     ],
        //     [
        //         'code' => '153600000',
        //         'description' => 'LANAO DEL SUR',
        //         'region_code' => '15',
        //         'province_code' => '1536',
        //     ],
        //     [
        //         'code' => '153800000',
        //         'description' => 'MAGUINDANAO',
        //         'region_code' => '15',
        //         'province_code' => '1538',
        //     ],
        //     [
        //         'code' => '156600000',
        //         'description' => 'SULU',
        //         'region_code' => '15',
        //         'province_code' => '1566',
        //     ],
        //     [
        //         'code' => '157000000',
        //         'description' => 'TAWI-TAWI',
        //         'region_code' => '15',
        //         'province_code' => '1570',
        //     ],
        //     [
        //         'code' => '160200000',
        //         'description' => 'AGUSAN DEL NORTE',
        //         'region_code' => '16',
        //         'province_code' => '1602',
        //     ],
        //     [
        //         'code' => '160300000',
        //         'description' => 'AGUSAN DEL SUR',
        //         'region_code' => '16',
        //         'province_code' => '1603',
        //     ],
        //     [
        //         'code' => '166700000',
        //         'description' => 'SURIGAO DEL NORTE',
        //         'region_code' => '16',
        //         'province_code' => '1667',
        //     ],
        //     [
        //         'code' => '166800000',
        //         'description' => 'SURIGAO DEL SUR',
        //         'region_code' => '16',
        //         'province_code' => '1668',
        //     ],
        //     [
        //         'code' => '168500000',
        //         'description' => 'DINAGAT ISLANDS',
        //         'region_code' => '16',
        //         'province_code' => '1685',
        //     ],
        // ]);

    }
}
