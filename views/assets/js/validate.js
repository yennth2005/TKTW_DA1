function register() {
    //
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('matkhau');
    const confirmPassword = document.getElementById('matkhau1');
    //
    const errorName = document.getElementById('error_name');
    const errorEmail = document.getElementById('error_email');
    const errorPassword = document.getElementById('error_password');
    const errorPassword1 = document.getElementById('error_password1');
    //
    errorName.textContent = '';
    errorEmail.textContent = '';
    errorPassword.textContent = '';
    errorPassword1.textContent = '';
  
    let isValid = true;
  
    if (name.value.trim() === '') {
      errorName.textContent = 'Điền họ tên của bạn';
      isValid = false;
    }
  
    if (email.value.trim() === '') {
      errorEmail.textContent = 'Điền email của bạn';
      isValid = false;
    } else if (!isValidEmail(email.value)) {
      errorEmail.textContent = 'Email không hợp lệ';
      isValid = false;
    }
  
    if (password.value.trim() === '') {
      errorPassword.textContent = 'Điền mật khẩu của bạn';
      isValid = false;
    } else if (password.value.length < 6) {
      errorPassword.textContent = 'Mật khẩu lớn hơn 6 kí tự';
      isValid = false;
    }
  
    if (confirmPassword.value.trim() === '') {
      errorPassword1.textContent = 'Hãy xác nhận mật khẩu ';
      isValid = false;
    } else if (confirmPassword.value !== password.value) {
      errorPassword1.textContent = 'Mật khẩu không trùng khớp';
      isValid = false;
    }
  
    return isValid;
  }
  
  // Helper function to validate email format
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // function login(){
  //   const email = document.getElementById('email');
  //   const password = document.getElementById('password');
  //   document.getElementById("error_email").innerText = "";
  //   document.getElementById("error_password").innerText = "";

  //   let valid = true;

  //   // Kiểm tra email
  //   const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  //   if (!email.match(emailPattern)) {
  //       document.getElementById("error_email").innerText = "Email không hợp lệ";
  //       valid = false;
  //   }

  //   // Kiểm tra mật khẩu
  //   if (password.length < 6) { // Thay đổi độ dài tùy theo yêu cầu
  //       document.getElementById("error_password").innerText = "Mật khẩu phải ít nhất 6 ký tự";
  //       valid = false;
  //   }

  //   return valid;
  // }

  function login() {
    // Lấy giá trị từ các trường
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    // Xóa thông báo lỗi cũ
    document.getElementById("error_email").innerText = "";
    document.getElementById("error_password").innerText = "";

    let valid = true;

    // Kiểm tra email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        document.getElementById("error_email").innerText = "Email không hợp lệ";
        valid = false;
    }

    // Kiểm tra mật khẩu
    if (password.length < 6) { // Thay đổi độ dài tùy theo yêu cầu
        document.getElementById("error_password").innerText = "Mật khẩu phải ít nhất 6 ký tự";
        valid = false;
    }

    return valid; // Chỉ gửi biểu mẫu nếu tất cả các kiểm tra đều hợp lệ
}