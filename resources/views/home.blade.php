@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

            </div>
            <div class="btn-block">

                <a href="{{ url('/menu') }}"> Menu</a>
                <p></p>
                <a href="{{ url('/contacts') }}"> Contacts</a>
            </div>
        </div>
    </div>
</div>
@endsection
