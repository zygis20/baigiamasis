<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Anketos pildymas</title>


<body>
<form action="{{ route('tickets.store') }}" method="POST" class="form-group">
    @csrf

    <div class="container">
        <h1>Molėtų regiono žvejo bilieto užsakymas</h1>

        <h3 class="mt-3">Žvejo duomenys</h3>
        <div>
            <label for="first_name">Vardas:</label>
            <input type="text" id="first_name" name="first_name" placeholder="Vardas..." class="form-control">
            @error('first_name')
            <div class="alert-danger">{{ $message }}</div>
            @enderror

            <label for="last_name">Pavarde:</label>
            <input type="text" name="last_name" id="last_name" placeholder="Pavarde..." class="form-control">
            @error('last_name')
            <div class="alert-danger">{{ $message }}</div>
            @enderror

            <label for="personal_code">Asmens kodas:</label>
            <input type="number" name="personal_code" id="personal_code" placeholder="Asmens kodas..."
                   class="form-control">
            @error('personal_code')
            <div class="alert-danger">{{ $message }}</div>
            @enderror

            <label for="email">El pastas:</label>
            <input type="email" name="email" id="email" placeholder="El pastas..." class="form-control">
            @error('email')
            <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-2">
            <h3>Papildoma informacija</h3>

            <label for="hooks">Kiek naudosite kabliuku:</label>
            <input type="text" id="hooks" name="hooks" placeholder="Irasyti skaiciu..." class="form-control">
            @error('hooks')
            <div class="alert-danger">{{ $message }}</div>
            @enderror

            <label for="fishing_rods">Kiek naudosite meskeriu:</label>
            <input type="text" id="fishing_rods" name="fishing_rods" placeholder="Irasyti skaiciu..."
                   class="form-control">
            @error('fishing_rods')
            <div class="alert-danger">{{ $message }}</div>
            @enderror

            <label for="lake">Choose a lake:</label>

            <select name="lake[]" id="lake" multiple class="form-control form-control-sm">
                @foreach($lakes as $lake)
                    <option value="{{$lake->id}}">{{$lake->name}}</option>
                @endforeach
            </select>
            @error('lake')
            <div class="alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="bottom_border">
            <label for="start_date">Laikotarpis nuo:</label>
            <input type="start_date" id="start_date" name="start_date" placeholder="PVZ...2021-09-10"
                   class="form-control">
            @error('start_date')
            <div class="alert-danger">{{ $message }}</div>
            @enderror
            <label for="end_date">Laikotarpis iki:</label>
            <input type="end_date" id="end_date" name="end_date" placeholder="PVZ...2021-09-15" class="form-control">
            @error('end_date')
            <div class="alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-2">Užsakyti</button>
    </div>

</form>
</body>
</html>

