@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-lg-sm-12">
        <div id="section1" class="card">
            <div class="card-header"><h2>Update Entity</h2></div>
            <div class="card-body">

                {!! Form::open(['action' => ['CategoryController@update',$intity->id],'method'=>'PATCH']) !!}
                @csrf

                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',$intity->name,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('twitter','Twitter') !!}
                    {!! Form::text('twitter',$intity->twitter,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('instagram','Instagram') !!}
                    {!! Form::text('instagram',$intity->instagram,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('facebook','Facebook') !!}
                    {!! Form::text('facebook',$intity->facebook,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('snapchat','Snapchat') !!}
                    {!! Form::text('snapchat',$intity->snapchat,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address','Address') !!}
                    {!! Form::text('address',$intity->address,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tollfree','Toll Free') !!}
                    {!! Form::text('tollfree',$intity->tollfree,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('landline','Landline') !!}
                    {!! Form::text('landline',$intity->landline,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('website','website') !!}
                    {!! Form::text('website',$intity->website,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('categories_id','Categories') !!}
                    {!! Form::select('categories_id',[''=>'Choose Option']+$categories,$intity->categories_id,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update Entity',['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>

        @include('layouts.error')

    </div>
</div>

    @stop