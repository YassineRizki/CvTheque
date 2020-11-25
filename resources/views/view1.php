<?php  


<ul>

@foreach($Users as $User)
<li>
	@echo '$Users->email';
	@echo '$Users->password';
</li>
@endforeach
	
</ul>




?>