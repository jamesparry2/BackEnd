
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
<body>
    <?php
    $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MySql');
    $score = $_GET['users'];
    $query = "SELECT * FROM users WHERE Username = '$score'";
    $query = "SELECT * FROM users";
    $result = mysqli_query($db,$query);
    
    /*
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
        echo "</table>";*/
        
        $data = array();
        while($row = mysqli_fetch_array($result)){
            $row_data = array('Username' => $row['Username'],
                             'Score' => $row['Score'],
                             'Score2' => $row['Score2'],
                             'Score3' => $row['Score3'],
                             'Score4' => $row['Score4'],
                             'Score5' => $row['Score5'],
                             'Score6' => $row['Score6'],
                             'Score7' => $row['Score7'],
                             'Score8' => $row['Score8'],
                             'Score9' => $row['Score9']);
            array_push($data,$row_data);
        }
        echo json_encode($data);
        mysqli_close($db);  
        ?>    
</body>
