<html>

<head>
  
<link rel ="stylesheet" href = "{{asset('assets/css/bootstrap.min.css')}}">
</head>


<body>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titre</th>
      <th scope="col">Presentation</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($cvs as $cv)
    
    <tr>
      
      <td>  

        
       {{$cv->id}} 

      </td>
      <td>{{$cv->titre}}  </td>
      <td>{{$cv->présentation}}  </td>
      <td>{{$cv->created_at}}  </td>
      <td>



<form action = "{{url('cvs/'.$cv->id)}}" method = "post">
  
@csrf
{{method_field('DELETE')}}

 

  <button type="button" class="btn btn-outline-success">Détails</button>


<button type="submit" class="btn btn-danger">Supprimer</button>

<a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modifier</a>

</form>
      </td>
      
    </tr>

    

    @endforeach


  </tbody>
</table>
<br><br>
<a href="{{url('cvs/create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Nouveau cv</a>

</body>
</html>