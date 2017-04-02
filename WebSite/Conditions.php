<?php
    // Variable DB is created and is assigned to a connection string
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MYSQl');
    session_start();
?>
<!DOCTYPE html>
<html lang="en" class = "marigns">
    <head>
        <meta charset="UTF-8"/>
        <title>Index Page</title>
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
                                <li><a href = "Data_Fundementals.php"> Section 1 Data Fundemental: What are they?</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.1 Data Fundemental: Variables</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.2 Data Fundemental: Arthemtic Operators</a></li>
                                <li><a href = "Data_Fundementals.php"> Section 1.3 Data Fundemental: Input/Output (I/O) </a></li>
                                <li role = "separator" class = "divider"></li>
                                <li class = "active"><a href = ""> Section 2: Conditions</a></li>
                                <li class = "active"><a href = ""> Section 2.1: If statement/Nested Statements </a></li>
                                <li class = "active"><a href = ""> Section 2.2: If else </a></li>
                                <li class = "active"><a href = ""> Section 2.3: Boolean Operators + &&amp; and || </a></li>
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
            <h1 class = "main_title">Conditions</h1>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 1: Conditions</h3>
            <br/>
            <br/>
            <p>Conditions in programming are used to determine the flow of a program. There are multiple ways to determine a decision in programming. Some of the ways these can be If statements 
            however with decision making in programming you need to understand booleans, compartive and the flow of logic whithin the decision making. An example of what a decision statement can look 
            like see the screenshot below:
            </p>
            <img src = "../Resources/IfState.png" alt="If Statement example"/>
        </div>   
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 2.1:If Statement and Nested Statements</h3>
            <br/>
            <br/>
            <h4>If Statement:</h4>
            <p>An if statement is a form of decision making syntax that is used in high-level programming. Working from the top branch, it works through every possible condition until one is true then exits. Due to this
            behaviour the order of conditions is important normally having very specfic conditions higher up the tree and slowly generalising downwards. The flow of an if statement is important. An example of
            the flow can be seen below</p>
            <br/>
            <br/>
        </div>
        <div class = "digramtic">
        <script>
            var layout = [
                {
                    "name": "Condition", "parent" : null, "children": [
                        {
                            "name" : "Output True", "parent": "Top Level"
                        },
                        {
                            "name" : "Output False", parrent: "Top Level"   
                        }   
                    ] 
                }
            ];
                
            var	width = 200;
            var	height = 200;       
            var i = 0;
                
            var tree = d3.layout.tree()
                .size([height,width]);
                
            var diagonal = d3.svg.diagonal();
                
            var svg = d3.select("body").append("svg")
            .attr("width", 200)
            .attr("height", 200)
                .append("g")
                .attr("transform", "tarnslate(" + 140 + "," + 80 +")");
                
            root = layout[0];
                
            change(root);
                
            function change(sourceInfo){
                    
                var nodes = tree.nodes(root).reverse()
                var links = tree.links(nodes);
                
                //Calculate the depth for each node before placement
                nodes.forEach(function(d){ d.y = d.depth * 100 + 30});
                
                var node = svg.selectAll("g.node")
                    .data(nodes, function(d){ return d.id || (d.id = ++i);});
                
                var nodeEnter = node.enter().append("g")
                    .attr("class", "node")
                    .attr("transform", function(d) { 
                  return "translate(" + d.x + "," + d.y + ")"; 
                    });
                    
                nodeEnter.append("circle")
                        .attr("r", 10);
                
                nodeEnter.append("text")
                    .attr("y", function(d) { return d.children || d._children ? -18 : 18; })
                    .attr("dy", ".35em")
                    .attr("text-anchor", "middle")
                    .text(function(d) { return d.name; })
                    .style("fill-opacity", 1);
                
                // Declare the links…
                var link = svg.selectAll("path.link")
                    .data(links, function(d) { return d.target.id; });
              // Enter the links.
                link.enter().insert("path", "g")
                    .attr("class", "link")
                    .attr("d", diagonal);
               }
                
        </script>
        </div>    
        <div class = "step_section">
            <h4>Nested If Statements:</h4>
            <p> A nested If statement is exactly what it sounds like, multiple conditional expression nessted within each other. This can be very useful
            when you need to make sure multiple facts are true before exiting and output a certain output. However a drawback is that nesting conditional expression 
            adds an extra level of complexity for every nest you push in. An example of a nested expresion can be seen below:</p>
            <img src = "../Resources/NestedIf.png" alt = "Example of Nested Conditions"/>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Section 2.2: If Else</h3>
            <br/>
            <br/>
            <p>If else statements are a slightly more advanced way of asking for multiple condition in a single decision. However logic/runtime errors can occur. A common error
            that programmers do not consider the order of the conditions. As stated earlier you should always aim to put very specfic conditions at the top and place more generalised
            conditions in the branch. Examples of poorly designed and good designs can be seen below:</p>
            <img src = "../Resources/BadIf.png" alt = "Example of Nested Conditions"/>
        </div>
        <br/>
        <br/>
        <div class ="step_section">
            <h3 class = "install_tags">Section 2.3: Boolean Operators</h3>
            <br/>
            <br/>
            <p>A Boolean Data Type is used to denote only two values: True or False. Boolean Operators are used with decision making syntax to help make complex
            decisions. The most common boolean opertoras you see are And(&&amp;), Or(||) and negations(!).</p>
            <br/>
            <h4> And Opertor:</h4>
            <p>The And Operator is used to determine that if both propertires are true the output becomes true otherwise any other output will return false. This can be usedful when testing to see if a number falls within the range of two different numbers.
            </p>
            <br/>
            <h4>Or Operator:</h4>
            <p>The Or Operator is used to determine if one of the properities is true, if it is true then the output is true. The only time the Or Operator returns
            false is when properties are false.</p>
            <br/>
            <h4>Negation Operator:</h4>
            <p>The negation operator invesrse the current boolean value, so for example if A = True then !A = False. The Negation Operator is useful when trying to
            find false conditions</p>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class="install_tags"> Video Segment </h3>conditions
            <br>
            <br>
            <iframe class = "videoTutorial" src="https://www.youtube.com/embed/H8jJoqrq0ko" frameborder="0" allowfullscreen></iframe>  
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('conditions')">Question Time!</button></p>
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
                <p><button class = "btn btn-primary" onClick = "DisplayQuestion('conditions')">Question Time!</button></p>
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
    </body>
    
</html>