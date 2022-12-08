<h1 class="text-center"> Create Person </h1>
<div class="container">
    <form method="POST" action="{{ url('people') }}" class="mx-5 my-2">
        @csrf
        <!--================== NAME ==================-->
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Your name"
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


        <!--================== Email ==================-->
        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="text"
                id="email"
                name="email"
                autocomplete="email"
                placeholder="Your email"
                class="form-control
                @error('email') is-invalid @enderror"
                value="{{ old('email') }}"
                required
                aria-describedby="nameHelp">
            @error('email')
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

        <!--================== Address ==================-->
        <div class="form-group">
            <label for="address" >Address</label>
            <select
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                class="custom-select
                @error('address') is-invalid @enderror"
                required>

                @if(count($address)>0)
                    <option selected disabled>Open this select menu</option>
                    @foreach($address as $addresses)
                        <option value="{{ $addresses->id }}" > {{ $addresses->address1 }}, {{ $addresses->city }}, {{ $addresses->postal_code }}
                        </option>
                    @endforeach
                @endif


            </select>
            @error('address')
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

