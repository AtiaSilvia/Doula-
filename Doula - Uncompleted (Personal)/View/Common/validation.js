const form=document.getElementById('form');
const uname_1=document.getElementById('uname');
const password_1=document.getElementById('pass');
//const jsonData = require("../Admin/adminInfo.json");

form.addEventListener('submit', (e)=>{
	e.preventDefault();
	validateUsername();
	validatePassword();
	jsonValidation();
	submits();
});

var isValid=false;
var isValid2=false;
var isValid3=false;
function submits(){

	if(isValid && isValid2 && isValid3){

		form.submit();

	}
}

function jsonValidation(){

		var data = JSON.parse("../Admin/adminInfo.json");
		let size = sizeof(data);
		let count=0;
		let flag = true;
		let trigger = false;
		alert(data[0].Email);
		while(flag){

			if(data[count].Email==uname_1 && data[count].Password==password_1){

				flag=false;
				trigger=true;
			}
			if(count+1==size){

				flag=false;
			}
			count++;
		}

		if(trigger){

			isValid3=true;
		}
}

function validateUsername()
{
	if(uname_1.value==""){

		setErrorUsername(uname_1,'Username is empty');
		
	}
	else{

		setSuccessUsername(uname_1);
		isValid = true;
	}

	

}

function validatePassword(){

	if(password_1.value==""){

		setErrorPassword(password_1,'Password is empty');

	}
	else{

		setSuccessPassword(password_1);
		isValid2 = true;
	}
}



function setErrorUsername(input,msg)	//Username
{
	const x=document.getElementById('form-control');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}




function setSuccessUsername(input)
{	

	const x2=document.getElementById('form-control');
	const smalltag2=x2.querySelector('small');
	smalltag2.innerHTML="";
	const itag=document.getElementById('error');
	itag.style.visibility="hidden";
	const itag2=document.getElementById('success');
	itag2.style.visibility="visible";
	itag2.style.color="green";
	input.style.borderColor="green";

}

function setErrorPassword(input,msg)	//Password
{
	const x=document.getElementById('form-control1');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error2');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";

}

function setSuccessPassword(input)
{
	const x2=document.getElementById('form-control1');
	const smalltag2=x2.querySelector('small');
	smalltag2.innerHTML="";
	const itag=document.getElementById('error2');
	itag.style.visibility="hidden";
	const itag2=document.getElementById('success2');
	itag2.style.visibility="visible";
	itag2.style.color="green";
	input.style.borderColor="green";

}