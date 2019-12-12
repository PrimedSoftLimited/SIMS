<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'question_name' => 'You arrive at your hotel in Berlin at 6 pm. The receptionist greets you. You reply. Choose the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276282/simsapi/question_1.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
        ]);
        Question::create([
            'question_name' => 'The hotel receptionist checks your reservation. You tell the receptionist your name. Select the words in correct order.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_2.jpg',
            'exam_id' => '1',
            'type' => 'arrange'
        ]);
        Question::create([
            'question_name' => 'The receptionist gives you your key. The receptionist tells you your room number. Listen to the audio and choose the right answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_3.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You ask at the reception when breakfast is served. Listen to the dialogue and select the right answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_4.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You are in a café and start a conversation with a young student. You want to ask the young student some questions. Which question word goes with each question? Select.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_5.jpg',
            'exam_id' => '1',
            'type' => 'arrange'
            ]);
        Question::create([
            'question_name' => 'You are at the railway station. A stranger speaks to you. Select the fitting answer.',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You want to take a German course and ask a friend for the telephone number of a local language school. Write the correct telephone number in the gap.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_7.jpg',
            'exam_id' => '1',
            'type' => 'input'
            ]);
        Question::create([
            'question_name' => 'You are in a language school and exchange telephone numbers with other students. Select the right word.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_8.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'It is Saturday afternoon. You go to the post office to buy some stamps. Can you get the stamps now? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_9.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You are at Munich Airport and hear an announcement. You want to take the flight LH 872. Is the announcement important for you? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_10.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You are talking to a friend about Maria, who is in your language course. You would like to give your friend some information about Maria. Choose the correct form.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_11.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You are talking to a friend about problems that you sometimes have when people are speaking German. What is the best thing to say in each situation? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576141610/simsapi/a1_12.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You are planning a holiday in Germany and see two advertisements in a magazine. You would like to travel round Germany by train. Which of the two homepages will give you the information you want? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_13.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You are in a restaurant and you would like to order. Select the correct article.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_14.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You are at the railway station in Frankfurt am Main. You want to get the 1:30 pm train to Brussels. Which platform do you have to go? Listen to the announcement and select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_15.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You are explaining important road signs to a friend, who has just come to Germany. Choose the correct modal verb to explain the signs.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_16_b.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You are at your language school and you are talking to your teacher in the school café. Your teacher says three things to you. How do you answer your teacher? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_17.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You are at Munich Airport waiting for your flight to Hamburg. You hear an announcement for your flight LH 782 to Hamburg. What do you have to do? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_18.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You have lost your purse and call the lost-and-found office. Select the correct form.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_19.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You have two messages on your mailbox. Fill in the missing information.',
            'exam_id' => '1',
            'type' => 'multi_input'
            ]);
        Question::create([
            'question_name' => 'You get an e-mail from your friend Detlef. Why has Detlef sent you the e-mail? Read the e-mail and select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_21.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You want to phone your friend Julia. You phone and a man answers the phone. What do you say? Select the best answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_22.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'You and your friend Nico are going to Berlin next weekend. Your German teacher wants to know how you and Nico are travelling to Berlin. Select the correct word.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_23.jpg',
            'exam_id' => '1',
            'type' => 'multi_dropdown'
            ]);
        Question::create([
            'question_name' => 'You are talking to a friend about problems you sometimes have when you want to say something in German. Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_24.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'You are in Düsseldorf and want to go to the police station. You ask a passer-by. Look at the map. Then listen to what the passer-by says. Which of the three buildings A, B or C is the police station?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_25.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
        Question::create([
            'question_name' => 'A friend is coming to visit you in Munich. You want to know when his train arrives in Munich.Select the words in the correct order to make a question.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_26.jpg',
            'exam_id' => '1',
            'type' => 'arrange'
            ]);
        Question::create([
            'question_name' => 'You are in a department store and want to buy the following things. On which floor can you find them?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_27.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'Your friend George Harvey asks you to help him fill in an online registration form for a language course. Read the text and select the correct words. <br/> George does not speak German and would like to do a language course in Germany for two weeks during the summer. During the course, he would like to live with a family. He would like to learn German in a .',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'At the end of your German course your teacher wants to organise a small party. Are the following sentences correct? Choose "Ja" or "Nein".',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_29.jpg',
            'exam_id' => '1',
            'type' => 'multi'
            ]);
        Question::create([
            'question_name' => 'At the end of the course there is a test. All the people in your class pass the test. What do you say to each other, when you hear you have passed the test?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_30.jpg',
            'exam_id' => '1',
            'type' => 'boolean'
            ]);
    }
}
