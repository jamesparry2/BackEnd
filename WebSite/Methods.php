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
    <body onload = "onLoadUpForScore();" class = "main_section">
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
                                <li><a href = "Collections.php">Section 1.3: Array and ArrayList differences</a></li>
                                <li role = "separtor" class = "divider"></li>
                                <li class = "active"><a href = "">Section 2: Methods</a></li>
                                <li class = "active"><a href = "">Section 2.1: Defining Methods and return types</a></li>
                                <li class = "active"><a href = "">Section 2.2: Scope for Variables and Recurssion </a></li>
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
                        <li><?php error_reporting(0); 
                            if($_SESSION['logged_in'] == 'jamesparry3'){
                                    echo "<a href = '' class = ''>"." View Scores" . "</a>";  
                                  } ?>
                        </li>
                    </ul>
                </div>
            </div>    
        </nav>
        <div id = "title_section">
            <h1 class = "main_title">Methods</h1>
        </div>
        <div class = "step_section"> 
            <h3 class = "install_tags">Section 2: Methods</h3>
            <br/>
            <br/>
            <p>Methods are just a sequence of instructions with a name. Methods can have input parameters, as we have seen with Math.pow(2,3). Methods are extremlly 
            useful as they allow us to reuse the same block of code over and over again but with different parameters. It also allows for ease of maintainabilty as
            the block of code is the only place where editing would be required. An example of a method can be seen below: </p>
            <img src = "../Resources/Method.png" alt = "Method Example"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 2.1: Defining Methods and Return Types</h3>
            <br/>
            <br/>
            <h4>Defining the Method:</h4>
            <p>Using an example we will show how we need to implement a method. We will look at devolping a method that computes the volume of the cube. Firstly we will
            need to decide on a name, we will chose computeVol. Next we need to figure out the input parameters, in this case our input will be the sideLength. We then want
            our return type to be a double so for the beginig we would have produced <code>public double computeVol(double sideLenth){...}</code></p>
            <h4>Return Types:</h4>
            <p>Return Types are what you define at the begining of the method. Then within the method you use the keyword to return the result of the method. As soon as a return
            statement is processed the method exits immediately. An exmaple can be seen below combining both defining methods example and return types:</p>
            <img src = "../Resources/Return.png" alt = "Return Type"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 2.2: Variables Scope and Recurssion </h3>
            <br/>
            <br/>
            <h4>Variable Scope:</h4>
            <p>Eventually as your program grows bigger you will find the need for more variables, but depending on the where you place the variable depends on it's level of access. A variable
            declared within the method that you create is called a local variable, this means the scope for this variable only exitis within that method. A variable declared at the begining of the program
            is called a global variable and can be access from any point within the program.</p>
            <img src = "../Resources/Scope.png" alt = "Scope Example"/>
            <br/>
            <br/>
            <h4>Recurssion:</h4>
            <p>Recursion is when a method calls itself from within it's own body. Imagine if we have a massive problem, if we can solve the basic form of the problem we can then use recurssion to
            solve the more advanced forms of the problems. Normally in recurssion you'll have two conditions: a break case to stop it recurssing and a case where the method will call itself.</p>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class="install_tags"> Video Segment </h3>
            <br/>
            <br/>
            <iframe class = "videoTutorial" src="https://www.youtube.com/embed/8ugtesBpaBQ" frameborder="0" allowfullscreen></iframe>  
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class="install_tags"> Question Segment </h3>
            <br/>
            <br/>
            <?php
                if(empty($_GET['scoreForSession'])){
            ?>
                <div id = "question_section">
                <p><button onClick = "DisplayQuestion('methods')">Question Time!</button></p>
                <form style = "text-align: center;" action ="" method="post">    
                    <p id = "question"></p>
                    <p id = "answers"></p>
                    <p id = "button"></p>
                    <p id = "score"></p>
                    <input type="submit" value="Check"/>                
                </form>           
                </div>
            <?php
                } else {
            ?>
                <div id = "question_section">
                <p><button onClick = "DisplayQuestion('methods')">Question Time!</button></p>
                <form style = "text-align: center;" action ="" method="post">    
                    <p id = "question"></p>
                    <p id = "answers"></p>
                    <p id = "button"></p>
                    <p id = "score"></p>
                    <input type="submit" value="Check"/>                
                </form>
                </div>
            <?php
                    //This is where the update the score will be going
                    $userName = $_SESSION['logged_in'];
                    $newScore = $_GET['scoreForSession'];
                    
                    $updateScoreQuery = "UPDATE users SET Score5='$newScore' WHERE Username = '$userName'";
                    if(mysqli_query($db, $updateScoreQuery)){
                        echo "Updated done";
                    } else {
                        echo "Not done" . mysqli_query($db);
                    }
                }
            ?>
        </div>
        <br/>
        <br/>
    </body>
</html>
        