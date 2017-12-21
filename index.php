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



<table>
    <tr>
        <td align="center" >

    <h1 style="background-color:lightgreen">مواد اولیه</h1>
        </td >
    </tr>
    <tr>
        <td>
            <div class="scroll"><form action="#" method="post">
<?php
$primary_query=mysqli_query($connect,"SELECT id,name FROM t_primary");
$primary=mysqli_fetch_all($primary_query,MYSQLI_ASSOC);
foreach($primary as $item){
?>
    <label class="container"><?php echo $item['name']; ?>
    <input type="checkbox" name="<?php echo $item['id'];?>" >
    <span class="checkmark"></span>

    </label>

<?php } ?>
                </form>
            </div>

        </td>



    </tr>
<tr>
<td>

<input type="submit" name="search" value="پیشنهاد غذا" >


</td>
</tr>
</table>
</body>
</html>
