<?php
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MySql');
    session_start();
?>
<!DOCTYPE html>
<html lang="en" class = "marigns">
    <head>
        <meta charset="UTF-8"/>
        <title>Index Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../Resources/stylesheet.css"/>
        <script src="../Script Files/Questions.js"></script>
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
                                <li><a href = "Input_Output.php">Section 3.2: Writting in data </a></li>
                            </ul>
                        </li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "Register.php"><span class = "glyphicon glyphicon-user"></span> Register!</a></li>
                            <li><a href = "login.php"><span class = "glyphicon glyphicon-log-in"></span> Log In!</a></li>
                            
                            <li><?php if(isset($_SESSION['logged_in'])){
                                        echo "<a href = '' class = 'not-active'>" . " Welcome " . $_SESSION['logged_in'] . "</a>";
                                      } else {
                                        echo "<a href = '' class = 'not-active'> Welcome Guest </a>";
                                      }?></li>
                            <li><?php error_reporting(0); 
                                if($_SESSION['logged_in'] == 'jamesparry3'){
                                        echo "<li class = 'active'><a href = '' class = ''>"." View Scores" . "</a></li>";  
                                      } ?></li>
                        </ul>
                </div>    
        </nav>
        <div id = "title_section">
            <h1 class = "main_title">View Scores</h1>
        </div>
        <br/>
        <br/>
        <div class = "step_section">
            <h4>Select a student to view:</h4>    
            <form>
                <select name="users">
                <?php
                    $query = "SELECT Username FROM users";
                    $allUsers = mysqli_query($db,$query);
                    echo "<option value = '*'> All </option>";
                    while($row = $allUsers->fetch_assoc()){
                        echo "<option value=".$row['Username'].">".$row['Username']."</option>";
                    }
                ?>
                </select>
                <br><br>
                <input class="btn btn-default" type = "submit" name = "Query"/>
            </form>
        </div> 
        <br>
        <?php
             
            $userName = $_GET['users'];
            if($userName == '*'){
                $query = "SELECT * FROM users";
            } else {
                 $query = "SELECT * FROM users WHERE Username = '$userName'";
            }
        
            $result = mysqli_query($db,$query);
            
            if($userName == '*'){
                echo "<table class = 'table table-responsive table-striped table-bordered table-hover'>
                      <thead>    
                        <tr>
                        <th>Name</th>
                        <th>Data Score</th>
                        <th>Condition Score</th>
                        <th>Loop Score</th>
                        <th>Collection Score</th>
                        <th>Methods</th>
                        <th>OOSection Score</th>
                        <th>Inheritance Score</th>
                        <th>Try Catch Score</th>
                        <th>I/O Score</th>
                        </tr>
                    </thead>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['Username'] . "</td>";
                        echo "<td>" . $row['Score'] . "/6</td>";
                        echo "<td>" . $row['Score2'] . "/6</td>";
                        echo "<td>" . $row['Score3'] . "/6</td>";
                        echo "<td>" . $row['Score4'] . "/6</td>";
                        echo "<td>" . $row['Score5'] . "/6</td>";
                        echo "<td>" . $row['Score6'] . "/6</td>";
                        echo "<td>" . $row['Score7'] . "/6</td>";
                        echo "<td>" . $row['Score8'] . "/6</td>";
                        echo "<td>" . $row['Score9'] . "/6</td>";
                        echo "</tr>";
                    }
                    echo "</table>";   
            } else {
                 if($result){
                    while($row = $row = mysqli_fetch_array($result)){
                        $dataPoint = array(
                            array($row['Score']),
                            array($row['Score2']),
                            array($row['Score3']),
                            array($row['Score4']),
                            array($row['Score5']),
                            array($row['Score6']),
                            array($row['Score7']),
                            array($row['Score8']),
                            array($row['Score9'])
                        );
                        
                    }
                
                }

                $jsonData = json_encode($dataPoint);
                ///echo $jsonData;
            }
        
        ?>
        
        <script>
            //Tutorial from D3 Tricks and Tips and DashingD3js
            //Width and height   
            //Using margins helps place the bar chart without there being any cuttoff, so the axis get
            //calulated the the cut of width/heights but when
            var margin = {top:30, right:30, bottom: 10, left: 40}
			var width = 550 - margin.left - margin.right;
			var height = 370 - margin.top - margin.bottom;
            
			var barPadding = 1;
            var setTickMark = 50;
			
            //This allows us to pull the information across from the query
			var usersScore = <?php echo json_encode($dataPoint); ?>;
            var barCaculation = width/usersScore.length;  //This formula was on the D3 Website, I did not create this
            
            var axisScaler = d3.scale.linear()
                                .domain([0,9])
                                .range([0,width]);
            
            var yAxisScale = d3.scale.linear()
                                .domain([6,0])
                                .range([0, height]);
			
			//Create SVG element
            //So here when defining the SVG element we add those reductions back to get the full W/H again
			var svg = d3.select("body")
						.append("svg")
						.attr("width", width + margin.left + margin.right)
						.attr("height", height + margin.bottom + margin.top)
                        .append("g")
                        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

			svg.selectAll("rect") //The shape element required for the graph
			   .data(usersScore)
			   .enter()
			   .append("rect")
			   .attr("x", function(d, i) {
                    //To get a far X spacing for the chart we get the index of the information and times it by the barCalculation
                
			   		return i * barCaculation + 10;
			   })
			   .attr("y", function(d) {
			   		return height - (d * setTickMark + 10);
			   })
			   .attr("width", barCaculation - barPadding)
			   .attr("height", function(d) {
			   		return d * setTickMark;
			   })
            
            //All the Axies stuff
            var xAxies = d3.svg.axis()
                            .scale(axisScaler)
                            .orient("bottom");
            
            var yAxies = d3.svg.axis()
                            .scale(yAxisScale)
                            .orient("left")
                            .ticks(6);
                            
            
            var xAxisGroup = svg.append("g")
                                .attr("transform", "translate(10," + (height - 10) + ")")
                                .call(xAxies);
            
            var yAxisGroup = svg.append("g")
                                .attr("transform", "translate(" + 15 + ",15)")
                                .call(yAxies);
            
            typeof(xAxies);
            
        </script>
        <br><br>
    </body>
</html>    