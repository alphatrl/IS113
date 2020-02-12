<?php 

if (!isset($_POST['msg']) && isset($POST['msg']) == '') {

  echo("Message cannpt be empty");

} else {

  // compulsary variables
  $msg = $_POST['msg'];
  $color = $_POST['color'];

  // Optional Variables 
  // Set to empty if not pressed by user
  $styles = $_POST['styles'] ?? array();
  $bgcolor =  $_POST['bgcolor'] ?? "white";


  // Use HTML tags (Comment this when you want to test the CSS)
  // set font styles (will skip if empty)
  foreach ($styles as $style){
    if ($style == "italic") {$msg = "<i>" . $msg . "</i>";}
    if ($style == "bold") {$msg = "<b>" . $msg . "</b>";}
  }

  // print HTML document
  echo("
    <body bgcolor='$bgcolor'>
      <font color='$color'>
        $msg
      </font>
    </body>
  ");

  // CSS CODE
  // uncomment the bottom and comment the HTML Tag Part
  // $stylesheet = "";

  // // Add style to $stylesheet
  // foreach ($styles as $style) {
  //   if ($style == "italic") {$stylesheet .= "font-style: italic; ";}
  //   if ($style == "bold") {$stylesheet .= "font-weight: bold; ";}
  // }
  
  // // Add bgcolor
  // $stylesheet .= "background-color: $bgcolor; ";
  // $stylesheet .= "color: $color; ";

  // // print HTML 
  // echo("
  //   <body style='$stylesheet'>
  //     $msg
  //   </body>
  
  // ");
}

?>