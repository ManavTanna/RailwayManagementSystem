$(document).ready(function(){
    $("#btn-login").click(function(){
        var usermail = $("#usermail").val();
        var userpass = $("#userpass").val();
        var check = /^([a-zA-Z0-9\-\_\.]){1,}\@(gmail.com)$/;
        if(usermail==""){
			$("#usermail").focus();
            $("#usermail").addClass("is-invalid");
			return false;
		}

        $("#usermail").removeClass("is-invalid");
        $("#usermail").addClass("is-valid");
        
		if(check.test(usermail)==false){
			$("#usermail").focus();
            $("#usermail").addClass("is-invalid");
			return false;
		}
		if(userpass==""){
			$("#userpass").focus();
            $("#userpass").addClass("is-invalid");
			return false;
		}
    });
});