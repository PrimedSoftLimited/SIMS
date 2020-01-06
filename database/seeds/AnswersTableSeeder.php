<?php

use App\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**A1 Answers Starts Here */ 

        /**Answer a1_q1 (1) */
        Answer::create([
            'answer_name' => 'Guten Abend',
            'exam_id' => '1',
            'question_id' => '1',
            'instruction_id' => '1',
            'option_id' => '2',
        ]);
        /**Answer a1_q2 (2) */
        Answer::create([
            'answer_name' => 'Mein Name (ist...)',
            'exam_id' => '1',
            'question_id' => '2',
            'instruction_id' => '2',
            'option_id' => '4',
        ]);
        /**Answer a1_q3 (3) */
        Answer::create([
            'answer_name' => '224',
            'exam_id' => '1',
            'question_id' => '3',
            'instruction_id' => '3',
            'option_id' => '6',
        ]);
        /**Answer a1_q4 (4) */
        Answer::create([
            'answer_name' => '06:30 - 09:30 Uhr',
            'exam_id' => '1',
            'question_id' => '4',
            'instruction_id' => '4',
            'option_id' => '9',
        ]);
        /**Answer a1_q5 (5) */
        Answer::create([
            'answer_name' => 'Woher',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '12',
        ]);
        /**Answer a1_q5 (6) */
        Answer::create([
            'answer_name' => 'Wo',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '13',
        ]);
        /**Answer a1_q5 (7) */
        Answer::create([
            'answer_name' => 'Was',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '14',
        ]);
        /**Answer a1_q5 (8) */
        Answer::create([
            'answer_name' => 'Welche',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '15',
        ]);
        /**Answer a1_q6 (9) */
        Answer::create([
            'answer_name' => 'Ja, gerne',
            'exam_id' => '1',
            'question_id' => '6',
            'instruction_id' => '6',
            'option_id' => '17',
        ]);
        /**Answer a1_q6 (10) */
        Answer::create([
            'answer_name' => 'Danke schön',
            'exam_id' => '1',
            'question_id' => '6',
            'instruction_id' => '7',
            'option_id' => '19',
        ]);
        /**Answer a1_q6 (11) */
        Answer::create([
            'answer_name' => 'Sehr gut',
            'exam_id' => '1',
            'question_id' => '6',
            'instruction_id' => '8',
            'option_id' => '24',
        ]);
        /**Answer a1_q7 (12) */
        Answer::create([
            'answer_name' => '843709',
            'exam_id' => '1',
            'question_id' => '7',
            'instruction_id' => '9',
            'option_id' => '25',
        ]);
        /**Answer a1_q8 (13) */
        Answer::create([
            'answer_name' => 'Ihre',
            'exam_id' => '1',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '26',
        ]);
        /**Answer a1_q8 (14) */
        Answer::create([
            'answer_name' => 'Seine',
            'exam_id' => '1',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '29',
        ]);
        /**Answer a1_q8 (15) */
        Answer::create([
            'answer_name' => 'Ihre',
            'exam_id' => '1',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '30',
        ]);
        /**Answer a1_q9 (16) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '1',
            'question_id' => '9',
            'instruction_id' => '11',
            'option_id' => '33',
        ]);
        /**Answer a1_q10 (17) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '1',
            'question_id' => '10',
            'instruction_id' => '12',
            'option_id' => '34',
        ]);
        /**Answer a1_q11 (18) */
        Answer::create([
            'answer_name' => 'kommt',
            'exam_id' => '1',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '38',
        ]);
        /**Answer a1_q11 (19) */
        Answer::create([
            'answer_name' => 'kann',
            'exam_id' => '1',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '39',
        ]);
        /**Answer a1_q11 (20) */
        Answer::create([
            'answer_name' => 'spricht',
            'exam_id' => '1',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '44',
        ]);
        /**Answer a1_q12 (21) */
        Answer::create([
            'answer_name' => 'Entschuldigung, noch einmal bitte',
            'exam_id' => '1',
            'question_id' => '12',
            'instruction_id' => '14',
            'option_id' => '47',
        ]);
        /**Answer a1_q12 (22) */
        Answer::create([
            'answer_name' => 'Können Sie das aufschreiben bitte?',
            'exam_id' => '1',
            'question_id' => '12',
            'instruction_id' => '15',
            'option_id' => '49',
        ]);
        /**Answer a1_q12 (23) */
        Answer::create([
            'answer_name' => 'Entschuldigung, was bedeuted...?',
            'exam_id' => '1',
            'question_id' => '12',
            'instruction_id' => '16',
            'option_id' => '51',
        ]);
        /**Answer a1_q13 (24) */
        Answer::create([
            'answer_name' => 'www.urlaub-in-de.de',
            'exam_id' => '1',
            'question_id' => '13',
            'instruction_id' => '17',
            'option_id' => '54',
        ]);
        /**Answer a1_q14 (25) */
        Answer::create([
            'answer_name' => 'eine',
            'exam_id' => '1',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '57',
        ]);
        /**Answer a1_q14 (26) */
        Answer::create([
            'answer_name' => 'ein',
            'exam_id' => '1',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '59',
        ]);
        /**Answer a1_q14 (27) */
        Answer::create([
            'answer_name' => 'einen',
            'exam_id' => '1',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '61',
        ]);
        /**Answer a1_q15 (28) */
        Answer::create([
            'answer_name' => 'Glais 16',
            'exam_id' => '1',
            'question_id' => '15',
            'instruction_id' => '19',
            'option_id' => '64',
        ]);
        /**Answer a1_q16 (29) */
        Answer::create([
            'answer_name' => 'dürfen',
            'exam_id' => '1',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '68',
        ]);
        /**Answer a1_q16 (30) */
        Answer::create([
            'answer_name' => 'können',
            'exam_id' => '1',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '70',
        ]);
        /**Answer a1_q16 (31) */
        Answer::create([
            'answer_name' => 'müssen',
            'exam_id' => '1',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '73',
        ]);
        /**Answer a1_q17 (32) */
        Answer::create([
            'answer_name' => 'Schade',
            'exam_id' => '1',
            'question_id' => '17',
            'instruction_id' => '21',
            'option_id' => '76',
        ]);
        /**Answer a1_q17 (33) */
        Answer::create([
            'answer_name' => 'Ja, garne',
            'exam_id' => '1',
            'question_id' => '17',
            'instruction_id' => '22',
            'option_id' => '78',
        ]);
        /**Answer a1_q17 (34) */
        Answer::create([
            'answer_name' => 'Hoffentlich',
            'exam_id' => '1',
            'question_id' => '17',
            'instruction_id' => '23',
            'option_id' => '80',
        ]);
        /**Answer a1_q18 (35) */
        Answer::create([
            'answer_name' => 'Geh zum Flugteig',
            'exam_id' => '1',
            'question_id' => '18',
            'instruction_id' => '24',
            'option_id' => '84',
        ]);
        /**Answer a1_q19 (36) */
        Answer::create([
            'answer_name' => 'mir',
            'exam_id' => '1',
            'question_id' => '19',
            'instruction_id' => '25',
            'option_id' => '87',
        ]);
        /**Answer a1_q19 (37) */
        Answer::create([
            'answer_name' => 'mein',
            'exam_id' => '1',
            'question_id' => '19',
            'instruction_id' => '25',
            'option_id' => '88',
        ]);
        /**Answer a1_q20 (38) */
        Answer::create([
            'answer_name' => '20',
            'exam_id' => '1',
            'question_id' => '20',
            'instruction_id' => '26',
            'option_id' => '91',
        ]);
        /**Answer a1_q20 (39) */
        Answer::create([
            'answer_name' => '453',
            'exam_id' => '1',
            'question_id' => '20',
            'instruction_id' => '26',
            'option_id' => '92',
        ]);
        /**Answer a1_q21 (40) */
        Answer::create([
            'answer_name' => 'He wants to send you greetings',
            'exam_id' => '1',
            'question_id' => '21',
            'instruction_id' => '27',
            'option_id' => '95',
        ]);
        /**Answer a1_q22 (41) */
        Answer::create([
            'answer_name' => 'Hallo, ist Julia da?',
            'exam_id' => '1',
            'question_id' => '22',
            'instruction_id' => '28',
            'option_id' => '97',
        ]);
        /**Answer a1_q23 (42) */
        Answer::create([
            'answer_name' => 'mit',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '100',
        ]);
       /**Answer a1_q23 (43) */
       Answer::create([
            'answer_name' => 'der',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '104',
        ]);
       /**Answer a1_q23 (44) */
       Answer::create([
            'answer_name' => 'mit',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '105',
        ]);
       /**Answer a1_q23 (45) */
       Answer::create([
            'answer_name' => 'dem',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '110',
        ]);
        /**Answer a1_q24 (46) */
        Answer::create([
            'answer_name' => 'Wie sagt man das auf Deutsch?',
            'exam_id' => '1',
            'question_id' => '24',
            'instruction_id' => '30',
            'option_id' => '112',
        ]);
        /**Answer a1_q24 (47) */
        Answer::create([
            'answer_name' => 'Ist das richtig?',
            'exam_id' => '1',
            'question_id' => '24',
            'instruction_id' => '31',
            'option_id' => '116',
        ]);
        /**Answer a1_q24 (48) */
        Answer::create([
            'answer_name' => 'Bitte buchstabieren Sie das',
            'exam_id' => '1',
            'question_id' => '24',
            'instruction_id' => '32',
            'option_id' => '117',
        ]);
        /**Answer a1_q25 (49) */
        Answer::create([
            'answer_name' => 'Gebäude A',
            'exam_id' => '1',
            'question_id' => '25',
            'instruction_id' => '33',
            'option_id' => '120',
        ]);
        /**Answer a1_q26 (50) */
        Answer::create([
            'answer_name' => 'Wann kommt dein Zug an?',
            'exam_id' => '1',
            'question_id' => '26',
            'instruction_id' => '34',
            'option_id' => '123',
        ]);
        /**Answer a1_q27 (51) */
        Answer::create([
            'answer_name' => '1. Etage',
            'exam_id' => '1',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '124',
        ]);
        /**Answer a1_q27 (52) */
        Answer::create([
            'answer_name' => '2. Etage',
            'exam_id' => '1',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '127',
        ]);
        /**Answer a1_q27 (53) */
        Answer::create([
            'answer_name' => 'Erdgeschoss',
            'exam_id' => '1',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '128',
        ]);
        /**Answer a1_q28 (54) */
        Answer::create([
            'answer_name' => 'Juni',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '131',
        ]);
        /**Answer a1_q28 (55) */
        Answer::create([
            'answer_name' => '14 Tage',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '134',
        ]);
        /**Answer a1_q28 (56) */
        Answer::create([
            'answer_name' => 'Anfangerstufe',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '136',
        ]);
        /**Answer a1_q28 (57) */
        Answer::create([
            'answer_name' => 'Gruppe mit 4-6 Personen',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '140',
        ]);
        /**Answer a1_q28 (58) */
        Answer::create([
            'answer_name' => 'Privat',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '143',
        ]);
        /**Answer a1_q29 (59) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '1',
            'question_id' => '29',
            'instruction_id' => '37',
            'option_id' => '145',
        ]);
        /**Answer a1_q29 (60) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '1',
            'question_id' => '29',
            'instruction_id' => '38',
            'option_id' => '146',
        ]);
        /**Answer a1_q30 (61) */
        Answer::create([
            'answer_name' => 'Herzlichen Gluckwunsch!',
            'exam_id' => '1',
            'question_id' => '30',
            'instruction_id' => '39',
            'option_id' => '148',
        ]);
        /**A1 Answers Ends Here */ 

        /**A2 Answers Starts Here */ 
        /**Answer a2_q1 (62) */
        Answer::create([
            'answer_name' => 'am libesten?',
            'exam_id' => '2',
            'question_id' => '31',
            'instruction_id' => '40',
            'option_id' => '152',
        ]);
        /**Answer a2_q2 (63) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '2',
            'question_id' => '32',
            'instruction_id' => '41',
            'option_id' => '154',
        ]);
        /**Answer a2_q2 (64) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '2',
            'question_id' => '32',
            'instruction_id' => '42',
            'option_id' => '155',
        ]);
        /**Answer a2_q3 (65) */
        Answer::create([
            'answer_name' => 'Gute Besserung!',
            'exam_id' => '2',
            'question_id' => '33',
            'instruction_id' => '43',
            'option_id' => '159',
        ]);
        /**Answer a2_q3 (66) */
        Answer::create([
            'answer_name' => 'Gleichfalls!',
            'exam_id' => '2',
            'question_id' => '33',
            'instruction_id' => '44',
            'option_id' => '162',
        ]);
        /**Answer a2_q3 (67) */
        Answer::create([
            'answer_name' => 'Iche habe keine Lust!',
            'exam_id' => '2',
            'question_id' => '33',
            'instruction_id' => '45',
            'option_id' => '168',
        ]);
        /**Answer a2_q4 (68) */
        Answer::create([
            'answer_name' => 'ins',
            'exam_id' => '2',
            'question_id' => '34',
            'instruction_id' => '46',
            'option_id' => '169',
        ]);
        /**Answer a2_q4 (69) */
        Answer::create([
            'answer_name' => 'ein',
            'exam_id' => '2',
            'question_id' => '34',
            'instruction_id' => '46',
            'option_id' => '172',
        ]);
        /**Answer a2_q4 (70) */
        Answer::create([
            'answer_name' => 'den',
            'exam_id' => '2',
            'question_id' => '34',
            'instruction_id' => '46',
            'option_id' => '177',
        ]);
        /**Answer a2_q5 (71) */
        Answer::create([
            'answer_name' => 'Freut mich, Sie kennenzulernen',
            'exam_id' => '2',
            'question_id' => '35',
            'instruction_id' => '47',
            'option_id' => '178',
        ]);
        /**Answer a2_q6 (72) */
        Answer::create([
            'answer_name' => 'alter',
            'exam_id' => '2',
            'question_id' => '36',
            'instruction_id' => '48',
            'option_id' => '180',
        ]);
        /**Answer a2_q6 (73) */
        Answer::create([
            'answer_name' => 'junger',
            'exam_id' => '2',
            'question_id' => '36',
            'instruction_id' => '48',
            'option_id' => '181',
        ]);
        /**Answer a2_q6 (74) */
        Answer::create([
            'answer_name' => 'jungste',
            'exam_id' => '2',
            'question_id' => '36',
            'instruction_id' => '48',
            'option_id' => '182',
        ]);
        /**Answer a2_q7 (75) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '2',
            'question_id' => '37',
            'instruction_id' => '49',
            'option_id' => '184',
        ]);
        /**Answer a2_q8 (76) */
        Answer::create([
            'answer_name' => 'Entschuldigung, wie sagt man noch mal...',
            'exam_id' => '2',
            'question_id' => '38',
            'instruction_id' => '50',
            'option_id' => '185',
        ]);
        /**Answer a2_q8 (77) */
        Answer::create([
            'answer_name' => 'as ich noch sagen wollte..., ich bin gleich fertig.',
            'exam_id' => '2',
            'question_id' => '38',
            'instruction_id' => '51',
            'option_id' => '190',
        ]);
        /**Answer a2_q8 (78) */
        Answer::create([
            'answer_name' => 'Einen Moment, ich bin gleich fertig.',
            'exam_id' => '2',
            'question_id' => '38',
            'instruction_id' => '52',
            'option_id' => '192',
        ]);
        /**Answer a2_q9 (79) */
        Answer::create([
            'answer_name' => 'an',
            'exam_id' => '2',
            'question_id' => '39',
            'instruction_id' => '53',
            'option_id' => '194',
        ]);
        /**Answer a2_q9 (80) */
        Answer::create([
            'answer_name' => 'auf',
            'exam_id' => '2',
            'question_id' => '39',
            'instruction_id' => '53',
            'option_id' => '199',
        ]);
        /**Answer a2_q9 (81) */
        Answer::create([
            'answer_name' => 'fur',
            'exam_id' => '2',
            'question_id' => '39',
            'instruction_id' => '53',
            'option_id' => '204',
        ]);
        /**Answer a2_q10 (82) */
        Answer::create([
            'answer_name' => 'Nein, leider nicht',
            'exam_id' => '2',
            'question_id' => '40',
            'instruction_id' => '54',
            'option_id' => '207',
        ]);
        /**Answer a2_q11 (83) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '2',
            'question_id' => '41',
            'instruction_id' => '55',
            'option_id' => '210',
        ]);
        /**Answer a2_q12 (84) */
        Answer::create([
            'answer_name' => 'Was',
            'exam_id' => '2',
            'question_id' => '42',
            'instruction_id' => '45',
            'option_id' => '211',
        ]);
        /**Answer a2_q12 (85) */
        Answer::create([
            'answer_name' => 'Wie',
            'exam_id' => '2',
            'question_id' => '42',
            'instruction_id' => '56',
            'option_id' => '214',
        ]);
        /**Answer a2_q13 (86) */
        Answer::create([
            'answer_name' => 'Was fehlt dir?',
            'exam_id' => '2',
            'question_id' => '43',
            'instruction_id' => '57',
            'option_id' => '218',
        ]);
        /**Answer a2_q13 (87) */
        Answer::create([
            'answer_name' => 'Was ist los?',
            'exam_id' => '2',
            'question_id' => '43',
            'instruction_id' => '57',
            'option_id' => '219',
        ]);
        /**Answer a2_q13 (88) */
        Answer::create([
            'answer_name' => 'Was ist passiert?',
            'exam_id' => '2',
            'question_id' => '43',
            'instruction_id' => '57',
            'option_id' => '220',
        ]);
        /**Answer a2_q14 (89) */
        Answer::create([
            'answer_name' => 'Tut mir leid, sie ist im Augenblick nicht da.',
            'exam_id' => '2',
            'question_id' => '44',
            'instruction_id' => '58',
            'option_id' => '223',
        ]);
        /**Answer a2_q14 (90) */
        Answer::create([
            'answer_name' => 'Nein, tut mir leid. Er ist im Moment nicht zu Hause.',
            'exam_id' => '2',
            'question_id' => '44',
            'instruction_id' => '59',
            'option_id' => '227',
        ]);
        /**Answer a2_q14 (91) */
        Answer::create([
            'answer_name' => 'Tut mir leid, Sie haben sich verwählt.',
            'exam_id' => '2',
            'question_id' => '44',
            'instruction_id' => '60',
            'option_id' => '229',
        ]);
        /**Answer a2_q15 (92) */
        Answer::create([
            'answer_name' => 'B',
            'exam_id' => '2',
            'question_id' => '45',
            'instruction_id' => '61',
            'option_id' => '234',
        ]);
        /**Answer a2_q15 (93) */
        Answer::create([
            'answer_name' => 'D',
            'exam_id' => '2',
            'question_id' => '45',
            'instruction_id' => '62',
            'option_id' => '240',
        ]);
        /**Answer a2_q16 (94) */
        Answer::create([
            'answer_name' => 'Wie wäre es mit 18 Uhr?',
            'exam_id' => '2',
            'question_id' => '46',
            'instruction_id' => '63',
            'option_id' => '241',
        ]);
        /**Answer a2_q16 (95) */
        Answer::create([
            'answer_name' => 'Wir können uns um 18 Uhr treffen.',
            'exam_id' => '2',
            'question_id' => '46',
            'instruction_id' => '63',
            'option_id' => '242',
        ]);
        /**Answer a2_q16 (96) */
        Answer::create([
            'answer_name' => 'Wollen wir uns um 18 Uhr treffen?',
            'exam_id' => '2',
            'question_id' => '46',
            'instruction_id' => '63',
            'option_id' => '244',
        ]);
        /**Answer a2_q17 (97) */
        Answer::create([
            'answer_name' => '2',
            'exam_id' => '2',
            'question_id' => '47',
            'instruction_id' => '64',
            'option_id' => '245',
        ]);
        /**Answer a2_q18 (98) */
        Answer::create([
            'answer_name' => 'zum',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '65',
            'option_id' => '248',
        ]);
        /**Answer a2_q18 (99) */
        Answer::create([
            'answer_name' => 'Zahnarzt',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '65',
            'option_id' => '249',
        ]);
        /**Answer a2_q18 (100) */
        Answer::create([
            'answer_name' => 'gehe',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '65',
            'option_id' => '250',
        ]);
        /**Answer a2_q18 (101) */
        Answer::create([
            'answer_name' => 'mit',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '54',
            'option_id' => '251',
        ]);
        /**Answer a2_q18 (102) */
        Answer::create([
            'answer_name' => 'meinen',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '54',
            'option_id' => '252',
        ]);
        /**Answer a2_q18 (103) */
        Answer::create([
            'answer_name' => 'Eltern',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '65',
            'option_id' => '253',
        ]);
        /**Answer a2_q18 (104) */
        Answer::create([
            'answer_name' => 'esse',
            'exam_id' => '2',
            'question_id' => '48',
            'instruction_id' => '65',
            'option_id' => '254',
        ]);
        /**Answer a2_q19 (105) */
        Answer::create([
            'answer_name' => 'hast',
            'exam_id' => '2',
            'question_id' => '49',
            'instruction_id' => '66',
            'option_id' => '255',
        ]);
        /**Answer a2_q19 (106) */
        Answer::create([
            'answer_name' => 'gemacht',
            'exam_id' => '2',
            'question_id' => '49',
            'instruction_id' => '66',
            'option_id' => '256',
        ]);
        /**Answer a2_q19 (107) */
        Answer::create([
            'answer_name' => 'bist',
            'exam_id' => '2',
            'question_id' => '49',
            'instruction_id' => '66',
            'option_id' => '257',
        ]);
        /**Answer a2_q19 (108) */
        Answer::create([
            'answer_name' => 'geblieben',
            'exam_id' => '2',
            'question_id' => '49',
            'instruction_id' => '66',
            'option_id' => '258',
        ]);
        /**Answer a2_q19 (109) */
        Answer::create([
            'answer_name' => 'hast',
            'exam_id' => '2',
            'question_id' => '49',
            'instruction_id' => '66',
            'option_id' => '259',
        ]);
        /**Answer a2_q19 (110) */
        Answer::create([
            'answer_name' => 'gesehen',
            'exam_id' => '2',
            'question_id' => '49',
            'instruction_id' => '66',
            'option_id' => '260',
        ]);
        
        /**Answer a2_q20 (111) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '2',
            'question_id' => '20',
            'instruction_id' => '67',
            'option_id' => '261',
        ]);
        /**Answer a2_q20 (112) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '2',
            'question_id' => '20',
            'instruction_id' => '67',
            'option_id' => '264',
        ]);
        /**Answer a2_q21 (113) */
        Answer::create([
            'answer_name' => 'dagegen?',
            'exam_id' => '2',
            'question_id' => '21',
            'instruction_id' => '69',
            'option_id' => '245',
        ]);
        /**Answer a2_q22 (114) */
        Answer::create([
            'answer_name' => 'haben',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '268',
        ]);
        /**Answer a2_q22 (115) */
        Answer::create([
            'answer_name' => 'geschrieben',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '269',
        ]);
        /**Answer a2_q22 (116) */
        Answer::create([
            'answer_name' => 'sind',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '270',
        ]);
        /**Answer a2_q22 (117) */
        Answer::create([
            'answer_name' => 'gegangen',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '271',
        ]);
        /**Answer a2_q22 (118) */
        Answer::create([
            'answer_name' => 'haben',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '272',
        ]);
        /**Answer a2_q22 (119) */
        Answer::create([
            'answer_name' => 'gelesen',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '273',
        ]);
        /**Answer a2_q22 (120) */
        Answer::create([
            'answer_name' => 'haben',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '274',
        ]);
        /**Answer a2_q22 (121) */
        Answer::create([
            'answer_name' => 'gearbeitet',
            'exam_id' => '2',
            'question_id' => '22',
            'instruction_id' => '70',
            'option_id' => '275',
        ]);
        /**Answer a2_q23 (122) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '2',
            'question_id' => '23',
            'instruction_id' => '71',
            'option_id' => '276',
        ]);
        /**Answer a2_q24 (123) */
        Answer::create([
            'answer_name' => 'am meisten?',
            'exam_id' => '2',
            'question_id' => '24',
            'instruction_id' => '72',
            'option_id' => '278',
        ]);
        /**Answer a2_q25 (124) */
        Answer::create([
            'answer_name' => 'euch',
            'exam_id' => '2',
            'question_id' => '25',
            'instruction_id' => '73',
            'option_id' => '282',
        ]);
        /**Answer a2_q25 (125) */
        Answer::create([
            'answer_name' => 'wohnt ihr',
            'exam_id' => '2',
            'question_id' => '25',
            'instruction_id' => '73',
            'option_id' => '284',
        ]);
        /**Answer a2_q25 (126) */
        Answer::create([
            'answer_name' => 'habit ihr geheiratet',
            'exam_id' => '2',
            'question_id' => '25',
            'instruction_id' => '73',
            'option_id' => '287',
        ]);
        /**Answer a2_q26 (127) */
        Answer::create([
            'answer_name' => 'B',
            'exam_id' => '2',
            'question_id' => '26',
            'instruction_id' => '74',
            'option_id' => '289',
        ]);
        /**Answer a2_q27 (128) */
        Answer::create([
            'answer_name' => 'D',
            'exam_id' => '2',
            'question_id' => '27',
            'instruction_id' => '75',
            'option_id' => '295',
        ]);
        /**Answer a2_q27 (129) */
        Answer::create([
            'answer_name' => 'A',
            'exam_id' => '2',
            'question_id' => '27',
            'instruction_id' => '76',
            'option_id' => '296',
        ]);
        /**Answer a2_q28 (130) */
        Answer::create([
            'answer_name' => 'mit',
            'exam_id' => '2',
            'question_id' => '28',
            'instruction_id' => '77',
            'option_id' => '301',
        ]);
        /**Answer a2_q28 (131) */
        Answer::create([
            'answer_name' => 'bis',
            'exam_id' => '2',
            'question_id' => '28',
            'instruction_id' => '77',
            'option_id' => '309',
        ]);
        /**Answer a2_q28 (132) */
        Answer::create([
            'answer_name' => 'steigt',
            'exam_id' => '2',
            'question_id' => '28',
            'instruction_id' => '77',
            'option_id' => '312',
        ]);
        /**Answer a2_q28 (133) */
        Answer::create([
            'answer_name' => 'um',
            'exam_id' => '2',
            'question_id' => '28',
            'instruction_id' => '77',
            'option_id' => '320',
        ]);
        /**Answer a2_q28 (134) */
        Answer::create([
            'answer_name' => 'aussteigen',
            'exam_id' => '2',
            'question_id' => '28',
            'instruction_id' => '77',
            'option_id' => '329',
        ]);
        /**Answer a2_q28 (135) */
        Answer::create([
            'answer_name' => 'an',
            'exam_id' => '2',
            'question_id' => '28',
            'instruction_id' => '77',
            'option_id' => '334',
        ]);
        /**Answer a2_q29 (136) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '2',
            'question_id' => '29',
            'instruction_id' => '78',
            'option_id' => '337',
        ]);
        /**Answer a2_q29 (137) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '2',
            'question_id' => '29',
            'instruction_id' => '79',
            'option_id' => '339',
        ]);
        /**Answer a2_q29 (138) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '2',
            'question_id' => '29',
            'instruction_id' => '80',
            'option_id' => '340',
        ]);
        /**Answer a2_q30 (139) */
        Answer::create([
            'answer_name' => 'doch',
            'exam_id' => '2',
            'question_id' => '30',
            'instruction_id' => '81',
            'option_id' => '342',
        ]);
        /**Answer a2_q30 (140) */
        Answer::create([
            'answer_name' => 'Eigentlich',
            'exam_id' => '2',
            'question_id' => '30',
            'instruction_id' => '82',
            'option_id' => '347',
        ]);
        /**A1 Answers Ends Here */
        
        /**B1 Answers Starts Here */ 
        /**Answer b1_q1 (141) */
        Answer::create([
            'answer_name' => 'Woher',
            'exam_id' => '3',
            'question_id' => '61',
            'instruction_id' => '83',
            'option_id' => '348',
        ]);
        /**Answer b1_q1 (142) */
        Answer::create([
            'answer_name' => 'Wue weut',
            'exam_id' => '3',
            'question_id' => '61',
            'instruction_id' => '83',
            'option_id' => '349',
        ]);
        /**Answer b1_q1 (143) */
        Answer::create([
            'answer_name' => 'Wie lange',
            'exam_id' => '3',
            'question_id' => '61',
            'instruction_id' => '83',
            'option_id' => '350',
        ]);
        /**Answer b1_q1 (144) */
        Answer::create([
            'answer_name' => 'Wie Viele',
            'exam_id' => '3',
            'question_id' => '61',
            'instruction_id' => '83',
            'option_id' => '351',
        ]);
        /**Answer b1_q2 (145) */
        Answer::create([
            'answer_name' => 'Gern geschehen',
            'exam_id' => '3',
            'question_id' => '62',
            'instruction_id' => '84',
            'option_id' => '353',
        ]);
        /**Answer b1_q2 (146) */
        Answer::create([
            'answer_name' => 'Keine Ursache',
            'exam_id' => '3',
            'question_id' => '62',
            'instruction_id' => '84',
            'option_id' => '354',
        ]);
        /**Answer b1_q3 (147) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '3',
            'question_id' => '63',
            'instruction_id' => '85',
            'option_id' => '356',
        ]);
        /**Answer b1_q3 (148) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '3',
            'question_id' => '63',
            'instruction_id' => '86',
            'option_id' => '359',
        ]);
        /**Answer b1_q4 (149) */
        Answer::create([
            'answer_name' => 'ein',
            'exam_id' => '3',
            'question_id' => '64',
            'instruction_id' => '87',
            'option_id' => '360',
        ]);
        /**Answer b1_q4 (150) */
        Answer::create([
            'answer_name' => 'großes',
            'exam_id' => '3',
            'question_id' => '64',
            'instruction_id' => '87',
            'option_id' => '367',
        ]);
        /**Answer b1_q4 (151) */
        Answer::create([
            'answer_name' => 'einen',
            'exam_id' => '3',
            'question_id' => '64',
            'instruction_id' => '87',
            'option_id' => '370',
        ]);
        /**Answer b1_q4 (152) */
        Answer::create([
            'answer_name' => 'grünen',
            'exam_id' => '3',
            'question_id' => '64',
            'instruction_id' => '87',
            'option_id' => '374',
        ]);
        /**Answer b1_q4 (153) */
        Answer::create([
            'answer_name' => 'keinen',
            'exam_id' => '3',
            'question_id' => '64',
            'instruction_id' => '87',
            'option_id' => '378',
        ]);
        /**Answer b1_q4 (154) */
        Answer::create([
            'answer_name' => 'gemischten!',
            'exam_id' => '3',
            'question_id' => '64',
            'instruction_id' => '87',
            'option_id' => '382',
        ]);
        /**Answer b1_q5 (155) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '3',
            'question_id' => '65',
            'instruction_id' => '88',
            'option_id' => '385',
        ]);
        /**Answer b1_q6 (156) */
        Answer::create([
            'answer_name' => 'als',
            'exam_id' => '3',
            'question_id' => '66',
            'instruction_id' => '89',
            'option_id' => '386',
        ]);
        /**Answer b1_q6 (157) */
        Answer::create([
            'answer_name' => '[-]',
            'exam_id' => '3',
            'question_id' => '66',
            'instruction_id' => '89',
            'option_id' => '391',
        ]);
        /**Answer b1_q7 (158) */
        Answer::create([
            'answer_name' => 'Eine "Brötchentaste" ist für Autofahrer gedacht, die nur kurz einkaufen wollen.',
            'exam_id' => '3',
            'question_id' => '67',
            'instruction_id' => '90',
            'option_id' => '395',
        ]);
        /**Answer b1_q8 (159) */
        Answer::create([
            'answer_name' => 'umzuziehen',
            'exam_id' => '3',
            'question_id' => '68',
            'instruction_id' => '91',
            'option_id' => '397',
        ]);
        /**Answer b1_q8 (160) */
        Answer::create([
            'answer_name' => 'aufzuhören',
            'exam_id' => '3',
            'question_id' => '68',
            'instruction_id' => '91',
            'option_id' => '398',
        ]);
        /**Answer b1_q8 (161) */
        Answer::create([
            'answer_name' => 'zu übersetzen',
            'exam_id' => '3',
            'question_id' => '68',
            'instruction_id' => '91',
            'option_id' => '399',
        ]);
        /**Answer b1_q8 (162) */
        Answer::create([
            'answer_name' => 'zu wiederholen',
            'exam_id' => '3',
            'question_id' => '68',
            'instruction_id' => '91',
            'option_id' => '400',
        ]);
        /**Answer b1_9 (163) */
        Answer::create([
            'answer_name' => '3',
            'exam_id' => '3',
            'question_id' => '69',
            'instruction_id' => '92',
            'option_id' => '401',
        ]);
        /**Answer b1_q10 (164) */
        Answer::create([
            'answer_name' => 'uber',
            'exam_id' => '3',
            'question_id' => '70',
            'instruction_id' => '93',
            'option_id' => '402',
        ]);
        /**Answer b1_q10 (165) */
        Answer::create([
            'answer_name' => 'darauf',
            'exam_id' => '3',
            'question_id' => '70',
            'instruction_id' => '93',
            'option_id' => '403',
        ]);
        /**Answer b1_q10 (166) */
        Answer::create([
            'answer_name' => 'auf',
            'exam_id' => '3',
            'question_id' => '70',
            'instruction_id' => '93',
            'option_id' => '404',
        ]);
        /**Answer b1_q10 (167) */
        Answer::create([
            'answer_name' => 'wofur',
            'exam_id' => '3',
            'question_id' => '70',
            'instruction_id' => '93',
            'option_id' => '405',
        ]);
        /**Answer b1_q10 (168) */
        Answer::create([
            'answer_name' => 'vorher',
            'exam_id' => '3',
            'question_id' => '70',
            'instruction_id' => '93',
            'option_id' => '406',
        ]);
        /**Answer b1_q11 (169) */
        Answer::create([
            'answer_name' => 'hätte',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '407',
        ]);
        /**Answer b1_q11 (170) */
        Answer::create([
            'answer_name' => 'ich',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '408',
        ]);
        /**Answer b1_q11 (171) */
        Answer::create([
            'answer_name' => 'nicht',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '409',
        ]);
        /**Answer b1_q11 (172) */
        Answer::create([
            'answer_name' => 'erwartet',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '410',
        ]);
        /**Answer b1_q11 (173) */
        Answer::create([
            'answer_name' => 'hätte',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '411',
        ]);
        /**Answer b1_q11 (174) */
        Answer::create([
            'answer_name' => 'mich',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '412',
        ]);
        /**Answer b1_q11 (175) */
        Answer::create([
            'answer_name' => 'anrufen',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '413',
        ]);
        /**Answer b1_q11 (176) */
        Answer::create([
            'answer_name' => 'konnen',
            'exam_id' => '3',
            'question_id' => '71',
            'instruction_id' => '94',
            'option_id' => '414',
        ]);
        /**Answer b1_q12 (177) */
        Answer::create([
            'answer_name' => 'die',
            'exam_id' => '3',
            'question_id' => '72',
            'instruction_id' => '95',
            'option_id' => '416',
        ]);
        /**Answer b1_q12 (178) */
        Answer::create([
            'answer_name' => 'der',
            'exam_id' => '3',
            'question_id' => '72',
            'instruction_id' => '95',
            'option_id' => '418',
        ]);
        /**Answer b1_q12 (179) */
        Answer::create([
            'answer_name' => 'die',
            'exam_id' => '3',
            'question_id' => '72',
            'instruction_id' => '95',
            'option_id' => '422',
        ]);
        /**Answer b1_q13 (180) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '3',
            'question_id' => '73',
            'instruction_id' => '96',
            'option_id' => '425',
        ]);
        /**Answer b1_q14 (181) */
        Answer::create([
            'answer_name' => 'dich',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '426',
        ]);
        /**Answer b1_q14 (182) */
        Answer::create([
            'answer_name' => 'geduscht',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '427',
        ]);
        /**Answer b1_q14 (183) */
        Answer::create([
            'answer_name' => 'hast',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '428',
        ]);
        /**Answer b1_q14 (184) */
        Answer::create([
            'answer_name' => 'gefruhstuckt',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '429',
        ]);
        /**Answer b1_q14 (185) */
        Answer::create([
            'answer_name' => 'hast',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '430',
        ]);
        /**Answer b1_q14 (186) */
        Answer::create([
            'answer_name' => 'deine',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '431',
        ]);
        /**Answer b1_q14 (187) */
        Answer::create([
            'answer_name' => 'Hausaufgaben',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '432',
        ]);
        /**Answer b1_q14 (188) */
        Answer::create([
            'answer_name' => 'ge,acht',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '433',
        ]);
        /**Answer b1_q14 (189) */
        Answer::create([
            'answer_name' => 'hast',
            'exam_id' => '3',
            'question_id' => '74',
            'instruction_id' => '97',
            'option_id' => '434',
        ]);

        /**Answer b1_q15 (190) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '3',
            'question_id' => '75',
            'instruction_id' => '98',
            'option_id' => '436',
        ]);
        /**Answer b1_q15 (191) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '3',
            'question_id' => '75',
            'instruction_id' => '99',
            'option_id' => '438',
        ]);
        /**Answer b1_q15 (192) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '3',
            'question_id' => '75',
            'instruction_id' => '100',
            'option_id' => '439',
        ]);
        /**Answer b1_q16 (193) */
        Answer::create([
            'answer_name' => 'Treffen wir uns heute Abend? Klar! Wann geht es bei dir? Wie wäre es mit 18 Uhr? Ja, das musste gehen. Und wo? Hier, vor der Schule. Schon! Dann bis naccher! Tschuss!',
            'exam_id' => '3',
            'question_id' => '76',
            'instruction_id' => '101',
            'option_id' => '441',
        ]);
        /**Answer b1_q17 (194) */
        Answer::create([
            'answer_name' => 'darfst',
            'exam_id' => '3',
            'question_id' => '77',
            'instruction_id' => '102',
            'option_id' => '442',
        ]);
        /**Answer b1_q17 (195) */
        Answer::create([
            'answer_name' => 'mussen',
            'exam_id' => '3',
            'question_id' => '77',
            'instruction_id' => '102',
            'option_id' => '443',
        ]);
        /**Answer b1_q17 (196) */
        Answer::create([
            'answer_name' => 'wollen',
            'exam_id' => '3',
            'question_id' => '77',
            'instruction_id' => '102',
            'option_id' => '444',
        ]);
        /**Answer b1_q17 (197) */
        Answer::create([
            'answer_name' => 'kannst',
            'exam_id' => '3',
            'question_id' => '77',
            'instruction_id' => '102',
            'option_id' => '445',
        ]);
        /**Answer b1_q18 (198) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '3',
            'question_id' => '78',
            'instruction_id' => '103',
            'option_id' => '447',
        ]);
        /**Answer b1_q18 (199) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '3',
            'question_id' => '78',
            'instruction_id' => '104',
            'option_id' => '448',
        ]);
        /**Answer b1_q19 (200) */
        Answer::create([
            'answer_name' => 'hätte',
            'exam_id' => '3',
            'question_id' => '79',
            'instruction_id' => '66',
            'option_id' => '452',
        ]);
        /**Answer b1_q19 (201) */
        Answer::create([
            'answer_name' => 'würde',
            'exam_id' => '3',
            'question_id' => '79',
            'instruction_id' => '66',
            'option_id' => '445',
        ]);
        
        /**Answer b1_q20 (202) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '3',
            'question_id' => '80',
            'instruction_id' => '106',
            'option_id' => '261',
        ]);
        /**Answer b1_q20 (203) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '3',
            'question_id' => '80',
            'instruction_id' => '107',
            'option_id' => '264',
        ]);
        /**Answer b1_q20 (204) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '3',
            'question_id' => '80',
            'instruction_id' => '108',
            'option_id' => '460',
        ]);
        /**Answer b1_q21 (205) */
        Answer::create([
            'answer_name' => 'Lieber Rainer',
            'exam_id' => '3',
            'question_id' => '81',
            'instruction_id' => '109',
            'option_id' => '462',
        ]);
        /**Answer b1_q21 (206) */
        Answer::create([
            'answer_name' => 'Viele Grüße',
            'exam_id' => '3',
            'question_id' => '81',
            'instruction_id' => '109',
            'option_id' => '468',
        ]);
        /**Answer b1_q22 (207) */
        Answer::create([
            'answer_name' => 'Falsch',
            'exam_id' => '3',
            'question_id' => '82',
            'instruction_id' => '110',
            'option_id' => '470',
        ]);
        /**Answer b1_q22 (208) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '3',
            'question_id' => '82',
            'instruction_id' => '111',
            'option_id' => '471',
        ]);
        /**Answer b1_q22 (209) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '3',
            'question_id' => '82',
            'instruction_id' => '112',
            'option_id' => '473',
        ]);
        /**Answer b1_q23 (210) */
        Answer::create([
            'answer_name' => 'bin',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '475',
        ]);
        /**Answer b1_q23 (211) */
        Answer::create([
            'answer_name' => 'gefahren',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '476',
        ]);
        /**Answer b1_q23 (212) */
        Answer::create([
            'answer_name' => 'habe',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '477',
        ]);
        /**Answer b1_q23 (213) */
        Answer::create([
            'answer_name' => 'getroffen',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '478',
        ]);
        /**Answer b1_q23 (214) */
        Answer::create([
            'answer_name' => 'bin',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '479',
        ]);
        /**Answer b1_q23 (215) */
        Answer::create([
            'answer_name' => 'gegangen',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '480',
        ]);
        /**Answer b1_q23 (216) */
        Answer::create([
            'answer_name' => 'haben',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '481',
        ]);
        /**Answer b1_q23 (217) */
        Answer::create([
            'answer_name' => 'gegessen',
            'exam_id' => '3',
            'question_id' => '83',
            'instruction_id' => '113',
            'option_id' => '482',
        ]);
        /**Answer b1_q24 (218) */
        Answer::create([
            'answer_name' => 'Mütter und Väter.',
            'exam_id' => '3',
            'question_id' => '84',
            'instruction_id' => '114',
            'option_id' => '485',
        ]);
        /**Answer b1_q25 (219) */
        Answer::create([
            'answer_name' => 'davon',
            'exam_id' => '3',
            'question_id' => '85',
            'instruction_id' => '115',
            'option_id' => '486',
        ]);
        /**Answer b1_q25 (220) */
        Answer::create([
            'answer_name' => 'dazu',
            'exam_id' => '3',
            'question_id' => '85',
            'instruction_id' => '115',
            'option_id' => '487',
        ]);
        /**Answer b1_q25 (221) */
        Answer::create([
            'answer_name' => 'dagegen',
            'exam_id' => '3',
            'question_id' => '85',
            'instruction_id' => '115',
            'option_id' => '488',
        ]);
        /**Answer b1_q25 (222) */
        Answer::create([
            'answer_name' => 'daren',
            'exam_id' => '3',
            'question_id' => '85',
            'instruction_id' => '115',
            'option_id' => '489',
        ]);
        /**Answer b1_q25 (223) */
        Answer::create([
            'answer_name' => 'dafur',
            'exam_id' => '3',
            'question_id' => '85',
            'instruction_id' => '115',
            'option_id' => '490',
        ]);
        /**Answer b1_q25 (224) */
        Answer::create([
            'answer_name' => 'damit',
            'exam_id' => '3',
            'question_id' => '85',
            'instruction_id' => '115',
            'option_id' => '491',
        ]);
        /**Answer b1_q26 (225) */
        Answer::create([
            'answer_name' => 'vollkommen',
            'exam_id' => '3',
            'question_id' => '86',
            'instruction_id' => '116',
            'option_id' => '492',
        ]);
        /**Answer b1_q26 (226) */
        Answer::create([
            'answer_name' => 'gar',
            'exam_id' => '3',
            'question_id' => '86',
            'instruction_id' => '116',
            'option_id' => '493',
        ]);
        /**Answer b1_q26 (227) */
        Answer::create([
            'answer_name' => 'besonders',
            'exam_id' => '3',
            'question_id' => '86',
            'instruction_id' => '116',
            'option_id' => '494',
        ]);
        /**Answer b1_q27 (228) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '3',
            'question_id' => '87',
            'instruction_id' => '117',
            'option_id' => '495',
        ]);
        /**Answer b1_q27 (229) */
        Answer::create([
            'answer_name' => 'Richtig',
            'exam_id' => '3',
            'question_id' => '87',
            'instruction_id' => '118',
            'option_id' => '497',
        ]);
        /**Answer b1_q28 (230) */
        Answer::create([
            'answer_name' => 'E-Book-Reader können weit über hundert verschiedene Bücher speichern.',
            'exam_id' => '3',
            'question_id' => '88',
            'instruction_id' => '119',
            'option_id' => '500',
        ]);
        /**Answer b1_q28 (231) */
        Answer::create([
            'answer_name' => 'Man kann E-Books auch lesen, wenn die Sonne auf das Lesegerät scheint.',
            'exam_id' => '3',
            'question_id' => '88',
            'instruction_id' => '119',
            'option_id' => '501',
        ]);
        /**Answer b1_q29 (232) */
        Answer::create([
            'answer_name' => 'Filmliebhaber',
            'exam_id' => '3',
            'question_id' => '89',
            'instruction_id' => '120',
            'option_id' => '507',
        ]);
        /**Answer b1_q30 (233) */
        Answer::create([
            'answer_name' => 'solltest',
            'exam_id' => '3',
            'question_id' => '90',
            'instruction_id' => '121',
            'option_id' => '509',
        ]);
        /**Answer b1_q30 (234) */
        Answer::create([
            'answer_name' => 'wurde',
            'exam_id' => '3',
            'question_id' => '90',
            'instruction_id' => '122',
            'option_id' => '510',
        ]);
        /**Answer b1_q30 (235) */
        Answer::create([
            'answer_name' => 'Am besten',
            'exam_id' => '3',
            'question_id' => '90',
            'instruction_id' => '123',
            'option_id' => '513',
        ]);
        /**Answer b1_q30 (236) */
        Answer::create([
            'answer_name' => 'raten',
            'exam_id' => '3',
            'question_id' => '90',
            'instruction_id' => '124',
            'option_id' => '515',
        ]);
        /**B1 Answers Ends Here */ 

    }
}
