$(function(){
    

    $("#form").submit(function(event){
        var email=$("#email").val();
        var password=$("#password").val();
        var terms=$("#terms").is(":checked");
        var textArea=$("#textArea").val();
        var name=$("#name").val();
        var phone=$("#phone").val();
        var state=$("#inputState").val();
        

        validateCheck(terms,event);
        validateEmail(email,event);
        validatePassword(password,event);
        validateTextArea(textArea,event);
        validateName(name,event);
        validateNumber(phone,event);
        validatestate(state,event);
        
        
    });
  

}); 

function validatestate(state,event){
    if(state=="Choose..."){
        $("#inputState").addClass("is-invalid");
        $(".selected").text("Please enter the valid state*");
        event.preventDefault();
        $(".msg").text("*Please fill out all the details correctly*").css("text-align","center");
    }
    else{
        $("#inputState").removeClass("is-invalid").addClass("is-valid");
     $(".selected").text("");
    
    }
}//function close




 function validateEmail(email,event){
    if(!validEmail(email)){
        $("#email").addClass("is-invalid");
        $("#email").next().text("Please enter the valid email*");
        event.preventDefault();
        $(".msg").text("*Please fill out all the details correctly*").css("text-align","center");
    }
    else{
        $("#email").removeClass("is-invalid").addClass("is-valid");
     $("#email").next().text("");
    
    }
}//function close

function validatePassword(password,event){

    if(!validPassword(password)){
        $("#password").addClass("is-invalid");
        $("#password").next().text("Please enter at least 8 Characters*");
        event.preventDefault();
        $(".msg").text("*Please fill out all the details correctly*").css("text-align","center");

    }
    else{
        $("#password").removeClass("is-invalid").addClass("is-valid");
        $("#password").next().text("");
        
    }
}//function close

 function validateCheck(terms,event){
    
      if(!terms){
        $("#terms").addClass("is-invalid");
          $("#validateCheck").text("Please check the terms and conditions*");
          event.preventDefault();
          $(".msg").text("*Please fill out all the details correctly*").css("text-align","center");

      }
      else{
        $("#terms").removeClass("is-invalid").addClass("is-valid");
        $("#validateCheck").text("");
      }

 }//function close

  function validateTextArea(textArea,event){

       if(!validTextarea(textArea)){
           $("#textArea").addClass("is-invalid");
           $("#textArea").next().text("Please enter valid Message*");
           event.preventDefault();
           $(".msg").text("*Please fill out all the details correctly*").css("text-align","center");
       }
       else{
        $("#textArea").removeClass("is-invalid").addClass("is-valid");
        $("#textArea").next().text("");
       }

  }//fun close

    function validateName(name,event){
        if(!validName(name)){
            $("#name").addClass("is-invalid");
            $("#name").next().text("Please enter the valid name");
            event.preventDefault();
        }else{
            $("#name").removeClass("is-invalid").addClass("is-valid");
            $("#name").next().text("");
        }
    }//fun close

    function validateNumber(phone,event){

       if(!validNumber(phone)){
        $("#phone").addClass("is-invalid");
        $("#phone").next().text("Please enter the valid number");
            event.preventDefault();
       }
       else{
        $("#phone").removeClass("is-invalid").addClass("is-valid");
       $("#phone").next().text("");
       }
    }//fun close





    function validNumber(phone){
        return phone.length ==10 && /^\d{10}$/ .test(phone);
    }

    function validName(name){
        return name.length>=3 && /^[a-z ,.'-]+$/i .test(name);
    }

  function validTextarea(textArea){   
          return textArea.trim() != "";
  }

 function validEmail(email){
    return /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(email);
 }
  function validPassword(password){
      return password.length >= 8;
  }
