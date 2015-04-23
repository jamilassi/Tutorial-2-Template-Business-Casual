(function(context){

context.Utils = {};


function show(id) {
	var ele=document.getElementById(id);
	if (ele.style.display === "none")
	{
		ele.style.display="block";
	}
	else {
		ele.style.display="none";
		}
	}   
context.Utils.show = show;


    
function hide(el) {
	el.style.display="none";
	}    
context.Utils.hide = hide;
    

    
function foo() {
        console.log("Function foo in utils.js Called by Utils.foo() on main.js");
    }

context.Utils.foo =foo;

})(window);
