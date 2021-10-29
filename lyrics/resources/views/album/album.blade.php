@extends('layouts.app')
@section('content')
           <div class="container">
               <div class="row">
                   {{--This is the field for adding lyrics--}}
                   <div class="col-md-4 offset-3">
                       <center><h3>Add Album</h3></center>

                       <form action="" method="">
                           @csrf
                           <span for="name">Title</span>
                           <input type="text" class="form-control" name="name" id="name">
                           <span for="name">Release year</span>
                           <input type="date" class="form-control" name="name" id="name">
                           <input type="button" class="btn btn-success" value="Post">

                       </form>
                   </div>
               </div>
               </div>

           <div class="container">
                <div class="row">
                    <h1>List of <span style="color: #0f6674">ALBUM</span> of Arjit singh</h1>
                    <table class="table table-info">
                        <tr>
                            <td><a href="{{route('tracks.index')}}">Album 1</a></td>
                        </tr>
                    </table>
                </div>
           </div>
    @endsection
