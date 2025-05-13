document.addEventListener('DOMContentLoaded', function () {
    const num1Input = document.getElementById('num1');
    const num2Input = document.getElementById('num2');
    const resultadoInput = document.getElementById('resultado');

    // Agrega un evento input a ambos input
    num1Input.addEventListener('input', actualizarResultado);
    num2Input.addEventListener('input', actualizarResultado);

    function actualizarResultado() {
        const num1 = parseFloat(num1Input.value);
        const num2 = parseFloat(num2Input.value);

        if (isNaN(num1) || isNaN(num2)) {
            resultadoInput.value = ''; // Limpiar el resultado si alguno de los valores no es un número
        } else {
            const resultado = num1 * num2;
            resultadoInput.value = resultado;
        }
    }
});    