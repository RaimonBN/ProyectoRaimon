//funcion para buscar por nombres de personajes
$(function(){
    $("#buscador").click(function(e){
        
        var valor = $("#texto_buscador").val();
        $("form").attr("action","/buscar/"+ valor);
        })
});