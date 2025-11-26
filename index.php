<!-- Variables in PHP -->

<?php

    // echo "Hello World!" . "<br>";
    // echo("Nice to meet you everyone!");

    // Data Types in PHP
    // String
    // Integer
    // float
    // Boolean


    // Variable Creation in PHP

    // $txt = 'Hello World';
    // $txt2 = "Nice to meet you everyone!";
    // $x = 5;
    // $y = 10.5;

    // echo $txt .' ' . $x . ' ' . $y . "<br>";
    // echo $txt2 . '<br>';
    // echo $txt . ' ' . $txt2 . '<br>';

    // Variable creation in PHP is case-Sensitive

    // $number1 = (int) readline("Enter Number: ");
    // $number2 = (int) readline("Enter Number: ");

    // $total = $number1 + $number2;
    // $subtract = $number1 - $number2;
    // $division = null;

    // if($number2 > 0)
    // {
    //     $division = $number1/$number2;
    // }
    // $multiply_numbers = $number1 * $number2;

    // echo "Addition of Two Numbers: " . $total . "<br>";
    // echo "Subtraction of Two Numbers: " . $subtract . "<br>";
    // echo "Division of Two Numbers: " . $division . "<br>";
    // echo "Multiplication of Two Numbers: " . $multiply_numbers . "<br>";

    // echo 5%12;  Remainder Operator

    // Exponential Operator
    // echo 2 ** 4;


    # Increment and decrement operators 

    // $a = 5;
    // echo ++$a . "<br>";
    // echo $a++ . "<br>";
    // echo $a;


    // $a = true;
    // $b = false;

    // echo $a + $b; -> This is called Implicit conversion in PHP

    # check if even or odd

    // $is_even = 5%2;

    // if($is_even == 0)
    // {
    //     echo "Even Number";
    // }

    // else
    // {
    //     echo "ODD Number!";
    // }


    # Ternary Operator
    // $number = (int) readline("Enter Number: ");
    // $num_positive = $number > 0 ? "Number is Positive" : "Negative Number";
    // echo $num_positive;


    # Conditional Statements in PHP

    # foreach loop over Associative Array

        // $capitals = [
        //     'Japan' => 'Tokyo',
        //     'Pakistan' => 'Islamabadh',
        //     'India' => 'New Delhi',
        //     'France' => 'Paris',
        //     'Germany' => 'Berlin',
        //     'United Kingdom' => 'London',
        //     'United States' => 'Washington D.C.'
        // ];

        // foreach($capitals as $key => $value)
        // {
        //     if($key == 'Pakistan')
        //     {
        //         echo "Country does not exist Anymore!" . "<br>";
        //         continue;
        //     }
        //     echo "Country: " .$key . " " ."Capital City: " .  $value . "<br>";
        // }

        // $age = (int)readline("Enter Age: ");

        // if($age > 18)
        // {
        //     echo "Person is Eligible for vote!";
        // }

        // elseif($age < 18)
        // {
        //     echo "Person has still time to vote!";
        // }

        // else
        // {
        //     echo "Non-Age Value!";
        // }


        # Switch statements in PHP

        // $num1 = (int)readline("Enter Number1: ");
        // $num2 = (int)readline("Enter Number2: ");

        // $operator = readline("Enter Operator(+,-,*,/): ");
        // $result = null;

        // switch($operator)
        // {
        //     case "+":
        //         $result = $num1 + $num2;
        //         echo "Sum of Numbers: " . $result;
        //         break;
        //     case "-":
        //         $result = $num1 - $num2;
        //         echo "Subtraction of Numbers: " . $result;
        //         break;
        //     case "*":
        //         $result = $num1 * $num2;
        //         echo "Product of Numbers: " . $result;
        //         break;
        //     case "/":
        //         $result = $num1 / $num2;
        //         echo "Division of Numbers: " . $result;
        //         break;
        //     default:
        //         echo "Unwanted Result!";
        //         break;
        // }


        # Iteration In PHP

        // $i = 0;
        // while($i<5)
        // {
        //     echo "Hello World! " . "<br>";
        //     $i++;
        // }

        // $friends = ['Ram','Rohit','Mohit','Vaibhav','Piyush'];

        // for($i=0; $i<count($friends);$i++)
        // {
        //     echo "Friend: " . $i+1 . " " . $friends[$i] . "<br>";
        // }

        # do while in PHP

        // $i=1;

        // do
        // {
        //     echo $i . "<br>";
        //     $i++;
        // }
        // while($i <= 100);


        # functions in php

        // function add_numbers($num1,$num2)
        // {
        //     $result = $num1 + $num2;
        //     return $result;
        // }

        // $sum1 = add_numbers(25,75);
        // $sum2 = add_numbers(25,175);
        // echo "Sum of Numbers: $sum1" . "<br>";
        // echo "Sum of Numbers: $sum2" . "<br>";

?>

