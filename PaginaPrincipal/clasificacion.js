document.addEventListener("DOMContentLoaded", function () {
    const filterOptions = document.querySelectorAll(".filter-option");
    const productosContainer = document.querySelector(".container-products");

    filterOptions.forEach(option => {
        option.addEventListener("click", function () {
            const category = this.getAttribute("data-category");

            // Mostrar u ocultar productos según la categoría seleccionada
            productosContainer.querySelectorAll(".card-product").forEach(product => {
                const productCategory = product.getAttribute("data-category");

                if (category === "todos" || productCategory === category) {
                    product.style.display = "block";
                } else {
                    product.style.display = "none";
                }
            });

            // Cambiar la clase activa
            filterOptions.forEach(opt => opt.classList.remove("active"));
            this.classList.add("active");
        });
    });
});


  