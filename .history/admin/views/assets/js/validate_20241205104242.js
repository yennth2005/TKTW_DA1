document.addEventListener("DOMContentLoaded", function() {
function createUser() {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const address = document.getElementById('address');
    const role = document.getElementById('role');
    const phone = document.getElementById('phone');

    let isValid = true; // Biến kiểm tra tổng thể

    // Kiểm tra trường 'name'
    if (name.value.trim() === '') {
        document.getElementById('error_name').innerText = 'Không được bỏ trống';
        isValid = false;
    } else {
        document.getElementById('error_name').innerText = ''; // Xóa thông báo lỗi
    }

    // Kiểm tra trường 'email'
    if (email.value.trim() === '') {
        document.getElementById('error_email').innerText = 'Không được bỏ trống';
        isValid = false;
    } else if (!validateEmail(email.value)) {
        document.getElementById('error_email').innerText = 'Email không hợp lệ';
        isValid = false;
    } else {
        document.getElementById('error_email').innerText = '';
    }

    // Kiểm tra trường 'password'
    if (password.value.trim() === '') {
        document.getElementById('error_password').innerText = 'Không được bỏ trống';
        isValid = false;
    } else if (password.value.length < 6) {
        document.getElementById('error_password').innerText = 'Mật khẩu phải có ít nhất 6 ký tự';
        isValid = false;
    } else {
        document.getElementById('error_password').innerText = '';
    }

    // Kiểm tra trường 'address'
    if (address.value.trim() === '') {
        document.getElementById('error_address').innerText = 'Không được bỏ trống';
        isValid = false;
    } else {
        document.getElementById('error_address').innerText = '';
    }

    // Kiểm tra trường 'role'
    if (role.value === '') {
        document.getElementById('error_role').innerText = 'Vui lòng chọn vai trò';
        isValid = false;
    } else {
        document.getElementById('error_role').innerText = '';
    }

    // Kiểm tra trường 'phone'
    if (phone.value.trim() === '') {
        document.getElementById('error_phone').innerText = 'Không được bỏ trống';
        isValid = false;
    } else if (!/^\d{10,11}$/.test(phone.value)) {
        document.getElementById('error_phone').innerText = 'Số điện thoại không hợp lệ';
        isValid = false;
    } else {
        document.getElementById('error_phone').innerText = '';
    }

    return isValid; // Chỉ gửi form nếu tất cả hợp lệ
}
<<<<<<< Updated upstream

// Hàm kiểm tra định dạng email
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
function createProduct() {
    // Lấy các phần tử DOM
    const name = document.getElementById('name');
    const price = document.getElementById('price');
    const image = document.getElementById('image');
    const desc = document.getElementById('desc');
    const view = document.getElementById('view');
    const category = document.querySelector('select[name="category_id"]');
    const amount = document.getElementById('amount');

    // Lấy các phần tử hiển thị lỗi
    const errorName = document.getElementById('error_name');
    const errorPrice = document.getElementById('error_price');
    const errorImage = document.getElementById('error_image');
    const errorDesc = document.getElementById('error_desc');
    const errorView = document.getElementById('error_view');
    const errorCate = document.getElementById('error_cate');
    const errorAmount = document.getElementById('error_amount');

    // Reset lỗi trước khi kiểm tra
    errorName.innerHTML = '';
    errorPrice.innerHTML = '';
    errorImage.innerHTML = '';
    errorDesc.innerHTML = '';
    errorView.innerHTML = '';
    errorCate.innerHTML = '';
    errorAmount.innerHTML = '';

    let isValid = true;

    // Kiểm tra tên sản phẩm
    if (name.value.trim() === '') {
        errorName.innerHTML = 'Tên sản phẩm không được để trống';
        isValid = false;
    }

    // Kiểm tra giá sản phẩm
    if (price.value.trim() === '') {
        errorPrice.innerHTML = 'Giá sản phẩm không được để trống';
        isValid = false;
    } else if (isNaN(price.value) || Number(price.value) <= 0) {
        errorPrice.innerHTML = 'Giá sản phẩm phải là số lớn hơn 0';
        isValid = false;
    }

    // Kiểm tra hình ảnh sản phẩm
    if (image.files.length === 0) {
        errorImage.innerHTML = 'Vui lòng chọn hình ảnh sản phẩm';
        isValid = false;
    } else {
        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.test(image.value)) {
            errorImage.innerHTML = 'Hình ảnh phải có định dạng JPG, JPEG, PNG hoặc GIF';
            isValid = false;
        }
    }

    // Kiểm tra mô tả sản phẩm
    if (desc.value.trim() === '') {
        errorDesc.innerHTML = 'Mô tả sản phẩm không được để trống';
        isValid = false;
    }

    // Kiểm tra lượt xem
    if (view.value.trim() === '') {
        errorView.innerHTML = 'Lượt xem không được để trống';
        isValid = false;
    } else if (isNaN(view.value) || Number(view.value) < 0) {
        errorView.innerHTML = 'Lượt xem phải là số không âm';
        isValid = false;
    }

    // Kiểm tra danh mục
    if (category.value.trim() === '') {
        errorCate.innerHTML = 'Vui lòng chọn danh mục';
        isValid = false;
    }

    // Kiểm tra số lượng
    if (amount.value.trim() === '') {
        errorAmount.innerHTML = 'Số lượng không được để trống';
        isValid = false;
    } else if (isNaN(amount.value) || Number(amount.value) < 0) {
        errorAmount.innerHTML = 'Số lượng phải là số không âm';
        isValid = false;
    }

    return isValid; // Chỉ gửi form nếu tất cả hợp lệ
}

=======
    
})
document.addEventListener("DOMContentLoaded", function() {
function createCate() {
    let isValid = true;

    // Lấy giá trị từ input
    const categoryName = document.getElementById('name').value.trim();
    const errorCate = document.getElementById('error_cate');

    // Xóa thông báo lỗi trước đó
    errorCate.textContent = '';

    // Kiểm tra tên danh mục
    if (categoryName === '') {
        errorCate.textContent = 'Tên danh mục không được để trống.';
        isValid = false;
    } else if (categoryName.length < 3) {
        errorCate.textContent = 'Tên danh mục phải có ít nhất 3 ký tự.';
        isValid = false;
    }

    return isValid; // Trả về true nếu hợp lệ, false nếu không
}

})






