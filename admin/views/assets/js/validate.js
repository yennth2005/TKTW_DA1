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
        document.getElementById('error_name').innerHTML = 'Không được bỏ trống';
        isValid = false;
    } else {
        document.getElementById('error_name').innerHTML = ''; // Xóa thông báo lỗi
    }

    // Kiểm tra trường 'email'
    if (email.value.trim() === '') {
        document.getElementById('error_email').innerHTML = 'Không được bỏ trống';
        isValid = false;
    } else if (!validateEmail(email.value)) {
        document.getElementById('error_email').innerHTML = 'Email không hợp lệ';
        isValid = false;
    } else {
        document.getElementById('error_email').innerHTML = '';
    }

    // Kiểm tra trường 'password'
    if (password.value.trim() === '') {
        document.getElementById('error_password').innerHTML = 'Không được bỏ trống';
        isValid = false;
    } else if (password.value.length < 6) {
        document.getElementById('error_password').innerHTML = 'Mật khẩu phải có ít nhất 6 ký tự';
        isValid = false;
    } else {
        document.getElementById('error_password').innerHTML = '';
    }

    // Kiểm tra trường 'address'
    if (address.value.trim() === '') {
        document.getElementById('error_address').innerHTML = 'Không được bỏ trống';
        isValid = false;
    } else {
        document.getElementById('error_address').innerHTML = '';
    }

    // Kiểm tra trường 'role'
    if (role.value === '') {
        document.getElementById('error_role').innerHTML = 'Vui lòng chọn vai trò';
        isValid = false;
    } else {
        document.getElementById('error_role').innerHTML = '';
    }

    // Kiểm tra trường 'phone'
    if (phone.value.trim() === '') {
        document.getElementById('error_phone').innerHTML = 'Không được bỏ trống';
        isValid = false;
    } else if (!/^\d{10,11}$/.test(phone.value)) {
        document.getElementById('error_phone').innerHTML = 'Số điện thoại không hợp lệ';
        isValid = false;
    } else {
        document.getElementById('error_phone').innerHTML = '';
    }

    return isValid; // Chỉ gửi form nếu tất cả hợp lệ
}

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



