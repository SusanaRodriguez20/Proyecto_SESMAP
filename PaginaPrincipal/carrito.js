document.addEventListener("DOMContentLoaded", function () {
    const cartItems = [];

    window.addToCart = function (productIndex) {
        const productName = document.querySelectorAll(`.card-product[data-product-index="${productIndex}"] .content-card-product h3`)[0].innerText;
        const productPrice = document.querySelectorAll(`.card-product[data-product-index="${productIndex}"] .content-card-product p.price`)[0].innerText;

        const product = {
            name: productName,
            price: parseFloat(productPrice.replace("$", "").replace(",", "")),
        };

        cartItems.push(product);

        document.getElementById("cart-count").innerText = `(${cartItems.length})`;
        updateCartDisplay();
    };

    function updateCartDisplay() {
        const cartList = document.getElementById("cart-list");
        const totalAmountElement = document.getElementById("total-amount");
        cartList.innerHTML = "";

        let totalAmount = 0;

        cartItems.forEach(function (item) {
            const cartItemElement = document.createElement("li");
            
            cartItemElement.innerText = `${item.name} - $${item.price.toFixed(3)}`;
            cartList.appendChild(cartItemElement);
            totalAmount += item.price;
        });

        totalAmountElement.innerText = totalAmount.toFixed(3);
    }
});
