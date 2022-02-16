$(document).ready(function(){

    $.fn.biggerimg = function(){
        this.each(function(){
            elem = $(this);

            //funcionalidad del plugin
            elem.animate({
                height: 400,
                width: 1000,
            });

        });
        return this;
    };
       
    $("#animar").click (function(){
        $("#garen").biggerimg();
    })
 });