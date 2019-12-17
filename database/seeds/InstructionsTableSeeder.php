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
        /**A1 Instructions Starts Here */ 
        /**Instruction a1_q1 (1) */
         Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'null',
            'question_id' => '1'
        ]);
        /**Instruction a1_q2 (2) */
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus.',
            'instruction_audio' => 'null',
            'question_id' => '2'
        ]);
        /**Instruction a1_q3 (3) */
        Instruction::create([
            'instruction_name' => 'Welche Zimmernummer hast du?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_03_dwdownload.mp3',
            'question_id' => '3'
        ]);
        /**Instruction a1_q4 (4) */
        Instruction::create([
            'instruction_name' => 'Um wie viel Uhr kannst du frühstücken?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_04_dwdownload.mp3',
            'question_id' => '4'
        ]);
        /**Instruction a1_q5 (5) */
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus.',
            'instruction_audio' => 'null',
            'question_id' => '5'
        ]);
        /**Instruction a1_q6 (6) */
        Instruction::create([
            'instruction_name' => 'Kann ich Ihnen helfen?',
            'instruction_audio' => 'null',
            'question_id' => '6',
        ]);
        /**Instruction a1_q6 (7) */
        Instruction::create([
            'instruction_name' => 'Sie sprechen sehr gut Deutsch.',
            'instruction_audio' => 'null',
            'question_id' => '6',
        ]);
        /**Instruction a1_q6 (8) */
        Instruction::create([
            'instruction_name' => 'Wie gefällt es Ihnen hier?',
            'instruction_audio' => 'null',
            'question_id' => '6',
        ]); 
        /**Instruction a1_q7 (9) */
        Instruction::create([
            'instruction_name' => 'Wie lautet die Telefonnummer der Sprachschule?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_07_dwdownload.mp3',
            'question_id' => '7'
        ]);
        /**Instruction a1_q8 (10) */
        Instruction::create([
            'instruction_name' => 'Welches Wort passt?',
            'instruction_audio' => 'null',
            'question_id' => '8'
        ]);
        /**Instruction a1_q9 (11) */
        Instruction::create([
            'instruction_name' => 'Kannst du die Briefmarken jetzt kaufen?',
            'instruction_audio' => 'null',
            'question_id' => '9'
        ]);
        /**Instruction a1_q10 (12) */
        Instruction::create([
            'instruction_name' => 'Ist die Durchsage wichtig für dich?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_10_dwdownload.mp3',
            'question_id' => '10'
        ]);
        /**Instruction a1_q11 (13) */
        Instruction::create([
            'instruction_name' => 'Welche Form ist richtig?',
            'instruction_audio' => 'null',
            'question_id' => '11'
        ]);
        /**Instruction a1_q12 (14) */
        Instruction::create([
            'instruction_name' => 'You would like to hear what your partner has said again.',
            'instruction_audio' => 'null',
            'question_id' => '12'
        ]);
        /**Instruction a1_q12 (15) */
        Instruction::create([
            'instruction_name' => 'You would like to have some important information that you don\'t fully understand in written form.',
            'instruction_audio' => 'null',
            'question_id' => '12'
        ]);
        /**Instruction a1_q12 (16) */            
        Instruction::create([
            'instruction_name' => 'Sometimes there is one word you cannot understand.',
            'instruction_audio' => 'null',
            'question_id' => '12'
        ]);
        /**Instruction a1_q13 (17) */
        Instruction::create([
            'instruction_name' => 'Wo findest du die benötigten Informationen?',
            'instruction_audio' => 'null',
            'question_id' => '13'
        ]);
        /**Instruction a1_q14 (18) */
        Instruction::create([
            'instruction_name' => 'Wähl richtig aus.',
            'instruction_audio' => 'null',
            'question_id' => '14'
        ]);
        /**Instruction a1_q15 (19) */
        Instruction::create([
            'instruction_name' => 'Von welchem Gleis fährt der Zug ab?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_15_dwdownload.mp3',
            'question_id' => '15'
        ]);
        /**Instruction a1_q16 (20) */
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort.',
            'instruction_audio' => 'null',
            'question_id' => '16'
        ]);
        /**Instruction a1_q17 (21) */
        Instruction::create([
            'instruction_name' => 'Ich kann leider nicht zur Feier gehen. Ich habe keine Zeit.',
            'instruction_audio' => 'null',
            'question_id' => '17'
        ]);
        /**Instruction a1_q17 (22) */
        Instruction::create([
            'instruction_name' => 'Möchten Sie noch eine Tasse Kaffee?',
            'instruction_audio' => 'null',
            'question_id' => '17'
        ]);
        /**Instruction a1_q17 (23) */
        Instruction::create([
            'instruction_name' => 'Morgen ist das Wetter besser als heute.',
            'instruction_audio' => 'null',
            'question_id' => '17'
        ]);
        /**Instruction a1_q18 (24) */
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_18_dwdownload.mp3',
            'question_id' => '18'
        ]);
        /**Instruction a1_q19 (25) */
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort aus.',
            'instruction_audio' => 'null',
            'question_id' => '19'
        ]);
        /**Instruction a1_q20 (26) */
        Instruction::create([
            'instruction_name' => 'Wie lautet die Nachricht auf deiner Mailbox?',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_20a_dwdownload.mp3',
            'question_id' => '20'
        ]);
        /**Instruction a1_q21 (27) */
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'null',
            'question_id' => '21'
        ]);
        /**Instruction a1_q22 (28) */
        Instruction::create([
            'instruction_name' => 'Welche Antwort passt?',
            'instruction_audio' => 'null',
            'question_id' => '22'
        ]);
        /**Instruction a1_q23 (29) */
        Instruction::create([
            'instruction_name' => 'Welche Wörter fehlen?',
            'instruction_audio' => 'null',
            'question_id' => '23'
        ]);
        /**Instruction a1_q24 (30) */
        Instruction::create([
            'instruction_name' => 'You cannot think of the word that you want to say.',
            'instruction_audio' => 'null',
            'question_id' => '24'
        ]);
        /**Instruction a1_q24 (31) */
        Instruction::create([
            'instruction_name' => 'You think you have made a mistake.',
            'instruction_audio' => 'null',
            'question_id' => '24'
        ]);
        /**Instruction a1_q24 (32) */
        Instruction::create([
            'instruction_name' => 'You would like to know how to write the word.',
            'instruction_audio' => 'null',
            'question_id' => '24'
        ]);
        /**Instruction a1_q25 (33) */
        Instruction::create([
            'instruction_name' => 'Welches Gebäude ist die Polizeiwache? Wähl die richtige Antwort.',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A1_25_dwdownload.mp3',
            'question_id' => '25'
        ]);
        /**Instruction a1_q26 (34) */
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus.',
            'instruction_audio' => 'null',
            'question_id' => '26'
        ]);
        /**Instruction a1_q27 (35) */
        Instruction::create([
            'instruction_name' => 'Wähl richtig aus.',
            'instruction_audio' => 'null',
            'question_id' => '27'
        ]);
        /**Instruction a1_q28 (36) */
        Instruction::create([
            'instruction_name' => 'Correctly choose: Course Level',
            'instruction_audio' => 'null',
            'question_id' => '28'
        ]);
        /**Instruction a1_q29 (37) */
        Instruction::create([
            'instruction_name' => 'Die Feier ist in der Schule.',
            'instruction_audio' => 'null',
            'question_id' => '29'
        ]);
        /**Instruction a1_q29 (38) */
        Instruction::create([
            'instruction_name' => 'Du musst deiner Lehrerin eine E-Mail schicken.',
            'instruction_audio' => 'null',
            'question_id' => '29'
        ]);
        /**Instruction a1_q30 (39) */
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Antwort.',
            'instruction_audio' => 'null',
            'question_id' => '30'
        ]);
        /**A1 Instructions Ends Here */ 

        /**A2 Instructions Starts Here */ 
        //Instruction a2_q1 (40)
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort.',
            'instruction_audio' => 'null',
            'question_id' => '31'
        ]);
        //Instruction a2_q2 (41)
        Instruction::create([
            'instruction_name' => 'Peter möchte deinen Computer haben.',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/dira/mp3/deutschkurse/allgemein/C74A1F8E_2_dwdownload.mp3',
            'question_id' => '32'
        ]);
         //Instruction a2_q2 (42)
         Instruction::create([
            'instruction_name' => 'Du musst etwas später als geplant nach Delhi fliegen.',
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A2_02b_dwdownload.mp3',
            'question_id' => '32'
        ]);
        //Instruction a2_q3 (43)
         Instruction::create([
            'instruction_name' => 'Ich glaube, ich bekomme eine Erkältung.',
            'question_id' => '33'
        ]);
        //Instruction a2_q3 (44)
         Instruction::create([
            'instruction_name' => 'Ich wünsche dir ein schönes Wochenende.',
            'question_id' => '33'
        ]);
        //Instruction a2_3 (45)
        Instruction::create([
            'instruction_name' => 'Wir könnten jetzt zusammen die Hausaufgaben machen.',
            'question_id' => '33'
        ]);
        //Instruction a2_q4 (46)
        Instruction::create([
            'instruction_name' => 'Wähl richtig aus.',
            'question_id' => '34'
        ]);
        //Instruction a2_q5 (47)
        Instruction::create([
            'instruction_name' => 'Welcher Ausdruck ist richtig?',
            'question_id' => '35'
        ]);
        //Instruction a2_q6 (48)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A2_07_dwdownload.mp3',
            'instruction_name' => 'Du kommst in 20 Minuten in Berlin an.',
            'question_id' => '36'
        ]);
        //Instruction a2_q7 (49)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A2_07_dwdownload.mp3',
            'instruction_name' => 'Du kommst in 20 Minuten in Berlin an.',
            'question_id' => '37'
        ]);
        //Instruction a2_q8 (50)
        Instruction::create([
            'instruction_name' => 'Du redest und weißt plötzlich ein Wort nicht.',
            'question_id' => '38'
        ]);
        //Instruction a2_q8 (51)
        Instruction::create([
            'instruction_name' => 'Du möchtest das Thema wechseln und über etwas anderes reden.',
            'question_id' => '38'
        ]);
        //Instruction a2_q8 (52)
        Instruction::create([
            'instruction_name' => 'Dein Partner will etwas sagen und unterbricht dich.',
            'question_id' => '38'
        ]);
        //Instruction a2_q9 (53)
        Instruction::create([
            'instruction_name' => 'Welches Wort passt?',
            'question_id' => '39'
        ]);
        //Instruction a2_q10 (54)
        Instruction::create([
            'instruction_name' => 'Darf ich hier rauchen?',
            'question_id' => '40'
        ]);
        //Instruction a2_q11 (55)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A2_11_dwdownload.mp3',
            'instruction_name' => 'Der James-Bond-Film beginnt heute Abend um 19:45 Uhr.',
            'question_id' => '41'
        ]);
        //Instruction a2_q12 (56)
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort.',
            'question_id' => '42'
        ]);
        //Instruction a2_q13 (57)
        Instruction::create([
            'instruction_name' => 'Wähl die richtigen Antworten.',
            'question_id' => '43'
        ]);
        //Instruction a2_q14 (58)
        Instruction::create([
            'instruction_name' => 'Hallo, kann ich bitte mit Petra sprechen?',
            'question_id' => '44'
        ]);
        //Instruction a2_q14 (59)
        Instruction::create([
            'instruction_name' => 'Hallo, spricht da Wolfgang?',
            'question_id' => '44'
        ]);
        //Instruction a2_q14 (60)
        Instruction::create([
            'instruction_name' => 'Guten Tag. Kann ich bitte Herrn Kappenberg sprechen?',
            'question_id' => '44'
        ]);
        //Instruction a2_q15 (61)
        Instruction::create([
            'instruction_name' => 'Du interessierst dich für Firmen und das Arbeitsleben in Deutschland.',
            'question_id' => '45'
        ]);
        //Instruction a2_q15 (62)
        Instruction::create([
            'instruction_name' => 'Du interessierst dich für die Zusammenarbeit zwischen Deutschland und den anderen europäischen Ländern.',
            'question_id' => '45'
        ]);
        //Instruction a2_q16 (63)
        Instruction::create([
            'instruction_name' => 'Wähl die richtigen Sätze.',
            'question_id' => '46'
        ]);
        //Instruction a2_q17 (64)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A2_17_dwdownload.mp3',
            'instruction_name' => 'Wähl die richtige Nummer.',
            'question_id' => '47'
        ]);
        //Instruction a2_q18 (65)
        Instruction::create([
            'instruction_name' => 'Schreib die richtigen Wörter in die Lücken.',
            'question_id' => '48'
        ]);
        //Instruction a2_q19 (66)
        Instruction::create([
            'instruction_name' => 'Schreib die fehlenden Wörter im Perfekt in die Lücken.',
            'question_id' => '49'
        ]);
        //Instruction a2_q20 (67)
        Instruction::create([
            'instruction_name' => 'Deutschland war nicht immer für gute Rockmusik bekannt.',
            'question_id' => '50'
        ]);
        //Instruction a2_q20 (68)
        Instruction::create([
            'instruction_name' => 'Am Ende des Monats kannst du eine Radiosendung mit der besten deutschen Musik des Jahres hören.',
            'question_id' => '50'
        ]);
        //Instruction a2_q21 (69)
        Instruction::create([
            'instruction_name' => 'Ich habe Kopfschmerzen. Hast du etwas ...',
            'question_id' => '51'
        ]);
        //Instruction a2_q22 (70)
        Instruction::create([
            'instruction_name' => 'Schreib die fehlenden Wörter im Perfekt in die Lücken.',
            'question_id' => '52'
        ]);
        //Instruction a2_q23 (71)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_A2_23_dwdownload.mp3',
            'instruction_name' => 'Du solltest besser am Samstag wandern.',
            'question_id' => '53'
        ]);
        //Instruction a2_q24 (72)
        Instruction::create([
            'instruction_name' => 'Was interessiert dich ...',
            'question_id' => '54'
        ]);
        //Instruction a2_q25 (73)
        Instruction::create([
            'instruction_name' => 'Wähl richtig aus.',
            'question_id' => '55'
        ]);
        //Instruction a2_q26 (74)
        Instruction::create([
            'instruction_name' => 'Wähl den richtigen Kurs.',
            'question_id' => '56'
        ]);
        //Instruction a2_q27 (75)
        Instruction::create([
            'instruction_name' => 'Ein Freund hat beruflich sehr viel zu tun und kann nicht jede Woche zu derselben Uhrzeit in die Sprachschule gehen. Welche der vier Schulen bietet den besten Sprachkurs für ihn?',
            'question_id' => '57'
        ]);
        //Instruction a2_q27 (76)
        Instruction::create([
            'instruction_name' => 'Eine andere Freundin sucht einen Sprachkurs für ihre zehnjährige Tochter. Welche Schule bietet einen passenden Kurs für sie?',
            'question_id' => '57'
        ]);
        //Instruction a2_q28 (77)
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort.',
            'question_id' => '58'
        ]);
        //Instruction a2_q29 (78)
        Instruction::create([
            'instruction_name' => 'Der Mann möchte lieber mit dem Zug nach Hamburg fahren.',
            'question_id' => '59'
        ]);
        //Instruction a2_q29 (79)
        Instruction::create([
            'instruction_name' => 'Beide möchten in Hamburg ein Auto haben.',
            'question_id' => '59'
        ]);
        //Instruction a2_q29 (80)
        Instruction::create([
            'instruction_name' => 'Die Frau will die Koffer tragen.',
            'question_id' => '59'
        ]);
        //Instruction a2_q30 (81)
        Instruction::create([
            'instruction_name' => 'Welches Wort passt? Wähl aus.',
            'question_id' => '60'
        ]);
        //Instruction a2_q30 (82)
        Instruction::create([
            'instruction_name' => 'Welches Wort passt? Wähl aus.',
            'question_id' => '60'
        ]);

        /**B1 Instructions Starts Here */ 
        //Instruction b1_q1 (83)
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Fragewort aus.',
            'question_id' => '61'
        ]);
        //Instruction b1_q2 (84)
        Instruction::create([
            'instruction_name' => 'Vielen Dank für deine Hilfe!',
            'question_id' => '62'
        ]);
        //Instruction b1_q3 (85)
        Instruction::create([
            'instruction_name' => 'Weimar ist eine Großstadt.',
            'question_id' => '63'
        ]);
        //Instruction b1_q3 (86)
        Instruction::create([
            'instruction_name' => 'Die Stadt Weimar hat eine große kulturelle Vergangenheit.',
            'question_id' => '63'
        ]);
        //Instruction b1_q4 (87)
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Form aus.',
            'question_id' => '64'
        ]);
        //Instruction b1_q5 (88)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_B1_05_dwdownload.mp3',
            'instruction_name' => 'Es ist nur in sehr wenigen Fällen möglich, Deutsch in einem Jahr zu lernen.',
            'question_id' => '65'
        ]);
        //Instruction b1_q6 (89)
        Instruction::create([
            'instruction_name' => 'Wähl die richtige Form aus.',
            'question_id' => '66'
        ]);
        //Instruction b1_q7 (90)
        Instruction::create([
            'instruction_name' => 'Was heißt "Brötchentaste"? Wähl die richtige Antwort.',
            'question_id' => '67'
        ]);
        //Instruction b1_q8 (91)
        Instruction::create([
            'instruction_name' => 'Ergänze die Sätze mit der richtigen Form des Verbs.',
            'question_id' => '68'
        ]);
        //Instruction b1_q9 (92)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_B1_09_dwdownload.mp3',
            'instruction_name' => 'Von welchem Gleis fährt dein Zug nach Köln? Schreib die Gleisnummer als Ziffer (1, 2, 3, 4 ...) in das Kästchen.',
            'question_id' => '69'
        ]);
        //Instruction b1_q10 (93)
        Instruction::create([
            'instruction_name' => 'In deiner Antwort sind noch einige Lücken. Wähl die Wörter in der richtigen Reihenfolge aus.',
            'question_id' => '70'
        ]);
        //Instruction b1_q11 (94)
        Instruction::create([
            'instruction_name' => 'Wähl die Wörter in der richtigen Reihenfolge aus, um A) deine Überraschung und B) deinen Ärger auszudrücken.',
            'question_id' => '71'
        ]);
        //Instruction b1_q12 (95)
        Instruction::create([
            'instruction_name' => 'Wähl das richtige Wort aus der Liste.',
            'question_id' => '72'
        ]);
        //Instruction b1_q13 (96)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_B1_13_dwdownload.mp3',
            'instruction_name' => 'Dein Bekannter erwartet dich in ca. 20 Minuten in der Wohnung.',
            'question_id' => '73'
        ]);
        //Instruction b1_q14 (97)
        Instruction::create([
            'instruction_name' => 'Schreib die fehlenden Wörter in die Kästchen. Benutze das Perfekt.',
            'question_id' => '74'
        ]);
        //Instruction b1_q15 (98)
        Instruction::create([
            'instruction_name' => 'Man findet in ganz Deutschland diese interessanten Ortsnamen.',
            'question_id' => '75'
        ]);
        //Instruction b1_q15 (99)
        Instruction::create([
            'instruction_name' => 'Die meisten dieser Namen kommen aus Afrika.',
            'question_id' => '75'
        ]);
        //Instruction b1_q15 (100)
        Instruction::create([
            'instruction_name' => 'Der Ortsname "England" hat mit Schifffahrt zu tun.',
            'question_id' => '75'
        ]);
        //Instruction b1_q16 (101)
        Instruction::create([
            'instruction_name' => 'Bring den Dialog in die richtige Reihenfolge, indem du die Sätze in der richtigen Reihenfolge auswählst.',
            'question_id' => '76'
        ]);
        //Instruction b1_q17 (102)
        Instruction::create([
            'instruction_name' => 'Schreib die richtigen Formen der Verben "dürfen", "können", "müssen" und "wollen" in die Lücken.',
            'question_id' => '77'
        ]);
        //Instruction b1_q18 (103)
        Instruction::create([
            'instruction_name' => 'Sie hat Probleme, weil sie noch nicht so lange in Deutschland ist.',
            'question_id' => '78'
        ]);
        //Instruction b1_q18 (104)
        Instruction::create([
            'instruction_name' => 'Sie fühlt sich nicht wohl, wenn ihre deutschen Bekannten Witze machen.',
            'question_id' => '78'
        ]);
        //Instruction b1_q19 (105)
        Instruction::create([
            'instruction_name' => 'Was antwortest du deinem Bekannten? Vervollständige die Sätze.',
            'question_id' => '79'
        ]);
        //Instruction b1_q20 (106)
        Instruction::create([
            'instruction_name' => 'Sekt wird besonders am Ende des Jahres gerne getrunken.',
            'question_id' => '80'
        ]);
        //Instruction b1_q20 (107)
        Instruction::create([
            'instruction_name' => 'Eine Flasche Sekt kostet in Deutschland mindestens fünf Euro.',
            'question_id' => '80'
        ]);
        //Instruction b1_q20 (108)
        Instruction::create([
            'instruction_name' => 'Sekt und Champagner werden auch Schaumwein genannt.',
            'question_id' => '80'
        ]);
        //Instruction b1_q21 (109)
        Instruction::create([
            'instruction_name' => 'Ergänze die Anrede und den Gruß am Ende des Briefes.',
            'question_id' => '81'
        ]);
        //Instruction b1_q22 (110)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/deutschkurse/nicosweg/einstufungstest/Einstufungstest_B1_22a_dwdownload.mp3',
            'instruction_name' => 'Der erste Schüler denkt an die vielen Autos in Deutschland.',
            'question_id' => '82'
        ]);
        //Instruction b1_q22 (111)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/dira/mp3/deutschkurse/allgemein/F77E2AC2_2_dwdownload.mp3',
            'instruction_name' => 'Die zweite Schülerin spricht über das Essen in Deutschland.',
            'question_id' => '82'
        ]);
        //Instruction b1_q22 (112)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/dira/mp3/deutschkurse/allgemein/ED80B95C_2_dwdownload.mp3',
            'instruction_name' => 'Die dritte Schülerin spricht über das Klima in Deutschland.',
            'question_id' => '82'
        ]);
        //Instruction b1_q23 (113)
        Instruction::create([
            'instruction_name' => 'Lies den Terminkalender von Anna und vervollständige dann ihren Bericht.',
            'question_id' => '83'
        ]);
        //Instruction b1_q24 (114)
        Instruction::create([
            'instruction_name' => 'Die Sendung richtet sich in erster Linie an',
            'question_id' => '84'
        ]);
        //Instruction b1_q25 (115)
        Instruction::create([
            'instruction_name' => 'Ergänze die Fragen, indem du die fehlenden Wörter in der richtigen Reihenfolge auswählst.',
            'question_id' => '85'
        ]);
        //Instruction b1_q26 (116)
        Instruction::create([
            'instruction_name' => 'Du möchtest folgende Sätze stärker formulieren. Ergänze sie, indem du die Wörter in der richtigen Reihenfolge auswählst.',
            'question_id' => '86'
        ]);
        //Instruction b1_q27 (117)
        Instruction::create([
            'instruction_name' => 'Jüngere Menschen verwenden allgemeine Ausdrücke nicht so oft wie ältere.',
            'question_id' => '87'
        ]);
        //Instruction b1_q27 (118)
        Instruction::create([
            'instruction_name' => 'Ältere Menschen brauchen zwar oft mehr Zeit, sich zu erinnern, aber das Gehirn arbeitet meist noch gut.',
            'question_id' => '87'
        ]);
        //Instruction b1_q28 (119)
        Instruction::create([
            'instruction_audio' => 'https://radiodownloaddw-a.akamaihd.net/Events/dwelle/dira/mp3/deutschkurse/allgemein/90A1C374_2_dwdownload.mp3',
            'instruction_name' => 'Hör dir die Sendung an und wähl die Aussagen aus, die dir im Radiobeitrag begegnen.',
            'question_id' => '88'
        ]);

        //Instruction b1_q29 (120)
        Instruction::create([
            'instruction_name' => 'Entscheide, für wen dieser Artikel geschrieben wurde. Wähl die richtige Antwort aus.',
            'question_id' => '89'
        ]);
        //Instruction b1_q30 (121)
        Instruction::create([
            'instruction_name' => 'Du ... viele Zeitungen lesen und Radio hören.',
            'question_id' => '90'
        ]);
        //Instruction b1_q30 (122)
        Instruction::create([
            'instruction_name' => 'Ich ... alle Lektionen wiederholen.',
            'question_id' => '90'
        ]);
        //Instruction b1_q30 (123)
        Instruction::create([
            'instruction_name' => '... versuchst du, viel zu sprechen. ',
            'question_id' => '90'
        ]);
        //Instruction b1_q30 (124)
        Instruction::create([
            'instruction_name' => 'Ich würde dir ..., dich zu entspannen und früh ins Bett zu gehen.',
            'question_id' => '90'
        ]);
        /**B1 Instructions ends Here */ 
    }
}
