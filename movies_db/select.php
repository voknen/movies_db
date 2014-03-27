<?php
$connect=  mysql_connect("localhost","root","ivan")
        or die("Hey loser, check your server connection!");

mysql_select_db("moviesite");

$query="SELECT movie_name,movie_type FROM movie
    WHERE movie_year>1990 ORDER BY movie_type";
$results=  mysql_query($query)
        or die(mysql_error());

while ($row=  mysql_fetch_assoc($results)){
    foreach ($row as $val1){
    echo $val1;
    echo"  ";
    }
    echo "<br>";
}

?>
