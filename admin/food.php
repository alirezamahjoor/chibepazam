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
<body dir="rtl"><div align="center">


    <table>
        <tr>
            <td align="center">

                <h1 style="background-color:lightgreen"> ثبت غذا </h1>

            </td>
        </tr>
        <tr>
            <td>
                <div class="scroll">
                    <form action="#" method="post">
                        <div align="right"> <label for="fname" >نام غذا</label>
                            <input type="text" id="" name="fname" value="" dir="rtl">
                        </div>

                    </form>


                    <form action="#" method="post">
                        <?php
                        $primary_query=mysqli_query($connect,"SELECT id,name FROM t_primary");
                        $primary=mysqli_fetch_all($primary_query,MYSQLI_ASSOC);
                        foreach($primary as $item){
                            ?>
                            <label class="container"><?php echo $item['name']; ?>
                                <input type="checkbox" name="ingredient[]" value="<?php echo $item['id']; ?>" >
                                <span class="checkmark"></span>

                            </label>

                        <?php } ?>

                </div>

            </td>
        </tr>
        <tr>
            <td>
                <div class="scroll">
                <input type="submit" value="ثبت" name="sabt">
                <input type="submit" value="بازگشت به صفحه اصلی" name="return">
                    <?php
                    if(@$_POST['sabt'])
                    {                $sabt_query=mysqli_query($connect,"INSERT INTO t_primary(name) VALUES('$_POST[fname]')");
                        echo "<br><div align=right>".'با موفقیت ثبت شد'."</div>";
                    }

                    ?>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>