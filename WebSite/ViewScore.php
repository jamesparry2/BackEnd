<?php
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MySql');
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

    <body onload = "onLoadUpForScore();" class = "main_section">
        
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
                        <li><?php error_reporting(0); 
                            if($_SESSION['logged_in'] == 'jamesparry3'){
                                    echo "<li class = 'active'/><a href = '' class = ''>"." View Scores" . "</a>,</li>";  
                                  } ?></li>
                    </ul>
                </div>
            </div>    
        </nav>
        <div id = "title_section">
            <h1 class = "main_title">View Scores</h1>
        </div>
    </body>
</html>    