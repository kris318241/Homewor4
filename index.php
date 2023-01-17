<?php
$xml = simplexml_load_file('data.xml');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Nunito:wght@700&family=Poppins&family=Raleway&family=Work+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class ="Header">
        <div class = "bax"> </div>
        <div id="ooo" class="img" style="background-image: url('img1/мята.png') ;"> </div>
        <div class ="Header-item">
            <div class ="Header-items">
                 <div><img src = "img1/лупа.png" style="width:20px;height:20px;"></div>
                <div ><img src = "img1/Тележка.png" style="width:20px;height:20px;margin-left:20px;"></div>
                <button class="button" > Sign in</button>
                <button class="button"> Sign up</button>
            </div>
            <h1>Kembang Flower Mantap</h1>
            <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<p>
        </div>
    </header>

    <main1 class ="Main Container">
        <div class ="Main-item">

            <div class ="Main-items">
                <div class="img1" style="background-image: url('img1/доставка.png');"> </div>
                <h2>Fast  Delivery</h2>
            </div>
            <p class="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
         </div>

        <div class ="Main-item">
            <div class ="Main-items">
                <div class="img1" style="background-image: url('img1/колцентр.png'); max-width: 48px;"></div>
                <h2>Great Customer Servise</h2>
            </div>
            <p class="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
        </div>

        <div class ="Main-item">
            <div class ="Main-items">
                <div class="img1" style="background-image: url('img1/цвяточек.png'); max-width: 48px;"></div>
                <h2>Original Plants</h2>
            </div>
            <p class="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
        </div>

        <div class ="Main-item">
            <div class ="Main-items">
                <div class="img1" style="background-image: url('img1/бакс.png'); max-width: 48px;"></div>
                <h2>Affordable Price</h2>
            </div>
            <p class="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
        </div>
    </main1>

    <div class= "line">
        <p id="FP">Featured Plants</p>
    </div>

<section class= "featured_plants" style=" box-sizing: border-box;  display: flex; flex-wrap: wrap; align-items: center; justify-content: space-around;  margin: 0px 26px 80px 56px;    text-align: center;  padding: 0px;">
    <div>
    <a href="create.php" style = "display: block; padding: 5px; border-radius: 10px; margin: 10px 0;  cursor: pointer; text-decoration: none; ">Создать новый товар</a>
    <div class="plants_gallery" style ="display: flex; flex-wrap: wrap; align-items: center; " >
        <?php foreach($xml->product as $product) { ?>
        <div class ="product_item" style="width: 217px; margin-right: 20px;">
        <img class="product_img" style="height: 217px;" src=" <?php echo $product->img ?> " alt="">
        <p class="product_name" style="    font-family:  Montserrat, normal; color: #2C1500; font-weight: 400; font-size: 20px; line-height: 20px; margin: 8px; text-align: center;"> 
        <?php echo $product->name ?> </p>
        <p class="product_cost" style="  font-family:  Montserrat, normal;color: #2C1500;font-weight: 600;font-size: 20px;line-height: 32px;margin: 8px;"> 
            <?php echo $product->cost ?> </p>

    <a class="text"style=" display: block; background-color: #156963 ; color: white; padding: 5px; border-radius: 10px; margin: 10px 0px;  cursor: pointer; text-decoration: none; text-align: center;width: 210px;" 
    href="change.php?id=<?php echo $product['id'] ?>">Изменить</a>
    <a style=" display: block; background-color: #156963 ; color: white; padding: 5px; border-radius: 10px; margin: 10px 0px;  cursor: pointer; text-decoration: none; text-align: center;width: 210px;" 
    class="text" href="delete.php?id=<?php echo $product['id'] ?>">Удалить</a>
        </div>

<?php } ?>


</div>
 </section>

    <main3 class="Main3 Container">
        <div class ="Main3-item">
            <div class ="Main3-items">
                <h3> Buy more plants, it helps you to be relaxed </h3>
                <p class ="text5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.</p>
                <div class="img" style="background-image: url('img1/зеркало.png'); height: 250px;max-width: 568px;"> </div>
            </div>
            <div id="polka" class="img" style="background-image: url('img1/полочки.png');height: 609.9px;"> </div>
        </div>
    </main3>


    <main4 class="Main4 Container ">
        <div class ="Main4-items">
            <h3 class ="text6" > Get your favourites plant on our shop now </h3>
            <button class="button" id = "bth1"> Visit Shop</button>
        </div>
        <div class="img" style="background-image: url('img1/цветоквруке.png'); height:300px; width: 300px;"></div>
    </main4>

    <footer class="Footer">
    <div class="footer">
        <div class="footer1">
            <h4>plantku</h4>
            <h5 id="t6">Plantku House</h5>
            <p class="text8" id="t7">Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282</p>
        </div>
        <div class="footer2">
            <h5>Perusahaan</h5>
            <p class="text8">Tentang Kami</p>
            <p class="text8">Hubungi Kami</p>
        </div>
        <div class="footer2">
            <h5>Produk</h5>
            <p class="text8">Tanaman</p>
            <p class="text8">Tanaman Lain</p>
        </div>
        <div class="footer3">
            <h5 id="t9">Berlangganan Email Kami</h5>
            <div id="MAE">
                <p id="t8" class="text8">Masukan Alamat Email</p>
            </div>
            <button class="button"  id="bthf"> Submit</button>
        </div>
    </div>
    </footer>
