<?php

//getting the message from address
//if there is ?name= .. then $_GET["name"]
$my_message = $_GET["message"];
$To = $_GET["To"];
$from = $_GET["From"];

echo "My message is ".$my_message." and is to ".$To."and from".$from;

 ?>

 <h2> First application  </h2>

<form method="get">

  <label for="From">From:* <label><br>
    <input type="text" name="From"><br>

   <label for="To">to:* <label>
     <input type="text" name="To"><br><br>

     <label for="message">Message:* <label><br>
       <input type="text" name="message"><br>

     <!-- This is the save button-->
     <input type= "submit" value= "Save to DB">

<form>
