onload = function(){

    if (window.XMLHttpRequest) {
        
        request = new XMLHttpRequest();
    
    }

    document.getElementById("arcane_boton").onclick = sacardatos

}

    function sacardatos(){

        if(request) {

            request.open("GET", "/js/saber.txt");

            request.onreadystatechange = function(){

                if (request.readyState == 4 && request.status == 200) {

                    document.getElementById("contenedor_saber").innerHTML = request.responseText;
                }
            }


        request.send(null);
    }
}
                                      