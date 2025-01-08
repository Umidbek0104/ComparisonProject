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

        </div>
    </div>
</header>
<style>
    .winner{
        background: aqua;
    }
    .loses{
        background: red;
    }
    .draw{
        background:royalblue;
    }
</style>
<main>
    <div class="container">
        <div class="phene_result" style="display: flex">

            <div class="phone_1">

                <img src="{{'/image/'.$phone1->image}}" alt="" width="100" height="100">
                <p class="phone_title">Telefon nomi: {{$phone1->name}}</p>
                <ul class="desciption_list">
                    <li class="desciption_item">Operatsion tizimi - {{$phone1->os}}</li>
                    <li class="@if($phone1->display == $phone2->display) draw @elseif($phone1->display > $phone2->display) winner @else loses @endif desciption_item">Display - {{$phone1->display}}</li>
                    <li class=" @if($phone1->asosiy_kamera == $phone2->asosiy_kamera) draw @elseif($phone1->asosiy_kamera > $phone2->asosiy_kamera) winner @else loses @endif desciption_item">Asosiy kamera - {{$phone1->asosiy_kamera}}</li>
                    <li class=" @if($phone1->batareka == $phone2->batareka) draw @elseif($phone1->batareka > $phone2->batareka) winner @else loses @endif desciption_item">Batareka - {{$phone1->batareka}}</li>
                    <li class="@if($phone1->old_kamera == $phone2->old_kamera) draw @elseif($phone1->old_kamera > $phone2->old_kamera) winner @else loses @endif desciption_item">Old kamera - {{$phone1->old_kamera}}</li>
                    <li class="@if($phone1->sim_karta == $phone2->sim_karta ) draw @elseif($phone1->sim_karta  > $phone2->sim_karta ) winner @else loses @endif desciption_item">Sim_karta  - {{$phone1->sim_karta}}</li>
                    <li class="@if($phone1->narxi == $phone2->narxi) draw @elseif($phone1->narxi > $phone2->narxi) winner @else loses @endif desciption_item">Narxi - {{$phone1->narxi}}</li>
                    <li class="@if($phone1->xotira == $phone2->xotira) draw @elseif($phone1->xotira > $phone2->xotira) winner @else loses @endif desciption_item">Xotira - {{$phone1->xotira}}</li>
                </ul>

            </div>

            <div class="phone_1">

                <img src="{{'/image/'.$phone2->image}}" alt="" width="100"  height="100">
                <p class="phone_title">Telefon nomi: {{$phone2->name}}</p>
                <ul class="desciption_list">
                    <li class=" desciption_item">Operatsion tizimi - {{$phone2->os}}</li>
                    <li class="@if($phone1->display == $phone2->display) draw @elseif($phone1->display > $phone2->display)loses @else winner @endif desciption_item">Display - {{$phone2->display}}</li>
                    <li class="@if($phone1->asosiy_kamera == $phone2->asosiy_kamera) draw @elseif($phone1->asosiy_kamera > $phone2->asosiy_kamera) loses @else winner @endif desciption_item">Asosiy kamera - {{$phone2->asosiy_kamera}}</li>
                    <li class="@if($phone1->batareka == $phone2->batareka) draw @elseif($phone1->batareka > $phone2->batareka) loses @else winner @endif desciption_item">Batareka - {{$phone2->batareka}}</li>
                    <li class="@if($phone1->old_kamera == $phone2->old_kamera) draw @elseif($phone1->old_kamera > $phone2->old_kamera) loses @else winner @endif desciption_item">Old kamera - {{$phone2->old_kamera}}</li>
                    <li class="@if($phone1->sim_karta == $phone2->sim_karta) draw @elseif($phone1->sim_karta > $phone2->sim_karta) loses @else winner @endif desciption_item">Sim karta - {{$phone2->sim_karta}}</li>
                    <li class="@if($phone1->narxi == $phone2->narxi) draw @elseif($phone1->narxi > $phone2->narxi) loses @else winner @endif desciption_item">Narxi - {{$phone2->narxi}}</li>
                    <li class="@if($phone1->xotira == $phone2->xotira) draw @elseif($phone1->xotira > $phone2->xotira) loses @else winner @endif desciption_item">Xotira - {{$phone2->xotira}}</li>
                </ul>

            </div>

        </div>
    </div>
</main>
</body>
</html>
