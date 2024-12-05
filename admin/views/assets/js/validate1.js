
    function createProduct() {
        let isValid = true;
    
        // Lấy giá trị từ các trường
        const name = document.getElementById("name").value.trim();
        const desc = document.getElementById("desc").value.trim();
        const categoryId = document.getElementById("category_id").value;
    
        // Reset thông báo lỗi
        document.getElementById("error_1").innerText = "";
        document.getElementById("error_desc").innerText = "";
        document.getElementById("error_cate").innerText = "";
    
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
