<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Result</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/result.css">
</head>
<body>
<header>
    <div class="container">
        <div class="header_block">
            <h1>Asosiy</h1>
            <div class="input_block">
                <input type="text" class="search_input" placeholder="Qidirish">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
</header>.
<main>
    <div class="container">
        <div class="phene_result">
            @foreach($phones as $phone)
            <div class="phone_1">

                <img src="{{'/image/'.$phone->image}}" alt="">
                <p class="phone_title">Telefon nomi: {{$phone->name}}</p>
                <ul class="desciption_list">
                    <li class="desciption_item">Operatsion tizimi - {{$phone->os}}</li>
                    <li class="desciption_item">Display - {{$phone->display}}</li>
                    <li class="desciption_item">Asosiy kamera - {{$phone->asosiy_kamera}}</li>
                    <li class="desciption_item">Old kamera - {{$phone->old_kamera}}</li>
                    <li class="desciption_item">Xotira - {{$phone->xotira}}</li>
                </ul>

            </div>
            <div class="right_left">
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
            </div>
            <div class="phone_1">
                <img src="../image/image.png" alt="">
                <p class="phone_title">Xiomi</p>
                <ul class="desciption_list">
                    <li class="desciption_item">Brend - Xiomi</li>
                    <li class="desciption_item">Ekranning yangilanish tezligi 80 Gtz</li>
                    <li class="desciption_item">Asosiy kamera - 50mp 0,08mp</li>
                    <li class="desciption_item">Protsessor - Mediatek Helio G36</li>
                    <li class="desciption_item">Old Kamera - 8mp</li>
                </ul>

            </div>
            @endforeach
        </div>
    </div>
</main>
</body>
</html>
