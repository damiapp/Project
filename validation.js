var submit_button=document.querySelector("#submit_button");
submit_button.onclick=function(){
    var error=document.querySelector("#error");
    
    var registration_form = document.querySelector("#submit_button");
    /* provera username */
    var username;
    var username_element;

    username_element = document.querySelector("#username");
    username=username_element.value;
    /* window.alert(username); */
    if(username.length<5 || username.length>10){
        /* window.alert("Wrong username lenght!"); */
        error.textContent = "Wrong username length!";
        username_element.style = "border : 2px solid red;";
        return;/* undifined */
    }
    else{
        username_element.style="";
    }

    /* provera za sifru */
    var password_element= document.querySelector("#password");
    var password = password_element.value;

    if(password.length==0 || password.length>10){
        return;
    }
    var digit = false;
    for(var i = 0;i<password.length ; i++){
        if("0123456789".indexOf(password[i]) != -1){
            digit=true;
        }
    }
    if(digit == false){
        window.alert("Wrong password - no digits!");
    }

    /* email */
    var email_element = document.querySelector("#email");
    var email= email_element.value;

    var at_position = email.indexOf("@");
    var las_dot_position = email.lastIndexOf(".");
    if(at_position == -1 || las_dot_position == -1 || las_dot_position<at_position){
        window.alert("Wrong email address!");
        return;
    }
    /* news */
    var news_element = document.querySelector("#news");
    if(news_element.checked == true){
        return;
    }
}