document.addEventListener("DOMContentLoaded", function() {
function createProduct() {
    let isValid = true;

    // Lấy giá trị từ các trường
    const image = document.getElementById("image").value;
    const name = document.getElementById("name").value.trim();
    const desc = document.getElementById("desc").value.trim();
    const categoryId = document.getElementById("category_id").value;

    // Reset thông báo lỗi
    document.getElementById("error_image").innerText = "";
    document.getElementById("error_1").innerText = "";
    document.getElementById("error_desc").innerText = "";
    document.getElementById("error_cate").innerText = "";

    // Kiểm tra hình ảnh
    if (image === "") {
        document.getElementById("error_image").innerText = "Vui lòng tải lên hình ảnh sản phẩm.";
        isValid = false;
    }

    // Kiểm tra tên sản phẩm
    if (name === "") {
        document.getElementById("error_1").innerText = "Vui lòng nhập tên sản phẩm.";
        isValid = false;
    }

    // Kiểm tra mô tả sản phẩm
    if (desc === "") {
        document.getElementById("error_desc").innerText = "Vui lòng nhập mô tả sản phẩm.";
        isValid = false;
    }

    // Kiểm tra danh mục sản phẩm
    if (categoryId === "") {
        document.getElementById("error_cate").innerText = "Vui lòng chọn danh mục sản phẩm.";
        isValid = false;
    }

    return isValid;
}

});









>>>>>>> Stashed changes


