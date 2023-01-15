        var username=document.forms['form']['user'].value;
        var password=document.forms['form']['pass'].value;
        var user_error=document.getElementById('user_err');
        var pass_error=document.getElementById('pass_err');
        username.addEventListener('textinput',username_verify);
        password.addEventListener('textinput',pass_verify);
        function validate(){
            if(username.length<9){
                username.style.border="1px solid red";
                username.error.style.display="block";
                username.focus();
                return false;
            }
            if(password.length<6){
                username.style.border="1px solid red";
                username.error.style.display="block";
                username.focus();
                return false;
            }
        }
        function username_verify(){
            if(username.value.length>7){
                username.style.border="1px green";
                username.error.style.display="none";
                return true;
            }
        }
        function pass_verify(){
            if(password.value.length>5){
                username.style.border="1px green";
                username.error.style.display="none";
                return true;
            }
        }
