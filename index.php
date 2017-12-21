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


    <h1>مواد اولیه</h1>
<?php
$primary_query=mysqli_query($connect,"SELECT name FROM t_primary");
$primary=mysqli_fetch_all($primary_query,MYSQLI_ASSOC);
foreach($primary as $item){
?>

    <label class="container"><?php echo $item['name']; ?>
    <input type="checkbox" >
    <span class="checkmark"></span>

    </label>

<?php } ?>


</body>
</html>
