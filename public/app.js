let numerosGenerados = [];

        function generarNumero() {
            if (numerosGenerados.length === 100) {
                alert("Ya se han generado todos los números posibles.");
                return;
            }

            let numeroAleatorio;
            do {
                let ultimosDosDigitos = Math.floor(Math.random() * 100); // Genera un número entre 00 y 99
                numeroAleatorio = '10' + ultimosDosDigitos.toString().padStart(2, '0'); // Asegura que siempre tenga dos dígitos
            } while (numerosGenerados.includes(numeroAleatorio));

            numerosGenerados.push(numeroAleatorio);
            document.getElementById("resultado").innerText = "Este es tu número de ID: " + numeroAleatorio;
        }

        // Llamar a la función generarNumero() cuando la página se cargue
        window.onload = generarNumero;





// boton inicio de sesion

// Capturar el evento de clic en el botón
document.getElementById("btnSubmit").onclick = function() {
    // Obtener el valor del campo de ID
    var idIngreso = document.getElementById("idIngreso").value;
    
    // Verificar que el ID no esté vacío
    if (idIngreso) {
        // Redirigir a alumnos.php pasando el ID como parámetro en la URL
        window.location.href = "alumnos.php?id=" + idIngreso;
    } else {
        alert("Por favor ingrese un ID válido");
    }
};



