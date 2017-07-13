<html>
<head>

</head>
<body>
Laiks:
<?php
    echo time();
?>
<br>
Datums:
<?php
    echo date("d.m.Y H:i:s");
    echo "<br>";
    echo 2+2;

    $o1 = $_POST['o1'] ?? 0;
    $o2 = $_POST['o2'] ?? 0;
    $d = $_POST['d'] ?? '+';
?>
<form method="post" action="index.php">
    <input type="text" name="o1" placeholder="operands 1" value="<?= $o1 ?>">
    <input type="text" name="o2" placeholder="operands 2" value="<?= $o2 ?>">
    <input type="text" name="d" placeholder="darbiba" value="<?= $d ?>">
    <input type="submit">
</form>
<?php
    /*
    if ($d == '+'){
        echo $o1+$o2;
    }
    else if ($d == '-'){
            echo $o1-$o2;
    }
    */
    $result = 0;
    switch ($d){
        case '+':
            $result = $o1+$o2;
            break;
        case '-':
            $result = $o1-$o2;
            break;
        case '*':
            $result = $o1*$o2;
            break;
        case '/':
            $result = $o1/$o2;
            break;
    }
?>
    <div> <?= $result ?></div>

<?php

    function printarr($masivs) {
        foreach ($masivs as $key=>$elem){
            echo $key.' ir '.$elem.' ';
            echo "<br>";
        }
        echo "<br>";
    }

    $arr = array(1,2,3,4);
    for ($i=0;$i<4;$i++){
        echo $arr[$i]."";
    }
    echo "<br>";

    foreach ($arr as $elem){
        echo $elem.'';
    }

    echo "<br>";
    echo "<br>";
    printarr($arr);
    $arr = [1,2,3,4];
        for ($i=0;$i<4;$i++){
            echo $arr[$i]."";
    }

    echo "<br>";

    foreach ($arr as $elem){
        echo $elem.'';
    }
    echo "<br>";
    echo "<br>";
    printarr($arr);
    $assarr = ['pirmais'=>1, 'otrais'=>2,'trešais'=>3, 'ceturtais'=>4];
    printarr($assarr);
?>
ata, master.
</body>
</html>
