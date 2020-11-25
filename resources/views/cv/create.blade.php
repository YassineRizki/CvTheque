
<html>
<head>
  
  <link rel ="stylesheet" href = "{{asset('assets/css/bootstrap.min.css')}}">
</head>


<body>

@if(count($errors))

<div class="alert alert-danger" role="alert">
  

 <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
  
</div>
@endif
<form action ="{{url('cvs')}}" method="get">
   @csrf

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control"    placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"> </small>
  </div>


  <div class="form-group">
    <label for="presentation">Présentation</label>
    <textarea id="presentation" name="presentation" rows="4" cols="200">Tapez ici</textarea>
</div>    

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Ok</button>
</div>

</form>
</body>

</html>

