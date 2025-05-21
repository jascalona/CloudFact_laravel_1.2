/**CALCULO DE VOLUMEN EN CARGA MANUAL */

/**CALCULO */
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

})