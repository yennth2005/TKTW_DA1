
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



















