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

            <h1 style="background-color:lightgreen"> ثبت مواد اولیه </h1>
        <td >
        </td>
        <tr><td>
            <div class="scroll">
                <form action="#" method="post">
                    <div align="right"> <label for="fname" >نام ماده تشکیل دهنده غذا</label>
                    <input type="text" id="" name="fname" value="" dir="rtl">
                    </div>
                    <input type="submit" value="ثبت" name="sabt">


                </form>
                <?php
                if(@$_POST['sabt'])
                {                $sabt_query=mysqli_query($connect,"INSERT INTO t_primary(name) VALUES('$_POST[fname]')");
                echo "<br><div align=right>".'با موفقیت ثبت شد'."</div>";
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