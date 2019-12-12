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
        //question a1 - 1
        Option::create([
            'option_name' => 'Guten Morgen',
            'instruction_id' => '1'
        ]);
        Option::create([
            'option_name' => 'Guten Abend',
            'instruction_id' => '1'
        ]);
        Option::create([
            'option_name' => 'Gute Nacht',
            'instruction_id' => '1'
        ]);
        
        //question a1 - 2
        Option::create([
            'instruction_id' => '2'
        ]);

        //question a1 - 3
        Option::create([
            'option_name' => '204',
            'instruction_id' => '3'
        ]);
        Option::create([
            'option_name' => '224',
            'instruction_id' => '3'
        ]);
        Option::create([
            'option_name' => '240',
            'instruction_id' => '3'
        ]);
        Option::create([
            'option_name' => '242',
            'instruction_id' => '3'
        ]);

        //question a1 - 4
        Option::create([
            'option_name' => '06:30 - 09:30 Uhr',
            'instruction_id' => '4'
        ]);
        Option::create([
            'option_name' => '07:30 - 09:30 Uhr',
            'instruction_id' => '4'
        ]);
        Option::create([
            'option_name' => '07:30 - 10:30 Uhr',
            'instruction_id' => '4'
        ]);

        //question a1 - 5
        Option::create([
            'instruction_id' => '5'
        ]);
        Option::create([
            'instruction_id' => '5'
        ]);
        Option::create([
            'instruction_id' => '5'
        ]);
        Option::create([
            'instruction_id' => '5'
        ]);

        //question a1 - 6
        Option::create([
            'option_name' => 'Danke schön',
            'instruction_id' => '6'
        ]);
        Option::create([
            'option_name' => 'Ja, gerne',
            'instruction_id' => '6'
        ]);
        Option::create([
            'option_name' => 'Sehr gut',
            'instruction_id' => '6'
        ]);

        Option::create([
            'option_name' => 'Danke schön',
            'instruction_id' => '7'
        ]);
        Option::create([
            'option_name' => 'Ja, gerne',
            'instruction_id' => '7'
        ]);
        Option::create([
            'option_name' => 'Sehr gut',
            'instruction_id' => '7'
        ]);

        Option::create([
            'option_name' => 'Danke schön',
            'instruction_id' => '8'
        ]);
        Option::create([
            'option_name' => 'Ja, gerne',
            'instruction_id' => '8'
        ]);
        Option::create([
            'option_name' => 'Sehr gut',
            'instruction_id' => '8'
        ]);

        //question a1 - 7
        Option::create([
            'instruction_id' => '9'
        ]);

        //question a1 - 8
        Option::create([
            'option_name' => 'Ihre',
            'instruction_id' => '10'
        ]);
        Option::create([
            'option_name' => 'Seine',
            'instruction_id' => '10'
        ]);

        Option::create([
            'option_name' => 'Ihre',
            'instruction_id' => '10'
        ]);
        Option::create([
            'option_name' => 'Seine',
            'instruction_id' => '10'
        ]);

        Option::create([
            'option_name' => 'Ihre',
            'instruction_id' => '10'
        ]);
        Option::create([
            'option_name' => 'Seine',
            'instruction_id' => '10'
        ]);

        //question a1 - 9
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '11'
        ]);
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '11'
        ]);

        //question a1 - 10
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '12'
        ]);
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '12'
        ]);

        //question a1 - 11
        Option::create([
            'option_name' => 'komme',
            'instruction_id' => '13'
        ]);
        Option::create([
            'option_name' => 'kommen',
            'instruction_id' => '13'
        ]);
        Option::create([
            'option_name' => 'kommt',
            'instruction_id' => '13'
        ]);

        Option::create([
            'option_name' => 'kann',
            'instruction_id' => '13'
        ]);
        Option::create([
            'option_name' => 'können',
            'instruction_id' => '13'
        ]);
        Option::create([
            'option_name' => 'kannst',
            'instruction_id' => '13'
        ]);

        Option::create([
            'option_name' => 'spreche',
            'instruction_id' => '13'
        ]);
        Option::create([
            'option_name' => 'sprechen',
            'instruction_id' => '13'
        ]);
        Option::create([
            'option_name' => 'spricht',
            'instruction_id' => '13'
        ]);

        //question a1 - 12
        Option::create([
            'option_name' => 'Entschuldigung, was bedeuted...?',
            'instruction_id' => '14'
        ]);
        Option::create([
            'option_name' => 'Können Sie das aufschreiben bitte?',
            'instruction_id' => '14'
        ]);
        Option::create([
            'option_name' => 'Entschuldigung, noch einmal bitte',
            'instruction_id' => '14'
        ]);

        Option::create([
            'option_name' => 'Stimmt das?',
            'instruction_id' => '15'
        ]);
        Option::create([
            'option_name' => 'Können Sie das aufschreiben bitte?',
            'instruction_id' => '15'
        ]);
        Option::create([
            'option_name' => 'Entschuldigung, noch einmal bitte',
            'instruction_id' => '15'
        ]);

        Option::create([
            'option_name' => 'Entschuldigung, was bedeuted...?',
            'instruction_id' => '16'
        ]);
        Option::create([
            'option_name' => 'Können Sie das aufschreiben bitte?',
            'instruction_id' => '16'
        ]);
        Option::create([
            'option_name' => 'Entschuldigung, können Sie das wiederholen?',
            'instruction_id' => '16'
        ]);

        //question a1 - 13
        Option::create([
            'option_name' => 'www.urlaub-in-de.de?',
            'instruction_id' => '17'
        ]);
        Option::create([
            'option_name' => 'www.reisehlife.com',
            'instruction_id' => '17'
        ]);

        //question a1 - 14
        Option::create([
            'option_name' => 'ein',
            'instruction_id' => '18'
        ]);
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '18'
        ]);
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '18'
        ]);

        Option::create([
            'option_name' => 'ein',
            'instruction_id' => '18'
        ]);
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '18'
        ]);
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '18'
        ]);

        Option::create([
            'option_name' => 'ein',
            'instruction_id' => '18'
        ]);
        Option::create([
            'option_name' => 'eine',
            'instruction_id' => '18'
        ]);
        Option::create([
            'option_name' => 'einen',
            'instruction_id' => '18'
        ]);

        //question a1 - 15
        Option::create([
            'option_name' => 'Glais 6',
            'instruction_id' => '19'
        ]);
        Option::create([
            'option_name' => 'Glais 10',
            'instruction_id' => '19'
        ]);
        Option::create([
            'option_name' => 'Glais 16',
            'instruction_id' => '19'
        ]);
        
        //question a1 - 16
        Option::create([
            'option_name' => 'dürfen',
            'instruction_id' => '20'
        ]);
        Option::create([
            'option_name' => 'müssen',
            'instruction_id' => '20'
        ]);

        Option::create([
            'option_name' => 'können',
            'instruction_id' => '20'
        ]);
        Option::create([
            'option_name' => 'müssen',
            'instruction_id' => '20'
        ]);

        Option::create([
            'option_name' => 'dürfen',
            'instruction_id' => '20'
        ]);
        Option::create([
            'option_name' => 'müssen',
            'instruction_id' => '20'
        ]);

        //question a1 - 17
        Option::create([
            'option_name' => 'Hoffentlich',
            'instruction_id' => '21'
        ]);
        Option::create([
            'option_name' => 'Ja, garne',
            'instruction_id' => '21'
        ]);
        Option::create([
            'option_name' => 'Schade',
            'instruction_id' => '21'
        ]);

        Option::create([
            'option_name' => 'Hoffentlich',
            'instruction_id' => '22'
        ]);
        Option::create([
            'option_name' => 'Ja, garne',
            'instruction_id' => '22'
        ]);
        Option::create([
            'option_name' => 'Schade',
            'instruction_id' => '22'
        ]);

        Option::create([
            'option_name' => 'Hoffentlich',
            'instruction_id' => '23'
        ]);
        Option::create([
            'option_name' => 'Ja, garne',
            'instruction_id' => '23'
        ]);
        Option::create([
            'option_name' => 'Schade',
            'instruction_id' => '23'
        ]);

        //question a1 - 18
        Option::create([
            'option_name' => 'Geh zum Informationsschalter',
            'instruction_id' => '24'
        ]);
        Option::create([
            'option_name' => 'Geh zum Flugteig',
            'instruction_id' => '24'
        ]);
        Option::create([
            'option_name' => 'Warte auf weitere Informationen',
            'instruction_id' => '24'
        ]);

        
        //question a1 - 19
        Option::create([
            'option_name' => 'mich',
            'instruction_id' => '25'
        ]);
        Option::create([
            'option_name' => 'mir',
            'instruction_id' => '25'
        ]);
        
        Option::create([
            'option_name' => 'mein',
            'instruction_id' => '25'
        ]);
        Option::create([
            'option_name' => 'meine',
            'instruction_id' => '25'
        ]);
        Option::create([
            'option_name' => 'meinen',
            'instruction_id' => '25'
        ]);

        //question a1 - 20
        Option::create([
            'instruction_id' => '26'
        ]);
        Option::create([
            'instruction_id' => '26'
        ]);

        //question a1 - 21
        Option::create([
            'option_name' => 'He wants to invite you',
            'instruction_id' => '27'
        ]);
        Option::create([
            'option_name' => 'He wants to thank you',
            'instruction_id' => '27'
        ]);
        Option::create([
            'option_name' => 'He wants to send you greetings',
            'instruction_id' => '27'
        ]);

        //question a1 - 22
        Option::create([
            'option_name' => 'Hallo, Julia',
            'instruction_id' => '28'
        ]);
        Option::create([
            'option_name' => 'Hallo, ist Julia da?',
            'instruction_id' => '28'
        ]);
        Option::create([
            'option_name' => 'Moment bitte',
            'instruction_id' => '28'
        ]);

        //question a1 - 23
        Option::create([
            'option_name' => 'auf',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'bei',
            'instruction_id' => '29'
        ]);

        Option::create([
            'option_name' => 'dem',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'die',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'der',
            'instruction_id' => '29'
        ]);

        Option::create([
            'option_name' => 'mit',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'in',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'durch',
            'instruction_id' => '29'
        ]);

        Option::create([
            'option_name' => 'der',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'das',
            'instruction_id' => '29'
        ]);
        Option::create([
            'option_name' => 'dem',
            'instruction_id' => '29'
        ]);

        //question a1 - 24
        Option::create([
            'option_name' => 'Bitte buchstabieren Sie das',
            'instruction_id' => '30'
        ]);
        Option::create([
            'option_name' => 'Wie sagt man das auf Deutsch?',
            'instruction_id' => '30'
        ]);
        Option::create([
            'option_name' => 'Stimmt das?',
            'instruction_id' => '30'
        ]);

        Option::create([
            'option_name' => 'Bitte buchstabieren Sie das',
            'instruction_id' => '31'
        ]);
        Option::create([
            'option_name' => 'Wie sagt man das auf Deutsch?',
            'instruction_id' => '31'
        ]);
        Option::create([
            'option_name' => 'Ist das richtig?',
            'instruction_id' => '31'
        ]);

        Option::create([
            'option_name' => 'Bitte buchstabieren Sie das',
            'instruction_id' => '32'
        ]);
        Option::create([
            'option_name' => 'Konnen Sie das wiederholen?',
            'instruction_id' => '32'
        ]);
        Option::create([
            'option_name' => 'Ist das richtig?',
            'instruction_id' => '32'
        ]);

        //question a1 - 25
        Option::create([
            'option_name' => 'Gebäude A',
            'instruction_id' => '33'
        ]);
        Option::create([
            'option_name' => 'Gebäude B',
            'instruction_id' => '33'
        ]);
        Option::create([
            'option_name' => 'Gebäude C?',
            'instruction_id' => '33'
        ]);

        //question a1 - 26
        Option::create([
            'instruction_id' => '34'
        ]);

        //question a1 - 27
        Option::create([
            'option_name' => '1. Etage',
            'instruction_id' => '35'
        ]);
        Option::create([
            'option_name' => '2. Etage',
            'instruction_id' => '35'
        ]);

        Option::create([
            'option_name' => '1. Etage',
            'instruction_id' => '35'
        ]);
        Option::create([
            'option_name' => '2. Etage',
            'instruction_id' => '35'
        ]);

        Option::create([
            'option_name' => 'Erdgeschoss',
            'instruction_id' => '35'
        ]);
        Option::create([
            'option_name' => 'Etage',
            'instruction_id' => '35'
        ]);

        //question a1 - 28
        Option::create([
            'option_name' => 'April',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Juni',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Oktober',
            'instruction_id' => '36'
        ]);

        Option::create([
            'option_name' => '8 Tage',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => '14 Tage',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => '1 Monat',
            'instruction_id' => '36'
        ]);

        Option::create([
            'option_name' => 'Anfangerstufe',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Mittelstufe',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Abschlusstufe',
            'instruction_id' => '36'
        ]);

        Option::create([
            'option_name' => 'Einzelunterricht',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Gruppe mit 4-6 Personen',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Gruppe mit 10-12 Personen',
            'instruction_id' => '36'
        ]);

        Option::create([
            'option_name' => 'Hotel',
            'instruction_id' => '36'
        ]);
        Option::create([
            'option_name' => 'Privat',
            'instruction_id' => '36'
        ]);

        //question a1 - 29
        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '37'
        ]);
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '37'
        ]);

        Option::create([
            'option_name' => 'Ja',
            'instruction_id' => '38'
        ]);
        Option::create([
            'option_name' => 'Nein',
            'instruction_id' => '38'
        ]);

        //question a1 - 30
        Option::create([
            'option_name' => 'Herzlichen Gluckwunsch!',
            'instruction_id' => '39'
        ]);
        Option::create([
            'option_name' => 'Alles Gute!',
            'instruction_id' => '39'
        ]);
        Option::create([
            'option_name' => 'Ja, gern!',
            'instruction_id' => '39'
        ]);
    }
}
