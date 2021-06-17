<?php

function Add($number1, $number2)
{
    return $number1 + $number2;
}


function Substract($number1, $number2)
{
    return $number1 - $number2;
}

Function Multiply($number1, $number2){
    return $number1 * $number2; 
}

function Dived($number1, $number2){
    return $number1 / $number2;
}

function Display()
{
    echo "<form action='genius.php' method='post'>";
    if (!empty($_POST["number1"]) && !empty($_POST["number2"])) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        if(is_numeric($number1) && is_numeric($number2)){
            echo "<p>La somme est égale à " . Add($number1, $number2) . ".</p>";
            echo "<p>La soustraction est égale à " . Substract($number1, $number2) . ".</p>";
            echo "<p>La multiplication est égale à " . Multiply($number1, $number2) . ".</p>";
            
            echo "<input type='submit' value='Recommencer'>";
        }
        else{
            Echo "<p>Les entrées n'étaient pas toutes les deux des nombres.</p><p>Vous avez entré:$number1 et $number2.</p><p>Veuillez recommencer:</p>";
            DisplayFormControls();
        }
    } else {
        DisplayFormControls();
    }
    echo "</form>";
}



function DisplayFormControls()
{
    echo "
    <input name='number1' type='number' id='number1Input'  placeholder='Entrez le premier nombre' required><br/><br/>
    <input name='number2' type='number' id='number2Input'  placeholder='Entrez le second nombre' required><br/><br/>
    <input type='submit' value='Envoyer'>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Johnny</title>
</head>

<body>
    <h1>Super programme de calculs !</h1>
    <?php Display(); ?>
</body>

</html>