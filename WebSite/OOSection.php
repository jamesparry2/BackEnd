<?php
    // Variable DB is created and is assigned to a connection string
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MYSQl');
    session_start();
?>
<!DOCTYPE html>
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
        
        <nav class = "navbar navbar-default navbar-collapse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <a class = "navbar-brand">Java Learning Home Page</a>
                </div>
                
                    <ul class = "nav navbar-nav">
                        <li><a href = "Index.php">Home</a></li>
                        <li><a href = "Overview.php">Overview</a></li>
                        <li class = "dropdown">
                            <a href = "#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Basic Topics <span class="caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "Data_Fundementals.php"> Section 1 Data Fundamental: What are they?</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.1 Data Fundamental: Variables</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.2 Data Fundamental: Arthemtic Operators</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.3 Data Fundamental: Input/Output (I/O) </a></li>
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
                                <li><a href = "Methods.php">Section 2.2: Scope for Variables and Recursion </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li class = "active"><a href = "">Section 3: Object Orientated Paradigm</a></li>
                                <li class = "active"><a href = "">Section 3.1: Defining a class and creating constructors</a></li>
                                <li class = "active"><a href = "">Section 3.2: Encapsulation </a></li>
                            </ul>    
                        </li>
                        <li class = "dropdown">
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
                                <li><a href = "Input_Output.php"> Section 3.2: Writting in data </a></li>
                            </ul>
                        </li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "Register.php"><span class = "glyphicon glyphicon-user"></span> Register!</a></li>
                            <li><a href = "login.php"><span class = "glyphicon glyphicon-log-in"></span> Log In!</a></li>
                            
                            <li><?php if(isset($_SESSION['logged_in'])){
                                        echo "<a href = 'Logout.php' class = ''>" . " Welcome " . $_SESSION['logged_in'] . "</a>";
                                      } else {
                                        echo "<a href = '' class = 'not-active'> Welcome Guest </a>";
                                      }?></li>
                            <li><?php error_reporting(0); 
                                if($_SESSION['logged_in'] == 'jamesparry3'){
                                        echo "<li class = ''><a href = 'ViewScore.php' class = ''>"." View Scores" . "</a></li>";  
                                      } ?></li>
                        </ul>
                </div>    
        </nav>
    <div class="title_section">
        <h1 class = "main_title">Object Orientation</h1>
    </div>
    <br/>
    <br/>
    <div class ="step_section">
        <h3 class ="install_tags">Section 3: Object Orientated Paradigm</h3>
        <br/>
        <br/>
        <p>Object Orientation is one of the leading ways of thinking for High Level-Programming. It is used in many programming lanunages such as C++, C# and of course Java
            due to the fact that it is much simplier to update a large piece of software that uses this paradigm rather than one that uses a procedural based approach.
        This paradigm is built of the concept that we create objects in the program that has have a set of attributes and behaviour. Attributes are the variables of the
        class and behaviour are the methods belonging to the class. By default in Java there are always basic methods defined for classes you create. An example of this 
        would be the constructor. An example of a basic class can be seen below:</p>
        <img src = "../Resources/ClassDefine.png" alt = "Class example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 3.1: Defining a class and creating constructors</h3>
        <br/>
        <br/>
        <h4>Defining a class:</h4>
        <p>Defining a class is a rather simple thing to do.First you must try and decide what the attributes of the class are going to be and then normally declare the access
        attribute as private (This is done to enforce encapsulation). Once done you will then need to delcare the content of the body, these are the methods. These should 
        consits of functionality methods, accessor methods, mutator methods and constructors. An exmaple can be seen below:</p>
        <img src = "../Resources/ClassDefine.png" alt = "Class example"/>
        <h4>Create Constructors:</h4>
        <p>Creating the constructor is important aspect as it allows us to create the object in a specfic way. Its decleration slightly differes from a normal method. Rather 
        than using a return type, we complelty omit a return type when defining the constuctor. We can then define parameters if we wish the object to have set attributes on
        creation, or we could have none at all. An example of creating a contructor can be seen below:</p>
        <img src = "../Resources/Construcor.png" alt = "Class example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class ="install_tags">Section 3.2: Encapsulation</h3>
        <br/>
        <br/>
        <p>What is Encapsulation you ask? Encapsulation is a fundemental concept in Object Orientation. The idea is where we hide the data (i.e Variables) of a class from
        other classes. We then allow access to these attributes through accessor methods only. This is to ensure data hiding and that not any class that does not have permission can edit the values of the
        variables. This can be seen in the above screenshots where we have privatized the variable room and create a get and set method to access this variable.</p>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class="install_tags"> Video Segment </h3>
        <br/>
        <br/>
        <iframe class = "videoTutorial" src="https://www.youtube.com/embed/h8Jv9btKLEg" frameborder="0" allowfullscreen></iframe>  
    </div>
    <br/>
    <br/>
    <div class = "step_section">
    	<div>
				<h3 class="install_tags"> Question Segment </h3>	
                <br/>
				<br/>
				<?php
                if(empty($_GET['scoreForSession'])){
                ?>
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('ooSection')">Question Time!</button></p>
                <form class = "form-group" action ="" method="post">    
                    <p id = "question"></p>
                    <p id = "answers"></p>
					<p id = "score"></p>
                    <p id = "button"></p>
                    <input class = "btn btn-danger"type="submit" value="Update Highscore"/>                
                </form>           
                <?php
                } else {
                ?>
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('ooSection')">Question Time!</button></p>
                <form class = "form-group" action ="" method="post">    
                    <p id = "question"></p>
                    <p id = "answers"></p>
					<p id = "score"></p>
                    <p id = "button"></p>
                    <input class = "btn btn-danger" type="submit" value="Update Highscore"/>                
                </form>
                <?php
                    //This is where the update the score will be going
                    $userName = $_SESSION['logged_in'];
                    $newScore = $_GET['scoreForSession'];
                    
                    $updateScoreQuery = "UPDATE users SET Score6='$newScore' WHERE Username = '$userName'";
                    if(mysqli_query($db, $updateScoreQuery)){
                        echo "Updated done";
                    } else {
                        echo "Not done" . mysqli_query($db);
                    }
                }
                ?>
            </div>
    </div>
    <br/>
    <br/>
    </body>
</html>
        
