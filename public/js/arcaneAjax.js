$ (document).ready(function(){
    
    $("#arcane_boton").click(function(){
        $.ajax({
           
            url:"/js/saber.txt",
            success: function(response){
                $("#contenedor_saber").html(response)
            }
        })

    })
   
})

