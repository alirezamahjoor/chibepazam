<?php
include '../db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>
<body><div align="center">


<table>
    <tr>
        <td align="center">

            <h1 style="background-color:lightgreen"> قصد انجام چه کاری داری؟ </h1>
        <td >
        </td>
        <tr><td>
            <div class="scroll">
                <form action="#" method="post">

                    <input type="submit" value="ثبت ماده اولیه" name="sabt_ing">

                    <input type="submit" value=" ثبت غذا" name="sabt_food">

                </form>
                <?php
                if(@$_POST['sabt_ing'])
                {
                header('location: ingredient.php');
                }

                if(@$_POST['sabt_food'])
                {
                    header('location: food.php');
                }

                ?>
            </div>
        </td>

    </tr>
    <tr>
<td>


</td>
    </tr>
</table>
</body>
</html>