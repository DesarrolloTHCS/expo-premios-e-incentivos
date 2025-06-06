//Inicio Opening
document.addEventListener("DOMContentLoaded", function () {
    // Obtener el contenedor del logo
    const logoContainer = document.getElementById("logo-container");
    const logoContainerWrapper = document.getElementById(
        "logo-container-wrapper"
    );

    function deleteLogoContainer() {
        logoContainerWrapper.remove();
        //document.body.style.overflow = "auto"; // Restaurar barras de desplazamiento
    }

    // Ocultar barras de desplazamiento durante la animación
    //document.body.style.overflow = "hidden";

    // Retrasar el inicio de la animación 1 segundo después de cargar la página
    setTimeout(() => {
        logoContainer.style.transition = "opacity 1s"; // Animar la opacidad durante 1 segundo
        logoContainer.style.opacity = "0"; // Ocultar el contenedor

        // Eliminar el contenedor 1 segundo después de iniciar la animación
        setTimeout(deleteLogoContainer, 1000);
    }, 1000);
});
//Fin opening

//Inicio modal de cuestionarios
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");
const modal = document.getElementById("myModal");

openModal.addEventListener("click", () => {
    modal.classList.remove("hidden");
    modalPerfil.classList.remove("hidden");
});

closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
    modalCuestionarios.classList.add("hidden");
    modalPerfil.classList.add("hidden");
});
//Fin modal de cuestionarios

//Inicio sección cuestionarios
const openCuestionarios = document.getElementById("openCuestionarios");
const modalCuestionarios = document.getElementById("cuestionariosContent");

openCuestionarios.addEventListener("click", () => {
    modalCuestionarios.classList.remove("hidden");
    cuestionarioFinal.classList.add("hidden");
    modalPerfil.classList.add("hidden");
});
//Fin sección cuestionarios

//Inicio sección cuestionarios
const openCuestionarioFinal = document.getElementById("openCuestionarioFinal");
const closeCuestionarioFinal = document.getElementById("closeCuestionarioFinal");
const cuestionarioFinal = document.getElementById("cuestionarioFinal");

openCuestionarioFinal.addEventListener("click", () => {
    cuestionarioFinal.classList.remove("hidden");
    modalCuestionarios.classList.add("hidden");
});

closeCuestionarioFinal.addEventListener("click", () => {
    cuestionarioFinal.classList.add("hidden");
    modalCuestionarios.classList.remove("hidden");
});
//Fin sección cuestionarios

//Inicio sección perfil
const openPerfil = document.getElementById("openPerfil");
const modalPerfil = document.getElementById("profileContent");

openPerfil.addEventListener("click", () => {
    modalPerfil.classList.remove("hidden");
    cuestionarioFinal.classList.add("hidden");
    modalCuestionarios.classList.add("hidden");
});
//Fin sección perfil
