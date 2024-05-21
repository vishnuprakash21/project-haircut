<?php

$conn = new mysqli ("localhost", "root", "", "haircut");

$sql="SELECT * FROM datas";

foreach ($conn->query($sql)as $row){
    echo "Name : $row[name] - Email $row[email] - Subject $row[subject] - Message : $row[message] <br>";
}
?>