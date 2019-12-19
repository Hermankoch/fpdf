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
          $matches = strpos($line, ",");
          $textStart = $matches + 1;
          $optionsEnd = $matches;
          $text = trim(substr($line, $textStart));
          $options = explode(" ", substr($line, 0, $optionsEnd));
          echo $text;
          print_r($options);
          echo '<div class="inputWrapper"><input class="heading_1 tooltip" type="text" name="line1" value="Strictly private and confidential"></div>';

          }
        }
        fclose($myfile);
      }else {
        echo "error";
      }



     ?>


  </body>
</html>
