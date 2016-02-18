<?php
//check if there is variable in the URL
if (isset($_GET["From"])) {

  //only if there is From in the URL
  //echo "there is From";

  //if its empty
  if(empty($_GET["From"])){
    //it is empty
    echo "Please type your name!";
  }else{
      //its not empty
    echo "Mrom: ".$_GET["From"]."<br>";
  }

}else{
   //echo"there is no such thing as From";
 }

 if (isset($_GET["To"])) {

   //only if there is From in the URL
   //echo "there is To";

   //if its empty
   if(empty($_GET["To"])){
     //it is empty
     echo "Please type the receiver!";
   }else{
       //its not empty
     echo "Mrom: ".$_GET["To"]."<br>";
   }

 }else{
    //echo"there is no such thing as To";
  }

if (isset($_GET["message"])) {

  //only if there is message in the URL
  //echo "there is message";

  //if its empty
  if(empty($_GET["message"])){
    //it is empty
    echo "Please enter the message!";
  }else{
      //its not empty
    echo "Message: ".$_GET["message"]."<br>";
  }

}else{
   //echo"there is no such thing as message";
 }


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
