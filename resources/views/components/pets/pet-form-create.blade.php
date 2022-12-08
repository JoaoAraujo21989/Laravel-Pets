<h1 class="text-center"> Create Pet </h1>
<div class="container">
    <form method="POST" action="{{ url('pets') }}" class="mx-5 my-2">
        @csrf
        <!--================== NAME ==================-->
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Pet name"
                class="form-control
                @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp">
            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!--================== Person ==================-->
        <div class="form-group">
            <label for="person" >Person</label>
            <select
                type="text"
                id="person"
                name="person"
                autocomplete="person"
                class="custom-select
                @error('person') is-invalid @enderror"
                required>

                @if(count($person)>0)
                    <option selected disabled>Open this select menu</option>
                    @foreach($person as $people)
                        <option value="{{ $people->id }}" > {{ $people->name }}
                        </option>
                    @endforeach
                @endif


            </select>
            @error('person')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!--================== Color ==================-->
        <div class="form-group">
            <label for="color">Color</label>
            <input
                type="text"
                id="color"
                name="color"
                autocomplete="color"
                placeholder="Pet name"
                class="form-control
                @error('color') is-invalid @enderror"
                value="{{ old('color') }}"
                required
                aria-describedby="nameHelp">
            @error('color')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!--================== Birth date ==================-->
        <div class="form-group">
            <label for="birth_date">Birth date</label>
            <input
                type="date"
                id="birth_date"
                name="birth_date"
                autocomplete="birth_date"
                placeholder="Pet birth date"
                class="form-control
                @error('birth_date') is-invalid @enderror"
                value="{{ old('birth_date') }}"
                required
                aria-describedby="nameHelp">
            @error('birth_date')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!--================== BUTTON ==================-->
        <div>
            <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
        </div>

    </form>
</div>

