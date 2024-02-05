<?php
    //Loop For
    for ($i = 1; $i <= 30; $i++) {
      if($i % 14 == 0 && $i % 4 == 0){
          echo "UNICTIVE MEDIA" . "\n";
      }elseif($i % 4 == 0){
          echo "UNICTIVE" . "\n";
      }else{
          echo "For $i" . "\n";
      }
    }
    
    //Loop While
    $i = 1;
    while($i <= 30){
      if($i % 14 == 0 && $i % 4 == 0){
        echo "UNICTIVE MEDIA" . "\n";
      }elseif($i % 4 == 0){
          echo "UNICTIVE" . "\n";
      }else{
          echo "While $i" . "\n";
      }
  
      $i++;
    }

    //Loop Do While
    $i = 1;
    Do{
        if($i % 14 == 0 && $i % 4 == 0){
            echo "UNICTIVE MEDIA" . "\n";
        }elseif($i % 4 == 0){
            echo "UNICTIVE" . "\n";
        }else{
            echo "Do $i" . "\n";
        }
    
        $i++;
    }While($i <= 30);

?>
