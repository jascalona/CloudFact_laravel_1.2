/**CALCULO DE VOLUMEN EN CARGA MANUAL */

/**CALCULO VOLUMEN B/N */
document.addEventListener('DOMContentLoaded', function(){
    const CONT_ANTE_BN = document.getElementById('cont_ante_bn');
    const CONT_ACTU_BN = document.getElementById('cont_actu_bn');
    const VOLUM_BN = document.getElementById('volum_bn');

    //Agregar los eventos input a ambos inputs
    CONT_ANTE_BN.addEventListener('input', actualizarResultado);
    CONT_ACTU_BN.addEventListener('input', actualizarResultado);

    //FUNCION DE CONVERSION
    function actualizarResultado(){
        const ante_bn = parseInt(CONT_ANTE_BN.value);
        const actu_bn = parseInt(CONT_ACTU_BN.value);

        if (isNaN(ante_bn) || isNaN(actu_bn)) {
            VOLUM_BN.value = ''; 
        //Formatear los campos en caso de que los datos ingresado no puedan ser calculados
        } else {
            const resultado = actu_bn - ante_bn;
            VOLUM_BN.value = resultado;
        }
    }
});


/**CALCULO VOLUMEN COLOR */

document.addEventListener('DOMContentLoaded', function(){
    const CONT_ANTE_COLOR = document.getElementById('cont_ante_color');
    const CONT_ACTU_COLOR = document.getElementById('cont_actu_color');
    const VOLUM_COLOR = document.getElementById('volum_color');

    //AGREGAR LOS EVENTOS INPUTS A AMBOS INPUTS
    CONT_ANTE_COLOR.addEventListener('input', actualizarResultado);
    CONT_ACTU_COLOR.addEventListener('input', actualizarResultado);

    //FUNCION DE CONVERSION
    function actualizarResultado(){
        const ante_color = parseInt(CONT_ANTE_COLOR.value);
        const actu_color = parseInt(CONT_ACTU_COLOR.value);

        if (isNaN(ante_color) || isNaN(actu_color)) {
            VOLUM_COLOR.value = '';
        } else {
            const  resultado = actu_color - ante_color;
            VOLUM_COLOR.value = resultado; 
        }
    }
    
}); 