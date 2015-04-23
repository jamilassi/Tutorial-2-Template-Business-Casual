/*
4F
This is my program
version: 0.0.1
author: J.Assi 
created: April 2015


*/

$(document).ready(function(e){
	
	console.log("JQuery and bootstrap are ready");
	console.log("main.js is launched");
	
	

		
    
});

function submitForm(e) {
	console.log("submitForm() is launched");
	e.preventDefault();
	
	var foodata = {
		firstname: $('#firstname').val(),
		lastname: $('#lastname').val(),
		email: $('#email').val(),
		comment: $('#comment').val()
		}
	
	console.log(foodata);
	
	$('.loading').removeClass('hidden');
	$('#contact').addClass('hidden');
	
	//$.post('contact.php',pladata,submitSuccess); //point 6
	$.ajax('contact2.php',{data:foodata,success:formsuccess,error:formerror,method:"POST"});
		
	console.log("submitForm called");
	return false;
	}
	
function formsuccess(xhr,status) {
	console.log(xhr);
	$('.loading').addClass('hidden');
	$('.alert-success').removeClass('hidden');
	}

function formerror(xhr,status) {
	console.log(xhr);
	$('.loading').addClass('hidden');
	$('.alert-warning').removeClass('hidden');
	}

Utils.foo();