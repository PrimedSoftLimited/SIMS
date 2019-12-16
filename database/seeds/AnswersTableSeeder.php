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
        //question1
        Answer::create([
            'answer_name' => 'Guten Abend',
            'question_id' => '1',
            'instruction_id' => '1',
            'option_id' => '2',
        ]);


        //question2
        Answer::create([
            'answer_name' => 'Mein Name (ist...)',
            'question_id' => '2',
            'instruction_id' => '2',
            'option_id' => '4',
        ]);

        //question3
        Answer::create([
            'answer_name' => '224',
            'question_id' => '3',
            'instruction_id' => '3',
            'option_id' => '6',
        ]);

        //question4
        Answer::create([
            'answer_name' => '06:30 - 09:30 Uhr',
            'question_id' => '4',
            'instruction_id' => '4',
            'option_id' => '9',
        ]);

        //question5
        Answer::create([
            'answer_name' => 'Woher kommen Sie?',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '12',
        ]);
        Answer::create([
            'answer_name' => 'Wo wohnen Sie?',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '13',
        ]);
        Answer::create([
            'answer_name' => 'Was studieren Sie?',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '14',
        ]);
        Answer::create([
            'answer_name' => 'Sprachen sprechen Sie?',
            'question_id' => '5',
            'instruction_id' => '5',
            'option_id' => '15',  
        ]);

        //question6
        Answer::create([
            'answer_name' => '"Ja, gerne"',
            'question_id' => '6',
            'instruction_id' => '6',
            'option_id' => '17',
        ]);
        
        Answer::create([
            'answer_name' => 'Danke schön.',
            'question_id' => '6',
            'instruction_id' => '7',
            'option_id' => '19',
        ]);
        
        Answer::create([
            'answer_name' => 'Sehr gut',
            'question_id' => '6',
            'instruction_id' => '8',
            'option_id' => '24',
        ]);

        //question7
        Answer::create([
            'answer_name' => '843709',
            'question_id' => '7',
            'instruction_id' => '9',
            'option_id' => '25',
        ]);

        //question8
        Answer::create([
            'answer_name' => 'Ihre',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '26',
        ]);

        Answer::create([
            'answer_name' => 'Seine',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '29',
        ]);

        Answer::create([
            'answer_name' => 'Ihre',
            'question_id' => '8',
            'instruction_id' => '10',
            'option_id' => '30',
        ]);

        //question9
        Answer::create([
            'answer_name' => 'Nein',
            'question_id' => '9',
            'instruction_id' => '11',
            'option_id' => '33',
        ]);

        //question10
        Answer::create([
            'answer_name' => 'Ja',
            'question_id' => '10',
            'instruction_id' => '12',
            'option_id' => '34',
        ]);

        //question11
        Answer::create([
            'answer_name' => 'kommt',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '38',
        ]);
        Answer::create([
            'answer_name' => 'kann',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '39',
        ]);
        Answer::create([
            'answer_name' => 'spricht',
            'question_id' => '11',
            'instruction_id' => '13',
            'option_id' => '44',
        ]);

        //question12
        Answer::create([
            'answer_name' => 'Entschuldigung, noch einmal bitte.',
            'question_id' => '12',
            'instruction_id' => '14',
            'option_id' => '47',
        ]);
        Answer::create([
            'answer_name' => 'Können Sie das aufschreiben bitte?',
            'question_id' => '12',
            'instruction_id' => '15',
            'option_id' => '49',
        ]);
        Answer::create([
            'answer_name' => 'Entschuldigung, was bedeutet ...?',
            'question_id' => '12',
            'instruction_id' => '16',
            'option_id' => '51',
        ]);

        //question13
        Answer::create([
            'answer_name' => 'www.urlaub-in-de.de',
            'question_id' => '13',
            'instruction_id' => '17',
            'option_id' => '54',
        ]);

        //question14
        Answer::create([
            'answer_name' => 'eine',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '56',
        ]);

        Answer::create([
            'answer_name' => 'ein',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '58',
        ]);
        
        Answer::create([
            'answer_name' => 'einen',
            'question_id' => '14',
            'instruction_id' => '18',
            'option_id' => '63',
        ]);

        //question15
        Answer::create([
            'answer_name' => 'Gleis 16',
            'question_id' => '15',
            'instruction_id' => '19',
            'option_id' => '66',
        ]);

        //question16 
        Answer::create([
            'answer_name' => 'durfen.',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '67',        
            ]);
        Answer::create([
            'answer_name' => 'können.',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '69',
        ]);
        Answer::create([
            'answer_name' => 'müssen',
            'question_id' => '16',
            'instruction_id' => '20',
            'option_id' => '72',
        ]);

        //question17
        Answer::create([
            'answer_name' => 'Schade',
            'question_id' => '17',
            'instruction_id' => '21',
            'option_id' => '75',
        ]);
        Answer::create([
            'answer_name' => 'Ja, gerne',
            'question_id' => '17',
            'instruction_id' => '22',
            'option_id' => '77',
        ]);
        Answer::create([
            'answer_name' => 'Hoffentlich',
            'question_id' => '18',
            'instruction_id' => '23',
            'option_id' => '79',
        ]);

        //question18
        Answer::create([
            'answer_name' => 'Geh zum Flugsteig.',
            'question_id' => '18',
            'instruction_id' => '24',
            'option_id' => '83',
        ]);

        //question19
        Answer::create([
            'answer_name' => 'mir',
            'question_id' => '19',
            'instruction_id' => '25',
            'option_id' => '86',
        ]);
        Answer::create([
            'answer_name' => 'mein',
            'question_id' => '19',
            'instruction_id' => '25',
            'option_id' => '87',
        ]);

         //question20
        Answer::create([
            'answer_name' => '20',
            'question_id' => '20',
            'instruction_id' => '26',
            'option_id' => '90',
        ]);

        Answer::create([
            'answer_name' => '453',
            'question_id' => '20',
            'instruction_id' => '26',
            'option_id' => '91',
        ]);

        //question21
        Answer::create([
            'answer_name' => 'He wants to send you greetings.',
            'question_id' => '21',
            'instruction_id' => '27',
            'option_id' => '94',
        ]);

        //question22
        Answer::create([
            'answer_name' => 'Halo, ist Julia da?',
            'question_id' => '22',
            'instruction_id' => '28',
            'option_id' => '96',
        ]);

        //question23
        Answer::create([
            'answer_name' => 'mit',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '99',
        ]);
        Answer::create([
            'answer_name' => 'der',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '103',
        ]);
        Answer::create([
            'answer_name' => 'mit',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '104',
        ]);
        Answer::create([
            'answer_name' => 'dem',
            'question_id' => '23',
            'instruction_id' => '29',
            'option_id' => '109',
        ]);

        //question24
        Answer::create([
            'answer_name' => 'Wie sagt man das auf Deutsch?',
            'question_id' => '24',
            'instruction_id' => '30',
            'option_id' => '111',
        ]);
        Answer::create([
            'answer_name' => 'Ist das richtig?',
            'question_id' => '24',
            'instruction_id' => '31',
            'option_id' => '115',
        ]);

        Answer::create([
            'answer_name' => 'Bitte buchstabieren Sie das.',
            'question_id' => '24',
            'instruction_id' => '32',
            'option_id' => '116',
        ]);
        
        //question25
        Answer::create([
            'answer_name' => 'Gebäude A',
            'question_id' => '25',
            'instruction_id' => '33',
            'option_id' => '119',
        ]);

        //question26
        Answer::create([
            'answer_name' => 'Wann kommt dien Zug an?',
            'question_id' => '26',
            'instruction_id' => '34',
            'option_id' => '122',
        ]);

        //question27
        Answer::create([
            'answer_name' => '1. Etage',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '123',
        ]);
        Answer::create([
            'answer_name' => '2. Etage',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '125',
        ]);
        Answer::create([
            'answer_name' => 'Erdgeschoss',
            'question_id' => '27',
            'instruction_id' => '35',
            'option_id' => '127',
        ]);

        //question28
        Answer::create([
            'answer_name' => 'Juni',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '130',
        ]);
        Answer::create([
            'answer_name' => '14 Tage',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '133',
        ]);
        Answer::create([
            'answer_name' => 'Anfangerstufe',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '135',
        ]);
        Answer::create([
            'answer_name' => 'Gruppe mit 4-6 Personen',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '139',
        ]);
        Answer::create([
            'answer_name' => 'Privat',
            'question_id' => '28',
            'instruction_id' => '36',
            'option_id' => '142',
        ]);

        //question29
        Answer::create([
            'answer_name' => 'Nein',
            'question_id' => '29',
            'instruction_id' => '37',
            'option_id' => '144',
        ]);

        Answer::create([
            'answer_name' => 'Ja',
            'question_id' => '29',
            'instruction_id' => '38',
            'option_id' => '145',
        ]);

        //question30
        Answer::create([
            'answer_name' => 'Herzlichen Glückwunsch!',
            'question_id' => '30',
            'instruction_id' => '39',
            'option_id' => '147',
        ]);
    }
}
