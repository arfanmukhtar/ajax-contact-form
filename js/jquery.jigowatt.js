$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var subject         = $('input[name=subject]').val();
        var user_message    = $('textarea[name=comments]').val();
        var verify    		= $('input[name=verify]').val();
        var cap    			= $('input[name=cap]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
		
		if(subject=="") {  
            $('input[name=subject]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=comments]').css('border-color','red'); 
            proceed = false;
        }
		 if(verify=="") {    
            $('input[name=verify]').css('border-color','red'); 
            proceed = false;
        }
		

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone,'subject':subject, 'userMessage':user_message , 'cap':cap, 'verify' : verify};
            
            //Ajax post data to server
            $.post('contact.php', post_data, function(response){  
                
                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                
                    output = '<div class="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    $('#contactform input').val(''); 
                    $('#contactform textarea').val(''); 
                }
                
                $("#result").hide().html(output).slideDown();
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contactform input, #contactform textarea").keyup(function() { 
        $("#contactform input, #contactform textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    
});