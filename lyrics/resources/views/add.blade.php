@extends('layouts.app')
@section('title')
    add
    @endsection
@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-4 ">
                <center><h3>Add Artist</h3></center>
                <form action="{{route('artist.store')}}" method="post">
                    @csrf
                    <span for="name">Artist Name</span>
                    <input type="text" class="form-control" name="name" id="name">
                    <span for="bio">Biography</span>
                    <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"></textarea>
                    <input type="submit" class="btn btn-success" value="Post">
                </form>
            </div>
                    {{-- Genre adding--}}
            <div class="col-md-4 ">
                <center><h3>Add Genre</h3></center>

                <form action="{{route('genre.store')}}" method="post">
                    @csrf
                    <span for="name">Genre Title</span>
                    <input type="text" class="form-control" name="name" id="name">

                    <input type="submit" class="btn btn-success" value="Genre post">
                </form>
            </div>


    </div>

    @endsection

