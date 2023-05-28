<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="php.css">
</head>
<body>
    <h1 class="hero">PHP Calculator</h1><i class="uil uil-calculator-alt"></i>
    <div class="container">
        <form action="" method="GET">
            <div class="answer">
                <?php
                    if(isset($_GET['submit'])){
                        $result1 = $_GET['num1'];
                        $result2 = $_GET['num2'];
                        $operator = $_GET['operator'];

                    switch($operator)    {
                        case"None":
                            echo"You need to select a method!";
                            break;

                        case"Add":
                            echo $result1 + $result2;
                                break;

                         case"Subtract":
                             echo $result1 - $result2;
                                    break;   
                                    
                        case"Multiply":
                             echo $result1 * $result2;
                                    break;  
                                    
                        case"Divide":
                             echo $result1 / $result2;
                                    break;            
                    }
                    }
                ?>
            </div><br><br>
            <input type="text" name="num1" placeholder="Enter first number"><br><br>
            <input type="text" name="num2" placeholder="Enter second number"><br><br>
            <select name="operator" id="">
                <option>None</option>
                <option >Add</option>
                <option >Subtract</option>
                <option >Multiply</option>
                <option >Divide</option>
            </select><br><br><br>
            <button type="submit" value="submit" name="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
