<ul>

@foreach($Users as $User)
<li>
	{{$User->email}}
	{{$User->password}}
</li>
@endforeach
	
</ul>
