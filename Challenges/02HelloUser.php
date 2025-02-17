<?php
 /*
  * 2) Write a program that reads a person's name and displays a welcome message for them:  
  * Example:  
  * What is your name? João da Silva  
  * Hello João da Silva, it's a pleasure to meet you!
  */
  
  $name = (string) readline("What is your name ? " );

  printf("Hello " . $name . " nice to meet you ! \n");

  readline("Press Enter to Exit ... ");

?>