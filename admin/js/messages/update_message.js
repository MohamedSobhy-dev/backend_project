
$(".modalbtn").click(function(){
    //  jquery traversing 
    $(this).parent().parent().find(".view").text("read");
    // $(this).parent().prev().text("read")

    var id = $(this).attr("data-id");
    
    // ajax request 

    $.post("functions/messages/update_message.php",{id:id},function(data){
       $(".mySpan").html(data);
    })
});