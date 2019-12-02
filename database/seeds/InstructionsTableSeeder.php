<?php

use App\Instruction;
use Illuminate\Database\Seeder;

class InstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //question1
         Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'null',
            'question_id' => '1'
        ]);

        //question2
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus.',
            'instruction_audio' => 'null',
            'question_id' => '2'
        ]);

        //question3
        Instruction::create([
            'instruction_name' => 'Welche Zimmernummer hast du?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_03_dwdownload.mp3',
            'question_id' => '3'
        ]);

        //question4
        Instruction::create([
            'instruction_name' => 'Um wie viel Uhr kannst du frühstücken?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_04_dwdownload.mp3',
            'question_id' => '4'
        ]);

        //question5
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus.',
            'instruction_audio' => 'null',
            'question_id' => '5'
        ]);

        //question6
        Instruction::create([
            'instruction_name' => 'Kann ich Ihnen helfen?',
            'instruction_audio' => 'null',
            'question_id' => '6',
        ]);
        Instruction::create([
            'instruction_name' => 'Sie sprechen sehr gut Deutsch.',
            'instruction_audio' => 'null',
            'question_id' => '6',
        ]);
        Instruction::create([
            'instruction_name' => 'Wie gefällt es Ihnen hier?',
            'instruction_audio' => 'null',
            'question_id' => '6',
        ]); 

        //question7
        Instruction::create([
            'instruction_name' => 'Wie lautet die Telefonnummer der Sprachschule?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_07_dwdownload.mp3',
            'question_id' => '7'
        ]);

        //question8
        Instruction::create([
            'instruction_name' => 'Welches Wort passt?',
            'instruction_audio' => 'null',
            'question_id' => '8'
        ]);

        //question9
        Instruction::create([
            'instruction_name' => 'Kannst du die Briefmarken jetzt kaufen?',
            'instruction_audio' => 'null',
            'question_id' => '9'
        ]);

        //question10
        Instruction::create([
            'instruction_name' => 'Ist die Durchsage wichtig für dich?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_10_dwdownload.mp3',
            'question_id' => '10'
        ]);

        //question11
        Instruction::create([
            'instruction_name' => 'Welche Form ist richtig?',
            'instruction_audio' => 'null',
            'question_id' => '11'
        ]);

        //question12
        Instruction::create([
            'instruction_name' => 'You would like to hear what your partner has said again.',
            'instruction_audio' => 'null',
            'question_id' => '12'
        ]);
        Instruction::create([
            'instruction_name' => 'You would like to have some important information that you don\'t fully understand in written form.',
            'instruction_audio' => 'null',
            'question_id' => '12'
        ]);
        Instruction::create([
            'instruction_name' => 'Sometimes there is one word you cannot understand.',
            'instruction_audio' => 'null',
            'question_id' => '12'
        ]);

        //question13
        Instruction::create([
            'instruction_name' => 'Wo findest du die benötigten Informationen?',
            'instruction_audio' => 'null',
            'question_id' => '13'
        ]);

        //question14
        Instruction::create([
            'instruction_name' => 'Wähl richtig aus.',
            'instruction_audio' => 'null',
            'question_id' => '14'
        ]);

        //question15
        Instruction::create([
            'instruction_name' => 'Von welchem Gleis fährt der Zug ab?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_15_dwdownload.mp3',
            'question_id' => '15'
        ]);
        
        //question16
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort.',
            'instruction_audio' => 'null',
            'question_id' => '16'
        ]);
        //question17 -a
        Instruction::create([
            'instruction_name' => 'Ich kann leider nicht zur Feier gehen. Ich habe keine Zeit.',
            'instruction_audio' => 'null',
            'question_id' => '17'
        ]);

        //question17 -b
        Instruction::create([
            'instruction_name' => 'Möchten Sie noch eine Tasse Kaffee?',
            'instruction_audio' => 'null',
            'question_id' => '17'
        ]);
        
        //question17 -c
        Instruction::create([
            'instruction_name' => 'Morgen ist das Wetter besser als heute.',
            'instruction_audio' => 'null',
            'question_id' => '17'
        ]);
        
        //question18
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_18_dwdownload.mp3',
            'question_id' => '18'
        ]);
                
        //question19
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort aus.',
            'instruction_audio' => 'null',
            'question_id' => '19'
        ]);

        //question20
        Instruction::create([
            'instruction_name' => 'Wie lautet die Nachricht auf deiner Mailbox?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_20a_dwdownload.mp3',
            'question_id' => '20'
        ]);

        //question21
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'null',
            'question_id' => '21'
        ]);
    
        //question22
        Instruction::create([
            'instruction_name' => 'Welche Antwort passt?',
            'instruction_audio' => 'null',
            'question_id' => '22'
        ]);

        //question23
        Instruction::create([
            'instruction_name' => 'Welche Wörter fehlen?',
            'instruction_audio' => 'null',
            'question_id' => '23'
        ]);

        //question24 -a
        Instruction::create([
            'instruction_name' => 'You cannot think of the word that you want to say.',
            'instruction_audio' => 'null',
            'question_id' => '24'
        ]);

        //question24 -b
        Instruction::create([
            'instruction_name' => 'You think you have made a mistake.',
            'instruction_audio' => 'null',
            'question_id' => '24'
        ]);

        //question24 -c
        Instruction::create([
            'instruction_name' => 'You would like to know how to write the word.',
            'instruction_audio' => 'null',
            'question_id' => '24'
        ]);

        //question25
        Instruction::create([
            'instruction_name' => 'Welches Gebäude ist die Polizeiwache? Wähl die richtige Antwort.',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_25_dwdownload.mp3',
            'question_id' => '25'
        ]);

        //question26
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus.',
            'instruction_audio' => 'null',
            'question_id' => '26'
        ]);

        //question27
        Instruction::create([
            'instruction_name' => 'Wähl richtig aus.',
            'instruction_audio' => 'null',
            'question_id' => '27'
        ]);

        //question28
        Instruction::create([
            'instruction_name' => 'Correctly choose: Course Level',
            'instruction_audio' => 'null',
            'question_id' => '28'
        ]);
        
        //question29 -a 
        Instruction::create([
            'instruction_name' => 'Die Feier ist in der Schule.',
            'instruction_audio' => 'null',
            'question_id' => '29'
        ]);

        //question29 -b
        Instruction::create([
            'instruction_name' => 'Du musst deiner Lehrerin eine E-Mail schicken.',
            'instruction_audio' => 'null',
            'question_id' => '29'
        ]);

        //question30
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'null',
            'question_id' => '30'
        ]);

    }
}
