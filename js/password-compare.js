function match(){
	var psw=document.getElementById('psw');
	var conf=document.getElementById('cfm-psw');
	var status=document.getElementById('status');
	if(psw.value==conf.value){
		status.innerHTML='Matched';
		status.style.color = "green";
	}
	else{
		status.innerHTML='Not Matched';
		status.style.color = "red";
	}
}