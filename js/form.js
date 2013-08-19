/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#setupform");
	var user_name = $("#user_name");
	var user_email = $("#user_email");
	var blog_title = $("#blog_title");

	
	//On blur
	user_name.blur(validateUser_Name);
	user_email.blur(validateUser_Email);
	blog_title.blur(validateBlog_Title);
	//On key press
	user_name.keyup(validateUser_Name);
	user_email.keyup(validateUser_Email);
	blog_title.keyup(validateBlog_Title);
	//On Submitting
	form.submit(function(){
		if(validateUser_Name() & validateUser_Email() & validateBlog_title())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateUser_Email(){
		//testing regular expression
		var a = $("#user_email").val();
		var filter = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			user_email.removeClass("error");
						return true;
		}
		//if it's NOT valid
		else{
			user_email.addClass("error");
			return false;
		}
	}
	function validateUser_Name(){
		//if it's NOT valid
		if(user_name.val().length < 4){
			user_name.addClass("error");
			return false;
		}
		//if it's valid
		else{
			user_name.removeClass("error");
		return true;
		}
	}
	function validateBlog_Title(){
		//if it's NOT valid
		if(blog_title.val().length < 1){
			blog_title.addClass("error");
			return false;
		}
		//if it's valid
		else{
			blog_title.removeClass("error");
		return true;
		}
	}
});

//sigupform


$(document).ready(function(){
	//global vars
	var form = $("#loginform");
	var user_login = $("#user_login");
	var user_pass = $("#user_pass");

	
	//On blur
	user_login.blur(validateUser_Login);
	user_pass.blur(validateUser_Pass);
	//On key press
	user_login.keyup(validateUser_Login);
	user_pass.keyup(validateUser_Pass);
	//On Submitting
	form.submit(function(){
		if(validateUser_Login() & validateUser_Pass())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateUser_Login(){
		//if it's NOT valid
		if(user_login.val().length < 2){
			user_login.addClass("error");
			return false;
		}
		//if it's valid
		else{
			user_login.removeClass("error");
		return true;
		}
	}
	function validateUser_Pass(){
		//if it's NOT valid
		if(user_pass.val().length < 1){
			user_pass.addClass("error");
			return false;
		}
		//if it's valid
		else{
			user_pass.removeClass("error");
		return true;
		}
	}
});