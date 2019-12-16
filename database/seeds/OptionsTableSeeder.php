<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Options for A1 Exam starts here */
        /**Option a1_i1 (1) */
        Option::create([
            'option_name' => 'Guten Morgen',
            'instruction_id' => '1'
        ]);
        /**Option a1_i1 (2) */
        Option::create([
            'option_name' => 'Guten Abend',
            'instruction_id' => '1'
        ]);
        /**Option a1_i1 (3) */
        Option::create([
            'option_name' => 'Gute Nacht',
            'instruction_id' => '1'
        ]);
        /**Option a1_i2 (4) */
        Option::create([
            'instruction_id' => '2'
        ]);
        /**Option a1_i3 (5) */
        Option::create([
            'option_name' => '204',
            'instruction_id' => '3'
        ]);
        /**Option a1_i3 (6) */
        Option::create([
            'option_name' => '224',
            'instruction_id' => '3'
        ]);
        /**Option a1_i3 (7) */
        Option::create([
            'option_name' => '240',
            'instruction_id' => '3'
        ]);
        /**Option a1_i3 (8) */
        Option::create([
            'option_name' => '242',
            'instruction_id' => '3'
        ]);
        /**Option a1_i4 (9) */
        Option::create([
            'option_name' => '06:30 - 09:30 Uhr',
            'instruction_id' => '4'
        ]);
        /**Option a1_i4 (10) */
        Option::create([
            'option_name' => '07:30 - 09:30 Uhr',
            'instruction_id' => '4'
        ]);
        /**Option a1_i4 (11) */
        Option::create([
            'option_name' => '07:30 - 10:30 Uhr',
            'instruction_id' => '4'
        ]);
        /**Option a1_i5 (12) */
        Option::create([
            'instruction_id' => '5'
        ]);
        /**Option a1_i5 (13) */
        Option::create([
            'instruction_id' => '5'
        ]);
        /**Option a1_i5 (14) */
        Option::create([
            'instruction_id' => '5'
        ]);
        /**Option a1_i5 (15) */
        Option::create([
            'instruction_id' => '5'
        ]);
        //question a1 - 6
        /**Option a1_i6 (16) */
        Option::create([
            'option_name' => 'Danke schön',
            'instruction_id' => '6'
        ]);
        /**Option a1_i6 (17) */
        Option::create([
            'option_name' => 'Ja, gerne',
            'instruction_id' => '6'
        ]);
        /**Option a1_i6 (18) */
        Option::create([
            'option_name' => 'Sehr gut',
            'instruction_id' => '6'
        ]);
        /**Option a1_i7 (19) */
        Option::create([
            'option_name' => 'Danke schön',
            'instruction_id' => '7'
        ]);
        /**Option a1_i7 (20) */
        Option::create([
            'option_name' => 'Ja, gerne',
            'instruction_id' => '7'
        ]);
        /**Option a1_i7 (21) */
        Option::create([
            'option_name' => 'Sehr gut',
            'instruction_id' => '7'
        ]);
        /**Option a1_i8 (22) */
        Option::create([
            'option_name' => 'Danke schön',
            'instruction_id' => '8'
        ]);
        /**Option a1_i8 (23) */
        Option::create([
            'option_name' => 'Ja, gerne',
            'instruction_id' => '8'
        ]);
        /**Option a1_i8 (24) */
        Option::create([
            'option_name' => 'Sehr gut',
            'instruction_id' => '8'
        ]);
        /**Option a1_i9 (25) */
        Option::create([
            'instruction_id' => '9'
        ]);
        /**Option a1_i10 (26) */
        Option::create([
            'option_name' => 'Ihre',
            'instruction_id' => '10'
        ]);
        /**Option a1_i10 (27) */
        Option::create([
            'option_name' => 'Seine',
            'instruction_id' => '10'
        ]);
        /**Option a1_i10 (28) */
        Option::create([
            'option_name' => 'Ihre',
            'instruction_id' => '10'
        ]);
        /**Option a1_i10 (29) */
        Option::create([
            'option_name' => 'Seine',
            'instruction_id' => '10'
        ]);
        /**Option a1_i10 (30) */
        Option::create([
            'option_name' => 'Ihre',
            'instruction_id' => '10'
        ]);
        /**Option a1_i10 (31) */
        Option::create([
            'option_name' => 'Seine',
            'instruction_id' => '10'
        ]);
        /**Option a1_i11 (32) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '11'
        ]);
        /**Option a1_i11 (33) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '11'
        ]);
        /**Option a1_i12 (34) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '12'
        ]);
        /**Option a1_i12 (35) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '12'
        ]);
        /**Option a1_i13 (36) */
        Option::create([
            'option_name' => 'komme',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (37) */
        Option::create([
            'option_name' => 'kommen',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (38) */
        Option::create([
            'option_name' => 'kommt',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (39) */
        Option::create([
            'option_name' => 'kann',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (40) */
        Option::create([
            'option_name' => 'können',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (41) */
        Option::create([
            'option_name' => 'kannst',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (42) */
        Option::create([
            'option_name' => 'spreche',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (43) */
        Option::create([
            'option_name' => 'sprechen',
            'instruction_id' => '13'
        ]);
        /**Option a1_i13 (44) */
        Option::create([
            'option_name' => 'spricht',
            'instruction_id' => '13'
        ]);
        /**Option a1_i14 (45) */
        Option::create([
            'option_name' => 'Entschuldigung, was bedeuted...?',
            'instruction_id' => '14'
        ]);
        /**Option a1_i14 (46) */
        Option::create([
            'option_name' => 'Können Sie das aufschreiben bitte?',
            'instruction_id' => '14'
        ]);
        /**Option a1_i14 (47) */
        Option::create([
            'option_name' => 'Entschuldigung, noch einmal bitte',
            'instruction_id' => '14'
        ]);
        /**Option a1_i15 (48) */
        Option::create([
            'option_name' => 'Stimmt das?',
            'instruction_id' => '15'
        ]);
        /**Option a1_i15 (49) */
        Option::create([
            'option_name' => 'Können Sie das aufschreiben bitte?',
            'instruction_id' => '15'
        ]);
        /**Option a1_i15 (50) */
        Option::create([
            'option_name' => 'Entschuldigung, noch einmal bitte',
            'instruction_id' => '15'
        ]);
        /**Option a1_i16 (51) */
        Option::create([
            'option_name' => 'Entschuldigung, was bedeuted...?',
            'instruction_id' => '16'
        ]);
        /**Option a1_i16 (52) */
        Option::create([
            'option_name' => 'Können Sie das aufschreiben bitte?',
            'instruction_id' => '16'
        ]);
        /**Option a1_i16 (53) */
        Option::create([
            'option_name' => 'Entschuldigung, können Sie das wiederholen?',
            'instruction_id' => '16'
        ]);
        /**Option a1_i17 (54) */
        Option::create([
            'option_name' => 'www.urlaub-in-de.de?',
            'instruction_id' => '17'
        ]);
        /**Option a1_i17 (55) */
        Option::create([
            'option_name' => 'www.reisehlife.com',
            'instruction_id' => '17'
        ]);
        /**Option a1_i18 (56) */
        Option::create([
            'option_name' => 'ein',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (57) */
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (58) */
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (59) */
        Option::create([
            'option_name' => 'ein',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (60) */
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (61) */
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (62) */
        Option::create([
            'option_name' => 'ein',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (63) */
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '18'
        ]);
        /**Option a1_i18 (64) */
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '18'
        ]);
        /**Option a1_i19 (65) */
        Option::create([
            'option_name' => 'Glais 6',
            'instruction_id' => '19'
        ]);
        /**Option a1_i19 (66) */
        Option::create([
            'option_name' => 'Glais 10',
            'instruction_id' => '19'
        ]);
        /**Option a1_i19 (67) */
        Option::create([
            'option_name' => 'Glais 16',
            'instruction_id' => '19'
        ]);
        /**Option a1_i20 (68) */
        Option::create([
            'option_name' => 'dürfen',
            'instruction_id' => '20'
        ]);
        /**Option a1_i20 (69) */
        Option::create([
            'option_name' => 'müssen',
            'instruction_id' => '20'
        ]);
        /**Option a1_i20 (70) */
        Option::create([
            'option_name' => 'können',
            'instruction_id' => '20'
        ]);
        /**Option a1_i20 (71) */
        Option::create([
            'option_name' => 'müssen',
            'instruction_id' => '20'
        ]);
        /**Option a1_i20 (72) */
        Option::create([
            'option_name' => 'dürfen',
            'instruction_id' => '20'
        ]);
        /**Option a1_i20 (73) */
        Option::create([
            'option_name' => 'müssen',
            'instruction_id' => '20'
        ]);
        /**Option a1_i21 (74) */
        Option::create([
            'option_name' => 'Hoffentlich',
            'instruction_id' => '21'
        ]);
        /**Option a1_i21 (75) */
        Option::create([
            'option_name' => 'Ja, garne',
            'instruction_id' => '21'
        ]);
        /**Option a1_i21 (76) */
        Option::create([
            'option_name' => 'Schade',
            'instruction_id' => '21'
        ]);
        /**Option a1_i22 (77) */
        Option::create([
            'option_name' => 'Hoffentlich',
            'instruction_id' => '22'
        ]);
        /**Option a1_i22 (78) */
        Option::create([
            'option_name' => 'Ja, garne',
            'instruction_id' => '22'
        ]);
        /**Option a1_i22 (79) */
        Option::create([
            'option_name' => 'Schade',
            'instruction_id' => '22'
        ]);
        /**Option a1_i23 (80) */
        Option::create([
            'option_name' => 'Hoffentlich',
            'instruction_id' => '23'
        ]);
        /**Option a1_i23 (81) */
        Option::create([
            'option_name' => 'Ja, garne',
            'instruction_id' => '23'
        ]);
        /**Option a1_i23 (82) */
        Option::create([
            'option_name' => 'Schade',
            'instruction_id' => '23'
        ]);
        /**Option a1_i24 (83) */
        Option::create([
            'option_name' => 'Geh zum Informationsschalter',
            'instruction_id' => '24'
        ]);
        /**Option a1_i24 (84) */
        Option::create([
            'option_name' => 'Geh zum Flugteig',
            'instruction_id' => '24'
        ]);
        /**Option a1_i24 (85) */
        Option::create([
            'option_name' => 'Warte auf weitere Informationen',
            'instruction_id' => '24'
        ]);
        /**Option a1_i25 (86) */
        Option::create([
            'option_name' => 'mich',
            'instruction_id' => '25'
        ]);
        /**Option a1_i25 (87) */
        Option::create([
            'option_name' => 'mir',
            'instruction_id' => '25'
        ]);
        /**Option a1_i25 (88) */
        Option::create([
            'option_name' => 'mein',
            'instruction_id' => '25'
        ]);
        /**Option a1_i25 (89) */
        Option::create([
            'option_name' => 'meine',
            'instruction_id' => '25'
        ]);
        /**Option a1_i25 (90) */
        Option::create([
            'option_name' => 'meinen',
            'instruction_id' => '25'
        ]);
        /**Option a1_i26 (91) */
        Option::create([
            'instruction_id' => '26'
        ]);
        /**Option a1_i26 (92) */
        Option::create([
            'instruction_id' => '26'
        ]);
        /**Option a1_i27 (93) */
        Option::create([
            'option_name' => 'He wants to invite you',
            'instruction_id' => '27'
        ]);
        /**Option a1_i27 (94) */
        Option::create([
            'option_name' => 'He wants to thank you',
            'instruction_id' => '27'
        ]);
        /**Option a1_i27 (95) */
        Option::create([
            'option_name' => 'He wants to send you greetings',
            'instruction_id' => '27'
        ]);
        /**Option a1_i28 (96) */
        Option::create([
            'option_name' => 'Hallo, Julia',
            'instruction_id' => '28'
        ]);
        /**Option a1_i28 (97) */
        Option::create([
            'option_name' => 'Hallo, ist Julia da?',
            'instruction_id' => '28'
        ]);
        /**Option a1_i28 (98) */
        Option::create([
            'option_name' => 'Moment bitte',
            'instruction_id' => '28'
        ]);
        /**Option a1_i29 (99) */
        Option::create([
            'option_name' => 'auf',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (100) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (101) */
        Option::create([
            'option_name' => 'bei',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (102) */
        Option::create([
            'option_name' => 'dem',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (103) */
        Option::create([
            'option_name' => 'die',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (104) */
        Option::create([
            'option_name' => 'der',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (105) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (106) */
        Option::create([
            'option_name' => 'in',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (107) */
        Option::create([
            'option_name' => 'durch',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (108) */
        Option::create([
            'option_name' => 'der',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (109) */
        Option::create([
            'option_name' => 'das',
            'instruction_id' => '29'
        ]);
        /**Option a1_i29 (110) */
        Option::create([
            'option_name' => 'dem',
            'instruction_id' => '29'
        ]);
        /**Option a1_i30 (111) */
        Option::create([
            'option_name' => 'Bitte buchstabieren Sie das',
            'instruction_id' => '30'
        ]);
        /**Option a1_i30 (112) */
        Option::create([
            'option_name' => 'Wie sagt man das auf Deutsch?',
            'instruction_id' => '30'
        ]);
        /**Option a1_i30 (113) */
        Option::create([
            'option_name' => 'Stimmt das?',
            'instruction_id' => '30'
        ]);
        /**Option a1_i31 (114) */
        Option::create([
            'option_name' => 'Bitte buchstabieren Sie das',
            'instruction_id' => '31'
        ]);
        /**Option a1_i31 (115) */
        Option::create([
            'option_name' => 'Wie sagt man das auf Deutsch?',
            'instruction_id' => '31'
        ]);
        /**Option a1_i31 (116) */
        Option::create([
            'option_name' => 'Ist das richtig?',
            'instruction_id' => '31'
        ]);
        /**Option a1_i32 (117) */
        Option::create([
            'option_name' => 'Bitte buchstabieren Sie das',
            'instruction_id' => '32'
        ]);
        /**Option a1_i32 (118) */
        Option::create([
            'option_name' => 'Konnen Sie das wiederholen?',
            'instruction_id' => '32'
        ]);
        /**Option a1_i32 (118) */
        Option::create([
            'option_name' => 'Ist das richtig?',
            'instruction_id' => '32'
        ]);
        /**Option a1_i33 (120) */
        Option::create([
            'option_name' => 'Gebäude A',
            'instruction_id' => '33'
        ]);
        /**Option a1_i33 (121) */
        Option::create([
            'option_name' => 'Gebäude B',
            'instruction_id' => '33'
        ]);
        /**Option a1_i33 (122) */
        Option::create([
            'option_name' => 'Gebäude C?',
            'instruction_id' => '33'
        ]);
        /**Option a1_i34 (123) */
        Option::create([
            'instruction_id' => '34'
        ]);
        /**Option a1_i35 (124) */
        Option::create([
            'option_name' => '1. Etage',
            'instruction_id' => '35'
        ]);
        /**Option a1_i35 (125) */
        Option::create([
            'option_name' => '2. Etage',
            'instruction_id' => '35'
        ]);
        /**Option a1_i35 (126) */
        Option::create([
            'option_name' => '1. Etage',
            'instruction_id' => '35'
        ]);
        /**Option a1_i35 (127) */
        Option::create([
            'option_name' => '2. Etage',
            'instruction_id' => '35'
        ]);
        /**Option a1_i35 (128) */
        Option::create([
            'option_name' => 'Erdgeschoss',
            'instruction_id' => '35'
        ]);
        /**Option a1_i35 (129) */
        Option::create([
            'option_name' => 'Etage',
            'instruction_id' => '35'
        ]);
        /**Option a1_i36 (130) */
        Option::create([
            'option_name' => 'April',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (131) */
        Option::create([
            'option_name' => 'Juni',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (132) */
        Option::create([
            'option_name' => 'Oktober',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (133) */
        Option::create([
            'option_name' => '8 Tage',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (134) */
        Option::create([
            'option_name' => '14 Tage',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (135) */
        Option::create([
            'option_name' => '1 Monat',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (136) */
        Option::create([
            'option_name' => 'Anfangerstufe',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (137) */
        Option::create([
            'option_name' => 'Mittelstufe',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (138) */
        Option::create([
            'option_name' => 'Abschlusstufe',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (139) */
        Option::create([
            'option_name' => 'Einzelunterricht',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (140) */
        Option::create([
            'option_name' => 'Gruppe mit 4-6 Personen',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (141) */
        Option::create([
            'option_name' => 'Gruppe mit 10-12 Personen',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (142) */
        Option::create([
            'option_name' => 'Hotel',
            'instruction_id' => '36'
        ]);
        /**Option a1_i36 (143) */
        Option::create([
            'option_name' => 'Privat',
            'instruction_id' => '36'
        ]);
        /**Option a1_i37 (144) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '37'
        ]);
        /**Option a1_i37 (145) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '37'
        ]);
        /**Option a1_i38 (146) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '38'
        ]);
        /**Option a1_i38 (147) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '38'
        ]);
        /**Option a1_i39 (148) */
        Option::create([
            'option_name' => 'Herzlichen Gluckwunsch!',
            'instruction_id' => '39'
        ]);
        /**Option a1_i39 (149) */
        Option::create([
            'option_name' => 'Alles Gute!',
            'instruction_id' => '39'
        ]);
        /**Option a1_i39 (150) */
        Option::create([
            'option_name' => 'Ja, gern!',
            'instruction_id' => '39'
        ]);
        /** Options for A1 Exam ends here */

        /** Options for A2 Exam starts here */
        /**Option a2_i40 (151) */
        Option::create([
            'option_text' => 'Was machst du',
            'option_name' => 'am besten?',
            'instruction_id' => '40'
        ]);
        /**Option a2_i40 (152) */
        Option::create([
            'option_name' => 'am libesten?',
            'instruction_id' => '40'
        ]);

        /**Option a2_i41 (153) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '41'
        ]);
        /**Option a2_i41 (154) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '41'
        ]);
        /**Option a2_i42 (155) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '42'
        ]);
        /**Option a2_i42 (156) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '42'
        ]);

        /**Option a2_i43 (157) */
        Option::create([
            'option_name' => 'Gesundheit!',
            'instruction_id' => '43'
        ]);
        /**Option a2_i43 (158) */
        Option::create([
            'option_name' => 'Gleichfalls!',
            'instruction_id' => '43'
        ]);
        /**Option a2_i43 (159) */
        Option::create([
            'option_name' => 'Gute Besserung!',
            'instruction_id' => '43'
        ]);
        /**Option a2_i43 (160) */
        Option::create([
            'option_name' => 'Iche habe keine Lust!',
            'instruction_id' => '43'
        ]);

        /**Option a2_i44 (161) */
        Option::create([
            'option_name' => 'Gesundheit!',
            'instruction_id' => '44'
        ]);
        /**Option a2_i44 (162) */
        Option::create([
            'option_name' => 'Gleichfalls!',
            'instruction_id' => '44'
        ]);
        /**Option a2_i44 (163) */
        Option::create([
            'option_name' => 'Gute Besserung!',
            'instruction_id' => '44'
        ]);
        /**Option a2_i44 (164) */
        Option::create([
            'option_name' => 'Iche habe keine Lust!',
            'instruction_id' => '44'
        ]);

        /**Option a2_i45 (165) */
        Option::create([
            'option_name' => 'Gesundheit!',
            'instruction_id' => '45'
        ]);
        /**Option a2_i45 (166) */
        Option::create([
            'option_name' => 'Gleichfalls!',
            'instruction_id' => '45'
        ]);
        /**Option a2_i45 (167) */
        Option::create([
            'option_name' => 'Gute Besserung!',
            'instruction_id' => '45'
        ]);
        /**Option a2_i45 (168) */
        Option::create([
            'option_name' => 'Iche habe keine Lust!',
            'instruction_id' => '45'
        ]);

        /**Option a2_i46 (169) */
        Option::create([
            'option_text' => 'Wir könnten',
            'option_name' => 'ins',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (170) */
        Option::create([
            'option_text' => 'Kino gehen!',
            'option_name' => 'in dem',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (171) */
        Option::create([
            'option_name' => 'in den',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (172) */
        Option::create([
            'option_text' => 'Lasst uns ins',
            'option_name' => 'ein',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (173) */
        Option::create([
            'option_text' => 'Café gehen!',
            'option_name' => 'eine',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (174) */
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '46'
        ]);

        /**Option a2_i46 (175) */
        Option::create([
            'option_text' => 'Wir können auch in',
            'option_name' => 'das',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (176) */
        Option::create([
            'option_text' => 'dem',
            'option_name' => 'Gleichfalls!',
            'instruction_id' => '46'
        ]);
        /**Option a2_i46 (177) */
        Option::create([
            'option_name' => 'den',
            'instruction_id' => '46'
        ]);

        /**Option a2_i47 (178) */
        Option::create([
            'option_name' => 'Freut mich, Sie kennenzulernen',
            'instruction_id' => '47'
        ]);
        /**Option a2_i47 (179) */
        Option::create([
            'option_name' => 'Gefallt mir, Sie kennenzulernen',
            'instruction_id' => '47'
        ]);

        /**Option a2_i48 (180) */
        Option::create([
            'instruction_id' => '48'
        ]);
        /**Option a2_i48 (181) */
        Option::create([
            'instruction_id' => '48'
        ]);
        /**Option a2_i48 (182) */
        Option::create([
            'instruction_id' => '48'
        ]);

        /**Option a2_i49 (183) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '49'
        ]);
        /**Option a2_i49 (184) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '49'
        ]);

        /**Option a2_i50 (185) */
        Option::create([
            'option_name' => 'Entschuldigung, wie sagt man noch mal...',
            'instruction_id' => '50'
        ]);
        /**Option a2_i50 (186) */
        Option::create([
            'option_name' => 'Einen Moment, ich bin gleich fertig.',
            'instruction_id' => '50'
        ]);
        /**Option a2_i50 (187) */
        Option::create([
            'option_name' => 'Was ich noch sagen wollte..., ich bin gleich fertig.',
            'instruction_id' => '50'
        ]);

        /**Option a2_i51 (188) */
        Option::create([
            'option_name' => 'Entschuldigung, wie sagt man noch mal...',
            'instruction_id' => '51'
        ]);
        /**Option a2_i51 (189) */
        Option::create([
            'option_name' => 'Einen Moment, ich bin gleich fertig.',
            'instruction_id' => '51'
        ]);
        /**Option a2_i51 (190) */
        Option::create([
            'option_name' => 'Was ich noch sagen wollte..., ich bin gleich fertig.',
            'instruction_id' => '51'
        ]);

        /**Option a2_i52 (191) */
        Option::create([
            'option_name' => 'Entschuldigung, wie sagt man noch mal...',
            'instruction_id' => '52'
        ]);
        /**Option a2_i52 (192) */
        Option::create([
            'option_name' => 'Einen Moment, ich bin gleich fertig.',
            'instruction_id' => '52'
        ]);
        /**Option a2_i52 (193) */
        Option::create([
            'option_name' => 'Was ich noch sagen wollte..., ich bin gleich fertig.',
            'instruction_id' => '52'
        ]);

        /**Option a2_i53 (194) */
        Option::create([
            'option_text' => 'Hi, Micha, wie geht\'s dir? Mir geht es bestens. Ab Samstag bin ich für eine Woche im Ruhrgebiet und besuche meine Freundin Anna. Erinnerst du dich',
            'option_name' => 'an',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (195) */
        Option::create([
            'option_text' => 'sie?',
            'option_name' => 'auf',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (196) */
        Option::create([
            'option_name' => 'fur',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (197) */
        Option::create([
            'option_name' => 'in',
            'instruction_id' => '53'
        ]);

        /**Option a2_i53 (198) */
        Option::create([
            'option_text' => 'Ich freue mich schon sehr',
            'option_name' => 'an',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (199) */
        Option::create([
            'option_text' => 'die Reise, denn im Ruhrgebiet gibt es viele alte Industriegebäude zu sehen.',
            'option_name' => 'auf',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (200) */
        Option::create([
            'option_name' => 'fur',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (201) */
        Option::create([
            'option_name' => 'in',
            'instruction_id' => '53'
        ]);

        /**Option a2_i53 (202) */
        Option::create([
            'option_text' => 'Anna interessiert sich auch sehr',
            'option_name' => 'an',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (203) */
        Option::create([
            'option_text' => 'Industriekultur und will mir ein paar interessante Orte zeigen. Und wann kommst du mich mal wieder in Bonn besuchen?',
            'option_name' => 'auf',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (204) */
        Option::create([
            'option_name' => 'fur',
            'instruction_id' => '53'
        ]);
        /**Option a2_i53 (205) */
        Option::create([
            'option_name' => 'in',
            'instruction_id' => '53'
        ]);

        /**Option a2_i54 (206) */
        Option::create([
            'option_name' => 'Das tut mir leid',
            'instruction_id' => '54'
        ]);
        /**Option a2_i54 (207) */
        Option::create([
            'option_name' => 'Nein, leider nicht',
            'instruction_id' => '54'
        ]);
        /**Option a2_i54 (208) */
        Option::create([
            'option_name' => 'Schade, nein',
            'instruction_id' => '54'
        ]);

        /**Option a2_i55 (209) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '55'
        ]);
        /**Option a2_i55 (210) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '55'
        ]);

        /**Option a2_i56 (211) */
        Option::create([
            'option_text' => 'ist das deutsche Wort für ...?',
            'option_name' => 'Was',
            'instruction_id' => '56'
        ]);
        /**Option a2_i56 (212) */
        Option::create([
            'option_name' => 'Wer',
            'instruction_id' => '56'
        ]);

        /**Option a2_i56 (213) */
        Option::create([
            'option_text' => 'sagt man auf Deutsch ...?',
            'option_name' => 'Was',
            'instruction_id' => '56'
        ]);
        /**Option a2_i56 (214) */
        Option::create([
            'option_name' => 'Wer',
            'instruction_id' => '56'
        ]);

        /**Option a2_i57 (215) */
        Option::create([
            'option_name' => 'Geht\'s noch?',
            'instruction_id' => '57'
        ]);
        /**Option a2_i57 (216) */
        Option::create([
            'option_name' => 'Was ist schlecht?',
            'instruction_id' => '57'
        ]);
        /**Option a2_i57 (217) */
        Option::create([
            'option_name' => 'Was lauft?',
            'instruction_id' => '57'
        ]);
        /**Option a2_i57 (218) */
        Option::create([
            'option_name' => 'Was fehlt dir?',
            'instruction_id' => '57'
        ]);
        /**Option a2_i57 (219) */
        Option::create([
            'option_name' => 'Was ist los?',
            'instruction_id' => '57'
        ]);
        /**Option a2_i57 (210) */
        Option::create([
            'option_name' => 'Was ist passiert?',
            'instruction_id' => '57'
        ]);

        /**Option a2_i58 (211) */
        Option::create([
            'option_name' => 'Tut mir leid, Sie haben sich verwählt.',
            'instruction_id' => '58'
        ]);
        /**Option a2_i58 (213) */
        Option::create([
            'option_name' => 'Tut mir leid, sie ist im Augenblick nicht da.',
            'instruction_id' => '58'
        ]);
        /**Option a2_i58 (213) */
        Option::create([
            'option_name' => 'Nein, tut mir leid. Er ist im Moment nicht zu Hause.',
            'instruction_id' => '58'
        ]);
        /**Option a2_i58 (214) */
        Option::create([
            'option_name' => 'Es tut mir leid, sie spricht gerade.',
            'instruction_id' => '58'
        ]);

        /**Option a2_i59 (215) */
        Option::create([
            'option_name' => 'Tut mir leid, Sie haben sich verwählt.',
            'instruction_id' => '59'
        ]);
        /**Option a2_i59 (216) */
        Option::create([
            'option_name' => 'Tut mir leid, sie ist im Augenblick nicht da.',
            'instruction_id' => '59'
        ]);
        /**Option a2_i59 (217) */
        Option::create([
            'option_name' => 'Nein, tut mir leid. Er ist im Moment nicht zu Hause.',
            'instruction_id' => '59'
        ]);
        /**Option a2_i59 (218) */
        Option::create([
            'option_name' => 'Es tut mir leid, sie spricht gerade.',
            'instruction_id' => '59'
        ]);

        /**Option a2_i60 (219) */
        Option::create([
            'option_name' => 'Tut mir leid, Sie haben sich verwählt.',
            'instruction_id' => '60'
        ]);
        /**Option a2_i60 (210) */
        Option::create([
            'option_name' => 'Tut mir leid, sie ist im Augenblick nicht da.',
            'instruction_id' => '60'
        ]);
        /**Option a2_i60 (211) */
        Option::create([
            'option_name' => 'Nein, tut mir leid. Er ist im Moment nicht zu Hause.',
            'instruction_id' => '60'
        ]);
        /**Option a2_i60 (212) */
        Option::create([
            'option_name' => 'Es tut mir leid, sie spricht gerade.',
            'instruction_id' => '60'
        ]);

        /**Option a2_i61 (213) */
        Option::create([
            'option_name' => 'A',
            'instruction_id' => '61'
        ]);
        /**Option a2_i61 (214) */
        Option::create([
            'option_name' => 'B',
            'instruction_id' => '61'
        ]);
        /**Option a2_i61 (215) */
        Option::create([
            'option_name' => 'C',
            'instruction_id' => '61'
        ]);
        /**Option a2_i61 (216) */
        Option::create([
            'option_name' => 'D',
            'instruction_id' => '61'
        ]);

        /**Option a2_i62 (217) */
        Option::create([
            'option_name' => 'A',
            'instruction_id' => '62'
        ]);
        /**Option a2_i62 (218) */
        Option::create([
            'option_name' => 'B',
            'instruction_id' => '62'
        ]);
        /**Option a2_i62 (219) */
        Option::create([
            'option_name' => 'C',
            'instruction_id' => '62'
        ]);
        /**Option a2_i62 (220) */
        Option::create([
            'option_name' => 'D',
            'instruction_id' => '62'
        ]);

        /**Option a2_i63 (221) */
        Option::create([
            'option_name' => 'Wie wäre es mit 18 Uhr?',
            'instruction_id' => '63'
        ]);
        /**Option a2_i63 (222) */
        Option::create([
            'option_name' => 'Wir können uns um 18 Uhr treffen.',
            'instruction_id' => '63'
        ]);
        /**Option a2_i63 (223) */
        Option::create([
            'option_name' => 'Ihr trefft euch mit mir um 18 Uhr.',
            'instruction_id' => '63'
        ]);
        /**Option a2_i63 (224) */
        Option::create([
            'option_name' => 'Wollen wir uns um 18 Uhr treffen?',
            'instruction_id' => '63'
        ]);

        /**Option a2_i64 (225) */
        Option::create([
            'option_name' => '2',
            'instruction_id' => '64'
        ]);
        /**Option a2_i64 (226) */
        Option::create([
            'option_name' => '6',
            'instruction_id' => '64'
        ]);
        /**Option a2_i64 (227) */
        Option::create([
            'option_name' => '8',
            'instruction_id' => '64'
        ]);

        /**Option a2_i65 (228) */
        Option::create([
            'instruction_id' => '65'
        ]);
        /**Option a2_i65 (229) */
        Option::create([
            'instruction_id' => '65'
        ]);
        /**Option a2_i65 (230) */
        Option::create([
            'instruction_id' => '65'
        ]);

        /**Option a2_i65 (231) */
        Option::create([
            'instruction_id' => '65'
        ]);
        /**Option a2_i65 (232) */
        Option::create([
            'instruction_id' => '65'
        ]);
        /**Option a2_i65 (233) */
        Option::create([
            'instruction_id' => '65'
        ]);

        /**Option a2_i66 (234) */
        Option::create([
            'instruction_id' => '66'
        ]);
        /**Option a2_i66 (235) */
        Option::create([
            'instruction_id' => '66'
        ]);
        
        /**Option a2_i66 (236) */
        Option::create([
            'instruction_id' => '66'
        ]);
        /**Option a2_i66 (237) */
        Option::create([
            'instruction_id' => '66'
        ]);

        /**Option a2_i66 (238) */
        Option::create([
            'instruction_id' => '66'
        ]);
        /**Option a2_i66 (239) */
        Option::create([
            'instruction_id' => '66'
        ]);

        /**Option a2_i67 (240) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '67'
        ]);
        /**Option a2_i67 (241) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '67'
        ]);
        
        /**Option a2_i68 (242) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '68'
        ]);
        /**Option a2_i68 (243) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '68'
        ]);

        /**Option a2_i69 (244) */
        Option::create([
            'option_name' => 'devon?',
            'instruction_id' => '69'
        ]);
        /**Option a2_i69 (245) */
        Option::create([
            'option_name' => 'dagegen?',
            'instruction_id' => '69'
        ]);
        /**Option a2_i69 (246) */
        Option::create([
            'option_name' => 'dazu?',
            'instruction_id' => '69'
        ]);

        /**Option a2_i70 (247) */
        Option::create([
            'instruction_id' => '70'
        ]);
        /**Option a2_i70 (248) */
        Option::create([
            'instruction_id' => '70'
        ]);

        /**Option a2_i70 (249) */
        Option::create([
            'instruction_id' => '70'
        ]);
        /**Option a2_i70 (250) */
        Option::create([
            'instruction_id' => '70'
        ]);

        /**Option a2_i70 (251) */
        Option::create([
            'instruction_id' => '70'
        ]);
        /**Option a2_i70 (252) */
        Option::create([
            'instruction_id' => '70'
        ]);

        /**Option a2_i70 (253) */
        Option::create([
            'instruction_id' => '70'
        ]);
        /**Option a2_i70 (254) */
        Option::create([
            'instruction_id' => '70'
        ]);

        /**Option a2_i71 (255) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '71'
        ]);
        /**Option a2_i71 (256) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '71'
        ]);

        /**Option a2_i72 (257) */
        Option::create([
            'option_name' => 'am meisten?',
            'instruction_id' => '72'
        ]);
        /**Option a2_i72 (258) */
        Option::create([
            'option_name' => 'meist?',
            'instruction_id' => '72'
        ]);
        /**Option a2_i72 (259) */
        Option::create([
            'option_name' => 'meistens',
            'instruction_id' => '72'
        ]);

        /**Option a2_i73 (260) */
        Option::create([
            'option_name' => 'dich',
            'instruction_id' => '73'
        ]);
        /**Option a2_i73 (261) */
        Option::create([
            'option_name' => 'euch',
            'instruction_id' => '73'
        ]);
        /**Option a2_i73 (262) */
        Option::create([
            'option_name' => 'sich',
            'instruction_id' => '73'
        ]);

        /**Option a2_i73 (263) */
        Option::create([
            'option_name' => 'wohnt ihr',
            'instruction_id' => '73'
        ]);
        /**Option a2_i73 (264) */
        Option::create([
            'option_name' => 'habit ihr gewohnt',
            'instruction_id' => '73'
        ]);

        /**Option a2_i73 (265) */
        Option::create([
            'option_name' => 'heiratet ihr',
            'instruction_id' => '73'
        ]);
        /**Option a2_i73 (266) */
        Option::create([
            'option_name' => 'habit ihr geheiratet',
            'instruction_id' => '73'
        ]);

        /**Option a2_i74 (267) */
        Option::create([
            'option_name' => 'A',
            'instruction_id' => '74'
        ]);
        /**Option a2_i74 (268) */
        Option::create([
            'option_name' => 'B',
            'instruction_id' => '74'
        ]);
        /**Option a2_i74 (269) */
        Option::create([
            'option_name' => 'C',
            'instruction_id' => '74'
        ]);
        /**Option a2_i74 (270) */
        Option::create([
            'option_name' => 'D',
            'instruction_id' => '74'
        ]);

        /**Option a2_i75 (271) */
        Option::create([
            'option_name' => 'A',
            'instruction_id' => '75'
        ]);
        /**Option a2_i75 (272) */
        Option::create([
            'option_name' => 'B',
            'instruction_id' => '75'
        ]);
        /**Option a2_i75 (273) */
        Option::create([
            'option_name' => 'C',
            'instruction_id' => '75'
        ]);
        /**Option a2_i75 (274) */
        Option::create([
            'option_name' => 'D',
            'instruction_id' => '75'
        ]);

        /**Option a2_i76 (275) */
        Option::create([
            'option_name' => 'A',
            'instruction_id' => '76'
        ]);
        /**Option a2_i76 (276) */
        Option::create([
            'option_name' => 'B',
            'instruction_id' => '76'
        ]);
        /**Option a2_i76 (277) */
        Option::create([
            'option_name' => 'C',
            'instruction_id' => '76'
        ]);
        /**Option a2_i76 (278) */
        Option::create([
            'option_name' => 'D',
            'instruction_id' => '76'
        ]);

        /**Option a2_i77 (279) */
        Option::create([
            'option_name' => 'steigt',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (280) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (281) */
        Option::create([
            'option_name' => 'um',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (282) */
        Option::create([
            'option_name' => 'bis',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (283) */
        Option::create([
            'option_name' => 'an',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (284) */
        Option::create([
            'option_name' => 'aussteigen',
            'instruction_id' => '77'
        ]);

        /**Option a2_i77 (285) */
        Option::create([
            'option_name' => 'steigt',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (286) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (287) */
        Option::create([
            'option_name' => 'um',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (288) */
        Option::create([
            'option_name' => 'bis',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (289) */
        Option::create([
            'option_name' => 'an',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (290) */
        Option::create([
            'option_name' => 'aussteigen',
            'instruction_id' => '77'
        ]);

        /**Option a2_i77 (291) */
        Option::create([
            'option_name' => 'steigt',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (292) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (293) */
        Option::create([
            'option_name' => 'um',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (294) */
        Option::create([
            'option_name' => 'bis',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (295) */
        Option::create([
            'option_name' => 'an',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (296) */
        Option::create([
            'option_name' => 'aussteigen',
            'instruction_id' => '77'
        ]);

        /**Option a2_i77 (297) */
        Option::create([
            'option_name' => 'steigt',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (298) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (299) */
        Option::create([
            'option_name' => 'um',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (300) */
        Option::create([
            'option_name' => 'bis',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (301) */
        Option::create([
            'option_name' => 'an',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (302) */
        Option::create([
            'option_name' => 'aussteigen',
            'instruction_id' => '77'
        ]);

        /**Option a2_i77 (303) */
        Option::create([
            'option_name' => 'steigt',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (304) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (305) */
        Option::create([
            'option_name' => 'um',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (306) */
        Option::create([
            'option_name' => 'bis',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (307) */
        Option::create([
            'option_name' => 'an',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (308) */
        Option::create([
            'option_name' => 'aussteigen',
            'instruction_id' => '77'
        ]);

        /**Option a2_i77 (309) */
        Option::create([
            'option_name' => 'steigt',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (310) */
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (311) */
        Option::create([
            'option_name' => 'um',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (312) */
        Option::create([
            'option_name' => 'bis',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (313) */
        Option::create([
            'option_name' => 'an',
            'instruction_id' => '77'
        ]);
        /**Option a2_i77 (314) */
        Option::create([
            'option_name' => 'aussteigen',
            'instruction_id' => '77'
        ]);

        /**Option a2_i78 (315) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '78'
        ]);
        /**Option a2_i78 (316) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '78'
        ]);

        /**Option a2_i79 (317) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '79'
        ]);
        /**Option a2_i79 (318) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '79'
        ]);

        /**Option a2_i80 (319) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '80'
        ]);
        /**Option a2_i80 (320) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '80'
        ]);

        /**Option a2_i81 (319) */
        Option::create([
            'option_text' => '"Kommst du zur Feier heute Abend?" "Ich kann',
            'option_name' => 'also',
            'instruction_id' => '81'
        ]);
        /**Option a2_i81 (320) */
        Option::create([
            'option_text' => 'nicht. Ich muss meine Hausaufgaben fertig machen."',
            'option_name' => 'doch',
            'instruction_id' => '81'
        ]);
        /**Option a2_i81 (320) */
        Option::create([
            'option_name' => 'namlich',
            'instruction_id' => '81'
        ]);

        /**Option a2_i82 (321) */
        Option::create([
            'option_text' => '"Bist du heute Abend beim Sport dabei?" "',
            'option_name' => 'Also',
            'instruction_id' => '82'
        ]);
        /**Option a2_i82 (322) */
        Option::create([
            'option_text' => 'möchte ich mitkommen, aber ich schreibe morgen einen Test."',
            'option_name' => 'Doch',
            'instruction_id' => '82'
        ]);
        /**Option a2_i82 (323) */
        Option::create([
            'option_name' => 'Eigentlich',
            'instruction_id' => '82'
        ]);
        /** Options for A2 Exam ends here */

        /** Options for B1 Exam starts here */
        /**Option b1_i83 (324) */
        Option::create([
            'instruction_id' => '83'
        ]);
        /**Option b1_i83 (325) */
        Option::create([
            'instruction_id' => '83'
        ]);
        /**Option b1_i83 (326) */
        Option::create([
            'instruction_id' => '83'
        ]);
        /**Option b1_i83 (327) */
        Option::create([
            'instruction_id' => '83'
        ]);

        /**Option b1_i84 (328) */
        Option::create([
            'option_name' => 'Gefällt mir.',
            'instruction_id' => '84'
        ]);
        /**Option b1_i84 (329) */
        Option::create([
            'option_name' => 'Gern geschehen',
            'instruction_id' => '84'
        ]);
        /**Option b1_i84 (330) */
        Option::create([
            'option_name' => 'Keine Ursache',
            'instruction_id' => '84'
        ]);
        /**Option b1_i84 (331) */
        Option::create([
            'option_name' => 'Vergnugen!',
            'instruction_id' => '84'
        ]);

        /**Option b1_i85 (332) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '85'
        ]);
        /**Option b1_i85 (333) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '85'
        ]);

        /**Option b1_i86 (334) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '86'
        ]);
        /**Option b1_i86 (335) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '86'
        ]);

        /**Option b1_i87 (336) */
        Option::create([
            'option_text' => '"Entschuldigung! Ich habe doch',
            'option_name' => 'ein',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (337) */
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (338) */
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (339) */
        Option::create([
            'option_name' => 'einer',
            'instruction_id' => '87'
        ]);

        /**Option b1_i87 (340) */
        Option::create([
            'option_text' => 'Bier bestellt!"',
            'option_name' => 'groß',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (341) */
        Option::create([
            'option_name' => 'große',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (342) */
        Option::create([
            'option_name' => 'großen',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (343) */
        Option::create([
            'option_name' => 'großes',
            'instruction_id' => '87'
        ]);

        /**Option b1_i87 (344) */
        Option::create([
            'option_text' => '"Ich wollte eigentlich',
            'option_name' => 'ein',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (345) */
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (346) */
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (347) */
        Option::create([
            'option_name' => 'einer',
            'instruction_id' => '87'
        ]);

        /**Option b1_i87 (348) */
        Option::create([
            'option_name' => 'grün',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (349) */
        Option::create([
            'option_name' => 'grüne',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (350) */
        Option::create([
            'option_name' => 'grünen',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (351) */
        Option::create([
            'option_name' => 'grünes',
            'instruction_id' => '87'
        ]);

        /**Option b1_i87 (352) */
        Option::create([
            'option_text' => 'Salat haben, ',
            'option_name' => 'kein',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (353) */
        Option::create([
            'option_name' => 'keine',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (354) */
        Option::create([
            'option_name' => 'keinen',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (355) */
        Option::create([
            'option_name' => 'keiner',
            'instruction_id' => '87'
        ]);

        /**Option b1_i87 (356) */
        Option::create([
            'option_name' => 'gemischt!',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (357) */
        Option::create([
            'option_name' => 'gemischte!',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (358) */
        Option::create([
            'option_name' => 'gemischten!',
            'instruction_id' => '87'
        ]);
        /**Option b1_i87 (359) */
        Option::create([
            'option_name' => 'gemischter!',
            'instruction_id' => '87'
        ]);

        /**Option b1_i88 (360) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '88'
        ]);
        /**Option b1_i88 (361) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '88'
        ]);

        /**Option b1_i89 (362) */
        Option::create([
            'option_text' => '"Die junge Frau mit dem grünen Pullover ist Irene. Sie arbeitet zurzeit',
            'option_name' => 'als',
            'instruction_id' => '89'
        ]);
        /**Option b1_i89 (363) */
        Option::create([
            'option_name' => ' ',
            'instruction_id' => '89'
        ]);
        /**Option b1_i89 (364) */
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '89'
        ]);
        /**Option b1_i89 (365) */
        Option::create([
            'option_text' => 'Verkäuferin."',
            'option_name' => 'wie',
            'instruction_id' => '89'
        ]);

        /**Option b1_i89 (366) */
        Option::create([
            'option_text' => '"Und der Schüler mit dem Bart, das ist Albert. Er ist',
            'option_name' => 'als',
            'instruction_id' => '89'
        ]);
        /**Option b1_i89 (367) */
        Option::create([
            'option_name' => '[-]',
            'instruction_id' => '89'
        ]);
        /**Option b1_i89 (368) */
        Option::create([
            'option_name' => 'der',
            'instruction_id' => '89'
        ]);
        /**Option b1_i89 (369) */
        Option::create([
            'option_text' => 'Ingenieur."',
            'option_name' => 'einen',
            'instruction_id' => '89'
        ]);

        /**Option b1_i90 (370) */
        Option::create([
            'option_name' => 'Mit der "Brötchentaste" kann man Brötchen telefonisch beim Bäcker bestellen.',
            'instruction_id' => '90'
        ]);
        /**Option b1_i90 (371) */
        Option::create([
            'option_name' => 'Eine "Brötchentaste" ist für Autofahrer gedacht, die nur kurz einkaufen wollen.',
            'instruction_id' => '90'
        ]);
        /**Option b1_i90 (372) */
        Option::create([
            'option_name' => 'Mit einer "Brötchentaste" bekommt man vom Bäcker billige Brötchen.',
            'instruction_id' => '90'
        ]);
                
        /**Option b1_i91 (373) */
        Option::create([
            'instruction_id' => '91'
        ]);
        /**Option b1_i91 (374) */
        Option::create([
            'instruction_id' => '91'
        ]);
        /**Option b1_i91 (375) */
        Option::create([
            'instruction_id' => '91'
        ]);
        /**Option b1_i91 (376) */
        Option::create([
            'instruction_id' => '91'
        ]);

        /**Option b1_i92 (377) */
        Option::create([
            'option_text' => 'Gleis ',
            'instruction_id' => '92'
        ]);

        /**Option b1_i93 (378) */
        Option::create([
            'instruction_id' => '93'
        ]);
        /**Option b1_i93 (379) */
        Option::create([
            'instruction_id' => '93'
        ]);
        /**Option b1_i93 (380) */
        Option::create([
            'instruction_id' => '93'
        ]);
        /**Option b1_i93 (381) */
        Option::create([
            'instruction_id' => '93'
        ]);
        /**Option b1_i93 (382) */
        Option::create([
            'instruction_id' => '93'
        ]);
                
        /**Option b1_i94 (383) */
        Option::create([
            'option_text' => 'Das',
            'instruction_id' => '94'
        ]);
        /**Option b1_i94 (384) */
        Option::create([
            'instruction_id' => '94'
        ]);
        /**Option b1_i94 (385) */
        Option::create([
            'instruction_id' => '94'
        ]);
        /**Option b1_i94 (386) */
        Option::create([
            'instruction_id' => '94'
        ]);

        /**Option b1_i94 (383) */
        Option::create([
            'option_text' => 'Man',
            'instruction_id' => '94'
        ]);
        /**Option b1_i94 (384) */
        Option::create([
            'instruction_id' => '94'
        ]);
        /**Option b1_i94 (385) */
        Option::create([
            'instruction_id' => '94'
        ]);
        /**Option b1_i94 (386) */
        Option::create([
            'instruction_id' => '94'
        ]);

        /**Option b1_i95 (387) */
        Option::create([
            'option_text' => 'Meine Lehrerin? Das ist die Frau,',
            'option_name' => 'der',
            'instruction_id' => '95'
        ]);
        /**Option b1_i95 (388) */
        Option::create([
            'option_name' => 'die',
            'instruction_id' => '95'
        ]);
        /**Option b1_i95 (389) */
        Option::create([
            'option_text' => 'in der Mitte sitzt',
            'option_name' => 'das',
            'instruction_id' => '95'
        ]);

        /**Option b1_i95 (390) */
        Option::create([
            'option_text' => 'Der Klassenbeste? Das ist der jun',
            'option_name' => 'der',
            'instruction_id' => '95'
        ]);
        /**Option b1_i95 (391) */
        Option::create([
            'option_name' => 'die',
            'instruction_id' => '95'
        ]);
        /**Option b1_i95 (392) */
        Option::create([
            'option_text' => 'neben mir sitzt',
            'option_name' => 'das',
            'instruction_id' => '95'
        ]);

        /**Option b1_i95 (393) */
        Option::create([
            'option_text' => 'Die Studenten aus China? Das sind die',
            'option_name' => 'der',
            'instruction_id' => '95'
        ]);
        /**Option b1_i95 (394) */
        Option::create([
            'option_name' => 'die',
            'instruction_id' => '95'
        ]);
        /**Option b1_i95 (395) */
        Option::create([
            'option_text' => 'hinter mir sitzen.',
            'option_name' => 'das',
            'instruction_id' => '95'
        ]);

        /**Option b1_i96 (396) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '96'
        ]);
        /**Option b1_i96 (397) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '96'
        ]);

        
        /**Option b1_i97 (398) */
        Option::create([
            'instruction_id' => '97'
        ]);
        /**Option b1_i97 (399) */
        Option::create([
            'instruction_id' => '97'
        ]);
        /**Option b1_i97 (400) */
        Option::create([
            'instruction_id' => '97'
        ]);

        /**Option b1_i97 (401) */
        Option::create([
            'instruction_id' => '97'
        ]);
        /**Option b1_i97 (402) */
        Option::create([
            'instruction_id' => '97'
        ]);

        /**Option b1_i97 (403) */
        Option::create([
            'instruction_id' => '97'
        ]);
        /**Option b1_i97 (404) */
        Option::create([
            'instruction_id' => '97'
        ]);
        /**Option b1_i97 (405) */
        Option::create([
            'instruction_id' => '97'
        ]);
        /**Option b1_i97 (406) */
        Option::create([
            'instruction_id' => '97'
        ]);

        /**Option b1_i98 (407) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '98'
        ]);
        /**Option b1_i98 (408) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '98'
        ]);

        /**Option b1_i99 (409) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '99'
        ]);
        /**Option b1_i99 (410) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '99'
        ]);
        
        /**Option b1_i100 (411) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '100'
        ]);
        /**Option b1_i100 (412) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '100'
        ]);

        /**Option b1_i101 (413) */
        Option::create([
            'instruction_id' => '101'
        ]);

        /**Option b1_i102 (414) */
        Option::create([
            'instruction_id' => '102'
        ]);
        /**Option b1_i102 (415) */
        Option::create([
            'instruction_id' => '102'
        ]);
        /**Option b1_i102 (416) */
        Option::create([
            'instruction_id' => '102'
        ]);
        /**Option b1_i102 (417) */
        Option::create([
            'instruction_id' => '102'
        ]);
        
        /**Option b1_i103 (418) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '103'
        ]);
        /**Option b1_i103 (419) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '103'
        ]);

        /**Option b1_i104 (418) */
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '104'
        ]);
        /**Option b1_i104 (419) */
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '104'
        ]);

        /**Option b1_i105 (420) */
        Option::create([
            'option_text' => 'Ich könnte viel besser Deutsch sprechen, wenn ich mehr Zeit zum Üben',
            'option_name' => 'habe',
            'instruction_id' => '105'
        ]);
        /**Option b1_i105 (421) */
        Option::create([
            'option_name' => 'hatte',
            'instruction_id' => '105'
        ]);
        /**Option b1_i105 (422) */
        Option::create([
            'option_name' => 'hätte',
            'instruction_id' => '105'
        ]);

        /**Option b1_i105 (423) */
        Option::create([
            'option_text' => 'Ich könnte viel besser Deutsch sprechen, wenn ich mehr dafür tun',
            'option_name' => 'werde',
            'instruction_id' => '105'
        ]);
        /**Option b1_i105 (424) */
        Option::create([
            'option_name' => 'wurde',
            'instruction_id' => '105'
        ]);
        /**Option b1_i105 (425) */
        Option::create([
            'option_name' => 'würde',
            'instruction_id' => '105'
        ]);

        /**Option b1_i106 (426) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '106'
        ]);
        /**Option b1_i106 (427) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '106'
        ]);

        /**Option b1_i107 (428) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '107'
        ]);
        /**Option b1_i107 (429) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '107'
        ]);

        /**Option b1_i108 (430) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '108'
        ]);
        /**Option b1_i108 (431) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '108'
        ]);

        /**Option b1_i109 (432) */
        Option::create([
            'option_name' => 'Lieber Rainer',
            'instruction_id' => '109'
        ]);
        /**Option b1_i109 (433) */
        Option::create([
            'option_name' => 'Mein Rainer',
            'instruction_id' => '109'
        ]);
        /**Option b1_i109 (434) */
        Option::create([
            'option_name' => 'Sehr geehrter Rainer',
            'instruction_id' => '109'
        ]);
        /**Option b1_i109 (435) */
        Option::create([
            'option_text' => 'ich habe nächsten Mittwoch Geburtstag und möchte dich zu einer kleinen Feier in meiner Wohnung einladen. Es kommen viele Leute aus meinem Kurs sowie ein paar Bekannte. Die Feier beginnt um 19 Uhr. Ich hoffe, du kannst kommen.',
            'option_name' => 'Verehrter Rainer',
            'instruction_id' => '109'
        ]);

        /**Option b1_i109 (436) */
        Option::create([
            'option_name' => 'Hochachtungsvoll',
            'instruction_id' => '109'
        ]);
        /**Option b1_i109 (437) */
        Option::create([
            'option_name' => 'Mit freundlichen Grüßen',
            'instruction_id' => '109'
        ]);
        /**Option b1_i109 (438) */
        Option::create([
            'option_name' => 'Viele Grüße',
            'instruction_id' => '109'
        ]);

        /**Option b1_i110 (439) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '110'
        ]);
        /**Option b1_i110 (440) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '110'
        ]);

        /**Option b1_i111 (441) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '111'
        ]);
        /**Option b1_i111 (442) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '111'
        ]);

        /**Option b1_i112 (443) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '112'
        ]);
        /**Option b1_i112 (444) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '112'
        ]);

        /**Option b1_i113 (445) */
        Option::create([
            'option_text' => 'Zuerst ',
            'instruction_id' => '113'
        ]);
        /**Option b1_i113 (446) */
        Option::create([
            'option_text' => 'ich mit dem Fahrrad in die Stadt ',
            'instruction_id' => '113'
        ]);

        /**Option b1_i113 (447) */
        Option::create([
            'option_text' => 'dann  ',
            'instruction_id' => '113'
        ]);
        /**Option b1_i113 (448) */
        Option::create([
            'option_text' => 'ich Sylvia im Café am Rathaus',
            'instruction_id' => '113'
        ]);

        /**Option b1_i113 (449) */
        Option::create([
            'option_text' => 'Danach',
            'instruction_id' => '113'
        ]);
        /**Option b1_i113 (450) */
        Option::create([
            'option_text' => 'ich mit ihr einkaufen',
            'instruction_id' => '113'
        ]);

        /**Option b1_i113 (451) */
        Option::create([
            'option_text' => 'und zum Schluss ',
            'instruction_id' => '113'
        ]);
        /**Option b1_i113 (452) */
        Option::create([
            'option_text' => 'wir im Biergarten eine Kleinigkeit',
            'instruction_id' => '113'
        ]);

        /**Option b1_i114 (453) */
        Option::create([
            'option_name' => 'Geschäftsleute',
            'instruction_id' => '114'
        ]);
        /**Option b1_i114 (454) */
        Option::create([
            'option_name' => 'Kinder',
            'instruction_id' => '114'
        ]);
        /**Option b1_i114 (455) */
        Option::create([
            'option_name' => 'Mütter und Väter.',
            'instruction_id' => '114'
        ]);


        /**Option 115 (456) */
        Option::create([
            'instruction_id' => '115'
        ]);
        /**Option b1_i115 (457) */
        Option::create([
            'instruction_id' => '115'
        ]);
        /**Option b1_i115 (458) */
        Option::create([
            'instruction_id' => '115'
        ]);
        /**Option 115 (459) */
        Option::create([
            'instruction_id' => '115'
        ]);
        /**Option b1_i115 (460) */
        Option::create([
            'instruction_id' => '115'
        ]);
        /**Option b1_i115 (461) */
        Option::create([
            'instruction_id' => '115'
        ]);

       /**Option 116 (462) */
        Option::create([
            'instruction_id' => '116'
        ]);
        /**Option b1_i116 (463) */
        Option::create([
            'instruction_id' => '116'
        ]);
        /**Option b1_i116 (464) */
        Option::create([
            'instruction_id' => '116'
        ]);

        /**Option b1_i117 (465) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '117'
        ]);
        /**Option b1_i117 (466) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '117'
        ]);

        /**Option b1_i118 (467) */
        Option::create([
            'option_name' => 'Richtig',
            'instruction_id' => '118'
        ]);
        /**Option b1_i118 (467) */
        Option::create([
            'option_name' => 'Falsch',
            'instruction_id' => '118'
        ]);

        /**Option b1_i119 (468) */
        Option::create([
            'option_name' => 'E-Books werden meistens zu Hause am Computer gelesen.',
            'instruction_id' => '119'
        ]);
        /**Option b1_i119 (469) */
        Option::create([
            'option_name' => 'E-Book-Reader können weit über hundert verschiedene Bücher speichern.',
            'instruction_id' => '119'
        ]);
        /**Option b1_i119 (470) */
        Option::create([
            'option_name' => 'Man kann E-Books auch lesen, wenn die Sonne auf das Lesegerät scheint.',
            'instruction_id' => '119'
        ]);
        /**Option b1_i119 (471) */
        Option::create([
            'option_name' => 'Gedruckte Bücher wird es wohl bald nicht mehr geben.',
            'instruction_id' => '119'
        ]);
        /**Option b1_i119 (472) */
        Option::create([
            'option_name' => 'Auf E-Book-Readern kann man sich besonders gut Bilder ansehen.',
            'instruction_id' => '119'
        ]);
        /**Option b1_i119 (473) */
        Option::create([
            'option_name' => 'Bei E-Books ist es kein Problem, einen Text an Freunde weiterzugeben.',
            'instruction_id' => '119'
        ]);

        /**Option b1_i120 (474) */
        Option::create([
            'option_name' => 'Geschichtsstudenten',
            'instruction_id' => '120'
        ]);
        /**Option b1_i120 (475) */
        Option::create([
            'option_name' => 'Musiker',
            'instruction_id' => '120'
        ]);
        /**Option b1_i120 (476) */
        Option::create([
            'option_name' => 'Filmliebhaber',
            'instruction_id' => '120'
        ]);

        /**Option b1_i121 (477) */
        Option::create([
            'option_name' => 'sollst',
            'instruction_id' => '121'
        ]);
        /**Option b1_i121 (478) */
        Option::create([
            'option_name' => 'solltest',
            'instruction_id' => '121'
        ]);

        /**Option b1_i122 (479) */
        Option::create([
            'option_name' => 'wurde',
            'instruction_id' => '122'
        ]);
        /**Option b1_i122 (480) */
        Option::create([
            'option_name' => 'werde',
            'instruction_id' => '122'
        ]);

        /**Option b1_i123 (481) */
        Option::create([
            'option_name' => 'Das Beste',
            'instruction_id' => '123'
        ]);
        /**Option b1_i123 (482) */
        Option::create([
            'option_name' => 'Am besten',
            'instruction_id' => '123'
        ]);

        /**Option b1_i124 (483) */
        Option::create([
            'option_name' => 'beraten',
            'instruction_id' => '124'
        ]);
        /**Option b1_i124 (484) */
        Option::create([
            'option_name' => 'raten',
            'instruction_id' => '124'
        ]);
        /** Options for B1 Exam ends here */
    }
}
