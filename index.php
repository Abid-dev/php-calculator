<!Doctype html>
<html>

    <head>
        <title>Calculator</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="calculator.css">

    </head>
    <body>

        <header>
        <h1>Calculator</h1>
        <p>Calculate <i>anything</i> difficult or easy</p>
        </header>


        <form action="index.php" method="get">
        <!-- <label>Type your first number</label> -->
        <input type = "number" name="num1" placeholder="Number 1">
        <br>
        <!-- <label>Choose an operation!</label> -->
        <select name="operation">
        <option value="add">+</option>
        <option value="subtract">-</option>
        </select>
        <br>
        <!-- <label>Type your first number</label> -->
        <input type="number" name="num2" placeholder="Number 2">
        <button type="submit">Calculate!</button>
        </form>
        <br>

        <!-- // It is better to do it with the HTML seemingly -->
        <!-- Answer:<?php
          echo calc($num1, $operation, $num2);
         ?> -->
         <?php

         function calc($num1, $operation, $num2){
             $sum;
             switch ($operation){
                 case "add":
                     $sum = $num1 + $num2;
                     break;
                 case "subtract":
                     $sum = $num1 - $num2;
                     break;
                 default:
                     $sum = "there was an error";
                     break;
             }
             return $sum;
         }

         $num1 = $_GET["num1"];
         $operation = $_GET["operation"];
         $num2 = $_GET["num2"];

         $result = calc($num1, $operation, $num2);
         print "The answer is: " . $result;
         ?>

    </body>
</html>
