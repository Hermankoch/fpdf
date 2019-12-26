<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /* $string = "heading 1 none, Strictly private and confidential";
    $matches = strpos($string, ",");
    $textStart = $matches + 1;
    $optionsEnd = $matches;

    $text = trim(substr($string, $textStart));
    $options = explode(" ", substr($string, 0, $optionsEnd));
    echo $text;
    print_r($options);
    */

    function createElement($text, $type, $options){

    }

    //<div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value="Strictly private and confidential"></div>


      $myfile = fopen("test.txt", "r") or die("Unable to open file!");
      if($myfile){
        while (($line = fgets($myfile)) !== false) {
          $line = trim($line);
          if(!empty($line)){
          $matches = stripos($line, ",");
          $textStart = $matches + 1;
          $optionsEnd = $matches;
          $text = trim(substr($line, $textStart));
          $options = explode(" ", substr($line, 0, $optionsEnd));
          echo $text;
          print_r($options);
          $underline = "";
          $bold = "";
          $headingType = $options[0] . "_" . $options[1];

          //Check for options in text file
          if(!empty($options[2])){
          if($options[2] == "underline"){
            $underline = " u-underline";
          }else if($options[2] == "bold"){
            $bold = " u-bold";
          }
          }
          if(!empty($options[3])){
          if($options[3] == "underline"){
            $underline = " u-underline";
          }else if($options[3] == "bold"){
            $bold = " u-bold";
          }
          } // check for options end


          if($headingType == "paragraph_1"){
            echo '<div class="inputWrapper"><textarea class="paragraph_1 tooltip'.$underline.$bold.'" name="name" rows="4" cols="80">'.$text.'</textarea></div>';
            }
            else {
              echo '<div class="inputWrapper"><input class="'.$headingType.' tooltip'.$underline.$bold.'" type="text" name="line1" value="'.$text.'"></div>';
            }
          }
        }
        fclose($myfile);
      }else {
        echo "error";
      }



     ?>


  </body>
</html>
