<?php 
    $xml = simplexml_load_file("data.xml");
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $id = $_GET['id'];

        foreach($xml->product as $product) {
            if ($product['id'] == $id) {
                $name = $product->name;
                $img = $product->img;
                $cost = $product->cost;
                break;
            }
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['id'];

        foreach($xml->product as $product) {
            if ($product['id'] == $id) {
                $product->name = $_POST['nameproduct'];
                $product->cost = $_POST['costproduct'];
                $product->img = $_POST['imgproduct'];
                break;
            }
        }

        $xml->saveXML("data.xml");
        echo "<script>
        alert('данные успешно обновлены');
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
    <title>Изменение данных</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="imgproduct" value="<?php echo $img ?>">
        <br>
        <input type="text" name="nameproduct" value="<?php echo $name ?>">
        <br>
        <input type="text" name="costproduct" value="<?php echo $cost?>">
        <!--  -->
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <br>
        <button type="submit" name="submit">Сохранить</button>
    </form>

    <a href="index.php"> назад</a>
</body>
</html>