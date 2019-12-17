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

        /**Instruction a1_q1 (1) */
        Answer::create([
            'answer_name' => 'Guten Abend',
            'exam_id' => '1',
            'question_id' => '1',
            'instruction_id' => '1',
            'option_id' => '2',
        ]);
        /**Instruction a1_q2 (2) */
        Answer::create([
            'answer_name' => 'Mein Name (ist...)',
            'exam_id' => '1',
            'question_id' => '2',
            'instruction_id' => '2',
            'option_id' => '4',
        ]);
        /**Instruction a1_q3 (3) */
        Answer::create([
            'answer_name' => '224',
            'exam_id' => '1',
            'question_id' => '3',
            'instruction_id' => '3',
            'option_id' => '6',
        ]);
        /**Instruction a1_q4 (4) */
        Answer::create([
            'answer_name' => '06:30 - 09:30 Uhr',
            'exam_id' => '1',
            'question_id' => '4',
            'instruction_id' => '4',
            'option_id' => '9',
        ]);
        /**Instruction a1_q5 (5) */
        Answer::create([
            'answer_name' => 'Woher',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '12',
        ]);
        /**Instruction a1_q5 (6) */
        Answer::create([
            'answer_name' => 'Wo',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '13',
        ]);
        /**Instruction a1_q5 (7) */
        Answer::create([
            'answer_name' => 'Was',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '14',
        ]);
        /**Instruction a1_q5 (8) */
        Answer::create([
            'answer_name' => 'Welche',
            'exam_id' => '1',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '15',
        ]);
        /**Instruction a1_q6 (9) */
        Answer::create([
            'answer_name' => 'Ja, gerne',
            'exam_id' => '1',
            'question_id' => '6',
            'instruction_id' => '6',
            'option_id' => '17',
        ]);
        /**Instruction a1_q6 (10) */
        Answer::create([
            'answer_name' => 'Danke schön',
            'exam_id' => '1',
            'question_id' => '6',
            'instruction_id' => '7',
            'option_id' => '19',
        ]);
        /**Instruction a1_q6 (11) */
        Answer::create([
            'answer_name' => 'Sehr gut',
            'exam_id' => '1',
            'question_id' => '6',
            'instruction_id' => '8',
            'option_id' => '24',
        ]);
        /**Instruction a1_q7 (12) */
        Answer::create([
            'answer_name' => '843709',
            'exam_id' => '1',
            'question_id' => '7',
            'instruction_id' => '9',
            'option_id' => '25',
        ]);
        /**Instruction a1_q8 (13) */
        Answer::create([
            'answer_name' => 'Ihre',
            'exam_id' => '1',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '26',
        ]);
        /**Instruction a1_q8 (13) */
        Answer::create([
            'answer_name' => 'Seine',
            'exam_id' => '1',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '29',
        ]);
        /**Instruction a1_q8 (13) */
        Answer::create([
            'answer_name' => 'Ihre',
            'exam_id' => '1',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '30',
        ]);
        /**Instruction a1_q9 (11) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '1',
            'question_id' => '9',
            'instruction_id' => '11',
            'option_id' => '33',
        ]);
        /**Instruction a1_q10 (12) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '1',
            'question_id' => '10',
            'instruction_id' => '12',
            'option_id' => '34',
        ]);
        /**Instruction a1_q11 (13) */
        Answer::create([
            'answer_name' => 'kommt',
            'exam_id' => '1',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '38',
        ]);
        /**Instruction a1_q11 (13) */
        Answer::create([
            'answer_name' => 'kann',
            'exam_id' => '1',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '39',
        ]);
        /**Instruction a1_q11 (13) */
        Answer::create([
            'answer_name' => 'spricht',
            'exam_id' => '1',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '44',
        ]);
        /**Instruction a1_q12 (14) */
        Answer::create([
            'answer_name' => 'Entschuldigung, noch einmal bitte',
            'exam_id' => '1',
            'question_id' => '12',
            'instruction_id' => '14',
            'option_id' => '47',
        ]);
        /**Instruction a1_q12 (15) */
        Answer::create([
            'answer_name' => 'Können Sie das aufschreiben bitte?',
            'exam_id' => '1',
            'question_id' => '12',
            'instruction_id' => '15',
            'option_id' => '49',
        ]);
        /**Instruction a1_q12 (16) */
        Answer::create([
            'answer_name' => 'Entschuldigung, was bedeuted...?',
            'exam_id' => '1',
            'question_id' => '12',
            'instruction_id' => '16',
            'option_id' => '51',
        ]);
        /**Instruction a1_q13 (17) */
        Answer::create([
            'answer_name' => 'www.urlaub-in-de.de',
            'exam_id' => '1',
            'question_id' => '13',
            'instruction_id' => '17',
            'option_id' => '54',
        ]);
        /**Instruction a1_q14 (18) */
        Answer::create([
            'answer_name' => 'eine',
            'exam_id' => '1',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '47',
        ]);
        /**Instruction a1_q14 (18) */
        Answer::create([
            'answer_name' => 'ein',
            'exam_id' => '1',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '59',
        ]);
        /**Instruction a1_q14 (18) */
        Answer::create([
            'answer_name' => 'einen',
            'exam_id' => '1',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '61',
        ]);
        /**Instruction a1_q15 (67) */
        Answer::create([
            'answer_name' => 'Glais 16',
            'exam_id' => '1',
            'question_id' => '15',
            'instruction_id' => '19',
            'option_id' => '44',
        ]);
        /**Instruction a1_q16 (20) */
        Answer::create([
            'answer_name' => 'dürfen',
            'exam_id' => '1',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '68',
        ]);
        /**Instruction a1_q16 (20) */
        Answer::create([
            'answer_name' => 'können',
            'exam_id' => '1',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '70',
        ]);
        /**Instruction a1_q16 (20) */
        Answer::create([
            'answer_name' => 'müssen',
            'exam_id' => '1',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '73',
        ]);
        /**Instruction a1_q17 (21) */
        Answer::create([
            'answer_name' => 'Schade',
            'exam_id' => '1',
            'question_id' => '17',
            'instruction_id' => '21',
            'option_id' => '76',
        ]);
        /**Instruction a1_q17 (22) */
        Answer::create([
            'answer_name' => 'Ja, garne',
            'exam_id' => '1',
            'question_id' => '17',
            'instruction_id' => '22',
            'option_id' => '78',
        ]);
        /**Instruction a1_q17 (80) */
        Answer::create([
            'answer_name' => 'Hoffentlich',
            'exam_id' => '1',
            'question_id' => '17',
            'instruction_id' => '23',
            'option_id' => '44',
        ]);
        /**Instruction a1_q18 (24) */
        Answer::create([
            'answer_name' => 'Geh zum Flugteig',
            'exam_id' => '1',
            'question_id' => '18',
            'instruction_id' => '24',
            'option_id' => '84',
        ]);
        /**Instruction a1_q19 (25) */
        Answer::create([
            'answer_name' => 'mir',
            'exam_id' => '1',
            'question_id' => '19',
            'instruction_id' => '25',
            'option_id' => '87',
        ]);
        /**Instruction a1_q19 (25) */
        Answer::create([
            'answer_name' => 'mein',
            'exam_id' => '1',
            'question_id' => '19',
            'instruction_id' => '25',
            'option_id' => '88',
        ]);
        /**Instruction a1_q20 (26) */
        Answer::create([
            'answer_name' => '20',
            'exam_id' => '1',
            'question_id' => '20',
            'instruction_id' => '26',
            'option_id' => '91',
        ]);
        /**Instruction a1_q20 (26) */
        Answer::create([
            'answer_name' => '453',
            'exam_id' => '1',
            'question_id' => '20',
            'instruction_id' => '26',
            'option_id' => '92',
        ]);
        /**Instruction a1_q21 (27) */
        Answer::create([
            'answer_name' => 'He wants to send you greetings',
            'exam_id' => '1',
            'question_id' => '21',
            'instruction_id' => '27',
            'option_id' => '95',
        ]);
        /**Instruction a1_q22 (28) */
        Answer::create([
            'answer_name' => 'Hallo, ist Julia da?',
            'exam_id' => '1',
            'question_id' => '22',
            'instruction_id' => '28',
            'option_id' => '97',
        ]);
        /**Instruction a1_q23 (29) */
        Answer::create([
            'answer_name' => 'mit',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '100',
        ]);
       /**Instruction a1_q23 (29) */
       Answer::create([
            'answer_name' => 'der',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '104',
        ]);
       /**Instruction a1_q23 (29) */
       Answer::create([
            'answer_name' => 'mit',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '105',
        ]);
       /**Instruction a1_q23 (29) */
       Answer::create([
            'answer_name' => 'dem',
            'exam_id' => '1',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '110',
        ]);
        /**Instruction a1_q24 (30) */
        Answer::create([
            'answer_name' => 'Wie sagt man das auf Deutsch?',
            'exam_id' => '1',
            'question_id' => '24',
            'instruction_id' => '30',
            'option_id' => '112',
        ]);
        /**Instruction a1_q24 (31) */
        Answer::create([
            'answer_name' => 'Ist das richtig?',
            'exam_id' => '1',
            'question_id' => '24',
            'instruction_id' => '31',
            'option_id' => '116',
        ]);
        /**Instruction a1_q24 (32) */
        Answer::create([
            'answer_name' => 'Bitte buchstabieren Sie das',
            'exam_id' => '1',
            'question_id' => '24',
            'instruction_id' => '32',
            'option_id' => '117',
        ]);
        /**Instruction a1_q25 (33) */
        Answer::create([
            'answer_name' => 'Gebäude A',
            'exam_id' => '1',
            'question_id' => '25',
            'instruction_id' => '33',
            'option_id' => '120',
        ]);
        /**Instruction a1_q26 (34) */
        Answer::create([
            'answer_name' => 'Wann kommt dein Zug an?',
            'exam_id' => '1',
            'question_id' => '26',
            'instruction_id' => '34',
            'option_id' => '123',
        ]);
        /**Instruction a1_q27 (35) */
        Answer::create([
            'answer_name' => '1. Etage',
            'exam_id' => '1',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '124',
        ]);
        /**Instruction a1_q27 (35) */
        Answer::create([
            'answer_name' => '2. Etage',
            'exam_id' => '1',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '127',
        ]);
        /**Instruction a1_q27 (35) */
        Answer::create([
            'answer_name' => 'Erdgeschoss',
            'exam_id' => '1',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '128',
        ]);
        /**Instruction a1_q28 (36) */
        Answer::create([
            'answer_name' => 'Juni',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '131',
        ]);
        /**Instruction a1_q28 (36) */
        Answer::create([
            'answer_name' => '14 Tage',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '134',
        ]);
        /**Instruction a1_q28 (36) */
        Answer::create([
            'answer_name' => 'Anfangerstufe',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '136',
        ]);
        /**Instruction a1_q28 (36) */
        Answer::create([
            'answer_name' => 'Gruppe mit 4-6 Personen',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '140',
        ]);
        /**Instruction a1_q28 (36) */
        Answer::create([
            'answer_name' => 'Privat',
            'exam_id' => '1',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '143',
        ]);
        /**Instruction a1_q29 (37) */
        Answer::create([
            'answer_name' => 'Nein',
            'exam_id' => '1',
            'question_id' => '29',
            'instruction_id' => '37',
            'option_id' => '145',
        ]);
        /**Instruction a1_q29 (38) */
        Answer::create([
            'answer_name' => 'Ja',
            'exam_id' => '1',
            'question_id' => '29',
            'instruction_id' => '38',
            'option_id' => '146',
        ]);
        /**Instruction a1_q30 (39) */
        Answer::create([
            'answer_name' => 'Herzlichen Gluckwunsch!',
            'exam_id' => '1',
            'question_id' => '30',
            'instruction_id' => '39',
            'option_id' => '148',
        ]);
        /**A1 Answers Ends Here */ 

    }
}
