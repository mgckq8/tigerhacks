<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SA Function</title>
        <meta charset="utf-8">
        
        <script>
        
            a {
                color: white;
            }
            
            h1 {
                color: white;
            }
        </script>
    </head>
    <body style = "background-image: url('imgs/spaceBackground.jpg')">

        <?php

            $answer1 = $_POST['fruitQuestion'];
            $answer2 = $_POST['milkQuestion'];
            $answer3 = $_POST['fatQuestion'];
            $answer4 = $_POST['grainQuestion'];
            $answer5 = $_POST['veggieQuestion'];
            $answer6 = $_POST['meatQuestion'];


            $totalCorrect = 0;

            if ($answer1 == "fruit") { $totalCorrect++; }
            if ($answer2 == "cow") { $totalCorrect++; }
            if ($answer3 == "poly") { $totalCorrect++; }
            if ($answer4 == "salt") { $totalCorrect++; }
            if ($answer5 == "leaves") { $totalCorrect++; }
            if ($answer6 == "pork") { $totalCorrect++; }
        
            if ($totalCorrect < 2) {
                $outputGif = "meat2.gif";
            } 
            if ($totalCorrect < 5 && $totalCorrect > 2) {
                $outputGif = "veggie.gif";
            }
            if ($totalCorrect >= 5) {
                $outputGif = "watermelon.gif";
            }

            echo "<a style='color: white' href='index.html'>Back</a>";
            echo '<h1 style="color: white">' . $totalCorrect . '/6 correct</h1>';
            
            echo '<div class="gifs"><img src="imgs/' . $outputGif .'" alt="This is a funny meat gif" /></div>';
        
                
        ?>
    </body>
</html>