

<form action="{{ route('purchase') }}" method="POST">
    @csrf
    <h2>Bilieto uzsakymas</h2>
    <div class="container">
        <h3>Zvejo duomenys</h3>
        <div class="bottom_border">
            <label for="first_name">Vardas:</label>
            <input type="text" id="first_name" name="first_name" placeholder="Vardas...">
            @error('first_name')
            <div class="errormsg">{{ $message }}</div>
            @enderror

            <label for="last_name">Pavarde:</label>
            <input type="text" name="last_name" id="last_name" placeholder="Pavarde...">
            @error('last_name')
            <div class="errormsg">{{ $message }}</div>
            @enderror

            <label for="personal_code">Asmens kodas:</label>
            <input type="number" name="personal_code" id="personal_code" placeholder="Asmens kodas...">
            @error('personal_code')
            <div class="errormsg">{{ $message }}</div>
            @enderror

            <label for="email">El pastas:</label>
            <input type="email" name="email" id="email" placeholder="El pastas...">
            @error('email')
            <div class="errormsg">{{ $message }}</div>
            @enderror


            <label for="hooks">Kiek naudosite kabliuku:</label>
            <input type="text" id="hooks" name="hooks" placeholder="Irasyti skaiciu...">

            <label for="fishing_rods">Kiek naudosite meskeriu:</label>
            <input type="text" id="fishing_rods" name="fishing_rods" placeholder="Irasyti skaiciu..."><br><br>


            <label for="lake">Choose a lake:</label>

            <select name="lake[]" id="lake" multiple>
                @foreach($lakes as $lake)
                    <option value="{{$lake->id}}">{{$lake->name}}</option>
                @endforeach
            </select>

        </div>


        <div class="bottom_border">
            <label for="start_date">Laikotarpis nuo:</label>
            <input type="start_date" id="start_date" name="start_date">
            <label for="end_date">Laikotarpis iki:</label>
            <input type="end_date" id="end_date" name="end_date">
        </div>


    </div>
    <button type="submit">Toliau</button>
</form>
