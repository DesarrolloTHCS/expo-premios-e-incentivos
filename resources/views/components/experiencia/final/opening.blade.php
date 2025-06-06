<style>
    .logo-container-wrapper {
        position: fixed;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: transparent;
        /* Fondo blanco alrededor del ícono */
        z-index: 10;
        /* Asegura que esté delante */
    }

    .logo-container {
        width: 100%;
        text-align: center;
        transition: all 2s ease-out;
    }

    .logo-container img {
        max-width: 100%;
        height: 100%;
        transition: transform 3s ease-out;
    }

    .logo-container:hover img {
        transform: scale(20);
        border-width: 20px;
    }
</style>

<div class="logo-container-wrapper" id="logo-container-wrapper">
    <div class="logo-container" id="logo-container">
        <img src="{{ asset('storage/img/expo.svg') }}" alt="Ícono de tu sitio web">
    </div>
</div>
