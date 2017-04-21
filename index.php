<?php
  require "test/index.php";

  $output = "<!DOCTYPE html>
              <html>
                <head>
                  <title>
                    Pruebas
                  </title>
                </head>
                <body>";
  foreach($tests as $key => $value){
    $output .= $key . "-----" . ($value   ? 'OK' : 'NOPE' );
  }
  $output .=   "</body>
              </html>";
  echo $output;
?>
