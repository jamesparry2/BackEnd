<?php
    // Variable DB is created and is assigned to a connection string
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MYSQl');
    session_start();
?>

<html lang="en" class = "marigns">
    <head>
        <meta charset="UTF-8"/>
        <title>Index Page</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../Resources/stylesheet.css"/>
        <script src="../Script Files/Questions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
                        <li><a href = "Index.php">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href = "Overview.php">Overview</a></li>
                        <li class = "dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Basic Topics <span class="caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li class = "active"><a href = ""> Section 1 Data Fundemental: What are they?</a></li>
                                <li class = "active"><a href = ""> Section 1.1 Data Fundemental: Variables</a></li>
                                <li class = "active"><a href = ""> Section 1.2 Data Fundemental: Arthemtic Operators</a></li>
                                <li class = "active"><a href = ""> Section 1.3 Data Fundemental: Input/Output (I/O) </a></li>
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
                                <li><a href = "Collections.php">Section 1.3: Array and ArrayList differences</a></li>
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
                        <li style = "padding-right: 100px;"  class = "dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown" role = "button" ari-haspopup="true" aria-expanded="false"> Advanced Topics <span class="caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "Inheritance.php">Section 1: Inheritance-Concepts of superclass/sub-class</a></li>
                                <li><a href = "Inheritance.php">Section 1.1: Overloading and Overriding</a></li>
                                <li><a href = "Inheritance.php">Section 1.2: Polymorphism and Examples </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li><a href = "Try_Catch.php">Section 2: Handling Exceptions</a></li>
                                <li><a href = "Try_Catch.php">Section 2.1: Throwing/Catching Exceptions </a></li>
                                <li><a href = "Try_Catch.php">Section 2.2: Checked/Unchecked Exception and Finally Clause</a></li>
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
        <div id = "title_section">
            <h1 class = "main_title">Data Fundementals</h1>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1: What are they?</h3>
            <br/>
            <br/>
            <p>In programming you will want the ability to store values and carry them through the lifespan of the program. This is obtainable by using variables
            which are used as place holders for the information. An example of what they look like can be seen below:</p>
            <img class = "step" src = "../Resources/example_of_var.png" alt = "Example of variables: int apples = 5">
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1.1: Variables</h3>
            <br/>
            <br/>
            <h4>Variable Declration:</h4>
            <p>As we can see in the above image we have declared 3 variables, but what does the syntax for the declrartion mean?. Well it can be broken up into three parts.
            These 3 parts would be: Data Type, Name, Intialzation where Data Type = int, Name = apples and Intialzation = 5. We must always end the decleration of a variable with
            a semicolen(;)</p>
            <br/>
            <h4>Variable Name:</h4>
            <p>When chosing a name for the variable it is desired that you chose a name which is releveant to what its purpose is in the program. An example of a bad choice
            would be <code>int x = 12;</code> We have no idea what the purpose of x would be so this would lead to poor maintainabilty of the code. They may also not be named 
            with reserved keywords.</p>
            <br/>
            <h4>Variable Constants:</h4>
            <p>A variable declared with the reserved keyword final becomes unchangable. Normally variables that are used with final and written in capitals. An example of this would
            be: <code>final double MAX_CAP  = 20;</code></p>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1.2: Arthemtic Operators</h3>
            <br/>
            <br/>
            <h4>Arthemtic:</h4>
            <p>In Java (or pretty much most imperative lanunages) you are able to carry out the 4 basic arithmetic opertations (+, -, /, *). When we create a athermetic operation
            it is called an expression i.e (a + b) * c would be an expression. Incrementation and/or Decrementation has a shorthand notation if we are doing it by 1. Rather than doing
            counter + 1 you can do counter++ which is equivilant.</p>
            <br/>
            <h4>Arthemtic Restrictions:</h4>
            <p>Not all arthemtic can be performed using their notations however Java has implemented ways so you can use them, an example would be Math.PI allows you to use Pi in your
            mathmatical expressions.</p>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class= "install_tags">Section 1.3:Input/Output(I/O)</h3>
            <br/>
            <br/>
            <p>In programming we can make the applications much more flexibale if we allow for user interaction. Below is a screenshot that we will analysis on how to do read and write 
            due to users input.</p>
            <img src="../Resources/IOExample.png" alt = "IO Example">
            <br/>
            <br/>
            <p>So as we can see above we have imported the Scanner class on line 1. This is required if we want to be able to use a Scanner Object. Once imported we then create a Scanner Object
            which will allow us to get input from the keyboard. This is created on line 5. We then ask the user for some input and using the Scanner Object in we look for the next Integer Input and store
            it in a variable.</p>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class="install_tags"> Video Segment </h3>
            <br>
            <br>
            <iframe class = "videoTutorial" src="https://www.youtube.com/embed/rVAp53mD3V8" frameborder="0" allowfullscreen></iframe>
            
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class="install_tags"> Question Segment </h3>
            <div>
                <br/>
                <br/>
                <div id = "question_section">
                <p><button onClick = "DisplayQuestion('dataFundementals')">Question Time!</button></p>
                    <p id = "question"></p>
                    <p id = "answers"></p>
                    <p id = "button"></p>
                    <p id = "score"></p>    
                </div>
            </div>
        </div>
        <br/>
        <br/>
    </body>
    
</html>