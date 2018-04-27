@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-info mb-3">
                <div class="card-header bg-info text-white text-center" style="font-size: 14px;"><b>REGISTER API HERE</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('clients.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                          <label for="Url">Url:</label>
                          <textarea class="form-control" id="url" name="url" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="Input">Input:</label>
                          <textarea class="form-control" id="input" name="input" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="Verb">Verb:</label>
                          <select class="form-control" name="verb">
                              <option value="GET">GET</option>
                              <option value="POST">POST</option>
                            </select>
                        </div>

                        <div class="form-group ">
                          <label for="Project">Project:</label>
                          <select class="form-control" name="project_id">
                                    @foreach ($projects as $project)
                                        <option>{{ $project->id }}</option>
                                    @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

  </div>

@endsection


    