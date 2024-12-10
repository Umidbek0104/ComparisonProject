<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../Css/style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
</head>
<body>
<header>
    <div class="container">
        <div class="header_block">
            <h1>Asosiy</h1>
            <div class="input_block">
                <input type="text" class="search_input" placeholder="Qidirish" />
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="addPhone">
            <a href="{{route('admin_add.phone')}}" class="comparisonLink"><button class="addbtn">Telefon Qo'shish</button></a>
        </div>
        <div class="phone">
            <div class="phone_1">
                <img src="../image/image.png" alt="" class="img_phone">
                <p class="phone_title">Infinix</p>
            </div>
            <div class="right_left">
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
            </div>
            <div class="phone_1">
                <img src="../image/xiomi.png" alt="" class="img_phone">
                <p class="phone_title">Xiomi</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>
