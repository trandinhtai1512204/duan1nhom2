<?php 

class AdminDanhMucController {

        public $modelDanhMuc;

        public function __construct()
        {
            $this->modelDanhMuc = new AdminDanhMuc();
        }
        public function danhSachDanhMuc(){

        $listDanhMuc = $this->modelDanhMuc ->getAllDanhMuc();

        require_once './views/danhmuc/listDanhMuc.php';
    }
    public function formAddDanhMuc(){
        //ham nay de hien thi form nhap
        require_once './views/danhmuc/addDanhMuc.php';

    }
    public function postAddDanhMuc(){
        //ham nay de xu li them du lieu
        //kiemtra xem du lieu co phai duoc submit len khong
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Lay ra du lieu
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];

            //tao 1 mang trong de chua du lieu
            $errors = [];
            if(empty($ten_danh_muc)){
                $errors['ten_danh_muc'] = 'ten danh muc khong duoc de trong';
            }

            //neu khong co loithi tien hanh them danh muc
            if(empty($errors)){
                //neu khong co loi thi them danh muc
            
            }else{
                //tra ve form va loi
                require_once './views/danhmuc/addDanhMuc.php';
            }
        }
    }
}