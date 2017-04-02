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
        <script src="../Script Files/Questions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
                                <li><a href = "Data_Fundementals.php"> Section 1 Data Fundemental: What are they?</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.1 Data Fundemental: Variables</a></li>
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
                                <li class = "active"><a href = "">Section 1: Collection Framework</a></li>
                                <li class = "active"><a href = "">Section 1.1: Defining Arrays and ArrayLists</a></li>
                                <li class = "active"><a href = "">Section 1.2: 2D Arrays</a></li>
                                <li class = "active"><a href = "">Section 1.3: Array and ArrayList differences</a></li>
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
        <div id = "title_section">
            <h1 class = "main_title">Collections</h1>
        </div>
        <br/>
        <div class ="step_section">
            <h3 class = "install_tags">Section 1: Collection Framework</h3>
            <br/>
            <br/>
            <p> Now what is the Collection Framework? The Collection Framework is a external library that consitis of Data Strcuters and Methods that we can use. A collection is an object in Java
            that can be of many types such as Arrays, Lists, Queues and ArrayLists. This is just a small sample of what is contained within the Collection Framework. The Collection Framework is 
            contained in the java.util. The API can be seen below:</p>
            <img class = "image2" src = "../Resources/Collection.png" alt = "Collection API"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1.1: Defining Arrays and ArrayLists</h3>
            <br/>
            <br/>
            <h4>Arrays:</h4>
            <p>Arrays are a data types that are used within many programming lanunages. Arrays are data structuers that can hold many different daya types depending on what you have declared them as. 
            Arrays can be declared in many different ways. One way where you define the contents of the array, one where you declare the size and one where you intialize and define the type. Examples
            can be seen below:</p>
            <img src = "../Resources/Array.png" alt = "Defining Arrays"/>
            <h4>ArrayLists:</h4>
            <p>ArrayList are very powerful as, unlike Arrays, they do not have a static size. In fact they have a dynamic size and can shrink/grow when they need to. Also they supply methods to the ArrayList.
            So for an example if we created an ArrayLsit of names, we could use the add function to add names and since it has dynamic size we can do this without a predefined size. An example can be seen 
            below:</p>
            <img src = "../Resources/ArrayList.png" alt = "Defining ArrayList"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1.2: 2D Arrays</h3>
            <br/>
            <br/>
            <p>Two-Dimensial Arrays are useful for storing information that normally would be contained in row/colum layouts. A 2D Array is defined when you declare row/columns. An example 
            would be new int[7][3] which would have 7 rows and 3 columns. Now if you wanted to access a specfic element you would need enter the specfic row and column i.e [1][3]. If you
            want to access every element in a 2D array you would need a nested for loop in a for loop. Example below: </p>
            <img src = "../Resources/2DArray.png" alt = "Defining 2D Array"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1.3: Array and ArrayList differences</h3>
            <br/>
            <br/>
            <ol type="1">
                <li>Arrays are static size while ArrayLists are Dynamic.</li>
                <li>Arrays performace are generally better due to method operation complexity for ArrayLists.</li>
                <li>Arrays can be multi-dimensional while ArrayLists can not.</li>
                <li>Adding is performed differently, with ArrayLists we use the add() function and with Arrays we use the assignment operator.</li>
            </ol>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class="install_tags"> Video Segment </h3>
            <br/>
            <br/>
            <iframe class = "videoTutorial" src="https://www.youtube.com/embed/E-MXfc68pKU" frameborder="0" allowfullscreen></iframe>  
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('collections')">Question Time!</button></p>
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('collections')">Question Time!</button></p>
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
    </body>
</html>
        