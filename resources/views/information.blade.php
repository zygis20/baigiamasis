<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zvejo bilietas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        ul {
            display: flex;
            justify-content: space-between;
            width: 250px;
        }

        .bottom_border {
            padding-bottom: 20px;
            padding-top: 20px;
            border-bottom: solid 1px black;
            width: 450px;
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        .container{
            margin: 0 auto;
        }

        button {
            border-radius: 8px;
            background-color: #1d68a7;
            padding: 12px 24px;
            border: none;
            margin-top: 10px;
            cursor: pointer;
        }
        .errormsg{
            color: red;
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">

<nav>
    <ul>
        <li><a href="about">Apie</a></li>
        <li><a href="help">Pagalba</a></li>
        <li><a href="contacts">Kontaktai</a></li>
    </ul>
</nav>
<main>
{{--    <form action="{{ route('information') }}" method="POST">--}}
{{--        @csrf--}}
{{--        <h2>Bilieto uzsakymas</h2>--}}
{{--        <div class="container">--}}
{{--            <h3>Zvejo duomenys</h3>--}}
{{--            <div class="bottom_border">--}}
{{--                <label for="first_name">Vardas:</label>--}}
{{--                <input type="text" id="first_name" name="first_name" placeholder="Vardas...">--}}
{{--                @error('first_name')--}}
{{--                <div class="errormsg">{{ $message }}</div>--}}
{{--                @enderror--}}

{{--                <label for="last_name">Pavarde:</label>--}}
{{--                <input type="text" name="last_name" id="last_name" placeholder="Pavarde...">--}}
{{--                @error('last_name')--}}
{{--                <div class="errormsg">{{ $message }}</div>--}}
{{--                @enderror--}}

{{--                <label for="personal_code">Asmens kodas:</label>--}}
{{--                <input type="number" name="personal_code" id="personal_code" placeholder="Asmens kodas...">--}}
{{--                @error('personal_code')--}}
{{--                <div class="errormsg">{{ $message }}</div>--}}
{{--                @enderror--}}

{{--                <label for="email">El pastas:</label>--}}
{{--                <input type="email" name="email" id="email" placeholder="El pastas...">--}}
{{--                @error('email')--}}
{{--                <div class="errormsg">{{ $message }}</div>--}}
{{--                @enderror--}}


{{--                   <label for="hooks">Kiek naudosite kabliuku:</label>--}}
{{--                   <input type="text" id="hooks" name="hooks" placeholder="Irasyti skaiciu...">--}}

{{--                   <label for="fishing_rods">Kiek naudosite meskeriu:</label>--}}
{{--                   <input type="text" id="fishing_rods" name="fishing_rods" placeholder="Irasyti skaiciu..."><br><br>--}}

{{--                   <label for="lake">kokiame ezere zvejosite:</label>--}}
{{--                   <input type="text" id="lake" name="lake" placeholder="Ezero pavadinimas...">--}}

{{--            </div>--}}


{{--            <div class="bottom_border">--}}
{{--                <label for="date">Laikotarpis nuo:</label>--}}
{{--                <input type="date" id="date" name="date">--}}
{{--                <label for="date">Laikotarpis iki:</label>--}}
{{--                <input type="date" id="date" name="date">--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        <button type="submit">Toliau</button>--}}
{{--    </form>--}}
</main>


<h1>laravel</h1>

</body>
</html>

