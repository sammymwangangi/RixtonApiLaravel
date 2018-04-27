@extends('layouts.app')

@section('content')

    <div class="container">
              @if ($message = Session::get('success'))

                  <div class="alert alert-success alert-dismissible fade show" role="alert">

                      <p>{{ $message }}</p>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

              @endif
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
    <h3>Click a Project to Test It's API's</h3><br>
    <i class="fas fa-hand-point-down fa-2x faa-parent animated faa-fast faa-bounce" style="color: #219dbc"></i> 
    <ol class="rectangle-list">
      @foreach($projects as $project)
      <li><a href="{{route('apitest',['project' => $project->id])}}">{{$project->name}}</a></li> 
      @endforeach                                             
    </ol>
  </div>

  <br>
  <h3>Available Projects and Their API's</h3><br>
  <div class="accordion" id="accordion">
  <div class="card">
    <div class="card-header" id="project_id">
      <h3>
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{$project->name}}
        </button>
      </h3>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="project_id" data-parent="#accordion">
      <div class="card-body">
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
        
        <td><a href="{{ route('clients.edit', ['client' => $client->id]) }}" class="btn btn-warning">Edit <i class="far fa-edit"></i></a></td>
        <td>
          <form action="{{ route('clients.destroy', ['client' => $client->id ]) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger" type="submit">Delete <i class="far fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection