<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SA Function</title>
        <meta charset="utf-8">
    </head>
    <body>

        <?php

            $answer1 = $_POST['fruitQuestion'];
            $answer2 = $_POST['milkQuestion'];
            $answer3 = $_POST['fatQuestion'];
            $answer4 = $_POST['grainQuestion'];
            $answer5 = $_POST['veggieQuestion'];
            $answer5 = $_POST['meatQuestion'];

            $totalCorrect = 0;

            if ($answer1 == "fruit") { $totalCorrect++; }
            if ($answer2 == "cow") { $totalCorrect++; }
            if ($answer3 == "poly") { $totalCorrect++; }
            if ($answer4 == "salt") { $totalCorrect++; }
            if ($answer5 == "leaves") { $totalCorrect++; }
            if ($answer6 == "pork") { $totalCorrect++; }

            echo "<a href='index.html'>Back</a>";
            echo '<h1>' . $totalCorrect . '/5 correct</h1>';
                
        ?>
    </body>
</html>