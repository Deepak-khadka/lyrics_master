@extends('layouts.app')
@section('title')
    Genre
    @endsection
@section('content')
    <div class="container">
        <div class="row">

                <table class="table table-hover">
                    @foreach($genre as $gen)
                    <tr>
                        <td>{{$gen->id}}</td>
                        <td>{{$gen->name}}</td>

                    </tr>
                    @endforeach
                </table>
        </div>
    </div>

    @endsection
