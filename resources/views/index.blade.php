<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./Css/style.css" />
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
        @if(!Auth::check())
            <a href="{{ route('MyLogin') }}">Kirish</a>
            <a href="{{ route('MyRegister') }}">Royxatdan otish</a>
        @else
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Chiqish</button>
            </form>

            @if(Auth::user()->hasRole('admin'))
                <p>Welcome, Admin!</p>
                <a href="{{ route('admin.page') }}">Dashboard</a>
            @endif

            @if(Auth::user()->hasRole('user'))
                <a href="{{ route('index') }}">Welcome, User</a>
            @endif
        @endif


        <form action="{{ route('resolt.check') }}" method="POST">
            @csrf
            <div class="comparison_block">
                <div class="phone_selection">
                    <div class="selection">
                        <select name="phone1" required class="select_phone">
                            <option value="" hidden>Telefon tanlash</option>
                            @foreach($phones as $phone)
                                <option value="{{ $phone->id }}" class="select_value">
                                    {{ $phone->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="right_left">
                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                </div>
                <div class="phone_selection">
                    <div class="selection">
                        <select name="phone2" required class="select_phone">
                            <option value="" hidden>Telefon tanlash</option>
                            @foreach($phones as $phone)
                                <option value="{{ $phone->id }}" class="select_value">
                                    {{ $phone->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="comparison_button">
                <button type="submit" class="comparison_btn">Taqqoslash</button>
            </div>
        </form>
    </div>
</main>


</body>
</html>
