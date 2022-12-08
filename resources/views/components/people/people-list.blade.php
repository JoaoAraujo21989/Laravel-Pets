<h1 class="text-center"> People List </h1>
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" class="align-middle">#</th>
            <th scope="col" class="align-middle">Name</th>
            <th scope="col" class="align-middle">Email</th>
            <th scope="col" class="align-middle text-center">Birth date</th>
            <th scope="col" class="align-middle text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($people as $person)
            <tr>
                <th scope="row" class="align-middle">{{$person->id}}</th>
                <td class="align-middle">{{$person->name}} </td>
                <td class="align-middle">{{$person->email}} <br> <b>Address:</b>  </td>
                <td class="align-middle">{{$person->birth_date}}</td>
                <td class="align-middle text-center">
                    <div class="pr-1 m-1">
                        <a href="{{url('people/' . $person->id)}}" type="button"class="btn btn-success" style="width: 75px">Show</a>
                    </div>
                    <div class="pr-1 m-1">
                        <a href="{{url('people/' . $person->id . '/edit')}}" type="button"class="btn btn-primary" style="width: 75px">Edit</a>
                    </div>

                    <form action="{{url('people/' . $person->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="width: 75px">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

