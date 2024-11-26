<?php
class Product
{
    public $connect;
    public function __construct()
    {
        $this->connect = connect_db();
    }
    public function showCate()
    {
        $sql = "SELECT * FROM `categories`";
        $stmt = $this->connect->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
    //đổ sp
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products LIMIT 8";
        $result = $this->connect->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function showCateHome($id)
    // {
    //     $sql = "SELECT * FROM `categories` WHERE `categories`.`cate_id`={$id}";
    //     $stmt = $this->connect->query($sql);
    //     $data = $stmt->fetch();
    //     return $data;
    // }


    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function findDesc($id)
    // {
    //     $sql = "SELECT * FROM `products` WHERE `products`.`product_id` = {$id}";
    //     $stmt = $this->connect->query($sql);
    //     $data = $stmt->fetch();
    //     return $data;
    // }


    // Phương thức lọc sản phẩm theo danh mục
    public function filterByCategory($listSanPham, $categories)
    {
        // Đảm bảo $categories là mảng
        if (!is_array($categories)) {
            $categories = [$categories]; // Nếu $categories không phải là mảng, chuyển nó thành mảng
        }

        // Sử dụng array_filter để lọc sản phẩm theo danh mục
        $filteredProducts = array_filter($listSanPham, function ($product) use ($categories) {
            return in_array($product['category_id'], $categories);
        });

        return $filteredProducts;
    }


    public function getProductsByPrice($products, $minPrice, $maxPrice)
    {

        // Lọc các sản phẩm trong phạm vi giá
        return array_filter($products, function ($product) use ($minPrice, $maxPrice) {
            return $product['price'] >= $minPrice && $product['price'] <= $maxPrice;
        });
    }


    public function search($keyword)
    {
        try {
            $sql = "SELECT * FROM products
            WHERE product_name LIKE :keyword
            ORDER BY view DESC";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([
                ':keyword' => '%' . $keyword . '%',
            ]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Exception("Error searching for products: " . $e->getMessage());
        }
    }



}
?>