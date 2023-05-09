<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .active{
        background-color: #5e6d67;
        color: white;
        width: min-content;
        border-radius: 5px;
    }

    .active:hover{
        color: black;
    }

    .nav-link, .btn-secondary {
        margin: 4px;
    }

</style>
<body class="container">
    <div class="row">
        <!-- Side dashboard -->
        <div class="col-md-3 border rounded-2 mt-5">
            <ul class="nav flex-column border rounded-2 mt-2 p-2">
                <li class="nav-item rounded-pill">
                    <a href="/guestlist" class="btn-light nav-item nav-link {{ Request::is('/guestlist') ? 'active' : '' }}" aria-current="true">Guest List</a>
                </li>
                <li class="nav-item rounded-pill">
                    <a href="/beachhouse" class="btn-light text-nowrap nav-item nav-link {{ Request::is('beachhouse') ? 'active' : '' }}">Beach Houses</a>
                </li>
                <li class="nav-item rounded-pill">
                    <a href="/admin-reservations" class="btn-light nav-item nav-link {{ Request::is('admin-reservations') ? 'active' : '' }}">Reservations</a>
                </li>
                <li class="nav-item ">
                    <a href="/admin-create" class="btn btn-secondary text-wrap">Create Resources</a>
                </li>
            </ul>
        </div>
        <!-- Tabular form -->
        <div class="col-md-9">
            @auth
                <div class="ms-2 text-end">
                    <a  href="/logout" class="btn btn-warning mt-2">Logout</a>
                </div>
            @endauth
            @yield('tabular-form')
        </div>
    </div>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>