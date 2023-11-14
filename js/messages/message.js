

$(".leave-comment").submit(function(ev){
    ev.preventDefault();

   var name = $('input[name="name"]').val();
   var email = $('input[name="email"]').val();
   var phone = $('input[name="phone"]').val();
   var message = $('textarea[name="message"]').val();

   
     

   // check if data exists
   if(name.length === 0){
    $(".errName").html("<i class='fa fa-exclamation-triangle fa-lg' aria-hidden='true'></i> please Enter Your Name.");
    $(".errName").css("color","red");
   }
   if(email.length === 0){
    $(".errEmail").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Email.");
    $(".errEmail").css("color","red");
   }
   if(phone.length === 0){
    $(".errPhone").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Your Phone number.");
    $(".errPhone").css("color","red");
   }
   if(message.length === 0){
    $(".errMessge").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Your message.");
    $(".errMessge").css("color","red");
   }

   // check if the user inter data
   $("#name").change(function(){
      $(".errName").html("");
   })
   $("#email").change(function(){
      $(".errEmail").html("");
   })
   $("#phone").change(function(){
      $(".errPhone").html("");
   })
   $("#message").change(function(){
      $(".errMessge").html("");
   })



   //ajax request
   if(name && email && phone && message ){
        $.ajax({
            method:"post",
            url:"functions/messages/do_add_new_message.php",
            data:new FormData(this),
            Cache:false,
            success:function(data){
                $(".response").append(data);
                $("form textarea").val("");
                $("#name").val("");
                $("#email").val("");
                $("#phone").val("");
              
   
            },
            error:function(xhr,statusText,err){
                console.log(xhr);
                console.log(xhstatusTextr);
                console.log(err);
                
            },
            contentType :false,
            processData:false

    });
   }

})