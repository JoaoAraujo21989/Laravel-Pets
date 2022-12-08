<h1 class="text-center"> Show Person </h1>
<div class="container">
    <div class="container mx-5 my-2">
        @csrf
        <!--================== NAME ==================-->
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control"
                value="{{($person->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== EMAIL ==================-->
        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="text"
                id="email"
                name="email"
                autocomplete="email"
                placeholder="Type your email"
                class="form-control"
                value="{{($person->email)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== Birth date ==================-->
        <div class="form-group">
            <label for="birth_date">Birth date</label>
            <input
                type="date"
                id="birth_date"
                name="birth_date"
                autocomplete="birth_date"
                placeholder="Type your birth date"
                class="form-control"
                value="{{($person->birth_date)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== Address ==================-->
        <div class="form-group">
            <label for="address">Address</label>
            <input
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                placeholder="Type your Address"
                class="form-control"
                value="{{($person->address->address1)}}, {{($person->address->city)}}, {{($person->address->postal_code)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== BUTTON ==================-->
        <div>
            <a href="{{url('/people')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Back</a>
            <a href="{{url('people/' . $person->id . '/edit')}}" class="mt-2 mb-5 ml-2 btn btn-warning">Edit</a>
        </div>

    </div>
</div>
