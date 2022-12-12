@extends('layouts.app')

@section('content')

    <html>
<head>
    <title>
        O nama
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<container>
    <div>
    <h1>
        O nama
    </h1>
        <br><br>
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-1">
        <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-1">
        </div>
        <div class="col-2">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="kristina.jpg" alt="Card image cap" style="height: 400px">
        <div class="card-body">
            <h5 class="card-title">Kristina Vučina</h5>
            <p class="card-text">
                Studetica informatike. Imam 21 godinu. Živim u Mostaru.
                Slobodno vrijeme provodim sa svojim ljubimcima.
            </p>
        </div>
    </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">

        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="anamarija.jpg" alt="Card image cap" style="height: 400px">
        <div class="card-body">
            <h5 class="card-title">Anamarija Bevanda</h5>
            <p class="card-text">
                Studentica informatike. Imam 21 godinu. Dolazim iz Međugorja.
                U slobodno vrijeme volim gledati serije i filmove.
            </p>
        </div>
    </div>
        </div>
    </div>
    <br><br><br>
    </div>
</container>

</body>
</html>

<script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>

@endsection
