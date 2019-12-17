# SIMS
German Learning Site

[Documentation](https://documenter.getpostman.com/view/6901755/SVtTyUS1)

API Hosting - (https://simsapi.herokuapp.com/)

### PUBLIC ROUTES
- [x] Enroll
- [x] Login
- [x] Instantiate forgotten password link
- [x] set up new password

### PRIVATE ROUTES
- [x] view users profile
- [x] update users profile
- [x] upload profile picture
- [x] update default password
- [x] logout

### EXAM ROUTES
- [x] view all exams
- [x] view one exam and its questions
- [x] attempt quizz


#### The questions have to follwing types:
* Boolean- Where one of the options is the correct one
* Arrange - where a set of text are to be arranged to make a sentence
* Multi - were a question has more than one correct answer
* Input - a question has one input field in place of options
* multi_input - a question has more than one input field
* multi_dropdown - a questions options are to be in dropdown

For the options, where option text is null, is meant to be an input field


Defualt Users Account
* Admin (There are no special routes for admin yet as I'm yet to work on it)
    - userId - Admin001
    - password - secret
    - email - admin@sims.com

* Normal User
    - userId - user001
    - password - password
    - email - john@doe.com