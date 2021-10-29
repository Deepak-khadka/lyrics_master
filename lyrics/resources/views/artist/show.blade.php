@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                @foreach($artist as $art)



                <tr>
                    <td>  {{$art->name}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
     <div class="container">
         <div class="row">
             <form  action="{{route('album.store')}}" method="post">
                  @csrf
                 <label class="form-control" for="name">Name</label>
                 <input class="form-control" type="hidden" name="id" id="id">
                 <label class="form-control" for="title">Title</label>
                 <input class="form-control" type="text" name="title" id="title">
                 <label class="form-control" for="release_year">Release year</label>
                 <input class="form-control" type="date" name="release_year" id="">

             </form>
         </div>
     </div>
    @endsection
