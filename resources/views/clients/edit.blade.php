<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Api Tester  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit URI Endpoints HERE</h2><br/>
      <form action="{{ route('clients.update',$client->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="url">Uri:</label>
            <input type="text" class="form-control" name="url" value="{{$client->url}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Verb">Verb:</label>
            <select name="verb">
                <option value="GET" @if($client->verb=="GET") selected @endif>GET</option>
                <option value="POST" @if($client->verb=="POST") selected @endif>POST</option>
              </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Project">Project</label>
              <select name="project">
                <option value="Bweza" @if($client->project=="Bweza") selected @endif>Bweza</option>
                <option value="Banco" @if($client->project=="Banco") selected @endif>Banco</option>
                <option value="Alana" @if($client->project=="Alana") selected @endif>Alana</option>
                <option value="UltraCity" @if($client->project=="UltraCity") selected @endif>UltraCity</option>
                <option value="MtaaPay" @if($client->project=="MtaaPay") selected @endif>MtaaPay</option>
                <option value="Amandla" @if($client->project=="Amandla") selected @endif>Amandla</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
