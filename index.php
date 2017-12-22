<?php
include 'db.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Completely CSS: Custom checkboxes, radio buttons and select boxes</title>
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body  dir="rtl">


<div align="center"><h1 >چی بپزم؟</h1>
</div>



<table border="0">
    <tr>
        <td align="center" >

    <h1 style="background-color:lightgreen">چی تو خونه داری؟</h1>
        </td >
    </tr>
    <tr>
        <td >
            <div class="scroll">
                <form action="#" method="post">
<?php
$primary_query=mysqli_query($connect,"SELECT id,name FROM t_primary");
$primary=mysqli_fetch_all($primary_query,MYSQLI_ASSOC);
foreach($primary as $item){
?>
    <label class="container"><?php echo $item['name']; ?>
    <input type="checkbox" name="ingredient[]" value="<?php echo $item['name']; ?>" >
    <span class="checkmark"></span>

    </label>

<?php } ?>

            </div>

        </td>
<td >


</td>
        <td >

            <img src="img/omlet.jpg" class="size">
        </td>
        <td >


        </td>

    </tr>
<tr>
<td>

<input type="submit" name="search" value="پیشنهاد غذا" >

    </form>
    <?php if(@$_POST['submit'])
        $count=0;
        $count=     count(@$_POST['ingredient']);
        $name= @$_POST['ingredient'];
        print_r($_POST['ingredient']);
        print_r(json_encode($name));
echo $count;
//$food_query=mysqli_query($connect,"SELECT name FROM t_food WHERE ingredient in('$name')");
//$food=mysqli_fetch_all($food_query,MYSQLI_ASSOC);
//echo count($food);
?>
</td>
</tr>
</table>
</body>
</html>
