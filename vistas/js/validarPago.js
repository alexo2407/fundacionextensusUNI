/* ***************************************************************
    VARIABLES 
 *************************************************************** */
    const checkout = document.getElementById('input-stripe-quantity');
    const btnPago = document.getElementById('checkout-button');
    
    // invocamos el la funcion Event listener
    eventListeners();
    
    
    function eventListeners(){
        // Inicio de la aplicación y deshabilitación del submit en el form
        //El DOMContentLoadedevento se activa cuando el documento HTML inicial se ha cargado y analizado por completo, sin esperar a que las hojas de estilo, las imágenes y los subcuadros terminen de cargarse.
        document.addEventListener("DOMContentLoaded",disableBtn);
    
        // campos del formulario
        checkout.addEventListener("input", validarCampo);
        
    }
    
    function disableBtn(e){
        btnPago.disabled = true;
    }
    
    
    function validarCampo(e){    
    
        // validamos la longitud del campo y que no venga vacio
        validarLongitud(this);
    
        // validar que sean email 
        if(this.type === 'number'){
            validarCantidad(this);
        }
    
    
        // obtener la clase error en el DOM
        let errores = document.querySelectorAll('.error');
    
        // validar si los valores estan vacios
        if(checkout.value != "")
        {
            // si la longitud de los errores es igual a cero desactiva el boton
            if(errores.length === 0){
                btnPago.disabled = false;
                console.log(errores.length);
            }
        }
        else {
            btnPago.disabled = true;
        }
    
    }
    
    
    function validarLongitud(campo){
    
        //console.log(campo.value.length);
    
        // agregar border color a las los input si estan llenos  o vacios
    
        if(campo.value.length > 0) {
            campo.style.borderColor = 'green';
            campo.classList.remove('error');
            
        }else {
            campo.style.borderColor = 'red';
            campo.classList.add('error');                    
           // document.getElementsByClassName("invalid-feedback")[0].style.display="block";
           // document.getElementsByClassName("valid-feedback")[0].style.display="none";

            // document.querySelector("label[for='usuarioIngreso']").innerHTML += 'Campo vacio, porfavor rellene el campo';
            // document.querySelector("div[for='Pass']").innerHTML += 'Campo vacio, porfavor rellene el campo';
        }
    
    }
    
    
    /* ***************************************************************
    VALIDAR USUARIO REGISTRO 
     *************************************************************** */
    
    function validarCantidad(campo){
        // console.log('dentro del input name');     
        

        if(campo.value < 1)
        {
            campo.style.borderColor = 'red';
            campo.classList.add('error');
            // document.querySelector("label[for='usuarioIngreso'] span").innerHTML = '<p style="color:red;">Caracteres invalidos</p><br>';
   
        }
        else{  
            campo.style.borderColor = 'green';
            campo.classList.remove('error');   
           // document.getElementsByClassName("valid-feedback")[0].style.display="none";
           // document.getElementsByClassName("invalid-feedback")[0].style.display="none";
                
        }
    }
    
    
    /* **************************** FIN DE VAIDAR REGSITRO **************************/
    
    
  