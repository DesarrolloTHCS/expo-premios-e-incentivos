//Esperar a que cargue todo el documento
document.addEventListener("DOMContentLoaded", function () {
    //Variables de personalización de la página
    let selectedName = null;
    let selectedColor = null;
    let selectedLogo = null;
    let selectedBanner = null;
    let selectedPoints = null;
    let selectedCategories = [];
    let selectedSections = [];

    //Identificar las vistas y los botones de la aplicación

    /* Pantalla principal */
    const startModal = document.getElementById("startModal");
    /* Botón de "Iniciar experiencia" */
    const startButton = document.getElementById("startButton");

    /* Pantalla selección de nombre */
    const nameSelection = document.getElementById("nameSelection");
    /* Botón "Siguiente" de la página de selección de nombre */
    const nextButtonName = document.getElementById("nextButtonName");

    /* Pantalla selección de color */
    const colorSelection = document.getElementById("colorSelection");
    /* Botón "Siguiente" de la página de selección de color */
    const nextButtonColor = document.getElementById("nextButtonColor");

    /* Pantalla selección de logo */
    const logoSelection = document.getElementById("logoSelection");
    /* Botón "Siguiente" de la página de selección de logo */
    const nextButtonLogo = document.getElementById("nextButtonLogo");

    /* Pantalla selección de banner */
    const bannerSelection = document.getElementById("bannerSelection");
    /* Botón "Siguiente" de la página de selección de banner */
    const nextButtonBanner = document.getElementById("nextButtonBanner");

    /* Pantalla selección de puntos */
    const pointsSelection = document.getElementById("pointsSelection");
    /* Botón "Siguiente" de la página de selección de puntos */
    const nextButtonPoints = document.getElementById("nextButtonPoints");

    /* Pantalla selección de categorías */
    const categoriesSelection = document.getElementById("categoriesSelection");
    /* Botón "Siguiente" de la página de selección de categorías */
    const nextButtonCategories = document.getElementById(
        "nextButtonCategories"
    );

    /* Pantalla selección de secciones */
    const sectionSelection = document.getElementById("sectionSelection");
    /* Botón "Siguiente" de la página de selección de secciones */
    const nextButtonSections = document.getElementById("nextButtonSections");

    /* Pantalla de carga final */
    const loadingScreen = document.getElementById("loadingScreen");
    const loadingScreenMobile = document.getElementById("loadingScreenMobile");

    //Botón para pasar de la sección 0 (principal) a la 1 (nombre)
    startButton.addEventListener("click", function () {
        startModal.classList.add("fade-out");
        setTimeout(() => {
            startModal.classList.add("hidden");
            nameSelection.classList.remove("hidden");
        }, 1000);
    });

    /*************** Sección de seleccionar nombre ****************************************/

    //Código para pasar de la sección 1 (nombre) a la 2 (color)
    nextButtonName.addEventListener("click", function () {
        //Obtener valor del input de nombre de empresa
        selectedName = document
            .getElementById("selectedNameInput")
            .value.trim();
        //Validar que se haya escrito un nombre
        if (selectedName) {
            //Ocultar selección de nombre
            nameSelection.classList.add("hidden");
            //Mostrar selección de color
            colorSelection.classList.remove("hidden");
        } else {
            alert("Por favor, escribe un nombre de empresa.");
        }
    });

    /*************** Sección de seleccionar color *****************************************/

    //Código para mantener seleccionado un color <DIV>
    document.querySelectorAll(".color-option").forEach((logo) => {
        logo.addEventListener("click", function () {
            // Remover clases de otros elementos
            document.querySelectorAll(".color-option").forEach((l) => {
                l.classList.remove(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "color-seleccionado"
                );
            });
            // Agregar clases al elemento clicado
            this.classList.add(
                "bg-gray-800",
                "bg-opacity-50",
                "color-seleccionado"
            );
            //Guardar en la variable el color seleccionado
            selectedColor = this.getAttribute("data-color");
        });
    });

    //Código para pasar de la sección 2 (color) a la 3 (logo)
    nextButtonColor.addEventListener("click", function () {
        if (selectedColor) {
            //Ocultar selección de color
            colorSelection.classList.add("hidden");
            //Mostrar selección de logo
            logoSelection.classList.remove("hidden");
        } else {
            alert("Por favor, selecciona un color.");
        }
    });

    /*************** Sección de seleccionar logo ******************************************/

    //Código para mantener seleccionado un logo <DIV>
    document.querySelectorAll(".container-logo").forEach((logo) => {
        logo.addEventListener("click", function () {
            // Remover clases de otros elementos
            document.querySelectorAll(".container-logo").forEach((l) => {
                l.classList.remove(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "logo-seleccionado"
                );
            });
            // Agregar clases al elemento clicado
            this.classList.add(
                "bg-gray-800",
                "bg-opacity-50",
                "logo-seleccionado"
            );
            //Guardar en la variable el logo seleccionado
            selectedLogo =
                this.querySelector(".logo-option").getAttribute("data-logo");
        });
    });

    //Manejar la carga del logotipo personalizado
    const customLogoInput = document.getElementById("customLogoInput");
    customLogoInput.addEventListener("change", function(){
        if (customLogoInput.files && customLogoInput.files[0]) {
            selectedLogo = customLogoInput.files[0].name;

            document.querySelectorAll(".container-logo").forEach((l) => {
                l.classList.remove("bg-gray-800", "bg-opacity-50", "logo-seleccionado");
            });
            customLogoInput.classList.add("bg-gray-800", "bg-opacity-50", "logo-seleccionado");
        }
    });

    //Código para pasar de la sección 3 (logo) a la 4 (banner)
    nextButtonLogo.addEventListener("click", function () {
        if (selectedLogo) {
            //Ocultar selección de logo
            logoSelection.classList.add("hidden");
            //Mostrar selección de banner
            bannerSelection.classList.remove("hidden");
        } else {
            alert("Por favor, selecciona un logo.");
        }
    });

    /*************** Sección de seleccionar banner ******************************************/

    //Código para mantener seleccionado un banner <DIV>
    document.querySelectorAll(".container-banner").forEach((banner) => {
        banner.addEventListener("click", function () {
            // Remover clases de otros elementos
            document.querySelectorAll(".container-banner").forEach((l) => {
                l.classList.remove(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "banner-seleccionado"
                );
            });
            // Agregar clases al elemento clicado
            this.classList.add(
                "bg-gray-800",
                "bg-opacity-50",
                "banner-seleccionado"
            );
            //Guardar en la variable el banner seleccionado
            selectedBanner =
                this.querySelector(".banner-option").getAttribute(
                    "data-banner"
                );
        });
    });

    //Código para pasar de la sección 4 (banner) a la 5 (points)
    nextButtonBanner.addEventListener("click", function () {
        if (selectedBanner) {
            //Ocultar selección de banner
            bannerSelection.classList.add("hidden");
            //Mostrar selección de puntos
            pointsSelection.classList.remove("hidden");
        } else {
            alert("Por favor, selecciona un banner.");
        }
    });

    /*************** Sección de seleccionar puntos ******************************************/

    //Código para pasar de la sección 5 (points) a la 6 (categories)
    nextButtonPoints.addEventListener("click", function () {
        selectedPoints = document
            .getElementById("selectedPointsInput")
            .value.trim();
        if (selectedPoints) {
            //Ocultar selección de banner
            pointsSelection.classList.add("hidden");
            //Mostrar selección de puntos
            categoriesSelection.classList.remove("hidden");
        } else {
            alert("Por favor, elige un nombre para los puntos.");
        }
    });

    /*************** Sección de seleccionar categorías **************************************/

    document.querySelectorAll(".category-option").forEach((category) => {
        category.addEventListener("click", function () {
            const categoryId = this.getAttribute("data-category");
            if (selectedCategories.includes(categoryId)) {
                selectedCategories = selectedCategories.filter(
                    (c) => c !== categoryId
                );
                this.classList.remove(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "category-seleccionada"
                );
            } else if (selectedCategories.length < 3) {
                selectedCategories.push(categoryId);
                this.classList.add(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "category-seleccionada"
                );
            } else {
                alert("Solo puedes seleccionar hasta 3 categorías.");
            }
        });
    });

    nextButtonCategories.addEventListener("click", function () {
        if (selectedCategories.length == 3) {
            categoriesSelection.classList.add("hidden");
            sectionSelection.classList.remove("hidden");
        } else {
            alert("Por favor, selecciona 3 categorías.");
        }
    });

    /*************** Sección de seleccionar secciones ***************************************/

    //Código para mantener seleccionadas las secciones
    document.querySelectorAll(".section-option").forEach((section) => {
        section.addEventListener("click", function () {
            const sectionId = this.getAttribute("data-section");
            if (selectedSections.includes(sectionId)) {
                selectedSections = selectedSections.filter(
                    (s) => s !== sectionId
                );
                this.classList.remove(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "section-seleccionada"
                );
            } else {
                selectedSections.push(sectionId);
                this.classList.add(
                    "bg-gray-800",
                    "bg-opacity-50",
                    "section-seleccionada"
                );
            }
        });
    });

    //Código para pasar a la página final
    nextButtonSections.addEventListener("click", function () {
        //Validar las secciones seleccionadas
        if (selectedSections.length === 0) {
            selectedSections.push(null);
        }

        //Ocultar selección de secciones
        sectionSelection.classList.add("hidden");

        //Mostrar la pantalla de carga adecuada
        if (deviceType === 'mobile') {
            loadingScreenMobile.classList.remove('hidden');
        } else {
            loadingScreen.classList.remove('hidden');
        }

        setTimeout(() => {
            //Llenar el formulario con los datos seleccionados
            selectedColorInput.value = selectedColor;
            selectedLogoInput.value = selectedLogo;
            selectedBannerInput.value = selectedBanner;
            selectedCategoriesInput.value = selectedCategories.join(",");
            selectedSectionsInput.value = selectedSections.join(",");

            //Enviar el formulario
            selectionForm.submit();
            //El formulario redirige a la página final
        }, 2000);
    });

    //Detectar tipo de dispositivo
    function detectDevice() {
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;
        if (/android/i.test(userAgent)) {
            return "mobile";
        }
        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            return "mobile";
        }
        return "desktop";
    }

    const deviceType = detectDevice();
    document.getElementById('deviceTypeInput').value = deviceType;
});
