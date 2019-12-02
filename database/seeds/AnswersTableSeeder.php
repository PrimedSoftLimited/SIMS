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
            'answer_name' => 'Guten Morgen',
            'correct_answer' => 'false',
            'question_id' => '1'
        ]);
        Answer::create([
            'answer_name' => 'Guten Abend',
            'correct_answer' => 'true',
            'question_id' => '1'
        ]);
        Answer::create([
            'answer_name' => 'Gute Nacht',
            'correct_answer' => 'false',
            'question_id' => '1'
        ]);
      
        //question2
        Answer::create([
            'answer_name' => 'Name ist(...) Mein',
            'correct_answer' => 'false',
            'question_id' => '2'
        ]);
        Answer::create([
            'answer_name' => 'ist(...) Mein Name',
            'correct_answer' => 'false',
            'question_id' => '2'
        ]);
        Answer::create([
            'answer_name' => 'Mein Name (ist...)',
            'correct_answer' => 'true',
            'question_id' => '2'
        ]);

        //question3
        Answer::create([
            'answer_name' => '204',
            'correct_answer' => 'false',
            'question_id' => '3'
        ]);
        Answer::create([
            'answer_name' => '224',
            'correct_answer' => 'true',
            'question_id' => '3'
        ]);
        Answer::create([
            'answer_name' => '240',
            'correct_answer' => 'false',
            'question_id' => '3'
        ]);
        Answer::create([
            'answer_name' => '242',
            'correct_answer' => 'false',
            'question_id' => '3'
        ]);

        //question4
        Answer::create([
            'answer_name' => '06:30 - 09:30 Uhr',
            'correct_answer' => 'true',
            'question_id' => '4'
        ]);
        Answer::create([
            'answer_name' => '07:30 - 09:30 Uhr',
            'correct_answer' => 'false',
            'question_id' => '4'
        ]);
        Answer::create([
            'answer_name' => '07:30 - 10:30',
            'correct_answer' => 'false',
            'question_id' => '4'
        ]);

        //question5
        Answer::create([
            'answer_name' => 'Woher kommen Sie?',
            'correct_answer' => 'true',
            'question_id' => '5'
        ]);
        Answer::create([
            'answer_name' => 'Wo kommen Sie?',
            'correct_answer' => 'false',
            'question_id' => '5'
        ]);
        Answer::create([
            'answer_name' => 'Welche kommen Sie?',
            'correct_answer' => 'false',
            'question_id' => '5'
        ]);
        Answer::create([
            'answer_name' => 'Was kommen Sie?',
            'correct_answer' => 'false',
            'question_id' => '5'
        ]);

        //question6
        Answer::create([
            'answer_name' => 'Danke schön.',
            'correct_answer' => 'false',
            'question_id' => '6'
        ]);
        Answer::create([
            'answer_name' => '"Ja, gerne"',
            'correct_answer' => 'true',
            'question_id' => '6'
        ]);
        Answer::create([
            'answer_name' => 'Sehr gut',
            'correct_answer' => 'false',
            'question_id' => '6'
        ]);
        
        Answer::create([
            'answer_name' => 'Danke schön.',
            'correct_answer' => 'true',
            'question_id' => '6'
        ]);
        Answer::create([
            'answer_name' => '"Ja, gerne"',
            'correct_answer' => 'false',
            'question_id' => '6'
        ]);
        Answer::create([
            'answer_name' => 'Sehr gut',
            'correct_answer' => 'false',
            'question_id' => '6'
        ]);

        Answer::create([
            'answer_name' => 'Danke schön.',
            'correct_answer' => 'false',
            'question_id' => '6'
        ]);
        Answer::create([
            'answer_name' => '"Ja, gerne"',
            'correct_answer' => 'false',
            'question_id' => '6'
        ]);
        Answer::create([
            'answer_name' => 'Sehr gut',
            'correct_answer' => 'true',
            'question_id' => '6'
        ]);

        //question7
        Answer::create([
            'answer_name' => 'Die Telefonnummer lautet 843709',
            'correct_answer' => 'true',
            'question_id' => '7'
        ]);
        Answer::create([
            'answer_name' => 'Die Telefonnummer lautet 834709',
            'correct_answer' => 'false',
            'question_id' => '7'
        ]);
        Answer::create([
            'answer_name' => 'Die Telefonnummer lautet 843790',
            'correct_answer' => 'false',
            'question_id' => '7'
        ]);

        //question8
        Answer::create([
            'answer_name' => 'Welche Nummer hat Marisa?" <strong>Siene</strong>" Nummer ist 465230.',
            'correct_answer' => 'false',
            'question_id' => '8'
        ]);
        Answer::create([
            'answer_name' => 'Welche Nummer hat Marisa?" <strong>Ihre</strong>" Nummer ist 465230.',
            'correct_answer' => 'true',
            'question_id' => '8'
        ]);
   
        //question9
        Answer::create([
            'answer_name' => 'Ja',
            'correct_answer' => 'false',
            'question_id' => '9'
        ]);
        Answer::create([
            'answer_name' => 'Nein',
            'correct_answer' => 'true',
            'question_id' => '9'
        ]);

        //question10
        Answer::create([
            'answer_name' => 'Ja',
            'correct_answer' => 'true',
            'question_id' => '10'
        ]);
        Answer::create([
            'answer_name' => 'Nein',
            'correct_answer' => 'false',
            'question_id' => '10'
        ]);

        //question11
        Answer::create([
            'answer_name' => 'Maria komme aus Brasilien',
            'correct_answer' => 'false',
            'question_id' => '11'
        ]);
        Answer::create([
            'answer_name' => 'Maria kommen aus Brasilien',
            'correct_answer' => 'false',
            'question_id' => '11'
        ]);
        Answer::create([
            'answer_name' => 'Maria kommt aus Brasilien',
            'correct_answer' => 'true',
            'question_id' => '11'
        ]);

        //question12
        Answer::create([
            'answer_name' => 'Entschuldigung, was bedeutet ...?',
            'correct_answer' => 'false',
            'question_id' => '12'
        ]);
        Answer::create([
            'answer_name' => 'Können Sie das aufschreiben bitte?',
            'correct_answer' => 'false',
            'question_id' => '12'
        ]);
        Answer::create([
            'answer_name' => 'Entschuldigung, noch einmal bitte.',
            'correct_answer' => 'true',
            'question_id' => '12'
        ]);

        //question 12 options 2
        Answer::create([
            'answer_name' => 'Stimmt das?',
            'correct_answer' => 'false',
            'question_id' => '12'
        ]);
        Answer::create([
            'answer_name' => 'Können Sie das aufschreiben bitte?',
            'correct_answer' => 'true',
            'question_id' => '12'
        ]);
        Answer::create([
            'answer_name' => 'Entschuldigung, noch einmal bitte.',
            'correct_answer' => 'false',
            'question_id' => '12'
        ]);

        
        //question 12 options 3
        Answer::create([
            'answer_name' => 'Entschuldigung, was bedeutet ...?',
            'correct_answer' => 'true',
            'question_id' => '12'
        ]);
        Answer::create([
            'answer_name' => 'Können Sie das aufschreiben bitte?',
            'correct_answer' => 'false',
            'question_id' => '12'
        ]);
        Answer::create([
            'answer_name' => 'Entschuldigung, Können Sie das aufschreiben bitte?.',
            'correct_answer' => 'false',
            'question_id' => '12'
        ]);

        //question13
        Answer::create([
            'answer_name' => 'www.urlaub-in-de.de',
            'correct_answer' => 'true',
            'question_id' => '13'
        ]);
        Answer::create([
            'answer_name' => 'www.reisehlife.com',
            'correct_answer' => 'false',
            'question_id' => '13'
        ]);

        //question14
        Answer::create([
            'answer_name' => 'Ich hätte gerne einTomatensuppe',
            'correct_answer' => 'false',
            'question_id' => '14'
        ]);
        Answer::create([
            'answer_name' => 'Ich hätte gerne eineTomatensuppe',
            'correct_answer' => 'true',
            'question_id' => '14'
        ]);
        Answer::create([
            'answer_name' => 'Ich hätte gerne einenTomatensuppe',
            'correct_answer' => 'false',
            'question_id' => '14'
        ]);

        //question15
        Answer::create([
            'answer_name' => 'Gleis 6',
            'correct_answer' => 'false',
            'question_id' => '15'
        ]);
        Answer::create([
            'answer_name' => 'Gleis 10',
            'correct_answer' => 'false',
            'question_id' => '15'
        ]);
        Answer::create([
            'answer_name' => 'Gleis 16',
            'correct_answer' => 'true',
            'question_id' => '15'
        ]);

        //question16 option b
        Answer::create([
            'answer_name' => 'Hier können Sie über die Straße gehen.',
            'correct_answer' => 'true',
            'question_id' => '16'
        ]);
        Answer::create([
            'answer_name' => 'Hier müssen Sie über die Straße gehen.',
            'correct_answer' => 'false',
            'question_id' => '16'
        ]);

        //question17 -a
        Answer::create([
            'answer_name' => 'Hoffentlich',
            'correct_answer' => 'false',
            'question_id' => '17'
        ]);
        Answer::create([
            'answer_name' => 'Ja, gerne',
            'correct_answer' => 'false',
            'question_id' => '17'
        ]);
        Answer::create([
            'answer_name' => 'Schade',
            'correct_answer' => 'true',
            'question_id' => '17'
        ]);
        
        //question17 -b
        Answer::create([
            'answer_name' => 'Hoffentlich',
            'correct_answer' => 'false',
            'question_id' => '17'
        ]);
        Answer::create([
            'answer_name' => 'Ja, gerne',
            'correct_answer' => 'true',
            'question_id' => '17'
        ]);
        Answer::create([
            'answer_name' => 'Schade',
            'correct_answer' => 'false',
            'question_id' => '17'
        ]);        
        
        //question17 -c
        Answer::create([
            'answer_name' => 'Hoffentlich',
            'correct_answer' => 'true',
            'question_id' => '17'
        ]);
        Answer::create([
            'answer_name' => 'Ja, gerne',
            'correct_answer' => 'false',
            'question_id' => '17'
        ]);
        Answer::create([
            'answer_name' => 'Schade',
            'correct_answer' => 'false',
            'question_id' => '17'
        ]);

        //question18
        Answer::create([
            'answer_name' => 'Geh zum Informationsschalter.',
            'correct_answer' => 'false',
            'question_id' => '18'
        ]);
        Answer::create([
            'answer_name' => 'Geh zum Flugsteig.',
            'correct_answer' => 'true',
            'question_id' => '18'
        ]);
        Answer::create([
            'answer_name' => 'Warte auf weitere Informationen.',
            'correct_answer' => 'false',
            'question_id' => '18'
        ]);

        //question19
        Answer::create([
            'answer_name' => 'Können Sie mich helfen?',
            'correct_answer' => 'false',
            'question_id' => '19'
        ]);
        Answer::create([
            'answer_name' => 'Können Sie mir helfen?',
            'correct_answer' => 'false',
            'question_id' => '19'
        ]);

         //question20
        Answer::create([
            'answer_name' => '20',
            'correct_answer' => 'true',
            'question_id' => '20'
        ]);
        Answer::create([
            'answer_name' => '10',
            'correct_answer' => 'false',
            'question_id' => '20'
        ]);

        //question21
        Answer::create([
            'answer_name' => 'He wants to invite you.',
            'correct_answer' => 'false',
            'question_id' => '21'
        ]);
        Answer::create([
            'answer_name' => 'He wants to thank you.',
            'correct_answer' => 'false',
            'question_id' => '21'
        ]);
        Answer::create([
            'answer_name' => 'He wants to send you greetings.',
            'correct_answer' => 'true',
            'question_id' => '21'
        ]);

        //question22
        Answer::create([
            'answer_name' => 'Halo Julia.',
            'correct_answer' => 'false',
            'question_id' => '22'
        ]);
        Answer::create([
            'answer_name' => 'Halo, ist Julia da?',
            'correct_answer' => 'true',
            'question_id' => '22'
        ]);
        Answer::create([
            'answer_name' => 'Moment bitte.',
            'correct_answer' => 'false',
            'question_id' => '22'
        ]);

        //question23
        Answer::create([
            'answer_name' => 'Ich hätte gerne auf dem Tomatensuppe',
            'correct_answer' => 'false',
            'question_id' => '23'
        ]);
        Answer::create([
            'answer_name' => 'Ich hätte gerne mit der Tomatensuppe',
            'correct_answer' => 'true',
            'question_id' => '23'
        ]);
        Answer::create([
            'answer_name' => 'Ich hätte gerne bei die Tomatensuppe',
            'correct_answer' => 'false',
            'question_id' => '23'
        ]);

        //question24 -a
        Answer::create([
            'answer_name' => 'Bitte buchstabieren Sie das.',
            'correct_answer' => 'false',
            'question_id' => '24'
        ]);
        Answer::create([
            'answer_name' => 'Wie sagt man das auf Deutsch?',
            'correct_answer' => 'true',
            'question_id' => '24'
        ]);
        Answer::create([
            'answer_name' => 'Stimmd das?',
            'correct_answer' => 'false',
            'question_id' => '24'
        ]);

        //question24 -b
        Answer::create([
            'answer_name' => 'Bitte buchstabieren Sie das.',
            'correct_answer' => 'false',
            'question_id' => '24'
        ]);
        Answer::create([
            'answer_name' => 'Wie sagt man das auf Deutsch?',
            'correct_answer' => 'false',
            'question_id' => '24'
        ]);
        Answer::create([
            'answer_name' => 'Ist das richtig?',
            'correct_answer' => 'true',
            'question_id' => '24'
        ]);

        //question24 -c
        Answer::create([
            'answer_name' => 'Bitte buchstabieren Sie das.',
            'correct_answer' => 'true',
            'question_id' => '24'
        ]);
        Answer::create([
            'answer_name' => 'Wie sagt man das auf Deutsch?',
            'correct_answer' => 'false',
            'question_id' => '24'
        ]);
        Answer::create([
            'answer_name' => 'Ist das richtig?',
            'correct_answer' => 'false',
            'question_id' => '24'
        ]);
        
        //question25
        Answer::create([
            'answer_name' => 'Gebäude A',
            'correct_answer' => 'true',
            'question_id' => '25'
        ]);
        Answer::create([
            'answer_name' => 'Gebäude B"',
            'correct_answer' => 'false',
            'question_id' => '25'
        ]);
        Answer::create([
            'answer_name' => 'Gebäude C',
            'correct_answer' => 'false',
            'question_id' => '25'
        ]);

        //question26
        Answer::create([
            'answer_name' => 'Zug an Wann kommt dein?',
            'correct_answer' => 'false',
            'question_id' => '26'
        ]);
        Answer::create([
            'answer_name' => 'Zug kommt dien Wann an?',
            'correct_answer' => 'false',
            'question_id' => '26'
        ]);
        Answer::create([
            'answer_name' => 'Wann kommt dien Zug an?',
            'correct_answer' => 'true',
            'question_id' => '26'
        ]);

        //question27
        Answer::create([
            'answer_name' => 'Pullover: Etage',
            'correct_answer' => 'true',
            'question_id' => '27'
        ]);
        Answer::create([
            'answer_name' => 'Pullover: Erdgeschoss',
            'correct_answer' => 'false',
            'question_id' => '27'
        ]);

        //question28
        Answer::create([
            'answer_name' => 'beginner level',
            'correct_answer' => 'true',
            'question_id' => '28'
        ]);
        Answer::create([
            'answer_name' => 'Intermidate',
            'correct_answer' => 'false',
            'question_id' => '28'
        ]);
        Answer::create([
            'answer_name' => 'final stage',
            'correct_answer' => 'false',
            'question_id' => '28'
        ]);

        //question29 -a
        Answer::create([
            'answer_name' => 'Ja',
            'correct_answer' => 'false',
            'question_id' => '29'
        ]);
        Answer::create([
            'answer_name' => 'Nein',
            'correct_answer' => 'true',
            'question_id' => '29'
        ]);

        //question29 -b
        Answer::create([
            'answer_name' => 'Ja',
            'correct_answer' => 'true',
            'question_id' => '29'
        ]);
        Answer::create([
            'answer_name' => 'Nein',
            'correct_answer' => 'false',
            'question_id' => '29'
        ]);


        //question30
        Answer::create([
            'answer_name' => 'Herzlichen Glückwunsch!',
            'correct_answer' => 'true',
            'question_id' => '30'
        ]);
        Answer::create([
            'answer_name' => 'Alles Gute!',
            'correct_answer' => 'false',
            'question_id' => '30'
        ]);
        Answer::create([
            'answer_name' => 'Ja, gern!',
            'correct_answer' => 'false',
            'question_id' => '30'
        ]);

    }
}
