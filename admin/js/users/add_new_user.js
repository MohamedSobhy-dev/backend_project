

$(".addUser").submit(function(ev){
    ev.preventDefault();

   var name = $('input[name="name"]').val();
   var email = $('input[name="email"]').val();
   var img = $('input[name="img"]').val();
   var priv = $('select[name="priv"]').val();
   var pass = $('input[name="pass"]').val();
   
     

   // check if data exists
   if(name.length === 0){
    $(".errName").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Name.");
    $(".errName").css("color","red");
   }
   if(email.length === 0){
    $(".errEmail").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Email.");
    $(".errEmail").css("color","red");
   }
   if(img.length === 0){
    $(".errFile").html("<i class='fa fa-lg fa-exclamation-triangle' aria-hidden='true'></i> Please Choose Your File");
    $(".errFile").css("color","red");
   }
   if(priv === "0"){
    $(".errPriv").html("<i class='fa fa-lg fa-exclamation-triangle' aria-hidden='true'></i> Please Choose one privliges");
    $(".errPriv").css("color","red");
   }
   if(pass.length === 0){
    $(".errPass").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Your Password.");
    $(".errPass").css("color","red");
   }

   // check if the user inter data
   $("#name").change(function(){
      $(".errName").html("");
   })
   $("#email").change(function(){
      $(".errEmail").html("");
   })
   $("#img").change(function(){
      $(".errFile").html("");
   })
   $("#password").change(function(){
      $(".errPass").html("");
   })
   $("#priv").change(function(){
      $(".errPriv").html("");
   })



   //ajax request
   if(name && email && img && pass && priv > "0" ){
        $.ajax({
            method:"post",
            url:"functions/users/do_add_new_user.php",
            data:new FormData(this),
            Cache:false,
            success:function(data){
               $(".addUser").hide();
               $(".card").show();
               $(".card-text").append(data);
               //  $("#result").append(data);
               //  $('form input ').val("");
               //  $("#sub").val("Add New User");
   
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