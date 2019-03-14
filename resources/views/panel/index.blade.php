@extends('layouts.app')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

    </script>

@section('content')

    <div class="container">

        <div class="row">

            <div class=" col-md-4 col-lg-4 col-sm-4">
                <a href="{{route('home')}}"><button  class="btn btn-outline-dark">Home</button></a>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-4"></div>

            <div class="col-md-4 col-lg-4 col-sm-4" style="float: right">
                <form method="post" class="float-right">
                    <div class="btn-group">
                        <a href="#section2"><button name="category" type="category" class="btn btn-outline-dark">Add Category</button></a>
                        <a href="#section1"><button name="entity" type="entity" class="btn btn-outline-dark">Add Entity</button></a>
                    </div>
                </form>
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

                            <a style='margin-left: 5px; float: right' href='{{route('category.edit',$r->id)}}'><i class="fas fa-edit"></i></a>

                            <a style='text-decoration: none' href='#'><h5 style='color: red'>{{strtoupper($r->name)}}</h5>
                            <a style='text-decoration: none' href='tel:{{$r->landline}}'><h5 style='color: green'>{{$r->landline}}</h5></a>

                            @if($r->status==1)

                                {!! Form::open(['action' => ['IntityController@update',$r->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="0" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye-slash"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @else
                                {!! Form::open(['action' => ['IntityController@update',$r->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="1" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @endif

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
                            <a style='margin-left: 5px; float: right' href='{{route('category.edit',$c->id)}}'><i class="fas fa-edit"></i></a>

                            <a style='text-decoration: none' href='#'><h5 style='color: red'>{{strtoupper($c->name)}}</h5></a>

                            <a style='text-decoration: none' href='tel:{{$c->landline}}'><h5 style='color: green'>{{$c->landline}}</h5></a>

                            @if($c->status==1)

                                {!! Form::open(['action' => ['IntityController@update',$c->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="0" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye-slash"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @else
                                {!! Form::open(['action' => ['IntityController@update',$c->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="1" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @endif

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
                            <a style='margin-left: 5px; float: right' href='{{route('category.edit',$u->id)}}'><i class="fas fa-edit"></i></a>

                            <a style='text-decoration: none' href='#'><h5 style='color: red'>{{strtoupper($u->name)}}</h5></a>

                            <a style='text-decoration: none' href='tel:{{$u->landline}}'><h5 style='color: green'>{{$u->landline}}</h5></a>

                            @if($u->status==1)

                                {!! Form::open(['action' => ['IntityController@update',$u->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="0" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye-slash"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @else
                                {!! Form::open(['action' => ['IntityController@update',$u->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="1" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @endif

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
                            <a style='margin-left: 5px; float: right' href='{{route('category.edit',$s->id)}}'><i class="fas fa-edit"></i></a>

                            <a style='text-decoration: none' href='#'><h5 style='color: red'>{{strtoupper($s->name)}}</h5></a>
                            <a style='text-decoration: none' href='tel:{{$s->landline}}'><h5 style='color: green'>{{$s->landline}}</h5></a>

                            @if($s->status==1)

                                {!! Form::open(['action' => ['IntityController@update',$s->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="0" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye-slash"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @else
                                {!! Form::open(['action' => ['IntityController@update',$s->id],'method'=>'PATCH']) !!}
                                @csrf
                                <input type="hidden" value="1" name="status">
                                <div class="form-group">
                                    <button class="float-right"><i class="far fa-eye"></i></button>
                                </div>

                                {!! Form::close() !!}

                            @endif

                            <a style='margin-left: 5px' href='https://www.instagram.com/{{$s->instagram}}/'><i class='fab fa-instagram'></i></a>
                            <a style='margin-left: 5px' href='https://www.facebook.com/{{$s->facebook}}/'><i class='fab fa-facebook'></i></a>
                            <a style='margin-left: 5px' href='https://www.twitter.com/{{$s->twitter}}/'><i class='fab fa-twitter'></i></a>
                        </div>
                    </div>
                @endforeach

            </div>




        </div>
    </div>


    <br><br>
    <div class="container">

        <div class="col-md-lg-sm-12">
            <div id="section2" class="card">
                <div class="card-header"><h2>Add Categories</h2></div>
                <div class="card-body">

                {!! Form::open(['action' => 'CategoryController@store','method'=>'POST']) !!}
                @csrf

                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Add Category',['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
                </div>
            </div>

                @include('layouts.error')

        </div>
    </div>

    <br><br>
    @if($categories)
    <div class="container">
        <div class="col-md-lg-sm-12">
            <div id="section1" class="card">
                <div class="card-header"><h2>Create Entity</h2></div>
                <div class="card-body">

                    {!! Form::open(['action' => 'IntityController@store','method'=>'POST']) !!}
                    @csrf

                    <div class="form-group">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('twitter','Twitter') !!}
                        {!! Form::text('twitter',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('instagram','Instagram') !!}
                        {!! Form::text('instagram',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('facebook','Facebook') !!}
                        {!! Form::text('facebook',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('snapchat','Snapchat') !!}
                        {!! Form::text('snapchat',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('address','Address') !!}
                        {!! Form::text('address',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('tollfree','Toll Free') !!}
                        {!! Form::text('tollfree',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('landline','Landline') !!}
                        {!! Form::text('landline',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('website','website') !!}
                        {!! Form::text('website',null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('categories_id','Categories') !!}
                        {!! Form::select('categories_id',[''=>'Choose Option']+$categories,null,['class'=>'form-control','required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Add Entity',['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

            @include('layouts.error')

        </div>
    </div>
    @endif



@stop

