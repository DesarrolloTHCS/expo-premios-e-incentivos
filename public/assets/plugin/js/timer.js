// Establecer fecha
var countDownDate = new Date("Mar 19, 2026 00:00:00").getTime();

// Actualizar la cuenta atrás cada segundo
var x = setInterval(function() {
    // Obtener la fecha y hora de hoy
    var now = new Date().getTime();

    // Encontrar la diferencia entre la fecha actual y la fecha objetivo
    var distance = countDownDate - now;

    // Calcular Días, Horas, Minutos y Segundos
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Mostrar los resultados en sus respectivos elementos
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // Si la cuenta atrás termina, mostrar un texto
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "¡¡ES HOY!!";
        document.getElementById("countdown").style.fontSize = "8rem";
    }
}, 1000);
