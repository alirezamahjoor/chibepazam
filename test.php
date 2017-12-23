
<?php if(@$_POST['submit'])
    $count=0;
        $count=     count(@$_POST['ingredient']);
        $name= @$_POST['ingredient'];



        print_r($_POST['ingredient']);

       echo "json_encode";
        $je=json_encode($name);
    print_r($je);
        echo "<br>"."json_encode"     ;
        $jd=json_encode($name);

    print_r($je);
echo $count;




$food_query=mysqli_query($connect,"SELECT ingredient FROM t_food ");
$food=mysqli_fetch_all($food_query,MYSQLI_ASSOC);
$food_array=json_encode($food);

echo "<br>count".count($food);
    if(in_array("je","$food_array"))
        echo "بودش داداش";
    else
        "شرمنده تم چیزی ییدا نکردم";

?>