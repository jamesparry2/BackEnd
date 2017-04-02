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
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script src="../Script Files/bootstrap.min.js"></script>
    </head>

    <body class = "main_section">
        
        <nav class = "navbar navbar-default navbar-collapse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <a class = "navbar-brand">Java Learning Home Page</a>
                </div>
                
                    <ul class = "nav navbar-nav">
                        <li><a href = "Index.php">Home</a></li>
                        <li class = "active"><a href = "Overview.php">Overview</a></li>
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
            <h1 class = "main_title">Overview</h1>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h3 class = "install_tags">Overview</h3>
            <br/>
            <br/>
            <p>This page highlights the structure that the Teaching Aid Application will be following throughout the Website. This chart has been designed with the partial interactivity which will allow you guys to click on any node and it will take you to the deseried web page. This model knowledge map has been designed with you
            in mind, it follows great dependency design so if you follow the flow of the digram you will not strugle majorly in any section. As before if you skip any section
            it may cause you to strugle with some questions in more advanced topics as there will be aspects that are being built up. Hopefully this shows you that this is not
            a daunting task and that you are up for the challenge!.</p>
        </div>
        <div class = "graph">
        <script>

            var treeData = [
              {
                "name": "Data Fundementals", "url": "Data_Fundementals.php" ,"parent": "null","children": [
                  {
                    "name": "Conditions", "url": "Conditions.php" ,"parent": "Top Level","children": [
                      {
                        "name": "Loops", "url":"Loops.php" , "parent": "Level 2","children": [
                            {
                                "name" : "Collections", "url": "Collections.php" ,"parent": "Level 3","children" : [
                                    {
                                        "name" : "Methods", "url": "Methods.php", "parent": "Level 4","children":[
                                            {
                                                "name": "Object Orientation Paradigm", "url": "OOSection.php", "parent":"Level 5", "children":[
                                                    {
                                                        "name": "Inheritance", "url": "Inheritance.php" ,"parent":"Level 6", "children": [
                                                            {
                                                                "name": "GUI", "parent":"Level 7" 
                                                            }
                                                        ]
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Handling Exceptions", "url":"Try_Catch.php" , "parent":"Level 5", "children":[
                                                    {
                                                        "name":"Input/Output", "url":"Input_Output.php" ,"parent": "Level6"
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]  
                      }
                    ]
                  }
                ]
              }
            ];

            var	width = 780;
            var	height = 780;

            var i = 0;

            var tree = d3.layout.tree()
                .size([height, width]);

            var diagonal = d3.svg.diagonal();


                //Creating a canvas and appending a group element to place the tree
            var svg = d3.select("body").append("svg")
                .attr("width", 890)
                .attr("height", 800)
                    .append("g")
                    .attr("transform", "translate(" + 140 + "," + 40 + ")");

            root = treeData[0];

            update(root);
            
            function update(source) {

              // Compute the new tree layout.
              var nodes = tree.nodes(root).reverse(),
                  links = tree.links(nodes);

              nodes.forEach(function(d) { d.y = d.depth * 100; });

              // Declare the node
              var node = svg.selectAll("g.node")
                  .data(nodes, function(d) { return d.id || (d.id = ++i); });

              // Enter the nodes.
              var nodeEnter = node.enter()
                .append("g")
                  .attr("class", "node")
                  .attr("transform", function(d) { 
                      return "translate(" + d.x + "," + d.y + ")"; 
                  })
                  .append("a")
                    .attr("xlink:href", function(d){return d.url;})

              nodeEnter.append("circle")
                  .attr("r", 10);

              nodeEnter.append("text")
                  .attr("y", function(d) { return d.children || d._children ? -18 : 18; })
                  .attr("dy", ".35em")
                  .attr("text-anchor", "middle")
                  .text(function(d) { return d.name; })
                  .style("fill-opacity", 1)
                  .style("font-size", "17px");

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
    </body>  
</html