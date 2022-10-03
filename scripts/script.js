$(document).ready(function(){

    //Inserir dados no banco sem refresh da página

    $("#form-btn").click(function(){
        
   
        var nome = $("#nome").val();
        var comentario = $("#comentario").val();
        var formData = {
            nome: nome,
            comentario: comentario
        };

        $.ajax({
            url: "form_process.php",
            type: "POST",
            data: formData,
            dataType: "json",
            success: function(response){
                $("#nome").val("");
                $("#comentario").val("");
                $(".comments-box").html("");
                console.log(response);
                getComments();
            }
        });
  
    });

    //Resgatar os comentários sem dar refresh na página

    function getComments(){
        $.ajax({
            url: "return_comments.php",
            type: "GET",
            dataType: "json",
            success: function(response){

                for(var i = 0; i<response.length; i++){
                    $(".comments-box").prepend("<div class='comment'><h4 class='user-name-title'>" + response[i].nome + "</h4><p class='msg-text'>" + response[i].texto +"</p><p class='date-text'>Publicado em <span class='date'>"+ response[i].data +"</span> </p></div>");
                }

                console.log(response);
            }
        });
    }

    

    getComments();
    

    

});