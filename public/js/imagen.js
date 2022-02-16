$(document).ready(function (){
    $("#garen").hide();
    $("#show").click(function (){
        $("#garen").show(2500)
    })
    $("#hide").click(function (){
        $("#garen").hide("slow")
    })

    });