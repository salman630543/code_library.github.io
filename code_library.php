<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="code_library.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/6d36d3cb6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <!--HOME SECTION-->
    <div id="sectionhome">
        <div class="trending_blogs_1 pb-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand" href="#">
                    <img src="https://i.imgur.com/v3MyNpX.png" class="logo_settings" /></a>
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <button class="active nav_text p-2 nav_button" onclick="display('sectionhome')">Home</button>
                        <button class="active nav_text p-2 nav_button" onclick="display('section_python')">Python</button>
                        <button class="active nav_text p-2 nav_button" onclick="display('section_follow_us')">Follow</button>
                        <button class="active nav_text p-2 nav_button" onclick="display('section_about_us')">About Us</button>
                    </div>
                </div>
            </nav>
            <div class="d-flex flex-column justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pt-5 pb-4">
                            <div class="text-center home_adjust">
                                <h1 class="home_head">Code Library</h1>
                                <p class="home_para">Code Library is an application which is designed to perform specific tasks or provide specific functions for users. This applications is developed for various platforms, such as desktop computers, mobile devices, web browsers. And this application provides all kinds of basic codes based on the programming language(Python , C , C++ , Java) user choose.</p>
                                <button class="section-button bg-transparent" onclick="display('section_selection')">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--SELECTION SECTION-->
    <div id="section_selection">
        <div class="trending_blogs shadow">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h1 class="section-heading">Languages:</h1>
                    </div>
                    <div class="col-12 col-md-6 pb-3" onclick="display('section_python')">
                        <div class="trending-con shadow">
                            <div>
                                <img src="https://c4.wallpaperflare.com/wallpaper/873/975/781/python-programming-minimalism-grey-technology-hd-wallpaper-preview.jpg" class="image-set" />
                            </div>
                            <div class="p-3">
                                <h1 class="con-head">Pyhton</h1>
                                <p class="con-para">Python has a simple syntax similar to the English language.
                                    Python has syntax that allows developers to write
                                    programs with fewer lines than some other programming languages.</p>
                                <a class="link-set">PRACTICE NOW
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pb-3">
                        <div class="trending-con shadow">
                            <div>
                                <img src="https://c4.wallpaperflare.com/wallpaper/181/925/254/java-wallpaper-preview.jpg" class="image-set" />
                            </div>
                            <div class="p-3">
                                <h1 class="con-head">Java</h1>
                                <p class="con-para">Java is a widely-used programming language for coding web applications.
                                    It has been a popular choice among developers for over two decades,
                                    with millions of Java applications in use today.</p>
                                <a class="link-set">PRACTICE NOW
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-6">
                        <button class="section-button" onclick="display('sectionhome')">Back</button>
                    </div>
                    <div class="d-flex flex-row justify-content-end col-6">
                        <button class="section-button" onclick="display('section_all_go_through')">View All</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--GO THROUGH SECTION-->
    <div id="section_all_go_through">
        <div class="trending_blogs shadow">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h1 class="section-heading mt-5">Languages:</h1>
                    </div>
                    <div class="col-12 col-md-6 pb-3" onclick="display('section_python')">
                        <div class="trending-con shadow">
                            <div>
                                <img src="https://c4.wallpaperflare.com/wallpaper/873/975/781/python-programming-minimalism-grey-technology-hd-wallpaper-preview.jpg" class="image-set" />
                            </div>
                            <div class="p-3">
                                <h1 class="con-head">Pyhton</h1>
                                <p class="con-para">Python has a simple syntax similar to the English language.
                                    Python has syntax that allows developers to write
                                    programs with fewer lines than some other programming languages.</p>
                                <a class="link-set">PRACTICE NOW
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pb-3">
                        <div class="trending-con shadow">
                            <div>
                                <img src="https://c4.wallpaperflare.com/wallpaper/181/925/254/java-wallpaper-preview.jpg" class="image-set" />
                            </div>
                            <div class="p-3">
                                <h1 class="con-head">Java</h1>
                                <p class="con-para">Java is a widely-used programming language for coding web applications.
                                    It has been a popular choice among developers for over two decades,
                                    with millions of Java applications in use today.</p>
                                <a class="link-set">PRACTICE NOW
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pb-3">
                        <div class="trending-con shadow">
                            <div>
                                <img src="https://t3.ftcdn.net/jpg/03/33/09/88/240_F_333098851_oaiN8o7glILcg7nsT1vhSPewI1wSjzyN.jpg" class="image-set" />
                            </div>
                            <div class="p-3">
                                <h1 class="con-head">C</h1>
                                <p class="con-para">C is a general-purpose programming language created by Dennis Ritchie at the Bell Laboratories in 1972.
                                    It is a very popular language, despite being old. C is strongly associated with UNIX,
                                    as it was developed to write the UNIX operating system.</p>
                                <a class="link-set">PRACTICE NOW
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pb-3">
                        <div class="trending-con shadow">
                            <div>
                                <img src="https://c4.wallpaperflare.com/wallpaper/686/930/369/technology-programming-c-coding-wallpaper-preview.jpg" class="image-set" />
                            </div>
                            <div class="p-3">
                                <h1 class="con-head">C++</h1>
                                <p class="con-para">C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused,
                                    lowering development costs. C++ is portable and can be used to develop applications that can
                                    be adapted to multiple platforms. C++ is fun and easy to learn!</p>
                                <a class="link-set">PRACTICE NOW
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-12">
                            <div class="d-flex flex-row justify-content-start fixed-top m-3">
                                <button class="section-button" onclick="display('sectionhome')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <button class="section-button" onclick="display('section_selection')">Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--PYTHON SECTION-->
    <div id="section_python">
        <div class="trending_blogs">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand" href="#">
                    <img src="https://i.imgur.com/v3MyNpX.png" class="logo_settings" />
                </a>
                <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse bg-transparent" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto">
                        <button class="active nav_text p-2 nav_button" onclick="display('section_Level_1')">LEVEL-1</button>
                        <button class="active nav_text p-2 nav_button" onclick="display('section_Level_2')">LEVEL-2</button>
                        <button class="active nav_text p-2 nav_button" onclick="display('section_Under_Maintain')">LEVEL-3</button>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h1 class="section-heading">LEVELS:</h1>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="Python_level_1_con p-3 d-flex flex-column justify-content-end mb-3">
                            <h1 class="Python_head">LEVEL-1</h1>
                            <p class="Python_para">Calculations with python,Variables and Data Types..</p>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="section-button" data-toggle="modal" data-target="#Level_1_modal">
                                    Concepts
                                </button>
                                <div class="d-flex flex-row justify-content-end">
                                    <button class="section-button" onclick="display('section_Level_1')">
                                        Continue
                                    </button>
                                </div>
                                <div class="modal fade" id="Level_1_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-head" id="Pre_Level_1">Prerequest Concepts</h5>
                                                <button type="button" class="close modal-button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="modal-para">Go through and understand the Prerequest concepts which help you to understand the flow of the code and basics of it.
                                                    Happing Learning...!</p>
                                                <p class="modal-para">
                                                    <span class="span-set">Calculations with python:</span>
                                                    <br />Addition
                                                    Ex:-print(2 + 5),
                                                    print(1 + 1.5)<br />
                                                    Subtraction
                                                    Ex:-print(5 - 2)<br />
                                                    Multiplication
                                                    Ex:-print(2 * 5),
                                                    print(5 * 0.5)<br />
                                                    Division
                                                    Ex:-print(5 / 2),
                                                    print(4/2)
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Variables and Data Types:</span>
                                                    Variables are like containers for storing values.
                                                    Values in the variables can be changed.
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Data Type:</span><br />
                                                    String<br />
                                                    Integer<br />
                                                    Float<br />
                                                    Boolean
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Defining a Variable:</span>
                                                    age = 10,Here the equals to = sign is called as Assignment Operator as it is used to assign values to variables.
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">BODMAS:</span>
                                                    (B) Brackets
                                                    (O) Orders
                                                    (D) Division
                                                    (M) Multiplication
                                                    (A) Addition
                                                    (S) Subtraction
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="Python_level_2_con p-3 d-flex flex-column justify-content-end">
                            <h1 class="Python_head">LEVEL-2</h1>
                            <p class="Python_para">Inputs and Outputs Basics,Working with Strings....</p>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="section-button" data-toggle="modal" data-target="#Level_2_modal">
                                    Concepts
                                </button>
                                <div class="d-flex flex-row justify-content-end">
                                    <button class="section-button" onclick="display('section_Level_2')">
                                        Continue
                                    </button>
                                </div>
                                <div class="modal fade" id="Level_2_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-head" id="Pre_Level_2">Prerequest Concepts</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="modal-para">Go through and understand the Prerequest concepts which help you to understand the flow of the code and basics of it.
                                                    Happing Learning...!</p>
                                                <p class="modal-para">
                                                    <span class="span-set">Inputs and Outputs Basics:</span>
                                                    Take Input From User <br /> Ex:- x = input()
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Working with Strings:</span>
                                                    String Concatenation <br />
                                                    String Repetition <br />
                                                    Length of String <br />
                                                    String Indexing <br />
                                                    String Slicing:-Slicing to End,Slicing from Start <br />
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Type Conversion:</span>
                                                    String to Integer <br />
                                                    Integer to Float <br />
                                                    Float to String...... <br />
                                                    int() -> Converts to integer data type <br />
                                                    float() -> Converts to float data type <br />
                                                    str() -> Converts to string data type <br />
                                                    bool() -> Converts to boolean data type <br />
                                                    Relational operators <br />
                                                    Logical operators <br />
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Conditional Statements:</span>
                                                    if condition <br />
                                                    if else <br />
                                                    Nested if <br />
                                                    Ladder if <br />
                                                    <span class="span-set">Loops:</span>
                                                    for <br />
                                                    while <br />
                                                    Approaches for hollow pattern <br />
                                                    <span class="span-set">String Methods:</span>
                                                    Extended Slicing <br />
                                                    String Methods:- <br />
                                                    isdigit(),
                                                    strip(),
                                                    lower(),
                                                    upper(),
                                                    startswith(),
                                                    endswith(),
                                                    replace()..... <br />

                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Comparing Strings:</span>
                                                    Unicode Ranges:-<br />
                                                    48 - 57 -> Number Digits (0 - 9)<br />
                                                    65 - 90 -> Capital Letters (A - Z)<br />
                                                    97 - 122 -> Small Letters (a - z)<br />
                                                    Rest -> Special Characters, Other Languages
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="Python_level_3_con p-3 mt-3 mb-3 d-flex flex-column justify-content-end">
                            <h1 class="Python_head">LEVEL-3</h1>
                            <p class="Python_para">Lists,Functions,Recursion.....</p>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="section-button" data-toggle="modal" data-target="#Level_3_modal">
                                    Concepts
                                </button>
                                <div class="d-flex flex-row justify-content-end">
                                    <button class="section-button" onclick="display('section_Under_Maintain')">
                                        Continue
                                    </button>
                                </div>
                                <div class="modal fade" id="Level_3_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-head" id="Pre_Level_3">Prerequest Concepts</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="modal-para">Go through and understand the Prerequest concepts which help you to understand the flow of the code and basics of it.
                                                    Happing Learning...!</p>
                                                <p class="modal-para">
                                                    <span class="span-set">Data Structures:</span>
                                                    Lists<br />
                                                    Tuple<br />
                                                    Set<br />
                                                    Dictionary<br />
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Functions:</span>
                                                    Defining a Function<br />
                                                    Calling a Function<br />
                                                    Returning a Value<br />
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Function Call Stack & Recursion:</span>
                                                    Calling a Funtions<br />
                                                    Lists Methods
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Tuple:</span>
                                                    Creating a Tuple<br />
                                                    Accessing Tuple Elements<br />
                                                    Converting to Tuple<br />
                                                    Membership Check<br />
                                                    Packing & Unpacking<br />
                                                </p>
                                                <p class="modal-para">
                                                    <span class="span-set">Dictionaries:</span>
                                                    TOPICS WILL BE UPDATED SOON
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="section-button mb-3" onclick="display('section_all_go_through')">Back
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--LEVEL_1 PYTHON SECTION-->
    <div id="section_Level_1">
        <div class="question_blogs p-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="follow_head_set">Questions:-</h1>
                        <ol class="question_head">
                            <li class="p-3">How to Print Hello World using Python.?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print("Hello World")</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Hello World
                                </p>
                            </div>
                            <li class="p-3">Write a Program that print three hashes(###) as output.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print("###")</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    ###<br />
                                </p>
                            </div>
                            <li class="p-3">Performing Arithmetic Operations using Python.?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print(2 + 3)</li>
                                    <li class="pl-3">print(10 - 5)</li>
                                    <li class="pl-3">print(12 * 3)</li>
                                    <li class="pl-3">print(4 / 2)</li>
                                    <li class="pl-3">print(4 % 2)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    5<br />
                                    5<br />
                                    36<br />
                                    0.0<br />
                                    2<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that prints the sum of two numbers 2495 and 789358..?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print(2495 + 789358)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    791853<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that prints the Subtract 596 from 193856..?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print(193856 - 596)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    193260<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that prints the product of three numbers 61, 37 and 391...?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print(37*61*391)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    882487<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that prints the result when 33968 is divided by 176....?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">print(33968/176)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    193.0<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that reads a single line of input and print the given input.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">a = input()</li>
                                    <li class="pl-3">print(a)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Bat<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Bat<br />
                                </p>
                            </div>
                            <li class="p-3">In this coding question, you need to write a program that reads a word and prints the word and "###" on two separate lines.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">print(word)</li>
                                    <li class="pl-3"></li>
                                    <li class="pl-3">print("###")</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Algebra<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Algebra<br />
                                    ###
                                </p>
                            </div>
                            <li class="p-3">In this problem, you need to write code to read two lines of input and print the second line of input.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">a = input()</li>
                                    <li class="pl-3">b = input()</li>
                                    <li class="pl-3">print(b)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Fundamentals<br />
                                    Python
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Python<br />
                                </p>
                            </div>
                            <li class="p-3">In this coding question, you need to write a program that reads two words and prints the resultant word by joining the two words.
                                For example, if the given words are Milk and shake, the output should be Milkshake.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">first_word = input()</li>
                                    <li class="pl-3">second_word = input()</li>
                                    <li class="pl-3">print(first_word + second_word)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Milk<br />
                                    Shake
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Milkshake<br />
                                </p>
                            </div>
                            <li class="p-3">A job applicant is filling out an application form. He entered his first name and last name. Your task is to print his full name by joining his first name and last name with a space.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">first_name = input()</li>
                                    <li class="pl-3">last_name = input()</li>
                                    <li class="pl-3">print(first_name + " " + last_name)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Harry<br />
                                    Potter
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Harry Potter<br />
                                </p>
                            </div>
                        </ol>
                        <div class="col-6">
                            <button class="section-button" onclick="display('section_python')">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--LEVEL_1 PYTHON SECTION-->
    <div id="section_Level_2">
        <div class="question_blogs p-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="follow_head_set">Questions:-</h1>
                        <ol class="question_head">
                            <li class="p-3">String Repetition Program in Python.?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">message = (word + ' ') * 3</li>
                                    <li class="pl-3">print(message)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Apple<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    Apple Apple Apple
                                </p>
                            </div>
                            <li class="p-3">Write a Program that prints a simple square using the star (*) symbol. The square should have two stars on the first line and two stars on the second line.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3"> print("*" * 2)</li>
                                    <li class="pl-3"> print("*" * 2)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    **<br />
                                    **
                                </p>
                            </div>
                            <li class="p-3">write a program that prints a simple square using the star (*) symbol. The square should have two stars on the first line and two stars on the second line, with a space after every star using Python.?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3"> print("* " * 2)</li>
                                    <li class="pl-3"> print("* " * 2)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    * *<br />
                                    * *<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that prints the simple Python program that reads a word and prints the first character of that word...?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">first_character = word[0]</li>
                                    <li class="pl-3">print(first_character)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Python<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    P<br />
                                </p>
                            </div>
                            <li class="p-3">Write a simple program in Python that reads a word and prints the third character of the word...?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">third_character = word[2]</li>
                                    <li class="pl-3">print(third_character)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Debugging<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    b<br />
                                </p>
                            </div>
                            <li class="p-3">Give a four-digit number N as input. Write a program to print the first and last digit of the number....?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">number = input()</li>
                                    <li class="pl-3">first_digit = number[0]</li>
                                    <li class="pl-3">last_digit = number[3]</li>
                                    <li class="pl-3">print(first_digit)</li>
                                    <li class="pl-3">print(last_digit)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    1456<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    1<br />
                                    6
                                </p>
                            </div>
                            <li class="p-3">write a Python program to find the length of a string..?</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">message = input()</li>
                                    <li class="pl-3">length = len(message)</li>
                                    <li class="pl-3">print(length)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Software<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    8<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that print the index of the last character.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">word_length = len(word)</li>
                                    <li class="pl-3">last_index = word_length - 1</li>
                                    <li class="pl-3">print(last_index)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Python<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    5<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that reads a word and prints half the length of the word.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">word_length = len(word)</li>
                                    <li class="pl-3">half_word_length = word_length/2</li>
                                    <li class="pl-3">print(half_word_length)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Airplane<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    4.0<br />
                                </p>
                            </div>
                            <li class="p-3">write a program that reads a number and checks if the given number is greater than 70. The program should print True if the number is greater than 70, otherwise, it should print False.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">number = input()</li>
                                    <li class="pl-3">number = int(number)</li>
                                    <li class="pl-3">result = number > 70</li>
                                    <li class="pl-3">print(result)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    86<br />
                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    True<br />
                                </p>
                            </div>
                            <li class="p-3">Write a Program to checks if the first letter and last letter of the word are not the same.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">word = input()</li>
                                    <li class="pl-3">word_length = len(word)</li>
                                    <li class="pl-3">first_letter = word[0]</li>
                                    <li class="pl-3">result = first_letter != last_letter</li>
                                    <li class="pl-3">print(result)</li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    Python<br />

                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    False<br />
                                </p>
                            </div>
                            <li class="p-3">Write a program that reads the student's marks as input and prints PASS or FAIL. If the student has scored more than 50, print PASS. In all other cases print FAIL.</li>
                            <div class="answer_div p-3">
                                <ol class="follow_para_list text-left pl-2">
                                    <li class="pl-3">marks = int(input())</li>
                                    <li class="pl-3">if marks > 50:</li>
                                    <li class="pl-3">
                                        <p class="ml-4">print("PASS")</p>
                                    </li>
                                    <li class="pl-3">else:</li>
                                    <li class="pl-3">
                                        <p class="ml-4">print("FAIL")</p>
                                    </li>
                                </ol>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">Sample Input:-</span>
                                    85<br />

                                </p>
                                <p class="follow_para_list text-right">
                                    <span class="span_set_question">O/P:-</span>
                                    PASS<br />
                                </p>
                            </div>
                        </ol>
                        <div class="col-6">
                            <button class="section-button" onclick="display('section_python')">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--UNDER MAINTENANCE SECTION-->
    <div id="section_Under_Maintain">
        <div class="question_blogs_1 d-flex flex-column justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="Maintain_head">UNDER <br />MAINTENANCE</h1>
                        <div class="col-6">
                            <button class="section-button" onclick="display('section_python')">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FOLLOW US NAVBAR SECTION-->
    <div id="section_follow_us">
        <div class="trending_blogs pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="text-center text-md-left">
                            <img src="https://i.imgur.com/v3MyNpX.png" class="follow_image_set" />
                            <div class="p-2">
                                <i class="fa-brands fa-google follow_icon_styling"></i>
                                <i class="fa-brands fa-twitter follow_icon_styling"></i>
                                <i class="fa-brands fa-instagram follow_icon_styling"></i>
                                <i class="fa-brands fa-linkedin follow_icon_styling"></i>
                            </div>
                            <p class="follow_address_para">1st block, JP nagar, Bengalure, India.</p>
                        </div>
                    </div>
                    <div class="col-6 mt-3 col-md-6 col-lg-3">
                        <h1 class="follow_head_set mb-3">Get to Know us</h1>
                        <ul class="follow_para_set">
                            <li class="follow_para_list">About us</li>
                            <li class="follow_para_list">Career</li>
                            <li class="follow_para_list">Press Releases</li>
                            <li class="follow_para_list">Gift a smile</li>
                        </ul>
                    </div>
                    <div class="col-6 mt-3 col-md-6 col-lg-3">
                        <h1 class="follow_head_set mb-3">Contact with Us</h1>
                        <ul class="follow_para_set">
                            <li class="follow_para_list">Facebook</li>
                            <li class="follow_para_list">Twitter</li>
                            <li class="follow_para_list">Instagram</li>
                        </ul>
                    </div>
                    <div class="col-6 mt-3 col-md-6 col-lg-3">
                        <h1 class="follow_head_set mb-3">Let Us help You</h1>
                        <ul class="follow_para_set">
                            <li class="follow_para_list">100% purchase Protection</li>
                            <li class="follow_para_list">Your Account</li>
                            <li class="follow_para_list">Return Centre</li>
                            <li class="follow_para_list">Help</li>
                        </ul>
                    </div>
                </div>
                <hr class="hr-line_1" />
                <div class="text-center">
                    <i class="fa fa-copyright icon text-white" aria-hidden="true"></i>
                    <span class="follow_para_list">Bolt_Licensed</span>
                </div>
                <div class="d-flex flex-row justify-content-start m-3">
                    <button class="section-button" onclick="display('sectionhome')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>




</html>