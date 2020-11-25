
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
<form action ="{{url('cvs/'.$Cvv->id)}}" method="post">
   @csrf

   <input type="hidden" name="_method" value="PUT">

  <div class="form-group">
    <label for="title"></label>
    <input type="text" name="title" id="title" class="form-control"    placeholder="Enter email" value ="{{ $Cvv->titre }}">
    <small id="emailHelp" class="form-text text-muted"> </small>
  </div>


  <div class="form-group">
    <label for="presentation">Présentation</label>
    <textarea id="presentation" name="presentation" rows="4" cols="200" value ="{{ $Cvv->Présentation }}"> </textarea>
</div>    

  <div class="form-group">
  <button type="submit" class="btn btn-danger">Modifier</button>
</div>

</form>
</body>

</html>


