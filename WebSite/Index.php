<!DOCTYPE html>
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
                        <li class = "active"><a href = "Index.php">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href = "Overview.php">Overview</a></li>
                        <li class = "dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Basic Topics <span class="caret"></span></a>
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
            <h1 class = "main_title"> Home </h1>
            <img class = "images"src = "../Resources/home-picture.png" alt="Getting Starting with Java" />
            <!-- http://www.codenirvana.net/2014/05/introduction-to-java-programming.html -->
        </div>
        <div id = "prep_section">
            <h3 class = "install_tags">What to expect from this application!</h3>
            <br>
            <br>
            <p> This application is here to help you get a full understanding of the Java Programming Lanunage. It will take you
                from the very basics of the Java Programming, which includes Data Fundementals and Conditions, all the way up 
                to advanced topics, such as Objects/Classes and Polymorphism. In the above tabs you will be able to navigate to
                any topic of your choice however I would highly recommened you take a look at the interactive diagram in the overview
                page as it tells you what you would need to know prior to moving onto the next topics. There will be questions at the bottom
                of each page giving you the abilty to test yourselves on the content that you have you just learnt. You can also come back
                to it in the future to try and revise for the topic.
             </p>
            <br/>
            <br/>
            <h3 class = "install_tags">How to install Java!</h3>
            <br/>
            <br/>
            <p> To make sure you can use Java you need certain tools intalled onto your computer. One is you will need a text editor, I would
                highly recommend Notepad ++, and the Java Deveolpment Kit. I have provided links to the needed websites below for you to dowload
                these tools:
            </p>
            <ul>
                <li><a href = "https://notepad-plus-plus.org/" target="_blank">Notepadd++</a></li>
                <li><a href = "http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html" target="_blank">Java JDK</a></li>
            </ul>
            <p>
                Once you have downloaded these, if you follow the steps below and ensure you have a file called Test.java which has the following
                code segment in it: <br> 
                public class Test { <br>
                    public static void main(string [] args){ <br>
                        System.out.println("Hello World"); <br>
                    }<br>
                }
            </p>
            
            <div class = "step_section">
                <h3> Step 1: </h3>
            
                <p>
                    First of all ensure that you download the most recent version for the Java JDK Website (At the current moment that is JDK8). Download the
                    releveant one for your computer i.e if you have a 64bit OS download the 64bit version. A sample screenshot can be seen below:
                    <br/>
                    <br/>
                    <img class = "step" src = "../Resources/Step1.png" alt = "Example of the view"/>      
                </p>
                <br/>
                
                <h3>Step 2:</h3>
                <p>
                    Once found, accept all the terms and agrements to use the application and then download it.You must then located it in your Programe files 
                    (not normally in Programe Files(x86)). Once you have found the file called Java, click on it and navigate to the bin file in it. Can see a screen-
                    shot below.
                    <br/>
                    <br/>
                    <img class = "step" src = "../Resources/Step2.png" alt = "Example of the file path"/>
                </p>
                <br/>
                
                <h3>Step 3:</h3>
                <p>
                    This part is very important, if you do this wrong it can cause major harm to the device you are trying to do this on. In this step you must now place
                    the file path in the PATH entries. First we must get to this, the following directions will get you there:                   
                </p>
                        <ol>
                            <li>Open Control Panel and go to system.</li>
                            <li>When on system click "Advanced Systems".</li>
                            <li>Switch to "Advanced" tab ⇒ "Environment Variables".</li>
                            <li>You see a table listing the existing PATH entries. Click "New" ⇒ Enter the JDK's directory "c:\Program Files\Java\jdk1.8.0_xx\bin" (Replace the xx
                                with your version) </li>
                        </ol>
                <p>
                    Below is a screenshot of what you can expect to see:
                    <br/>
                    <br/>
                    <img class = "step" src = "../Resources/Step3.png" alt = "Example of the file path"/>
                </p>
            </div>  
            <br/>
            <br/>
        </div>
	
    </body>
    
</html>