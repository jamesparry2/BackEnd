<?php
    // Variable DB is created and is assigned to a connection string
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MYSQl');
    session_start();
?>

<html lang="en" class = "marigns">
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../Resources/stylesheet.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../Script Files/Questions.js"></script>
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script src="../Script Files/bootstrap.min.js"></script>
    </head>
<body class = "main_section">
        
        <nav class = "navbar navbar-default">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <a class = "navbar-brand">Java Learning Home Page</a>
                </div>
                
                <div class = "collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class = "nav navbar-nav">
                        <li class = ""><a href = "Index.php">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href = "Overview.php">Overview</a></li>
                        <li class = "dropdown">
                            <a href = "" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Basic Topics <span class="caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "Data_Fundementals.php"> Section 1 Data Fundemental: What are they</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.1 Data Fundemental: Variables and Naming Conventions</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.2 Data Fundemental: Arthemtic Operators</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.3 Data Fundemental: Input/Output (I/O) </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li><a href = "Conditions.php"> Section 2: Conditions</a></li>
                                <li><a href = "Conditions.php"> Section 2.1: If statement/Nested Statements </a></li>
                                <li><a href = "Conditions.php"> Section 2.2: If else </a></li>
                                <li><a href = "Conditions.php"> Section 2.3: Boolean Operators + &&amp; and || </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li><a href = "Loops.php"> Section 3: Loops </a></li>
                                <li><a href = "Loops.php"> Section 3.1: While Loop and Do-While Loop </a></li>
                                <li><a href = "Loops.php"> Section 3.2: For Loop</a></li>
                            </ul>    
                        </li>
                        <li class = "dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Intermediate Topics <span class="caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "Collections.php">Section 1: Collection Framework</a></li>
                                <li><a href = "Collections.php">Section 1.1: Defining Arrays and ArrayLists</a></li>
                                <li><a href = "Collections.php">Section 1.2: 2D Arrays</a></li>
                                <li><a href = "Collections.php">Section 1.3: Array and ArrayList differences </a></li>
                                <li role = "separtor" class = "divider"></li>
                                <li><a href = "Methods.php">Section 2: Methods</a></li>
                                <li><a href = "Methods.php">Section 2.1: Defining Methods and return types</a></li>
                                <li><a href = "Methods.php">Section 2.2: Scope for Variables and Recurssion </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li><a href = "OOSection.php">Section 3: Object Orientated Paradigm</a></li>
                                <li><a href = "OOSection.php">Section 3.1: Defining a class and creating constructors</a></li>
                                <li><a href = "OOSection.php">Section 3.2: Encapsulation </a></li>
                            </ul>    
                        </li>
                        <li style = "padding-right: 100px;" class = "dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown" role = "button" ari-haspopup="true" aria-expanded="false"> Advanced Topics <span class="caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "Inheritance.php">Section 1: Inheritance-Concepts of superclass/sub-class</a></li>
                                <li><a href = "Inheritance.php">Section 1.1: Overloading and Overriding</a></li>
                                <li><a href = "Inheritance.php">Section 1.2: Polymorphism and Examples </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li class = "active"><a href = "#">Section 2: Handling Exceptions</a></li>
                                <li class = "active"><a href = "#">Section 2.1: Throwing/Catching Exceptions </a></li>
                                <li class = "active"><a href = "#">Section 2.2: Checked/Unchecked Exception and Finally Clause</a></li>
                                <li role = "separator" class = "divider"></li>
                                <li><a href = "Input_Output.php">Section 3: Input/Output </a></li>
                                <li><a href = "Input_Output.php">Section 3.1: Reading in data </a></li>
                                <li><a href = "Input_Output.php">Section 3.2: Writting in data </a></li>
                            </ul>
                        </li>
                        <li class = ""><a href = "Register.php">Register!</a></li>
                        <li class = ""><a href = "login.php">Log In!</a></li>
                        <li><?php if(isset($_SESSION['logged_in'])){
                                    echo "<a href = '' class = 'not-active'>" . " Welcome " . $_SESSION['logged_in'] . "</a>";
                                  } else {
                                    echo "<a href = '' class = 'not-active'> Welcome guest </a>";
                                  }?></li>
                    </ul>
                </div>
            </div>    
        </nav>
    <div class="title_section">
        <h1 class = "main_title">Handling Exceptions</h1>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 2: Handling Exceptions</h3>
        <br/>
        <br/>
        <p> When dealing with errors in programming there are two aspects: detection and handling. Detection is more easier to achive then handling an exception. For example 
        if we have an array that has a defined size of 25 but we try and add 26 elements to it we will produce ArrayIndexOutOfBound Exception. This shows detection is more simplier
        than handling the error. Exception Handling provides us a flexible option to how we deal and control errors. An example of the producing the Array error can be seen below: </p>
        <img src = "../Resources/ArrayIndex.png" alt = "Array Exception Example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 2.1: Throwing/Catching Excpetions</h3>
        <br/>
        <br/>
        <h4>Throwing Exceptions: </h4>
        <p>There are many ways to deal with excptions, one way is to use the throw keyword. This is used in cases where we know what exception can happen and want to deal with it
        in the appropriate manner. When you throw an exception, execution does not continue with the next statement but with an exception handler. </p>
        <h4>Catching Exceptions: </h4>
        <p> The most common way to deal with catched exceptions is using a try/catch block. A try/catch is placed within the program. The try statement contains one or more statements
        that could produce the exception that are you willing to catch in the catch clause. An example of this can be seen below:  </p>
        <img src = "../Resources/TryCatch.png" alt = "TryCatch Exception Example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Checked/Unchecked Exception and Finally Clause</h3>
        <br/>
        <br/>
        <h4>Checked Exception: </h4>
        <p> The exceptions represent recovarable aspects in the program. These are recovarable due to the try/catch block and are subsets of the Exception class. </p>
        <h4>Unchecked Exceptions: </h4>
        <p> These exception represent defects in the program. To quote from The Java Programming Language, by Gosling, Arnold and Holmes: "Unchecked runtime exceptions represent conditions that,
        generally speaking, reflect errors in your programs logic and connot be reasonanly recoved from at run time." You can not establish try/catch exeptions for unchecked exceptions. </p>
        <h4>Finally Clause:</h4>
        <p>Sometimes there will be cases where you need to excute a block of code, regardless if an exception is thrown or not. The finally clause will always execute when the try bloke exits. This
        is good in cases such that if you are to open a file stream, you can use the finally clause to ensure it is closed. This example can be viewed below: </p>
        <img src = "../Resources/Finally.png" alt = "Finally Example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class="install_tags"> Video Segment </h3>
        <br/>
        <br/>
        <iframe class = "videoTutorial" src="https://www.youtube.com/embed/dFZ4dAePBhY" frameborder="0" allowfullscreen></iframe>  
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class="install_tags"> Question Segment </h3>
    </div>
    <br/>
    <br/>
    <div>
        <div id = "question_section">
        <p><button class = "button"  onClick = "DisplayQuestion('tryCatch')">Question Time!</button></p>
        <p id = "question"></p>
        <p id = "answers"></p>
        <p id = "button"></p>
        <p id = "score"></p>    
    </div>
    </div>
    <br/>
    </body>
</html>
        