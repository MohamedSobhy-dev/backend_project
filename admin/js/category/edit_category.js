

$(".editCategory").submit(function(ev){
    ev.preventDefault();
    

    var name = $('input[name="name"]').val();


   //  check if data empty
   if(name.length === 0){
       $(".errName").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Category Name.");
       $(".errName").css("color","red");
      }

    
   // check if data insert
   $("#name").change(function(){
       $(".errName").html("");
    })

    


    //  ajax request 
    if(name){
       $.ajax({
           method:"post",
           url:"functions/category/do_edit_category.php",
           data :new FormData(this),
           cache:false,
           success:function(data){
              
               console.log(data);
               $(".card-text").append(data);
               $("#mycard").show();
               $('.editCategory').hide();
               
            

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

