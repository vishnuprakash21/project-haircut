<?php

$conn = new mysqli ("localhost", "root", "", "haircutsub");

$sql="SELECT * FROM data_appoint";

foreach ($conn->query($sql)as $row){
    echo "Name : $row[name] - Phone $row[phone]  <br>";
}
?>