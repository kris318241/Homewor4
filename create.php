<?php 
    if (isset($_POST['submit'])) {
        $imgproduct = $_POST['imgproduct'];
        $nameproduct = $_POST['nameproduct'];
        $costproduct= $_POST['costproduct'];

        $xml = simplexml_load_file("data.xml");

        $lastEl = $xml->product[$xml->count() - 1];

        $newproduct = $xml->addChild('product', '');
        $newproduct->addChild('name', $nameproduct);
        $newproduct->addChild('cost', $costproduct);
        $newproduct->addChild('img', $imgproduct);

        $newproduct->addAttribute('id', $lastEl['id'] + 1);

        $xml->saveXML("data.xml");

        echo "<script>
        alert('Товар успешно создан!');
        location.href = 'index.php';
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgproduct" placeholder="url кактуса">
        <br>
        <input type="text" name="nameproduct" required placeholder="введите название кактуса">
        <br>
        <input type="text" name="costproduct" required placeholder="введите цену товара">
        <br>
        <button type="submit" name="submit">Создать</button>
    </form>

    <a href="index.php">Назад</a>
</body>
</html>