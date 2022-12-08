<h1 class="text-center"> Show Pet </h1>
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
                value="{{($pet->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== Person ==================-->
        <div class="form-group">
            <label for="person">Person</label>
            <input
                type="text"
                id="person"
                name="person"
                autocomplete="person"
                class="form-control"
                value="{{($pet->person->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>
        <!--================== Color ==================-->
        <div class="form-group">
            <label for="color">Color</label>
            <input
                type="text"
                id="color"
                name="color"
                autocomplete="color"
                class="form-control"
                value="{{($pet->color)}}"
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
                class="form-control"
                value="{{($pet->birth_date)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== BUTTON ==================-->
        <div>
            <a href="{{url('/pets')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Back</a>
            <a href="{{url('pets/' . $pet->id . '/edit')}}" class="mt-2 mb-5 ml-2 btn btn-warning">Edit</a>
        </div>

    </div>
</div>
