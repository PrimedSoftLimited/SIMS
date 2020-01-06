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
        /**A1 Exam Starts Here */
        /**Question a1_1 (1) */
        Question::create([
            'question_name' => 'You arrive at your hotel in Berlin at 6 pm. The receptionist greets you. You reply. Choose the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276282/simsapi/question_1.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_2 (2) */
        Question::create([
            'question_name' => 'The hotel receptionist checks your reservation. You tell the receptionist your name. Select the words in correct order.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_2.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'arrange'
        ]);
        /**Question a1_3 (3) */
        Question::create([
            'question_name' => 'The receptionist gives you your key. The receptionist tells you your room number. Listen to the audio and choose the right answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_3.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_4 (4) */
        Question::create([
            'question_name' => 'You ask at the reception when breakfast is served. Listen to the dialogue and select the right answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_4.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_5 (5) */
        Question::create([
            'question_name' => 'You are in a café and start a conversation with a young student. You want to ask the young student some questions. Which question word goes with each question? Select.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_5.jpg',
            'exam_id' => '1',
            'correct_option_count' => '4',
            'type' => 'arrange'
        ]);
        /**Question a1_6 (6) */
        Question::create([
            'question_name' => 'You are at the railway station. A stranger speaks to you. Select the fitting answer.',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_7 (7) */
        Question::create([
            'question_name' => 'You want to take a German course and ask a friend for the telephone number of a local language school. Write the correct telephone number in the gap.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_7.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'input'
        ]);
        /**Question a1_8 (8) */
        Question::create([
            'question_name' => 'You are in a language school and exchange telephone numbers with other students. Select the right word.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_8.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_9 (9) */
        Question::create([
            'question_name' => 'It is Saturday afternoon. You go to the post office to buy some stamps. Can you get the stamps now? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_9.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_10 (10) */
        Question::create([
            'question_name' => 'You are at Munich Airport and hear an announcement. You want to take the flight LH 872. Is the announcement important for you? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_10.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_11 (11) */
        Question::create([
            'question_name' => 'You are talking to a friend about Maria, who is in your language course. You would like to give your friend some information about Maria. Choose the correct form.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_11.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_12 (12) */
        Question::create([
            'question_name' => 'You are talking to a friend about problems that you sometimes have when people are speaking German. What is the best thing to say in each situation? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576141610/simsapi/a1_12.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_13 (13) */
        Question::create([
            'question_name' => 'You are planning a holiday in Germany and see two advertisements in a magazine. You would like to travel round Germany by train. Which of the two homepages will give you the information you want? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_13.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_14 (14) */
        Question::create([
            'question_name' => 'You are in a restaurant and you would like to order. Select the correct article.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_14.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_15 (15) */
        Question::create([
            'question_name' => 'You are at the railway station in Frankfurt am Main. You want to get the 1:30 pm train to Brussels. Which platform do you have to go? Listen to the announcement and select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_15.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_16 (16) */
        Question::create([
            'question_name' => 'You are explaining important road signs to a friend, who has just come to Germany. Choose the correct modal verb to explain the signs.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_16_b.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_17 (17) */
        Question::create([
            'question_name' => 'You are at your language school and you are talking to your teacher in the school café. Your teacher says three things to you. How do you answer your teacher? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_17.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_18 (18) */
        Question::create([
            'question_name' => 'You are at Munich Airport waiting for your flight to Hamburg. You hear an announcement for your flight LH 782 to Hamburg. What do you have to do? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_18.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_19 (19) */
        Question::create([
            'question_name' => 'You have lost your purse and call the lost-and-found office. Select the correct form.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_19.jpg',
            'exam_id' => '1',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question a1_20 (20) */
        Question::create([
            'question_name' => 'You have two messages on your mailbox. Fill in the missing information.',
            'exam_id' => '1',
            'correct_option_count' => '2',
            'type' => 'multi_input'
        ]);
        /**Question a1_21 (21) */
        Question::create([
            'question_name' => 'You get an e-mail from your friend Detlef. Why has Detlef sent you the e-mail? Read the e-mail and select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_21.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_22 (22) */
        Question::create([
            'question_name' => 'You want to phone your friend Julia. You phone and a man answers the phone. What do you say? Select the best answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_22.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_23 (23) */
        Question::create([
            'question_name' => 'You and your friend Nico are going to Berlin next weekend. Your German teacher wants to know how you and Nico are travelling to Berlin. Select the correct word.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_23.jpg',
            'exam_id' => '1',
            'correct_option_count' => '4',
            'type' => 'multi_dropdown'
        ]);
        /**Question a1_24 (24) */
        Question::create([
            'question_name' => 'You are talking to a friend about problems you sometimes have when you want to say something in German. Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_24.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_25 (25) */
        Question::create([
            'question_name' => 'You are in Düsseldorf and want to go to the police station. You ask a passer-by. Look at the map. Then listen to what the passer-by says. Which of the three buildings A, B or C is the police station?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_25.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a1_26 (26) */
        Question::create([
            'question_name' => 'A friend is coming to visit you in Munich. You want to know when his train arrives in Munich.Select the words in the correct order to make a question.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_26.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'arrange'
        ]);
        /**Question a1_27 (27) */
        Question::create([
            'question_name' => 'You are in a department store and want to buy the following things. On which floor can you find them?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_27.jpg',
            'exam_id' => '1',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a1_28 (28) */
        Question::create([
            'question_name' => 'Your friend George Harvey asks you to help him fill in an online registration form for a language course. Read the text and select the correct words. <br/> George does not speak German and would like to do a language course in Germany for two weeks during the summer. During the course, he would like to live with a family. He would like to learn German in a .',
            'exam_id' => '1',
            'correct_option_count' => '5',
            'type' => 'multi'
        ]);
        /**Question a1_29 (29) */
        Question::create([
            'question_name' => 'At the end of your German course your teacher wants to organise a small party. Are the following sentences correct? Choose "Ja" or "Nein".',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_29.jpg',
            'exam_id' => '1',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question a1_30 (30) */
        Question::create([
            'question_name' => 'At the end of the course there is a test. All the people in your class pass the test. What do you say to each other, when you hear you have passed the test?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1575276302/simsapi/question_30.jpg',
            'exam_id' => '1',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**A1 Exam Ends Here */

        /**A2 Exam Starts Here */
        /**Question a2_1 (31) */
        Question::create([
            'question_name' => 'You are talking to a friend about what you do in your free time. You ask your friend what her favourite hobby is. Select the correct word to complete the question.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072799/simsapi/A2/a1_1.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a2_2 (32) */
        Question::create([
            'question_name' => 'You have two messages on your mailbox. Listen to the messages. Then choose the correct answer. Are the following sentences correct or not?',
            'exam_id' => '2',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question a2_3 (33) */
        Question::create([
            'question_name' => 'After your German lesson you are talking to some of the other students in your class. Read what the other students say to you. Choose the best answer. ',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072817/simsapi/A2/a1_2.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a2_4 (34) */
        Question::create([
            'question_name' => 'You are discussing with some students from your class what you would like to do after the lesson. You make some suggestions. Select the correct article.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072829/simsapi/A2/a1_4.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a2_5 (35) */
        Question::create([
            'question_name' => 'You meet a friend in a café. She introduces you to a colleague. What do you say? Select the correct answer.',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a2_6 (36) */
        Question::create([
            'question_name' => 'You are talking to a friend about her family. Write the correct forms of the words in the blanks.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072800/simsapi/A2/a1_6.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi_input'
        ]);
        /**Question a2_7 (37) */
        Question::create([
            'question_name' => 'You are travelling by train from Hanover to Berlin. You hear an announcement. Is the following sentence correct? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072806/simsapi/A2/a1_7.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a2_8 (38) */
        Question::create([
            'question_name' => 'You are having a conversation about problems speaking German. What do you say if you have the following problems? Choose the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072815/simsapi/A2/a1_8.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a2_9 (39) */
        Question::create([
            'question_name' => 'You are writing an e-mail to a friend in Berlin. There are three words missing in the mail. Select the correct words.',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi_dropdown'
        ]);
        /**Question a2_10 (40) */
        Question::create([
            'question_name' => 'A friend is visiting you in your flat. She asks if she is allowed to smoke. You don\'t want her to smoke in your flat. What do you answer your friend?',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a2_11 (41) */
        Question::create([
            'question_name' => 'You want to go to the cinema to see the latest James Bond film this evening and phone the cinema to find out when the film starts. You hear a recorded text. Listen to the text and read the text in the blue speech bubble. Is the statement right or wrong?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072818/simsapi/A2/a1_11.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a2_12 (42) */
        Question::create([
            'question_name' => 'In your German class you are talking about your home country and you need one German word that you have not learned yet. How can you ask for the word you need? Select the correct question word.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072831/simsapi/A2/a1_12.jpg',
            'exam_id' => '2',
            'correct_option_count' => '2',
            'type' => 'multi_boolean'
        ]);
        /**Question a2_13 (43) */
        Question::create([
            'question_name' => 'You meet a friend of yours in a café. She does not look very well and you want to ask her what is wrong. Select the three questions that you can ask.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072830/simsapi/A2/a1_13.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a2_14 (44) */
        Question::create([
            'question_name' => 'You are in Petra and Wolfgang Müller\'s flat. They are not there at the moment. The telephone rings three times. Each time you answer the phone. How do you reply to the callers? Select the correct answer.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072829/simsapi/A2/a1_4.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a2_15 (45) */
        Question::create([
            'question_name' => 'You are in your home country and you are interested in what is happening in Germany. You look at this TV programme. Select which of the four programmes is best for you.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072823/simsapi/A2/a1_15.jpg',
            'exam_id' => '2',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question a2_16 (46) */
        Question::create([
            'question_name' => 'You want to meet up with friends this evening and suggest to meet at 6:00 pm. Select the three sentences that are suitable.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072839/simsapi/A2/a1_16.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question a2_17 (47) */
        Question::create([
            'question_name' => 'You want to reserve a room for a visitor from your home country and phone a well-known hotel chain. You hear a recorded message. Which number should you press to book a room?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072791/simsapi/A2/a1_17.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);                
        /**Question a2_18 (48) */
        Question::create([
            'question_name' => 'Your friend Kerstin wants to meet you next Saturday. She suggests two times. You say why you cannot meet her at these times. The diary will help you. Write the missing words in the correct order to complete the sentences.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072781/simsapi/A2/a1_18.jpg',
            'exam_id' => '2',
            'correct_option_count' => '7',
            'type' => 'multi_input'
        ]);
        /**Question a2_19 (49) */
        Question::create([
            'question_name' => 'A friend of yours was on holiday and you ask what it was like. Write the correct forms in the gaps.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072780/simsapi/A2/a1_19.jpg',
            'exam_id' => '2',
            'correct_option_count' => '6',
            'type' => 'multi_input'
        ]);
        /**Question a2_20 (50) */
        Question::create([
            'question_name' => 'You meet a friend of yours in a café. She does not look very well and you want to ask her what is wrong. Select the three questions that you can ask.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072786/simsapi/A2/a1_20.jpg',
            'exam_id' => '2',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question a2_21 (51) */
        Question::create([
            'question_name' => 'You have a headache and ask a friend for help. Select the correct word to complete the sentence.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072790/simsapi/A2/a1_21.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question a2_22 (52) */
        Question::create([
            'question_name' => 'You are telling a friend about the first week of your language course. Write the correct forms in the gaps.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072791/simsapi/A2/a1_22.jpg',
            'exam_id' => '2',
            'correct_option_count' => '8',
            'type' => 'multi_input'
        ]);   
        /**Question a2_23 (53) */
        Question::create([
            'question_name' => 'You are visiting a friend in Munich for a few days and would like to go walking in the mountains at the weekend. You listen to the weather forecast for the weekend. Listen to the weather report. Is the following sentence correct?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072783/simsapi/A2/a1_23.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);  
        /**Question a2_24 (54) */
        Question::create([
            'question_name' => 'You are talking to a friend about things that you find interesting. Which is the correct form to finish the question?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072795/simsapi/A2/a1_24.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);  
        /**Question a2_25 (55) */
        Question::create([
            'question_name' => 'You are visiting your married friends Sibylle und Peter. You would like to know more about them. Complete the questions.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072785/simsapi/A2/a1_25.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi_dropdown'
        ]);  
        /**Question a2_26 (56) */
        Question::create([
            'question_name' => 'Your German course has finished, but you would like to continue with another intensive course. You find the following advertisements in the newspaper. You would like to have a recognized qualification at the end of the course. Which of the four schools offers the best course for you?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072789/simsapi/A2/a1_26.jpg',
            'exam_id' => '2',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);  
        /**Question a2_27 (57) */
        Question::create([
            'question_name' => 'Friends are interested in the same language school advertisements. Look at the advertisements, read the texts and answer the questions.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072794/simsapi/A2/a1_27.jpg',
            'exam_id' => '2',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);  
        /**Question a2_28 (58) */
        Question::create([
            'question_name' => 'You have invited some students from your course to your flat. You want to explain to them how they can get to your flat. Fill in the gaps with words.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072833/simsapi/A2/a1_28.jpg',
            'exam_id' => '2',
            'correct_option_count' => '6',
            'type' => 'multi_dropdown'
        ]); 
        /**Question a2_29 (59) */
        Question::create([
            'question_name' => 'You hear two fellow students discussing how to travel to Hamburg. Are the following sentences correct or not correct?',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072794/simsapi/A2/a1_29.jpg',
            'exam_id' => '2',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);  
        /**Question a2_30 (60) */
        Question::create([
            'question_name' => 'You are having a conversation with some of your German friends. Look at the following short dialogues. What words are missing? Choose.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072818/simsapi/A2/a1_30.jpg',
            'exam_id' => '2',
            'correct_option_count' => '2',
            'type' => 'multi_dropdown'
        ]);  
        
        /**B1 Exam Starts Here */
        /**Question b1_1 (61) */
        Question::create([
            'question_name' => 'Eine neue Studentin kommt in deinen Sprachkurs. Du möchtest die neue Studentin kennenlernen und stellst ihr ein paar Fragen. Du möchtest ihr Heimatland, die Entfernung nach Deutschland, die Flugdauer und die Einwohnerzahl des Landes in Erfahrung bringen.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072966/simsapi/B1/b1_1.jpg',
            'exam_id' => '3',
            'correct_option_count' => '4',
            'type' => 'multi_input'
        ]);
        /**Question b1_2 (62) */
        Question::create([
            'question_name' => 'Ein Bekannter hatte Probleme mit seinem Computer. Du hast ihm dabei geholfen. Er bedankt sich bei dir für deine Hilfe. Wie reagierst du? Nur zwei Antworten sind richtig.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072971/simsapi/B1/b1_2.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'boolean'
        ]);    
        /**Question b1_3 (63) */
        Question::create([
            'question_name' => 'Du liest einen Kurzartikel über die Stadt Weimar. Entscheide beim Lesen, ob die folgenden Aussagen richtig oder falsch sind. Wenn sie richtig sind, wähl die Antwort Ja, wenn nicht, wähl die Antwort Nein.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072963/simsapi/B1/b1_3.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question b1_4 (64) */
        Question::create([
            'question_name' => 'Im Restaurant bringt dir der Kellner das Essen und die Getränke. Die Bedienung hat nicht das gebracht, was du bestellt hast. Du beschwerst dich.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072964/simsapi/B1/b1_4.jpg',
            'exam_id' => '3',
            'correct_option_count' => '6',
            'type' => 'multi_dropdown'
        ]);
        /**Question b1_5 (65) */
        Question::create([
            'question_name' => 'Du hörst DW-Radio. Es läuft eine Sendung über die Probleme, die manche haben, wenn sie Deutsch lernen möchten. Hör dir an, was der junge Mann sagt, und entscheide, ob die folgende Aussage richtig oder falsch ist. Wenn sie richtig ist, wähl die Antwort Ja, wenn nicht, wähl die Antwort Nein.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072968/simsapi/B1/b1_5.jpg',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);    
        /**Question b1_6 (66) */
        Question::create([
            'question_name' => 'Du sprichst mit Bekannten über einige deiner Mitschüler, die auf einem Klassenfoto zu sehen sind. Du stellst zwei Mitschüler vor und sagst, was sie von Beruf sind.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072987/simsapi/B1/b1_6.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi_dropdown'
        ]);
        /**Question b1_7 (67) */
        Question::create([
            'question_name' => 'Du siehst auf der Homepage der DW einen Artikel über neue Wörter in der deutschen Sprache. Du kennst den Begriff "Brötchentaste" nicht.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072968/simsapi/B1/b1_7.jpg',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question b1_8 (68) */
        Question::create([
            'question_name' => 'Du sprichst mit einer deutschen Bekannten über deine Pläne für das kommende Jahr.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072980/simsapi/B1/b1_8.jpg',
            'exam_id' => '3',
            'correct_option_count' => '4',
            'type' => 'multi_input'
        ]);
        /**Question b1_9 (69) */
        Question::create([
            'question_name' => 'Du fährst mit der Bahn von München nach Köln. Du musst in Mannheim umsteigen. Kurz vor Mannheim hörst du eine Durchsage.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072971/simsapi/B1/b1_9.jpg',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'input'
        ]);
        /**Question b1_10 (70) */
        Question::create([
            'question_name' => 'Du bekommst einen Brief von einem Freund, der dich besuchen will.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072983/simsapi/B1/b1_10.jpg',
            'exam_id' => '3',
            'correct_option_count' => '5',
            'type' => 'multi_input'
        ]);
        /**Question b1_11 (71) */
        Question::create([
            'question_name' => 'Du stehst eines Tages vor deinem Klassenzimmer. Die Tür ist abgeschlossen, deine Lehrerin ist krank. Du bist sehr überrascht und auch verärgert, weil du einen langen Weg zur Schule hast, und heute findet der Unterricht doch nicht statt.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072971/simsapi/B1/b1_11.jpg',
            'exam_id' => '3',
            'correct_option_count' => '8',
            'type' => 'multi_input'
        ]);
        /**Question b1_12 (72) */
        Question::create([
            'question_name' => 'Du zeigst Bekannten ein Gruppenfoto von deinem Kurs. Du erklärst, wer auf dem Foto zu sehen ist. Deine Bekannten fragen nach einigen Personen.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072992/simsapi/B1/b1_12.jpg',
            'exam_id' => '3',
            'correct_option_count' => '3',
            'type' => 'multi_dropdown'
        ]);
        /**Question b1_13 (73) */
        Question::create([
            'question_name' => 'Du bist bei einem Bekannten in Berlin eingeladen. Du kommst am Hauptbahnhof an. Du weißt nicht genau, wie du zu der Wohnung deines Bekannten kommst. Du rufst bei deinem Bekannten an. Er sagt dir, wie man am besten zu seiner Wohnung kommt. Hör dir die Wegbeschreibung an und entscheide beim Zuhören, ob die folgende Aussage richtig oder falsch ist. Wenn sie richtig ist, wähl die Antwort Ja, wenn nicht, wähl die Antwort Nein.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072973/simsapi/B1/b1_13.jpg',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question b1_14 (74) */
        Question::create([
            'question_name' => 'Du sprichst mit anderen Schülern darüber, was sie früh morgens nach dem Aufstehen machen. Ein Schüler erzählt, was er nach dem Aufstehen macht. Du stellst Fragen.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072990/simsapi/B1/b1_14.jpg',
            'exam_id' => '3',
            'correct_option_count' => '3',
            'type' => 'multi_input'
        ]);
        /**Question b1_15 (75) */
        Question::create([
            'question_audio' => 'https://res.cloudinary.com/iro/video/upload/v1576252636/simsapi/B1/Einstufungstest_B1_15.mp3',
            'question_name' => 'Du hörst im Radio folgenden Beitrag über Ortsnamen in Deutschland. Hör den Text. Entscheide beim Zuhören, ob die folgenden Aussagen richtig oder falsch sind. Wenn sie richtig sind, wähl die Antwort Ja, wenn nicht, wähl die Antwort Nein.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072976/simsapi/B1/b1_15.jpg',
            'exam_id' => '3',
            'correct_option_count' => '3',
            'type' => ''
        ]);
        /**Question b1_16 (76) */
        Question::create([
            'question_name' => 'Du willst dich für heute Abend mit einer Freundin verabreden.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072980/simsapi/B1/b1_16.jpg',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'input'
        ]);
        /**Question b1_17 (77) */
        Question::create([
            'question_name' => 'Dein Kurs ist heute im Computerraum. Hier gibt es bestimmte Regeln. Der neue Schüler fragt dich, was im Computerraum erlaubt ist. Du erklärst ihm alles.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072982/simsapi/B1/b1_17.jpg',
            'exam_id' => '3',
            'correct_option_count' => '4',
            'type' => 'multi_input'
        ]);
        /**Question b1_18 (78) */
        Question::create([
            'question_audio' => 'https://res.cloudinary.com/iro/video/upload/v1576072959/simsapi/B1/b1_18_1.mp3',
            'question_name' => 'Du hörst Radio. Eine junge Chinesin erzählt von ihren Erfahrungen beim Deutschlernen. Hör dir an, was die junge Frau sagt, und entscheide beim Zuhören, ob die folgenden Aussagen richtig oder falsch sind. Wenn sie richtig sind, wähl die Antwort Ja, wenn nicht, wähl die Antwort Nein.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072983/simsapi/B1/b1_18.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question b1_19 (79) */
        Question::create([
            'question_name' => 'Ein deutscher Bekannter fragt dich nach deinen Deutschkenntnissen. Du weißt, dass deine Deutschkenntnisse nicht perfekt sind.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072958/simsapi/B1/b1_19.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi_dropdown'
        ]);
        /**Question b1_20 (80) */
        Question::create([
            'question_name' => 'Du liest einen Artikel über Sekt-Konsum in Deutschland. Entscheide beim Lesen, ob die folgenden Aussagen richtig oder falsch sind. Es gehört zu einer Silvesterfeier wie das Feuerwerk und die guten Vorsätze fürs neue Jahr: das Glas Sekt oder Champagner zum Anstoßen. Dabei trinken die Deutschen zu anderen Zeiten im Jahr deutlich weniger Schaumwein als am Jahresende. Allein im Dezember wird etwa ein Fünftel der jährlichen Gesamtmenge an Sekt und Champagner verkauft. Sekt ist vor allem ein Getränk für besondere Feiertage. Allerdings bedeutet das nicht, dass die Deutschen besonders viel dafür bezahlen würden. Über 40 Prozent des Schaumweins werden bei den großen Discountern wie Aldi oder Lidl gekauft. Eine Flasche Sekt kostet dort meist weniger als fünf Euro. Zum Vergleich: Für eine gute Flasche Champagner, also einem Schaumwein aus der französischen Region Champagne, kann man schon mal mehr als 50 oder sogar 100 Euro bezahlen.',
            'exam_id' => '3',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question b1_21 (81) */
        Question::create([
            'question_name' => 'Du willst einen Brief an deinen guten Bekannten Rainer Grüner schicken.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072944/simsapi/B1/b1_21.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi_dropdown'
        ]);
        /**Question b1_22 (82) */
        Question::create([
            'question_name' => 'In einer Radiosendung werden Schüler an deutschen Schulen im Ausland gefragt, was ihnen in ihrer Zeit in Deutschland am besten gefallen hat. Entscheide, ob die Aussagen richtig oder falsch sind.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072945/simsapi/B1/b1_22.jpg',
            'exam_id' => '3',
            'correct_option_count' => '3',
            'type' => 'multi'
        ]);
        /**Question b1_23 (83) */
        Question::create([
            'question_name' => 'Für den Deutschkurs müssen alle Schüler einen kleinen Bericht schreiben und erzählen, was sie am Samstag gemacht haben.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072943/simsapi/B1/b1_23.jpg',
            'exam_id' => '3',
            'correct_option_count' => '8',
            'type' => 'multi_input'
        ]);
        /**Question b1_24 (84) */
        Question::create([
            'question_name' => 'Du liest die Programmtipps der Deutschen Welle. Entscheide beim Lesen, für wen die Sendung gedacht ist. Wähl die richtige Antwort.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072947/simsapi/B1/b1_24.jpg',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question b1_25 (85) */
        Question::create([
            'question_name' => 'Dein Kurs will einen Ausflug machen. Du hast die Aufgabe, den Ausflug zu organisieren. Du schlägst vor, einen Tag an der Ostseeküste zu verbringen, und fragst deine Mitschüler, ob sie einverstanden sind.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072965/simsapi/B1/b1_25.jpg',
            'exam_id' => '3',
            'correct_option_count' => '6',
            'type' => 'multi_input'
        ]);
        /**Question b1_26 (86) */
        Question::create([
            'question_name' => 'Du möchtest alles, was du sagst, etwas stärker und intensiver ausdrücken.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072959/simsapi/B1/b1_26.jpg',
            'exam_id' => '3',
            'correct_option_count' => '3',
            'type' => 'multi_input'
        ]);
        /**Question b1_27 (87) */
        Question::create([
            'question_name' => 'Du liest im Internet einen Artikel über das menschliche Gedächtnis. Entscheide beim Lesen, ob die folgenden Aussagen richtig oder falsch sind.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072952/simsapi/B1/b1_27.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question b1_28 (88) */
        Question::create([
            'question_name' => 'Du hörst in einer Radiosendung einen Beitrag über E-Books.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072951/simsapi/B1/b1_28.jpg',
            'exam_id' => '3',
            'correct_option_count' => '2',
            'type' => 'multi'
        ]);
        /**Question b1_29 (89) */
        Question::create([
            'question_name' => 'Du findest in einer Zeitschrift einen Artikel über alte Filme. Es gab eine Zeit, da war Kino aus Deutschland international ganz vorne. Bevor der Tonfilm und Hollywood die Welt eroberten, waren deutsche Stummfilme sowohl künstlerisch als auch kommerziell erfolgreich. Regisseure wie Fritz Lang oder Friedrich Wilhelm Murnau haben mit ihren Werken in den 1920er Jahren neue Standards gesetzt. Aber nicht nur Männer feierten in dieser Zeit Erfolge. Der erste lange Trickfilm der Welt etwa stammt von einer Frau: Lotte Reiniger. Für „Die Abenteuer des Prinzen Achmed“ von 1926 schnitt sie unzählige Umrisse von Menschen, Tieren und Pflanzen aus Papier aus, filmte ihre Bewegungen und erweckte sie so zum Leben. Drei Jahre hat sie so für den 66 Minuten langen Scherenschnitt-Film gebraucht. Insgesamt wurden für ihn etwa 100.000 Einzelbilder aufgenommen. Am 23.6. zeigen wir im Residenz-Theater „Die Abenteuer des Prinzen Achmed“  mit Live-Musik-Begleitung.',
            'exam_id' => '3',
            'correct_option_count' => '1',
            'type' => 'boolean'
        ]);
        /**Question b1_30 (90) */
        Question::create([
            'question_name' => 'Ein Bekannter von dir muss bald einen wichtigen Sprachtest ablegen und bittet dich um Hilfe. Du gibst ihm Ratschläge, wie er sich auf den Test vorbereiten kann. Ergänze die richtigen Formen.',
            'question_image' => 'https://res.cloudinary.com/iro/image/upload/v1576072964/simsapi/B1/b1_30.jpg',
            'exam_id' => '3',
            'correct_option_count' => '4',
            'type' => 'multi'
        ]);
        /**B1 Exam Ends Here */
    }
}
