

$(".addBrand").submit(function(ev){
    ev.preventDefault();

   var name = $('input[name="name"]').val();

   
   // check if data exists
   if(name.length === 0){
    $(".errName").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Brand Name.");
    $(".errName").css("color","red");
   }

   // check if the user inter data
   $("#name").change(function(){
      $(".errName").html("");
   })



   //ajax request
   if(name){
        $.ajax({
            method:"post",
            url:"functions/brand/do_add_new_brand.php",
            data:new FormData(this),
            Cache:false,
            success:function(data){
               $(".addBrand").hide();
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