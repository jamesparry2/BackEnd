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
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script src="../Script Files/Questions.js"></script>        
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
                                <li><a href = "OOSection.php">Section 3: Object Orientated Paradigm</a></li>
                                <li><a href = "OOSection.php">Section 3.1: Defining a class and creating constructors</a></li>
                                <li><a href = "OOSection.php">Section 3.2: Encapsulation </a></li>
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
                                <li class = "active"><a href = "">Section 3: Input/Output </a></li>
                                <li class = "active"><a href = "">Section 3.1: Reading in data </a></li>
                                <li class = "active"><a href = ""> Section 3.2: Writting in data </a></li>
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
    <div class = "title_section">
        <h1 class = "main_title">Input/Output Section</h1>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 3: Input/Output</h3>
        <br/>
        <br/>
        <p>An interesting function in Java is using streams to be able to read in or output to a file. The two stream objects we will look at in this section are PrintWriter and Scanner. Since in our example we
        will be using files we will also need a File object. Being able to read input/output data is a very useful skill for processing real world data. An example of where reading data was important can be seen
        in WW2 where a group of brithish computer scientists would read in German transmision and crack their ciphers. </p>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags"> Section 3.1: Reading in data</h3>
        <br/>
        <br/>
        <p>To be able to read in a file we must first intialize a File object using it's constructor which takes a filename in as a parameter. Once we have done this we can pass the File object into the Scanners
        paramters. Once in we can use Scanner methods inside a while to check if there is a next item in the file, if true we process this information, else it will cancel the loop and we will progress through 
        the program. Once done processing a file we must close it otherwise the manipulation we have performed will not be saved to the diskspace. One more issue is that if the file does not exist it will throw a
        FileNotFound Exception, we normally throw this exception on the main method. An example of reading can be seen below:</p>
        <img src = "../Resources/FileInput.png" alt = "Input File Example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 3.2: Writting in data</h3>
        <br/>
        <br/>
        <p> To be able to output to a file we must first intialize a File object using its constructor which takes a filename in as a parameter. Once we have done this we can pass the File object into the PrintWriter
        parameters. We can then allow the user to input information and output it into the file, once the user has finished inputing information into the file we can the progress onto the next section of the program.
        Once done processing a file we must close it otherwise the manipulation we have performed will not be saved to the diskspace. One more issue is that if the file does not exist it will throw a
        FileNotFound Exception, we normally throw this exception on the main method. An example of reading can be seen below:</p>
        <img src = "../Resources/WriteExample.png" alt = "Write File Example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class="install_tags"> Video Segment </h3>
        <br/>
        <br/>
        <iframe class = "videoTutorial" src="https://www.youtube.com/embed/qURtiJOrtgI" frameborder="0" allowfullscreen></iframe>  
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('inputOutput')">Question Time!</button></p>
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('inputOutput')">Question Time!</button></p>
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
                    
                    $updateScoreQuery = "UPDATE users SET Score9='$newScore' WHERE Username = '$userName'";
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
    <br/>
	<p id = "extend"></p>
    </body>
</html>
        