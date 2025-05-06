document.addEventListener('DOMContentLoaded', function () {
    const addToCartForms = document.querySelectorAll('.add-to-cart-form');

    addToCartForms.forEach(form => {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const formData = new FormData(form);
            const url = form.action;

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });

                if (response.ok) {
                    const data = await response.json();

                    if (data.success) {
                        // Mettre à jour le contenu du modal
                        document.getElementById('modal-product-name').innerText = data.productName;
                        document.getElementById('modal-product-price').innerText = `${data.productPrice} TND`;
                        document.getElementById('modal-product-quantity').innerText = data.productQuantity;
                        document.getElementById('modal-cart-items-count').innerText = data.cartItemsCount;
                        document.getElementById('modal-cart-total').innerText = `${data.totalCart} TND`;
                        document.getElementById('modal-cart-grand-total').innerText = `${data.totalCart + 8} TND`;

                        // Afficher le modal
                        const modal = new bootstrap.Modal(document.getElementById('blockcart-modal'));
                        modal.show();
                    } else {
                        alert(data.message);
                    }
                } else {
                    alert('Une erreur est survenue.');
                }
            } catch (error) {
                console.error('Erreur:', error);
            }
        });
    });
});
