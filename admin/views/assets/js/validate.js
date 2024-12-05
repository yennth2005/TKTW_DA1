<<<<<<< Updated upstream

function createUser() {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const address = document.getElementById('address');
    const role = document.getElementById('role');
    const phone = document.getElementById('phone');
=======
document.addEventListener("DOMContentLoaded", function () {
  function createUser() {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const address = document.getElementById("address");
    const role = document.getElementById("role");
    const phone = document.getElementById("phone");
>>>>>>> Stashed changes

    let isValid = true; // Biến kiểm tra tổng thể

    // Kiểm tra trường 'name'
<<<<<<< Updated upstream
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



















=======
    if (name.value.trim() === "") {
      document.getElementById("error_name").innerText = "Không được bỏ trống";
      isValid = false;
    } else {
      document.getElementById("error_name").innerText = ""; // Xóa thông báo lỗi
    }

    // Kiểm tra trường 'email'
    if (email.value.trim() === "") {
      document.getElementById("error_email").innerText = "Không được bỏ trống";
      isValid = false;
    } else if (!validateEmail(email.value)) {
      document.getElementById("error_email").innerText = "Email không hợp lệ";
      isValid = false;
    } else {
      document.getElementById("error_email").innerText = "";
    }

    // Kiểm tra trường 'password'
    if (password.value.trim() === "") {
      document.getElementById("error_password").innerText =
        "Không được bỏ trống";
      isValid = false;
    } else if (password.value.length < 6) {
      document.getElementById("error_password").innerText =
        "Mật khẩu phải có ít nhất 6 ký tự";
      isValid = false;
    } else {
      document.getElementById("error_password").innerText = "";
    }

    // Kiểm tra trường 'address'
    if (address.value.trim() === "") {
      document.getElementById("error_address").innerText =
        "Không được bỏ trống";
      isValid = false;
    } else {
      document.getElementById("error_address").innerText = "";
    }

    // Kiểm tra trường 'role'
    if (role.value === "") {
      document.getElementById("error_role").innerText = "Vui lòng chọn vai trò";
      isValid = false;
    } else {
      document.getElementById("error_role").innerText = "";
    }

    // Kiểm tra trường 'phone'
    if (phone.value.trim() === "") {
      document.getElementById("error_phone").innerText = "Không được bỏ trống";
      isValid = false;
    } else if (!/^\d{10,11}$/.test(phone.value)) {
      document.getElementById("error_phone").innerText =
        "Số điện thoại không hợp lệ";
      isValid = false;
    } else {
      document.getElementById("error_phone").innerText = "";
    }

    return isValid; // Chỉ gửi form nếu tất cả hợp lệ
  }
});
document.addEventListener("DOMContentLoaded", function () {
  function createCate() {
    let isValid = true;

    // Lấy giá trị từ input
    const categoryName = document.getElementById("name").value.trim();
    const errorCate = document.getElementById("error_cate");

    // Xóa thông báo lỗi trước đó
    errorCate.textContent = "";

    // Kiểm tra tên danh mục
    if (categoryName === "") {
      errorCate.textContent = "Tên danh mục không được để trống.";
      isValid = false;
    } else if (categoryName.length < 3) {
      errorCate.textContent = "Tên danh mục phải có ít nhất 3 ký tự.";
      isValid = false;
    }

    return isValid; // Trả về true nếu hợp lệ, false nếu không
  }
});

document.addEventListener("DOMContentLoaded", function () {
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
      document.getElementById("error_image").innerText =
        "Vui lòng tải lên hình ảnh sản phẩm.";
      isValid = false;
    }

    // Kiểm tra tên sản phẩm
    if (name === "") {
      document.getElementById("error_1").innerText =
        "Vui lòng nhập tên sản phẩm.";
      isValid = false;
    }

    // Kiểm tra mô tả sản phẩm
    if (desc === "") {
      document.getElementById("error_desc").innerText =
        "Vui lòng nhập mô tả sản phẩm.";
      isValid = false;
    }

    // Kiểm tra danh mục sản phẩm
    if (categoryId === "") {
      document.getElementById("error_cate").innerText =
        "Vui lòng chọn danh mục sản phẩm.";
      isValid = false;
    }

    return isValid;
  }
});
>>>>>>> Stashed changes
