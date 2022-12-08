<div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-4 ">
        <a class="navbar-brand" href="{{url('/')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('pets') ? 'active' : '' }} dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        Pets
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/pets')}}">List</a>
                        <a class="dropdown-item" href="{{url('/pets/create')}}">Add Pet</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('people') ? 'active' : '' }} dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        People
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/people')}}">List</a>
                        <a class="dropdown-item" href="{{url('/people/create')}}">Add Person</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('addresses') ? 'active' : '' }} dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                        Address
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/addresses')}}">List</a>
                        <a class="dropdown-item" href="{{url('/addresses/create')}}">Add Address</a>
                    </div>
                </li>
            </ul>

        </div>



    </nav>

</div>
