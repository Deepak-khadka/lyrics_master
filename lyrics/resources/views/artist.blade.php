@extends('layouts.app')
@section('content')

        <div class="container">
            <center> <h1 style="color: #0C9A9A">
                    Hot Artist
                </h1>
            </center>
            <div class="row">
                <div class="col-md-6 col-xs-3 offset-3">
                    <table class="table table-hover">
                        @foreach($artist as $ar)
                        <tr>


                            <td>{{$ar->name}}</td>
                            <td>{{$ar->bio}}</td>

                        </tr>
                        @endforeach



                </div>
            </div>

        </div>
    @endsection
