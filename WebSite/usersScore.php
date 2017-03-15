<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
    <?php
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MySql');
    $score = $_GET['score'];
    $query = "SELECT * FROM users WHERE Username = '$score'";
    $result = mysqli_query($db,$query);
    
    
    echo "<table>
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
        <tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "<td>" . $row['Score'] . "</td>";
            echo "<td>" . $row['Score2'] . "</td>";
            echo "<td>" . $row['Score3'] . "</td>";
            echo "<td>" . $row['Score4'] . "</td>";
            echo "<td>" . $row['Score5'] . "</td>";
            echo "<td>" . $row['Score6'] . "</td>";
            echo "<td>" . $row['Score7'] . "</td>";
            echo "<td>" . $row['Score8'] . "</td>";
            echo "<td>" . $row['Score9'] . "</td>";
        }
        echo "</table>";
        mysqli_close($db);  
        ?>    
</body>
</html>
