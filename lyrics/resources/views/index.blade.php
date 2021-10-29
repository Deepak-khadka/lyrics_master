@extends('layouts.app')
@section('title')
     Lyrics
@endsection

@section('content')
  <div class="container">
      <center> <h1 style="color: #0C9A9A">
              Hot lyrics
          </h1>
      </center>
      <div class="row">
  <div class="col-md-6 col-xs-3">
      <table class="table table-hover">
          <tr>
              <td>Nepali</td>
          </tr>
      </table>
  </div>
      <div class="col-md-6 col-xs-3">
          <table class="table table-hover">
              <tr>
                  <td>English</td>
              </tr>
          </table>
      </div>
      </div>
      <a href="/genre" class="btn btn-block">Genre</a>
      <a href="/artist" class="btn btn-block">Artist</a>



  </div>
@endsection
