<?php
class ProductController
{
    public $productModel;
    public function __construct()
    {
        $this->productModel = new Product();
    }
    public function showList()
    {
        // $cates = $this->productModel->showCate();
        $idProducts = $this->productModel->getAllProducts();
        require_once './views/home.php';

    }
    // public function category()
    // {
    //     $id = $_GET['id'];
    //     $list = $this->productModel->showCate();
    //     $cate = $this->productModel->showCateHome($id);
    //     $products = $this->productModel->show();
    //     // require_once './views/category.php'
    //     include 'views/category.php';

    // }

    // public function showListCategories()
    // {
    //     // $cates = $this->productModel->showCate();
    //     $idProcategoryIdducts = $this->productModel->getAllCategories();
    //     require_once './views/home.php';

    // }

    // public function desc()
    // {
    //     $id = $_GET['id'];
    //     $cates = $this->productModel->showCate();
    //     $pro = $this->productModel->findDesc($id);
    //     include 'views/descProduct.php';
    // }
    public function timkiem()
    {
        // Lấy tham số tìm kiếm từ form gửi lên
        $keyword = $_POST['keyword'] ?? ''; // Từ khóa tìm kiếm
        $category = $_GET['category'] ?? ''; // Lọc theo danh mục
        $minPrice = $_GET['min_price'] ?? ''; // Lọc theo giá (min)
        $maxPrice = $_GET['max_price'] ?? ''; // Lọc theo giá (max)

        $productModel = new Product();

        // Bắt đầu với danh sách sản phẩm dựa trên từ khóa (nếu có)
        if ($keyword) {
            $listSanPham = $productModel->search($keyword);
        } else {
            $listSanPham = $productModel->getAllProducts();  // Nếu không có từ khóa, lấy tất cả sản phẩm
        }

        // Lọc theo danh mục nếu có
        if ($category) {
            // Nếu có chọn danh mục, gọi phương thức lọc sản phẩm theo category
            $listSanPham = $productModel->filterByCategory($listSanPham, $category);
        }

        // Lọc theo giá nếu có
        if ($minPrice != null && $maxPrice != null) {
            // Nếu có phạm vi giá, gọi phương thức lọc theo giá
            $listSanPham = $productModel->getProductsByPrice($listSanPham, $minPrice, $maxPrice);
        }

        // Lấy tất cả danh mục để hiển thị trong form lọc
        $categories = $productModel->getAllCategories();

        // Truyền kết quả tìm kiếm và lọc sang View
        require_once './views/shop.php';
    }
}