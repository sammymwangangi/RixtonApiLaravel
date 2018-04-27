@extends('layouts.app')

@section('content')

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
      @foreach($projects as $project)
      <li><a href="">{{$project->name}}</a></li> 
      @endforeach                                             
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
        <th>VERB</th>
        <th>INPUT</th>
        <th>PROJECT ID</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($clients as $client)
      <tr>
        <td>{{$client['id']}}</td>
        <td><a href="{{$client['url']}}">{{$client['url']}}</a></td>
        <td>{{$client['verb']}}</td>
        <td>{{$client['input']}}</td>
        <td>{{$client['project_id']}}</td>
        
        <td><a href="{{ route('clients.edit', ['client' => $client->id]) }}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{ route('clients.destroy', ['client' => $client->id ]) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection