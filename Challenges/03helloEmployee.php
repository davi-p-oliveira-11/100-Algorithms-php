<?php
  /*
  * 3) Create a program that reads an employee's name and salary, and displays a message at the end.  
  *    Example:  
  *    Employee's Name: Maria do Carmo  
  *    Salary: 1850.45  
  *    The employee Maria do Carmo has a salary of R$1850.45 in June.
  *
  */

  $name = (string) readline("What is your name ? " );
  $salary = (string) readline("What is the value of your salary ? " );

  printf("The employee " . $name . " has a salary of " . $salary . "USD \n");

  readline("Press Enter to Exit ... ");
?>