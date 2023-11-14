

$(".editUser").submit(function(ev){
     ev.preventDefault();
     

     var name = $('input[name="name"]').val();
     var email = $('input[name="email"]').val();
     var img = $('input[name="img"]').val();
     var priv = $('select[name="priv"]').val();

    //  check if data empty
    if(name.length === 0){
        $(".errName").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Name.");
        $(".errName").css("color","red");
       }
    if(email.length === 0){
        $(".errEmail").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Email.");
        $(".errEmail").css("color","red");
       }
    if(img.length === 0){
        $(".errFile").html("<i class='fa fa-lg fa-exclamation-triangle' aria-hidden='true'></i> Please Choose File.");
        $(".errFile").css("color","red");
    }
    if(priv === "0"){
        $(".errPriv").html("<i class='fa fa-lg fa-exclamation-triangle' aria-hidden='true'></i> Please Choose one privliges.");
        $(".errPriv").css("color","red");
    }

     
    // check if data insert
    $("#name").change(function(){
        $(".errName").html("");
     })
    $("#email").change(function(){
        $(".errEmail").html("");
     })
    $("#img").change(function(){
        $(".errFile").html("");
    })
    $("#priv").change(function(){
        $(".errPriv").html("");
    })
     


     //  ajax request 
     if(name && email && img && priv > 0){
        $.ajax({
            method:"post",
            url:"functions/users/do_edit_user.php",
            data :new FormData(this),
            cache:false,
            success:function(data){
               
                console.log(data);
                $(".card-text").append(data);
                $("#mycard").show();
                $('.editUser').hide();
                
             

            },
            error:function(xhr,statusText,err){
                console.log(xhr);
                console.log(statusText);
                console.log(err);
            },
            complete:function(){
                console.log("from complete");
            },
            contentType:false,
            processData:false
        })
     }


})

