<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clients</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="container">
      <br>
          <div class="row">

        <div class="col-lg-12 margin-tb">

            <span class="float-left">

                <h2>API Tester</h2>

            </span>

            <span class="float-right">

                <a class="btn btn-success" href="{{ route('clients.create') }}"> Register A New API</a>

            </span>

        </div>

    </div>
   <br>
  <div class="container">
    <h3>Projects</h3>
    <ol class="rectangle-list">
      <li><a href="">Bweza</a></li>                       
      <li><a href="">Banco</a></li>                       
      <li><a href="">Alana</a></li>                       
      <li><a href="">Amandla</a></li>                       
      <li><a href="">Ultracity</a></li>                       
      <li><a href="">MtaaPay</a></li>                       
    </ol>
  </div>
        @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>URL</th>
        <th>Project Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($clients as $client)
      <tr>
        <td>{{$client['id']}}</td>
        <td><a href="{{$client['url']}}">{{$client['url']}}</a></td>
        <td>{{$client['project']}}</td>
        
        <td><a href="{{action('ClientsController@edit', $client['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ClientsController@destroy', $client['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>