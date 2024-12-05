document.querySelectorAll(".color-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        const variantId = this.getAttribute("data-variant-id");

        fetch("/your-controller-path.php?action=fetchVariantDetails", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ variant_id: variantId }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    // Cập nhật size và giá
                    const sizeContainer = document.querySelector(".variant-picker-values");
                    sizeContainer.innerHTML = data.sizes
                        .map(size => `<input type="radio" name="size1" id="size-${size.size_id}">
                                      <label for="size-${size.size_id}" class="size-btn">${size.size_value}</label>`)
                        .join("");

                    document.querySelector(".price-on-sale").textContent = `$${data.price}`;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    });
});
