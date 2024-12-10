<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Phone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Add a Phone</h1>
<h2><a href="{{route('admin_all.phone')}}">All Phone</a></h2>
@if($msg=Session::get('succses'))
<p class="alert alert-success">{{$msg}}</p>
@endif
<form id="addPhoneForm" action="{{route('addpost.phone')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="os">Operatsion tizimi:</label>
    <input type="text" id="os" name="os" placeholder="Operatsion tizimini kiriting" required>

    <label for="name">Nomi:</label>
    <input type="text" id="name" name="name" placeholder="Nomini kiriting" required>

    <label for="display">Display:</label>
    <input type="text" id="display" name="display" placeholder="Displayni kirting" required>

    <label for="xotira">Xotira:</label>
    <input type="number" id="xotira" name="xotira" placeholder="Xotirani kiriting" required>

    <label for="batareka">Batareka:</label>
    <input type="text" id="batareka" name="batareka" placeholder="Batareka sig'imini kiriting" required>

    <label for="asosiy_kamera">Asosiy kamera:</label>
    <input type="text" id="asosiy_kamera" name="asosiy_kamera" placeholder="Asosiy kamerani kiriting" required>

    <label for="old_kamera">Old kamera:</label>
    <input type="number" id="old_kamera" name="old_kamera" placeholder="Old  kamerani kiriting" required>

    <label for="sim_karta">Sim karta:</label>
    <input type="text" id="sim_karta" name="sim_karta" placeholder="Sim karta uchun joyni sonini kiriting" required>

    <label for="narxi">Narxi</label>
    <input type="text" id="narxi" name="narxi" placeholder="Narxi" required>

    <label for="image">Rasm</label>
    <input type="file" id="file" name="image" accept="image/*, .pdf, .docx">

    <button type="submit">Add Phone</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
