"use strict"



function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty name field ';		
	}
	else if(data.length <3){
		document.getElementById('head').innerHTML = 'Name required three words';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Name is invalid';
	}
	

}

function IdValidation(){
	let data= document.getElementById('id').value;
	if(data == ''){
	
	document.getElementById('head').innerHTML = 'Id is invalid !';
}
else{
	document.getElementById('head').innerHTML = data;
}


}

function PasswordValidation(){
	let data= document.getElementById('password').value;
	let dataone= document.getElementById('cpassword').value;
	if(data.length <6){
		document.getElementById('head').innerHTML = 'Invalid Password';
	}
	
	else{
		document.getElementById('head').innerHTML = data;
	}
	
	
}

function EmailValidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Empty Name field ';		
	}
	else if(data.length <3 ){
		document.getElementById('head').innerHTML = 'Email is invalid !';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('head').innerHTML = data;
		     }
	else if( data.includes("@yahoo.com")){
		document.getElementById('head').innerHTML = data;
		     }	
	else if( data.includes("@.edu")){
		document.getElementById('head').innerHTML = data;
		     }	          
      else{
		document.getElementById('head').innerHTML = 'Email is invalid !';
	}

}
function UserTypeValidation()
{



    if(document.getElementById('admin').checked ==true ){
	document.getElementById('head').innerHTML = admin.value;		
	}
    else if(document.getElementById('teacher').checked ==true){
		document.getElementById('head').innerHTML = teacher.value;		
	}
	
     else{
		document.getElementById('head').innerHTML = student.value;
	}

}


function GenderValidation()
{



    if(document.getElementById('male').checked ==true ){
	document.getElementById('head').innerHTML = "male.value";		
	}
    else if(document.getElementById('female').checked ==true){
		document.getElementById('head').innerHTML = female.value;		
	}
	
     else{
		document.getElementById('head').innerHTML = others.value;
	}

}

function NumberValidation(){
	
	let data= document.getElementById('phone').value;
	
	if(data.length==11 && data >=0 || data <=9){
		document.getElementById('head').innerHTML = data;
	}
	else{
		document.getElementById('head').innerHTML = 'Phone no is invalid !';
	}
	
}