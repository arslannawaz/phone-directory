@extends('layouts.app')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{--<div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>--}}
        <div class="col-md-8">

        </div>

        <div class="col-md-4 float-right">
            <a href="{{route('panel.index')}}"><button class="float-right btn btn-outline-dark">Go to Panel</button></a>
        </div>

    </div>
</div>


<div class="container">
    <br><br>
    <div class="row">

        <div class="col-md-3 col-lg-3 col-sm-12">
            <h4 style="color: grey">Restaurants</h4>

            @foreach($rs as $r)
                <div class="card">
                    <div class='card-body' style='border-left: 5px solid grey'>
                        <a style='text-decoration: none' href="detail/{{$r->id}}/{{$r->name}}/{{$r->landline}}"><h5 style='color: red'>{{strtoupper($r->name)}}</h5></a>
                        <a style='text-decoration: none' href='tel:{{$r->landline}}'><h5 style='color: green'>{{$r->landline}}</h5></a>
                        <a style='margin-left: 5px' href='https://www.instagram.com/{{$r->instagram}}/'><i class='fab fa-instagram'></i></a>
                        <a style='margin-left: 5px' href='https://www.facebook.com/{{$r->facebook}}/'><i class='fab fa-facebook'></i></a>
                        <a style='margin-left: 5px' href='https://www.twitter.com/{{$r->twitter}}/'><i class='fab fa-twitter'></i></a>
                    </div>
                </div>
            @endforeach

        </div>


        <div class="col-md-3 col-lg-3 col-sm-12">
            <h4 style="color: grey">Colleges</h4>

            @foreach($cl as $c)
                <div class="card">
                    <div class='card-body' style='border-left: 5px solid grey'>
                        <a style='text-decoration: none' href="detail/{{$c->id}}/{{$c->name}}/{{$c->landline}}"><h5 style='color: red'>{{strtoupper($c->name)}}</h5></a>
                        <a style='text-decoration: none' href='tel:{{$c->landline}}'><h5 style='color: green'>{{$c->landline}}</h5></a>
                        <a style='margin-left: 5px' href='https://www.instagram.com/{{$c->instagram}}/'><i class='fab fa-instagram'></i></a>
                        <a style='margin-left: 5px' href='https://www.facebook.com/{{$c->facebook}}/'><i class='fab fa-facebook'></i></a>
                        <a style='margin-left: 5px' href='https://www.twitter.com/{{$c->twitter}}/'><i class='fab fa-twitter'></i></a>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
            <h4 style="color: grey">Universities</h4>

            @foreach($uni as $u)
                <div class="card">
                    <div class='card-body' style='border-left: 5px solid grey'>
                        <a style='text-decoration: none' href="detail/{{$u->id}}/{{$u->name}}/{{$u->landline}}"><h5 style='color: red'>{{strtoupper($u->name)}}</h5></a>
                        <a style='text-decoration: none' href='tel:{{$u->landline}}'><h5 style='color: green'>{{$u->landline}}</h5></a>
                        <a style='margin-left: 5px' href='https://www.instagram.com/{{$u->instagram}}/'><i class='fab fa-instagram'></i></a>
                        <a style='margin-left: 5px' href='https://www.facebook.com/{{$u->facebook}}/'><i class='fab fa-facebook'></i></a>
                        <a style='margin-left: 5px' href='https://www.twitter.com/{{$u->twitter}}/'><i class='fab fa-twitter'></i></a>
                    </div>
                </div>
            @endforeach

        </div>


        <div class="col-md-3 col-lg-3 col-sm-12">
            <h4 style="color: grey">Schools</h4>

            @foreach($sch as $s)
                <div class="card">
                    <div class='card-body' style='border-left: 5px solid grey'>
                        <a style='text-decoration: none' href="detail/{{$s->id}}/{{$s->name}}/{{$s->landline}}"><h5 style='color: red'>{{strtoupper($s->name)}}</h5></a>
                        <a style='text-decoration: none' href='tel:{{$s->landline}}'><h5 style='color: green'>{{$s->landline}}</h5></a>
                        <a style='margin-left: 5px' href='https://www.instagram.com/{{$s->instagram}}/'><i class='fab fa-instagram'></i></a>
                        <a style='margin-left: 5px' href='https://www.facebook.com/{{$s->facebook}}/'><i class='fab fa-facebook'></i></a>
                        <a style='margin-left: 5px' href='https://www.twitter.com/{{$s->twitter}}/'><i class='fab fa-twitter'></i></a>
                    </div>
                </div>
            @endforeach

        </div>




    </div>
</div>


@endsection
