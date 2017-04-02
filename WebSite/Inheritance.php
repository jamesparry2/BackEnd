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
                                <li class = "active"><a href = "">Section 1: Inheritance-Concepts of superclass/sub-class</a></li>
                                <li class = "active"><a href = "">Section 1.1: Overloading and Overriding</a></li>
                                <li class = "active"><a href = "">Section 1.2: Polymorphism and Examples </a></li>
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
        <h1 class = "main_title">Inheritance</h1>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 1: Concepts of superclass/sub-class</h3>
        <br/>
        <br/>
        <p>Inheritance is a concept on Object-Orientation design. It shows a relationship between more general classes to more specialized classes. This get can be seen in a "is-a" relationship.
         So for example every car IS A a vehicle where a car shares common traits of all vehicles. In this example we would say the Car class would inherit from the Vehicle class. </p>
        <h4>Superclass:</h4>
        <p>A super class is the more genral version of a class, so returning the Car/Vehicle example in that case the Vehicle would be the super class as it would contain more general data types
        and methods that Car class will inherit. So for the IS A relationship if the class is on the right hand side of the relationship it must be a superclass, the more general class.</p>
        <h4>Sub-Class:</h4>
        <p>A sub-class is used when you want to create a more specfic version of a superclass yet you want to have access to all the variables and public methods without having to rewrite them.You can 
        then in the subclass add more behaviours or edit the implementation of inherited methods if needed. When change a method implementation you override it. To inherite a class we use the keyword "extends"
        after declaring the class name. An example can be seen below:</p>
        <img src = "../Resources/Sub.png" alt = "Sub class example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class = "install_tags">Section 1.1: Overloading and Overriding</h3>
        <br/>
        <br/>
        <h4>Overridding:</h4>
        <p>Overriding a method is normally done in a subclass and modification are done to the implementation of an inherited public method when the behaviour of the method is not deseriable. That means
        when we create an object of this or use polymorphism(later discussed) it will call this objects method rather than the superclasses version of the method.</p>
        <h4>Overloading:</h4>
        <p>Overloading is when you have named multiple names with the same name but they have different parameters. These parameters can differ in many ways, some of these are number of parameters,
        data types of parameters and the ordering. Overloading is one way that Java supports polymorphism. An example of method overloading can be seen below:</p>
        <img src = "../Resources/Overload.png" alt = "Overloaded class example"/>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h4 class = "install_tags">Section 1.2: Polymorphism and Example</h4>
        <br/>
        <br/>
        <h4>Polymorphism:</h4>
        <p>Polymorphism is the ability of an object to take manyt forms. If a object has multiple IS-A relationships it can be considered polymorphic. So for example Vehicle will have many subclasses such as
        Car, Bike, Truck. Due to muleiple IS-A relationships this makes Vehicle polymorphic. If we were to create a Vehicle Object it could be come a refernce variable allowing it to be reasing to other objects.Note
        that a reference variable is non-mutable. </p>
        <h4>Example: </h4>
        <p>So below will be example of Polymorphism however there will be some foundations assumed so you know how this works these are:</p>
        <ol type="1">
            <li>Car IS A Vehicle</li>
            <li>Bike IS A Vehicle</li>
            <li>Truck IS A Vehicle</li>
        </ol>
        <p>Now assume each class has it's own version of the drive method which prints it's corresponding vehicle is moving</p>
        <p>Now below is the main mathod demostarting how polymorphism is used:</p>
        <img src = "../Resources/Polymorphism.png" alt = "Polymorphism class example"/>
        <p>Polymorphism is one of the important concepts in Object-Orientation design due to the fact it has great scalabilty as you can see in the small example below.</p>
    </div>
    <br/>
    <br/>
    <div class = "step_section">
        <h3 class="install_tags"> Video Segment </h3>
        <br/>
        <br/>
        <iframe class = "videoTutorial" src="https://www.youtube.com/embed/U2HgYkWPSlY" frameborder="0" allowfullscreen></iframe>  
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('inheritance')">Question Time!</button></p>
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('inheritance')">Question Time!</button></p>
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
                    
                    $updateScoreQuery = "UPDATE users SET Score7='$newScore' WHERE Username = '$userName'";
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
    </body>
</html>
        