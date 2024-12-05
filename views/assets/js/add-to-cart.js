document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault();

        const variantId = this.dataset.variantId;
        const sizeId = this.dataset.sizeId;
        const quantity = this.dataset.quantity;
        const price = this.dataset.price;

        fetch('add_to_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `variant_id=${variantId}&size_id=${sizeId}&quantity=${quantity}&price=${price}`,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message); // Hiển thị thông báo thành công
            } else {
                alert(data.message); // Hiển thị lỗi nếu có
            }
        })
        .catch(error => console.error('Lỗi:', error));
    });
});
