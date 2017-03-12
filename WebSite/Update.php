                    <?php
                        /*
                        $db = mysqli_connect('localhost','root','','teachingaidapp') or die('Error connecting to MYSQl');
                    
                        include_once('simple_html_dom.php');
                        
                        $html = file_get_html('Data_Fundementals.php');
                    
                        $ret = $html->find('p[id=new]', 0); 
                    
                        $query = "INSERT INTO users (Score) VALUES ('$ret')";
                    
                        mysqli_query($db, $query);


                        if(mysqli_affected_rows($db) > 0){
                            echo "<p>Score added</p>";
                        } else {
                            echo "<p> not added</p>";
                            echo mysqli_error ($db);    
                        }
                    
                        echo $ret;*/

                        echo $_GET['scoreForSession'];
                    ?>