<?php
    $dice_roll = null;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["button"])) {
            $sided_dice = $_POST["dice"];
            $num_dice = (int)$_POST["quantity"];
            $i = 1;
            switch ($sided_dice) {
                case "4":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 4);
                        $i++;
                    }
                    break;

                case "6":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 6);
                        $i++;
                    }
                    break;
                
                case "8":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 8);
                        $i++;
                    }
                    break;
                
                case "10":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 10);
                        $i++;
                    }
                    break;
                
                case "12":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 12);
                        $i++;
                    }
                    break;

                case "20":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 20);
                        $i++;
                    }
                    break;

                case "100":
                    while($i <= $num_dice) {
                        $dice_roll[] = random_int(1, 100);
                        $i++;
                    }
                    break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dice Roller</title> 
    </head>

    <body>
        <h1>Roll Your Dice</h1>
        <form method="POST">
            <label for="dice">Choose Your Die</label>
            <select id="dice" name="dice">
                <option value="4">D4</option>
                <option value="6">D6</option>
                <option value="8">D8</option>
                <option value="10">D10</option>
                <option value="12">D12</option>
                <option value="20">D20</option>
                <option value="100">D100</option>
            </select>
            <br>
            <label>How Many Dice Would You like to Roll?</label>
            <select id="quantity" name="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <br>
            <button type="submit" name="button">Roll Dice</button>
        </form>

        <?php if ($dice_roll !== null): ?>
            <h2>You Rolled a: <?= implode(', ', $dice_roll) ?>
        <?php endif ?>
    </body>
</html>