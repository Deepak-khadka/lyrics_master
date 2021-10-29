@extends('layouts.app')
@section('title')
       Songs
    @endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <center><h3>Add Songs</h3></center>

                <form action="" method="">
                    @csrf
                    <span for="name">Artist Name</span>
                    <input type="text" class="form-control" name="name" id="name">
                    <span for="bio">Biography</span>
                    <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"></textarea>
                    <input type="button" class="btn btn-success" value="Post">
                </form>
            </div>

        </div>
    </div>
    @endsection
