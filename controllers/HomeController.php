<?php 

class HomeController
{
    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }

    public function home(){
        echo "dday la home";
    }
    public function trangChu(){
        echo "trangchu";
    }
    public function danhSachSanPham(){
        // echo "danhsach san pham";
        $listProduct = $this->modelSanPham->getAllProduct();
        // var_dump($listProduct);die();
        require_once './views/listProduct.php';
    }
}