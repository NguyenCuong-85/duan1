<?php
include "../model/danhmucsanpham.php";
include "../model/loaisanpham.php";
include "../model/pdo.php";
include "header.php";
if (isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch ($action) {
        case "danhsachdanhmuc":
            $danhsachdanhmuc = loadall_danhmuc();
            include "../admin/danhmucsanpham/danhsachdanhmuc.php";
            break;
        case "themdanhmuc":
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $tendanhmuc = $_POST['tendanhmuc'];
                insert_danhmuc($tendanhmuc);
                $thanhcong = "Thêm thành công";
            }
            include "../admin/danhmucsanpham/themdanhmuc.php";
            break;
        case "danhsachloaisanpham":
            $danhsachloaisanpham = loadall_loaisanpham();
            include "../admin/loaisanpham/danhsachloaisanpham.php";
            break;
        case "themloaisanpham":
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tenloaisanpham = $_POST['tenloaisanpham'];
                $giatiengoc = $_POST['giatiengoc'];
                $giakhuyenmai = $_POST['giakhuyenmai'];
                $motasanpham = $_POST['motasanpham'];
                $anhloaisanpham = $_FILES['anhloaisanpham']['name'];
                // $taget_dir = "../upload/";
                // $taget_file = $taget_dir . basename($_FILES['anhloaisanpham']['name']);
                // if (move_uploaded_file($_FILES['anhloaisanpham']['tmp_name'], $taget_file)) {
                //     echo "Bạn đã up load ảnh thành công";
                // } else {
                //     echo "Bạn đã up load ảnh không thành công";
                // }
                insert_loaisanpham($iddanhmuc,$tenloaisanpham,$giatiengoc,$giakhuyenmai,$motasanpham,$anhloaisanpham);
                $thanhcong = "Thêm thành công";
            }
            $danhsachdanhmuc = loadall_danhmuc();
            include "loaisanpham/themloaisanpham.php";
            break;
        case "themsanpham":
            include "../admin/sanpham/themsanpham.php";
            break;
        case "danhsachsanpham":
            include "../admin/sanpham/danhsachsanpham.php";
            break;
    }
} else {
    include "../admin/danhmucsanpham/themdanhmuc.php";
}
include "footer.php";
