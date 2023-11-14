
$(".addProduct").submit(function(ev){
    ev.preventDefault();

    var name = $('input[name="name"]').val();
    var price = $('input[name="price"]').val();
    var brand = $('select[name="brand"]').val();
    var category = $('select[name="category"]').val();
    var cover = $('input[name="cover"]').val();
    var description = $('textarea[name="description"]').val();


    // check if inputs empty
    if(name.length === 0){
        $(".errName").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Name.");
        $(".errName").css("color",'red');
    } 
    if(price.length === 0){
        $(".errPrice").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Price.");
        $(".errPrice").css("color",'red');
    } 
    if(brand === '0'){
        $(".errBrand").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Brand.");
        $(".errBrand").css("color",'red');
    } 
    if(category === "0"){
        $(".errCategory").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Category.");
        $(".errCategory").css("color",'red');
    } 
    if(cover.length === 0){
        $(".errFile").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter Your Cover.");
        $(".errFile").css("color",'red');
    } 
    if(description.length === 0){
        $(".errDescription").html("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> please Enter The Description.");
        $(".errDescription").css("color","red");
        $("#description").css("border-color","red");
     } 

    // check if user inter data  
    $("#name").change(function(){
        $(".errName").html("");
    })
    $("#price").change(function(){
        $(".errPrice").html("");
    })
    $("#brand").change(function(){
        $(".errBrand").html("");
    })
    $("#category").change(function(){
        $(".errCategory").html("");
    })
    $("#cover").change(function(){
        $(".errFile").html("");
    })
    $("#description").change(function(){
        $(".errDescription").html("");
        $("#description").css("border-color","");
    })



    // ajax request
    if(name && price && brand > '0' && category > '0' && cover && description > '0'){
        $.ajax({
            method:"post",
            url:"functions/products/do_add_product.php",
            data: new FormData(this),
            cache:false,
            success:function(data){
                $(".addProduct").hide();
                $(".card").show();
                $(".card-text").append(data);
            },
            error:function(xhr,statusText,err){
                console.log(xhr);
                console.log(statusText);
                console.log(err);
            },
            contentType:false,
            processData:false
            
       })
    }


})