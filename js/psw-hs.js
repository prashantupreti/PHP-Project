function myFunction(){
	var input=document.getElementById('exampleInputPassword1');
	var btn=document.getElementById('btn');
	if (input.type==="password") {
		input.type="text";
		btn.innerHTML='<i class="fa fa-eye-slash"></i>';
	}
	else{
		input.type="password";
		btn.innerHTML='<i class="fa fa-eye"></i>';
	}
}