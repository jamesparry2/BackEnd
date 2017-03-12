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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../Script Files/Questions.js"></script>
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
                                <li class = "active"><a href = ""> Section 3: Loops </a></li>
                                <li class = "active"><a href = ""> Section 3.1: While Loop and Do-While Loop </a></li>
                                <li class = "active"><a href = ""> Section 3.2: For Loop</a></li>
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
                                <li><a href = "OOSection.php">Section 3.2: Polymorphism and Encapsulation </a></li>
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
                    </ul>
                </div>
            </div>    
        </nav>
        <div id = "title_section">
            <h1 class = "main_title">Loops</h1>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 3: Loops</h3>
            <br/>
            <br/>
            <p>A loop is a part of a program that keeps getting repeated until a specfic goal is reached. These can be useful for calculations that require multiple iterations. Some of the different 
            kind of loops there are: For, While and Do Loops.</p>
        </div>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 3.1: While Loops and Do-While Loops</h3>
            <br/>
            <br/>
            <h4>While Loop:</h4>
            <p>The While Loops are used when we do not know how many iterations we are going to need. More commonly they are used when we have a specfic goal that is unknown to use. For the While Loop
            as long as the condition is true, then the While Loops statements will be executed. Thesen statements are called the body of the loop. An example of While Loop can be seen below:</p>
            <img src = "../Resources/While.png" alt="Example of a While Loop"/>
            <h4>Do-While Loop:</h4>
            <p>The Do-Loop acts extremlly similar to the While Loop however the only difference is that the bloke of code will get executed at lease once, while with the While Loop it could be
            the case that it is never executed. An example can be seen below:</p>
            <img src = "../Resources/DoLoop.png" alt="Example of a Do Loop"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 3.2: For Loop</h3>
            <br/>
            <br/>
            <h4>For Loop:</h4>
            <p>For Loops are used when we know exactly how many iterations we are going to need. For Loops are commonly know as count-countrolled loops. They have the format 
            (initialize, check, increment). However important to note that these statements are not execucted at the same time but independently.An example can be seen below:</p>
            <img src = "../Resources/ForLoop.png" alt="Example of a For Loop"/>
        </div>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Video Segment</h3>
            <br>
            <br>
            <iframe class = "videoTutorial" src="https://www.youtube.com/embed/G460KZqmn0o" frameborder="0" allowfullscreen></iframe>  
        </div>
        <br/>loopPage
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Question Segment</h3>
            <br/>
            <br/>
            <?php
                if(empty($_GET['scoreForSession'])){
            ?>
                <div id = "question_section">
                <p><button onClick = "DisplayQuestion('loopPage')">Question Time!</button></p>
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
                <p><button onClick = "DisplayQuestion('loopPage')">Question Time!</button></p>
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
                    
                    $updateScoreQuery = "UPDATE users SET Score3='$newScore' WHERE Username = '$userName'";
                    if(mysqli_query($db, $updateScoreQuery)){
                        echo "Updated done";
                    } else {
                        echo "Not done" . mysqli_query($db);
                    }
                }
            ?>              
        </div>
        <br/>
    </body>
    
</html>