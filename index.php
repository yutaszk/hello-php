<?php
    $num1 = (int)htmlspecialchars($_POST['num1']);
    $num2 = (int)htmlspecialchars($_POST['num2']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    <p>Hello PHP World</p>
    <form action="index.php" method="post">
        <p>
            <input type="number" name="num1" value=<?= $num1 ?>
            > * <input type="number" name="num2" value=<?= $num2 ?>
            > = <?= $num1 * $num2 ?>
        </p>
        <p><input type="submit" value="計算"></p>
    </form>
</body>
</html>
